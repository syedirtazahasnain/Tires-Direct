@extends('layouts.admin_app')

<p>This is brand controller</p>

<!-- Form to add a new brand -->
<form id="vehicleForm" action="{{ route('brands.store') }}" method="POST">
    @csrf
    <!-- Form fields -->
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" class="form-control" id="description" name="description">
    </div>
    <div class="form-group">
        <label for="status">Status</label>
        <label><input type="checkbox" name="status" value=1> Active</label><br>
        <label><input type="checkbox" name="status" value=0> Not Active</label><br>
    </div>
    <button type="submit" class="btn btn-primary">Add Tire</button>
</form>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Status</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($brands as $brand)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $brand->title }}</td>
                <td>{{ $brand->description }}</td>
                <td>{{ $brand->status }}</td>
                <td>
                    <a href="{{ route('brands.show', $brand) }}" class="btn btn-primary">Show</a>
                    <a href="{{ route('brands.edit', $brand) }}" class="btn btn-primary">Edit</a>
                    <a href="{{ route('brands.destroy', $brand) }}" class="btn btn-primary">Delete</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">No brand record found</td>
            </tr>
        @endforelse
    </tbody>
</table>
