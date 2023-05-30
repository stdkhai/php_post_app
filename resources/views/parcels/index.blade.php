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
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                        Open Modal
                    </button>
                </td>
            </tr>

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>This is the modal body.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </tbody>
    </table>

</div>
@endsection