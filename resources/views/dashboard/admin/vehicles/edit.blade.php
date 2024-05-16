@extends('layouts.admin_app')

<p>This is vehicle edit controller</p>

<!-- Form to edit the vehicle -->
<form id="vehicleForm" action="{{ route('vehicles.update', $vehicle) }}" method="POST">
    @csrf
    @method('PATCH') <!-- Add this line to specify the PATCH method -->
    <!-- Form fields -->
    <div class="form-group">
        <label for="make">Make</label>
        <input type="text" class="form-control" value="{{ $vehicle->make }}" id="make" name="make">
    </div>
    <div class="form-group">
        <label for="model">Model</label>
        <input type="text" class="form-control" value="{{ $vehicle->model }}" id="model" name="model">
    </div>
    <div class="form-group">
        <label for="year">Year</label>
        <input type="number" class="form-control" value="{{ $vehicle->year }}" id="year" name="year">
    </div>
    <button type="submit" class="btn btn-primary">Update Vehicle</button>
</form>
