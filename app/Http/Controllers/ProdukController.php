<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Controllers\DB;

class ProdukController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $data = Product::All();
        return view('admin.detail-product', compact('data'));
    }

    public function create(){
        return view('admin.form-produk');
    }

    public function storeProduct(Request $request){
        // $request->validate([
        //     'name_product' => ['required', 'string', 'max:255'],
        //     'price' => ['required'],
        //     'desc_product' => ['required'],
        //     'banyak_shoot' => ['required'],
        //     'banyak_file' => ['required'],
        //     'benefit' => ['required'],
        //     'foto_keluarga' => ['required'],
        //     'foto' => ['required'],
        // ]);

        $imageName = time().'.'.$request->foto->extension();  
        $request->foto->move(public_path('product'), $imageName);
        $produk = Product::create([
            'name_product' => $request->nama,
            'price' => $request->harga,
            'desc_product' => $request->deskripsi,
            'banyak_shoot' => $request->banyakshoot,
            'banyak_file' => $request->banyakfile,
            'benefit' => $request->benefit,
            'foto_keluarga' => $request->fotokeluarga,
            'foto' => $imageName,
        ]);

        return redirect()->route('detailProduct');
    }

    public function edit($id){
        $data = Product::findorfail($id);
        return view('admin.edit-produk', compact('data'));
    }

    public function editStore(Request $request, $id){

        // $produk = Product::findorfail($id);
        // $data = $request->validate([
        //     'name_product' => ['required', 'string', 'max:255'],
        //     'price' => ['required'],
        //     'desc_product' => ['required'],
        //     'banyak_shoot' => ['required'],
        //     'banyak_file' => ['required'],
        //     'benefit' => ['required'],
        //     'foto_keluarga' => ['required'],
        //     'foto' => ['required'],
        // ]);
        $imageName = time().'.'.$request->foto->extension();  
        $request->foto->move(public_path('product'), $imageName);
        $produk = Product::find($id);
        $produk->name_product = $request->nama;
        $produk->price = $request->harga;
        $produk->desc_product = $request->deskripsi;
        $produk->banyak_shoot = $request->banyakshoot;
        $produk->banyak_file = $request->banyakfile;
        $produk->benefit = $request->benefit;
        $produk->foto_keluarga = $request->fotokeluarga;
        $produk->foto = $imageName;
        $produk->save();    

        return redirect()->route('detailProduct')->with('info', 'produk berhasil di update');
    }

    public function delete($id){
        $data = Product::findorfail($id);
        $data->delete();
        return back()->with('info', 'Koleksi berhasil dihapus');
    }
}
