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
