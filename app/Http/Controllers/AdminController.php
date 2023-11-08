<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use App\Models\User;
use App\Models\Buku;


use function PHPUnit\Framework\returnSelf;

class AdminController extends Controller
{
    public function tambah(){
        return view('admin.tambah');
    }

    public function postTambahAdmin(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns',
            'jenisKelamin' => 'required',
            'password' => 'required|min:8|max:20|confirmed'
        ]);
        
        $user = new User ; 

        $user->name =$request->name;
        $user->email = $request->email;
        $user->level = 'admin';
        $user->jenisKelamin =$request->jenisKelamin;
        $user->password = Hash::make($request->password);

        $user->save();

        if($user){
            return back()->with('success', 'Adminun baru berhasil ditambah');
        }
        else {
            return back()->with('failed', 'Gagal menambah admin baru');
        }
    }

    public function editAdmin($id){
        $data = User::find($id);

        return view('admin.edit', compact('data'));
    }

    public function postEditAdmin(Request $request, $id) {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns',
            'jenisKelamin' => 'required',
        ]);

        $user = User::find($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user-> jenisKelamin =$request->jenisKelamin;

        $user->save();

        if($user){
            return redirect('/admin/admin')->with('success','Data berhasil di hapus');
        }
        else {
            return back()->with('failed', 'Gagal menghapus data');
        }
    }

    public function adminBuku(Request $request){
        $search = $request -> input('search');

        $data = Buku::where(function ($query) use ($search) {
            $query->where('judul_buku','LIKE','%' .$search. '%');
        })->paginate(5);

        return view('admin.buku', compact('data'));
    }

    public function tambahBuku(){
        return view('admin.tambahBuku');
    }
    public function postTambahBuku(Request $request){
        $request->validate([
            'kodeBuku' => 'required',
            'judulBuku' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahunTerbit' => 'required',
            'gambar' => 'required|image|max:5120',
            'deskripsi' => 'required',
            'kategori' => 'required',
        ]);

        $buku = new Buku;

        $buku->kode_buku = $request->kodeBuku;
        $buku->judul_buku =$request->judulBuku;
        $buku->penulis = $request->penulis;
        $buku->penerbit = $request->penerbit;
        $buku->tahun_terbit =$request->tahunTerbit;
        $buku->deskripsi = $request->deskripsi;
        $buku->kategori =$request->kategori;

        if ($request->hasFile('gambar')) {
            $file = $request ->file('gambar');
            $extension =$file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/', $filename);
            $buku->gambar= $filename;
        }

        $buku->save();

        if($buku) {
            return back()->with('success', 'Buku baru berhasil di tambahkan');
        }
        else {
            return back()->with('failed', 'Data gagal ditambahkan');
        }
    }

    public function editBuku($id) {
        $data = Buku::find($id);
        
        return view('admin.editBuku', compact('data'));
    }
    
    public function postEditBuku(Request $request, $id) {
        $request->validate([
            'kodeBuku' => 'required',
            'judulBuku' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahunTerbit' => 'required',
            'gambar' => 'image|max:5120',
            'deskripsi' => 'required',
            'kategori' => 'required'
        ]);
    
        $buku = Buku::find($id);
        $buku->kode_buku = $request->kodeBuku;
        $buku->judul_buku = $request->judulBuku;
        $buku->penulis = $request->penulis;
        $buku->penerbit = $request->penerbit;
        $buku->tahun_terbit = $request->tahunTerbit;
        $buku->deskripsi = $request->deskripsi;
        $buku->kategori = $request-> kategori;

        if($request->hasFile('gambar')) {
            $filepath = 'images/' .$buku->gambar;
            if(File::exists($filepath)) {
                File::delete($filepath);
            }

            $file = $request->file('gambar');
            $extension = $file-> getClientOriginalExtension();
            $filename =time().'.'.$extension;
            $file->move('images/', $filename);
            $buku->gambar =$filename;
        }

        $buku->save();

        if($buku) {
            return redirect('/admin/buku')->with('success', 'Buku berhasil diupadate');
        }
        else {
            return back()->with('failed', 'Buku gagal diupdate');
        }
    }

    public function deletBuku($id){
        $buku =Buku::find($id);

        $filepath = 'images/' .$buku->gambar;

        if(File::exists($filepath)) {
            File::delete($filepath);
        }

        $buku->delet();

        if($buku) {
            return back()->with('success', 'Data buku berhasil di hapus');
        }
        else {
            return back()->with('failed', 'Gagal menghapus data buku');
        }
    }
}
