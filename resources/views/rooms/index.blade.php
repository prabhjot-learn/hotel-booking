@extends('layouts.app')

@section('content')
    <h1>Rooms</h1>
    <a href="{{ route('rooms.create') }}">Create Room</a>
    @foreach($rooms as $room)
        <p>{{ $room->name }} (Capacity: {{ $room->capacity }}) - ${{ $room->price }} per night</p>
        <a href="{{ route('bookings.create', $room->id) }}">Book Now</a>
        <a href="{{ route('rooms.edit', $room->id) }}">Edit</a>
        <form action="{{ route('rooms.destroy', $room->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    @endforeach
@endsection
