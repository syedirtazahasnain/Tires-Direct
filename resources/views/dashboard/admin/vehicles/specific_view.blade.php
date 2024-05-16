@extends('layouts.admin_app')
<p>This is specific view</p>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Make</th>
            <th scope="col">Model</th>
            <th scope="col">Year</th>
            <th scope="col">Button</th>
        </tr>
    </thead>
    <tbody>
            <tr>
                <td>{{ $vehicle->make }}</td>
                <td>{{ $vehicle->model }}</td>
                <td>{{ $vehicle->year }}</td>
            </tr>
    </tbody>
</table>
