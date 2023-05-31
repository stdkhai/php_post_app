{{-- admin/users/edit.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="d-flex flex-column align-items-center">
        <h1>Редагування користувача</h1>

        <form action="{{ route('admin.users.update', $user->id) }}" class="d-flex flex-column gap-1 form-group" method="POST">
            @csrf
            @method('PUT')
            <label for="name">Ім'я:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}">
            <button type="submit" class="btn btn-primary">Зберегти</button>
        </form>
</div>
   
@endsection
