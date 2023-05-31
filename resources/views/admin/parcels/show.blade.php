@extends('layouts.app')

@section('content')
<div class="d-flex flex-column align-items-center gap-2">
    <h1>Інформація про посилку</h1>

    <div>
        <p><strong>Sender:</strong> {{ $sender->name }}</p>
        <p><strong>Reciever:</strong> {{ $reciever->name }}</p>
        <p><strong>Description:</strong> {{ $parcel->description }}</p>
        <p><strong>From Address:</strong> {{ $parcel->from_address }}</p>
        <p><strong>To Address:</strong> {{ $parcel->to_address }}</p>
        <p><strong>Location:</strong> {{ $parcel->location }}</p>
    </div>
    <div class="d-flex gap-2">
    <a href="{{ route('admin.parcels.edit', $parcel->id) }}" class="btn btn-primary">Редагувати</a>

    <form action="{{ route('admin.parcels.destroy', $parcel->id) }}" method="POST" style="display: inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Видалити</button>
    </form>
    </div>
    
</div>

@endsection