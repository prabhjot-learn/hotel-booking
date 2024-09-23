<?php
namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function create($room_id)
    {
        $room = Room::findOrFail($room_id);
        return view('bookings.create', compact('room'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'room_id' => 'required|exists:rooms,id',
            'customer_name' => 'required',
            'customer_email' => 'required|email',
            'check_in' => 'required|date',
            'check_out' => 'required|date|after:check_in',
        ]);

        Booking::create($request->all());
        return redirect()->route('rooms.index')->with('success', 'Room booked successfully.');
    }

    public function destroy($id)
    {
        $booking = Booking::find($id);
        $booking->delete();
        return redirect()->back()->with('success', 'Booking canceled successfully.');
    }
}
