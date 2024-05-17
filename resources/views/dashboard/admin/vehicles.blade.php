@extends('layout.admin_panel.app')

@section('content')

    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Vehicles</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Vehicles
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <button type="button" class="add-vehicle btn btn-primary float-end" >
                        Add New Vehicle
                    </button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table
                            id="zero_config"
                            class="table table-striped table-bordered"
                        >
                            <thead>
                                <th scope="col"> Sr. No </th>
                                <th scope="col"> Make </th>
                                <th scope="col"> Model </th>
                                <th scope="col"> Year </th>
                                <th scope="col"> Active </th>
                                <th scope="col"> Actions </th>
                            </thead>
                            <tbody>
                            @forelse ($vehicles as $vehicle)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $vehicle->make }}</td>
                                    <td>{{ $vehicle->model }}</td>
                                    <td>{{ $vehicle->year }}</td>
                                    <td class="text-success">Active</td>
                                    <td>
                                        <a href="{{ route('vehicles.show', $vehicle) }}" class="btn btn-primary">Show</a>
                                        <a href="{{ route('vehicles.edit', $vehicle) }}" class="btn btn-primary">Edit</a>
                                        <a href="{{ route('vehicles.destroy', $vehicle) }}" class="btn btn-primary">Delete</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">No vehicle record found</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

{{-- Modal section --}}
<div class="modal fade" id="vehicle-modal" tabindex="-1" aria-labelledby="vehicleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">

            </div>
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
</div>

@section('scripts')
<script>
    $(document).on('click','.add-vehicle', function(){
        var id = '';
        getvehiclesform(id);
    })

    function getvehiclesform(id){
        $.ajax({
            url: '/admin/vehicles/create'+id,
            method: 'GET',
            success: function(response) {
                $('#vehicle-modal .modal-body').html(response);
                $('#vehicle-modal').modal('show');
            },
            error: function(xhr) {
                console.log(xhr.responseText); // Display error response for debugging
            }
        });
    }

</script>
@endsection
