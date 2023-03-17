<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTAbles\UsersDataTable;
use App\DataTAbles\ProductsDataTable;
use App\Models\Product;


class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }

    public function __construct2()
    {
        $this->middleware('auth');
    }

    public function indexAdmin()
    {
        return view('admin.dashboard-admin');
    }

    public function indexBooking()
    {
        return view('admin.detail-booking');
    }

    public function indexUser(UsersDataTable $dataTable)
    {
        return $dataTable->render('admin.detail-user');
    }

    public function indexProduct(ProductsDataTable $dataTable)
    {
        return $dataTable->render('admin.detail-product');
    }

    public function addProduct()
    {
        return view('form-produk');
    }

    public function storeProduct(Request $request)
    {
        // $request->validate([
        //     'name_product' => 'required',
        //     'desc_product' => 'required',
        //     'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);

        $imageName = time().'.'.$request->foto->extension();  
        $request->foto->move(public_path('product'), $imageName);

        Product::create([
            'name_product' => $request->nama,
            'desc_product' => $request->deskripsi,
            'banyak_shoot' => $request->banyakshoot,
            'banyak_file' => $request->banyakfile,
            'benefit' => $request->benefit,
            'foto_keluarga' => $request->fotokeluarga,
            'price' => $request->harga,
            'foto' => $imageName,
        ]);

        return redirect()->route('detailProduct');
    }
}
