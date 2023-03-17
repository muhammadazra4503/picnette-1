<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\MOdels\Product;
use App\MOdels\Booking;
use App\MOdels\Pesan;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function toHome()
    {
        return view('home');
    }

    public function toPhotoStudio()
    {
        $product = Product::all();
        return view('photo-studio', compact('product'));
    }

    public function toPhotoPrint()
    {
        return view('photo-print');
    }

    public function toProductDetail($id)
    {
        $product = Product::find($id);
        return view('detail-produk', compact('product'));
    }

    public function toAboutUs()
    {
        return view('about-us');
    }

    public function toContactUs()
    {
        return view('contact-us');
    }

    public function toOrder()
    {
        $user = Auth::user();
        $booking = Booking::where('user_id', $user->id)->get();
        $product = Product::all();
        return view('pesanan', compact('booking', 'product', 'user'));
    }

    public function toBookingForm($id)
    {
        $product = Product::find($id);
        return view('form-booking', compact('product'));
    }

    public function storeBookingForm($id, Request $request)
    {
        $product = Product::find($id);
        $user = User::find(auth()->user()->id);
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString1 = '';
        $randomString2 = '';
        for ($i = 0; $i < 11; $i++) {
            $randomString1 .= $characters[rand(0, $charactersLength - 1)];
            $randomString2 .= $characters[rand(0, $charactersLength - 1)];
        }
        $booking = new Booking;
        $booking->tanggal_booking = $request->tanggal_booking;
        $booking->kode_booking = $randomString2;
        $booking->invoice = $randomString1;
        $booking->total = $product->price;
        $booking->product_id = $product->id;
        $booking->user_id = $user->id;
        $booking->status = "Booking berhasil";
        $booking->save();

        return redirect('/pesanan');
    }

    public function storePesan(Request $request){
        $pesan = Pesan::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'pesan' => $request->pesan,
        ]);

        return redirect()->route('home');
    }

}
