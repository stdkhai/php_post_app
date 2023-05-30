@extends('layouts.app')

@section('content')
    <h1>Список посилок</h1>
    <a href="{{ route('admin.parcels.create') }}" class="btn btn-primary">Створити нову посилку</a>
    
    <table class="table">
        <thead>
            <tr>
                <th>Номер посилки</th>
                <th>Відправник</th>
                <th>Одержувач</th>
                <th>Зараз у</th>
                <th>Дії</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($parcels as $parcel)
                <tr>
                    <td>{{ $parcel->id }}</td>
                    <td>{{ $senders[$parcel->id]->name }}</td>
                    <td>{{ $recievers[$parcel->id]->name }}</td>
                    <td>{{ $parcel->location }}</td>
                    <td>
                        <a href="{{ route('admin.parcels.show', $parcel->id) }}" class="btn btn-info">Переглянути</a>
                        <a href="{{ route('admin.parcels.edit', $parcel->id) }}" class="btn btn-primary">Редагувати</a>
                        <form action="{{ route('admin.parcels.destroy', $parcel->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Видалити</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
