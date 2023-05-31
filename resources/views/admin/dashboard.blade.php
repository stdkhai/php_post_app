@extends('layouts.app')

@section('content')
<div class="d-flex flex-column align-items-center jusify-content-center pt-12">
<h1>Адміністративна панель</h1>
<div class="d-flex gap-5 pt-5 justify-content-center">
        <div class="d-flex flex-column align-items-center justify-content-center">
        <p>Всього користувачів: {{ $usersCount }}</p>
        <button class="btn btn-primary "><a href="{{ route('admin.users') }}" class="text-decoration-none" style="color:white">Переглянути всіх користувачів</a></button>
        
        </div>
        <div class="d-flex flex-column align-items-center justify-content-center">
        <p>Всього посилок: {{ $parcelsCount }}</p>
        <button class="btn btn-primary "><a href="{{ route('admin.parcels') }}" class="text-decoration-none" style="color:white">Переглянути всі посилки</a></button>
        </div>
</div>


@endsection
</div>

