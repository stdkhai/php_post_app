{{-- admin/users/edit.blade.php --}}
@extends('layouts.app')

@section('content')
    <h1>Редагування користувача</h1>

    <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Ім'я:</label>
        <input type="text" name="name" id="name" value="{{ $user->name }}">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ $user->email }}">
        <button type="submit">Зберегти</button>
    </form>
@endsection
