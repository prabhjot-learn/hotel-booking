@extends('layouts.app')

@section('content')
    <h1>Create Room</h1>
    <form action="{{ route('rooms.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Room Name:</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div>
            <label for="capacity">Capacity:</label>
            <input type="number" name="capacity" id="capacity" required>
        </div>
        <div>
            <label for="price">Price per Night:</label>
            <input type="text" name="price" id="price" required>
        </div>
        <button type="submit">Create Room</button>
    </form>
@endsection
