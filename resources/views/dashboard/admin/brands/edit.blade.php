@extends('layouts.admin_app')

<p>This is brand edit controller</p>

<!-- Form to edit the brand -->
<form id="brandForm" action="{{ route('brands.update', $brand) }}" method="POST">
    @csrf
    @method('PATCH') <!-- Add this line to specify the PATCH method -->
    <!-- Form fields -->
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" value="{{ $brand->title }}" id="title" name="title">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" class="form-control" value="{{ $brand->description }}" id="description" name="description">
    </div>
    <div class="form-group">
        <label for="status">Status</label>
        <label><input type="radio" name="status" value=1 {{ $brand->status === 1 ? 'checked' : '' }}> Active</label>
        <label><input type="radio" name="status" value=0 {{ $brand->status === 0 ? 'checked' : '' }}> Not Active</label>
    </div>
    <button type="submit" class="btn btn-primary">Update Brand</button>
</form>
