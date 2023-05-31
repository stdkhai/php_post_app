@extends('layouts.app')

@section('content')
<div class="d-flex flex-column align-items-center">
<h1>Редагування посилки</h1>
    
    <form action="{{ route('admin.parcels.update', $parcel->id) }}" class="form-group d-flex flex-column gap-2" method="POST">
    @csrf
    @method('POST')

    <div class="form-group">
        <label for="sender">Відправник</label>
        <select name="sender" id="sender" class="form-control">
            @foreach ($users as $user)
                <option value="{{ $user->id }}" @if ($user->id == $parcel->sender) selected @endif>{{ $user->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="receiver">Отримувач</label>
        <select name="receiver" id="receiver" class="form-control">
            @foreach ($users as $user)
                <option value="{{ $user->id }}" @if ($user->id == $parcel->receiver) selected @endif>{{ $user->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="description">Опис</label>
        <input type="text" name="description" id="description" class="form-control" value="{{ $parcel->description }}">
    </div>

    <div class="form-group">
        <label for="from_address">Звідки</label>
        <input type="text" name="from_address" id="from_address" class="form-control" value="{{ $parcel->from_address }}">
    </div>

    <div class="form-group">
        <label for="to_address">Куди</label>
        <input type="text" name="to_address" id="to_address" class="form-control" value="{{ $parcel->to_address }}">
    </div>

    <div class="form-group">
        <label for="location">Розташування</label>
        <input type="text" name="location" id="location" class="form-control" value="{{ $parcel->location }}">
    </div>

    <button type="submit" class="btn btn-primary">Зберегти</button>
</form>
</div>
    

@endsection
