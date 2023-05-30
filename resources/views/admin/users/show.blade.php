{{-- admin/users/show.blade.php --}}
@extends('layouts.app')

@section('content')
<h1>Інформація про користувача</h1>

<p>ID: {{ $user->id }}</p>
<p>Ім'я: {{ $user->name }}</p>
<p>Email: {{ $user->email }}</p>

<a href="{{ route('admin.users.edit', $user->id) }}">Редагувати</a>
<form action="{{ route('admin.users.destroy', $user->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Видалити</button>
</form>
@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<a href="{{ route('admin.users') }}" class="btn btn-primary">Назад до списку користувачів</a>

@endsection