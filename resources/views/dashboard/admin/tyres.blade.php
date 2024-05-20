@extends('layout.admin_panel.app')

@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Tyres</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Tyres
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
                    <button type="button" class="add-vehicle btn btn-primary float-end"> Add New Tyre </button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <th scope="col"> Sr. No </th>
                                <th scope="col"> Name </th>
                                <th scope="col"> Title </th>
                                <th scope="col"> Sku </th>
                                <th scope="col"> Brand </th>
                                <th scope="col"> Price </th>
                                <th scope="col"> Actions </th>
                            </thead>
                            <tbody>
                                @forelse ($tires as $tyre)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $tyre->name }}</td>
                                        <td>{{ $tyre->title }}</td>
                                        <td>{{ $tyre->sku }}</td>
                                        <td>{{ $tyre->brand }}</td>
                                        <td>{{ $tyre->price }}</td>
                                        <td>
                                            <a href="{{ route('vehicles.show', $tyre) }}" class="btn btn-primary">Show</a>
                                            <a href="{{ route('vehicles.edit', $tyre) }}" class="btn btn-primary">Edit</a>
                                            <a href="{{ route('vehicles.destroy', $tyre) }}"
                                                class="btn btn-primary">Delete</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">No Tyres record found</td>
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
