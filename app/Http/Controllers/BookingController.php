<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\User;
use App\Models\Product;

class BookingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){
        $user = User::All();
        $data = Booking::All();
        $produk = Product::All();

        return view('admin.detail-booking', compact('data', 'user', 'produk'));

    }

    public function delete($id){
        $data = Booking::findorfail($id);
        $data->delete();
        return back()->with('info', 'Booking berhasil dihapus');
    }

    public function edit($id){
        $user = User::All();
        $produk = Product::All();
        $data = Booking::findorfail($id);
        return view('admin.edit-booking', compact('data', 'user', 'produk'));
    }

    public function editBookingStore(Request $request, $id){

        $booking = Booking::find($id);
        $booking->tanggal_booking = $request->tanggalbooking;
        $booking->status = $request->status;
        $booking->save();    

        return redirect()->route('detailBooking')->with('info', 'bookimng berhasil di update');
    }
}
