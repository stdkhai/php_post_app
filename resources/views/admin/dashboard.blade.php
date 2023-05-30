@extends('layouts.app')

@section('content')

<h1>Адміністративна панель</h1>

<p>Всього користувачів: {{ $usersCount }}</p>
<p>Всього посилок: {{ $parcelsCount }}</p>

<a href="{{ route('admin.users') }}">Переглянути всіх користувачів</a>
<a href="{{ route('admin.parcels.index') }}">Переглянути всі посилки</a>
@endsection