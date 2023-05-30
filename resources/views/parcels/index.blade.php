@extends('layouts.app')

@section('content')

<div class="container">
    <h1>My Parcels</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Sender</th>
                <th>Receiver</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($parcels as $parcel)
            <tr>
                <td>{{ $parcel->id }}</td>
                <td>{{ $parcel->sender }}</td>
                <td>{{ $parcel->receiver }}</td>
                <td>{{ $parcel->description }}</td>
                <td>
                    <button class="btn btn-info" data-toggle="modal" data-target="#parcelModal{{ $parcel->id }}">Детальніше</button>
                </td>
            </tr>

            <!-- Modal -->
            <div class="modal fade" id="parcelModal{{ $parcel->id }}" tabindex="-1" role="dialog" aria-labelledby="parcelModalLabel{{ $parcel->id }}" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="parcelModalLabel{{ $parcel->id }}">Детальна інформація про посилку #{{ $parcel->id }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Sender: {{ $parcel->sender }}</p>
                            <p>Receiver: {{ $parcel->receiver }}</p>
                            <p>Description: {{ $parcel->description }}</p>
                            <!-- Додайте додаткову інформацію, якщо необхідно -->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрити</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </tbody>
    </table>

</div>
@endsection