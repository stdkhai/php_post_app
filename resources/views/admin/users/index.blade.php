{{-- admin/users/index.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="d-flex flex-column align-items-center">
<h1>Список користувачів</h1>

<table class="table table-striped table-light">
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
        <tr class="align-middle">
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->role }}</td>
            <td >
                <div class="d-flex  justify-content-center gap-2 align-items-center">
                    <a href="{{ route('admin.users.show', $user->id) }}" class="btn btn-primary" >Показати</a>
                <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-primary lh-base" >Редагувати</a>
                
                <form action="{{ route('admin.users.destroy', $user->id) }}" class="form-group m-0" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger h-3" type="submit">Видалити</button>
                </form>
                @if ($user->role === 'user')
                <form action="{{ route('admin.users.promote', $user->id) }}" class="form-group m-0" method="POST" style="display: inline">
                    @csrf
                    <button type="submit" class="btn btn-primary">Підвищити до адміністратора</button>
                </form>
                @elseif ($user->role === 'admin')
                <form action="{{ route('admin.users.demote', $user->id) }}" class="form-group m-0" method="POST" style="display: inline">
                    @csrf
                    <button type="submit" class="btn btn-danger">Понизити до користувача</button>
                </form>
                @endif
                </div>
                
               
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
</div>
