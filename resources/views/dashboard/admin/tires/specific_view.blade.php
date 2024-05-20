@extends('layouts.admin_app')
<p>This is specific view</p>
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
            <tr>
                <td>{{ $tire->name }}</td>
                <td>{{ $tire->title }}</td>
                <td>{{ $tire->sku }}</td>
                <td>{{ $tire->barnd_id }}</td>
                <td>{{ $tire->price_id }}</td>
                <td>{{ $tire->tire_specs_id }}</td>
                <td>{{ $tire->discount_id }}</td>
                <td>{{ $tire->feature }}</td>
                <td>{{ $tire->inventory }}</td>
                <td>{{ $tire->in_stock }}</td>
                <td>{{ $tire->is_discount }}</td>
                <td>{{ $tire->image }}</td>
            </tr>
    </tbody>
</table>
