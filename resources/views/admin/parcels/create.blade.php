@extends('layouts.app')

@section('content')
<div class="d-flex flex-column align-items-center">
<h1>Створення нової посилки</h1>
<form action="{{ route('admin.parcels.store') }}" class="d-flex flex-column w-50 gap-2" method="POST">
    @csrf
    <div class="form-group">
        <label for="sender">Відправник</label>
        <select name="sender" id="sender" class="form-control">
            @foreach($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="reciever">Одержувач</label>
        <select name="reciever" id="reciever" class="form-control">
            @foreach($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="description">Опис</label>
        <textarea name="description" id="description" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <label for="from_address">Звідки</label>
        <input type="text" name="from_address" id="from_address" class="form-control">
    </div>

    <div class="form-group">
        <label for="to_address">Куди</label>
        <input type="text" name="to_address" id="to_address" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Створити</button>
</form>
</div>


@endsection