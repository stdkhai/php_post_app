{{-- admin/users/show.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="d-flex flex-column align-items-center gap-2">
    <h1>Інформація про користувача</h1>

    <p>ID: {{ $user->id }}</p>
    <p>Ім'я: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p>
    <div class="d-flex gap-2">
    <button class="btn btn-primary"><a href="{{ route('admin.users.edit', $user->id) }}" class="text-decoration-none" style="color:white">Редагувати</a></button>
    <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit">Видалити</button>
    </form>
    </div>
    
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <a href="{{ route('admin.users') }}" class="btn btn-primary">Назад до списку користувачів</a>
</div>


@endsection