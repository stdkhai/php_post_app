@extends('layouts.app')

@section('content')

<div class="container">
    <h1>My Parcels</h1>
    <table class="table table-striped table-light">
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
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                        Переглянути
                    </button>
                    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Детальніше</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <p><strong>Sender:</strong> {{ $parcel->sender }}</p>
                                <p><strong>Reciever:</strong> {{ $parcel->receiver }}</p>
                                <p><strong>Description:</strong> {{ $parcel->description }}</p>
                                <p><strong>From Address:</strong> {{ $parcel->from_address }}</p>
                                <p><strong>To Address:</strong> {{ $parcel->to_address }}</p>
                                <p><strong>Location:</strong> {{ $parcel->location }}</p>
                                <p><strong>Created at:</strong> {{ $parcel->created_at }}</p>
                                <p><strong>Updated at:</strong> {{ $parcel->updated_at }}</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                    </div>
                </div>
            </div>
                </td>
            </tr>

            <!-- Modal -->
            
            @endforeach
            
        </tbody>
    </table>

</div>
@endsection