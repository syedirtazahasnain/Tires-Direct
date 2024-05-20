@extends('layouts.admin_app')

<p>This is tire edit controller</p>

<!-- Form to edit the tire -->
<form id="vehicleForm" action="{{ route('vehicles.update', $tire) }}" method="POST">
    @csrf
    @method('PATCH') <!-- Add this line to specify the PATCH method -->
    <!-- Form fields -->
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="form-group">
        <label for="sku">Sku</label>
        <input type="number" class="form-control" id="sku" name="sku">
    </div>
    <div class="form-group">
        <label for="brand_id">Brand</label>
        <input type="number" class="form-control" id="brand_id" name="brand_id">
    </div>
    <div class="form-group">
        <label for="price_id">Price</label>
        <input type="number" class="form-control" id="price_id" name="price_id">
    </div>
    <div class="form-group">
        <label for="tire_specs_id">Tire Specs Id</label>
        <input type="number" class="form-control" id="tire_specs_id" name="tire_specs_id">
    </div>
    <div class="form-group">
        <label for="discount_id">Discount Id</label>
        <input type="number" class="form-control" id="discount_id" name="discount_id">
    </div>
    <div class="form-group">
        <label for="feature">Feature</label>
        <input type="text" class="form-control" id="feature" name="feature">
    </div>
    <div class="form-group">
        <label for="inventory">Inventory</label>
        <input type="text" class="form-control" id="inventory" name="inventory">
    </div>
    <div class="form-group">
        <label for="status">Stock</label>
        <label><input type="checkbox" name="status" value=1> Active</label><br>
        <label><input type="checkbox" name="status" value=0> Not Active</label><br>
    </div>
    <div class="form-group">
        <label for="status">Discount</label>
        <label><input type="checkbox" name="status" value=1> Active</label><br>
        <label><input type="checkbox" name="status" value=0> Not Active</label><br>
    </div>
    <div class="form-group">
        <label for="image">Upload Image:</label>
        <input type="file" class="form-control" id="image" name="image">
    </div>
    <button type="submit" class="btn btn-primary">Update Tire</button>
</form>
