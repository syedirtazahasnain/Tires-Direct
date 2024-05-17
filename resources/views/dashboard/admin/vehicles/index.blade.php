@extends('layouts.admin_app')

<p>This is vehicle controller</p>

<!-- Form to add a new vehicle -->
<form id="vehicleForm" action="{{ route('vehicles.store') }}" method="POST">
    @csrf
    <!-- Form fields -->
    <div class="form-group">
        <label for="make">Make</label>
        <input type="text" class="form-control" id="make" name="make">
    </div>
    <div class="form-group">
        <label for="model">Model</label>
        <input type="text" class="form-control" id="model" name="model">
    </div>
    <div class="form-group">
        <label for="year">Year</label>
        <input type="number" class="form-control" id="year" name="year">
    </div>
    <button type="submit" class="btn btn-primary">Add Vehicle</button>
</form>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Make</th>
            <th scope="col">Model</th>
            <th scope="col">Year</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($vehicles as $vehicle)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $vehicle->make }}</td>
                <td>{{ $vehicle->model }}</td>
                <td>{{ $vehicle->year }}</td>
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
