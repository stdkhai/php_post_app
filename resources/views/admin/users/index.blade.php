{{-- admin/users/index.blade.php --}}
@extends('layouts.app')

@section('content')
<h1>Список користувачів</h1>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Ім'я</th>
            <th>Email</th>
            <th>Статус</th>
            <th>Дії</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        @if ($user->id !== Auth::user()->id)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->role }}</td>
            <td>
                <a href="{{ route('admin.users.show', $user->id) }}">Показати</a>
                <a href="{{ route('admin.users.edit', $user->id) }}">Редагувати</a>
                <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Видалити</button>
                </form>
                @if ($user->role === 'user')
                <form action="{{ route('admin.users.promote', $user->id) }}" method="POST" style="display: inline">
                    @csrf
                    <button type="submit" class="btn btn-primary">Підвищити до адміністратора</button>
                </form>
                @elseif ($user->role === 'admin')
                <form action="{{ route('admin.users.demote', $user->id) }}" method="POST" style="display: inline">
                    @csrf
                    <button type="submit" class="btn btn-danger">Понизити до користувача</button>
                </form>
                @endif
            </td>
        </tr>
        @endif
        @endforeach
    </tbody>
</table>
@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

@endsection