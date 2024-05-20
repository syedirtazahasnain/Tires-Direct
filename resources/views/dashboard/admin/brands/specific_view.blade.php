@extends('layouts.admin_app')
<p>This is specific view</p>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
            <tr>
                <td>{{ $brand->title }}</td>
                <td>{{ $brand->description }}</td>
                <td>{{ $brand->status }}</td>
            </tr>
    </tbody>
</table>
