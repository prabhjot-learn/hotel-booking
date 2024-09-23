<?php
namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    //index function is showing room list
    public function index()
    {
        $rooms = Room::all();
        return view('rooms.index', compact('rooms'));
    }

    public function create()
    {
        return view('rooms.create');
    }
    
    //store function for create room
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'capacity' => 'required|integer',
            'price' => 'required|numeric',
        ]);

        Room::create($request->all());
        return redirect()->route('rooms.index')->with('success', 'Room created successfully.');
    }

    
    // show function for view 
    public function show($id)
    {
        $room = Room::find($id);
        return view('rooms.show', compact('room'));
    }

    
    // edit function for view edit 
    public function edit($id)
    {
        $room = Room::find($id);
        return view('rooms.edit', compact('room'));
    }
    // update function for edit booking
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'capacity' => 'required|integer',
            'price' => 'required|numeric',
        ]);

        $room = Room::find($id);
        $room->update($request->all());
        return redirect()->route('rooms.index')->with('success', 'Room updated successfully.');
    }
 //delete for Room
    public function destroy($id)
    {
        $room = Room::find($id);
        $room->delete();
        return redirect()->route('rooms.index')->with('success', 'Room deleted successfully.');
    }
}
