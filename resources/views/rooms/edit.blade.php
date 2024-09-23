@extends('layouts.app')

@section('content')
    <h1>Edit Room: {{ $room->name }}</h1>
    <form action="{{ route('rooms.update', $room->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Room Name:</label>
            <input type="text" name="name" id="name" value="{{ $room->name }}" required>
        </div>
        <div>
            <label for="capacity">Capacity:</label>
            <input type="number" name="capacity" id="capacity" value="{{ $room->capacity }}" required>
        </div>
        <div>
            <label for="price">Price per Night:</label>
            <input type="text" name="price" id="price" value="{{ $room->price }}" required>
        </div>
        <button type="submit">Update Room</button>
    </form>
@endsection
