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

<!-- Form to add a new tire -->
<form id="vehicleForm" action="{{ route('tires.store') }}" method="POST">
    @csrf
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
    <button type="submit" class="btn btn-primary">Add Tire</button>
</form>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Title</th>
            <th scope="col">Sku</th>
            <th scope="col">Brand</th>
            <th scope="col">Prices</th>
            <th scope="col">Tire Specs</th>
            <th scope="col">Discount </th>
            <th scope="col">Feature</th>
            <th scope="col">Inventory</th>
            <th scope="col">In Stock</th>
            <th scope="col">Is Discount</th>
            <th scope="col">Image</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($tires as $tire)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $tire->name }}</td>
                <td>{{ $tire->title }}</td>
                <td>{{ $tire->sku }}</td>
                <td> brand name</td>
                <td> specs details</td>
                <td>{{ $tire->feature }}</td>
                <td>{{ $tire->inventory }}</td>
                <td>{{ $tire->in_stock }}</td>
                <td>{{ $tire->is_discount }}</td>
                <td>{{ $tire->image }}</td>
                <td>
                    <a href="{{ route('tires.show', $tire) }}" class="btn btn-primary">Show</a>
                    <a href="{{ route('tires.edit', $tire) }}" class="btn btn-primary">Edit</a>
                    <a href="{{ route('tires.destroy', $tire) }}" class="btn btn-primary">Delete</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5">No tire record found</td>
            </tr>
        @endforelse
    </tbody>
</table>
