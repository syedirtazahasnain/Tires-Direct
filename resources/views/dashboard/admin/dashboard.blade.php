@extends('layout.admin_panel.app')

@section('content')
{{-- bread crumbs --}}
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Dashboard</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

{{-- bread crumbs end --}}

<div class="container-fluid">
    <div class="row">
        <!-- Column -->
        <div class="col-md-6 col-lg-2 col-xlg-3">
            <div class="card card-hover">
                <div class="box bg-cyan text-center">
                    <h1 class="font-light text-white">
                        <i class="mdi mdi-view-dashboard"></i>
                    </h1>
                    <h6 class="text-white">Dashboard</h6>
                </div>
            </div>
        </div>
        <!-- Column -->

        <div class="col-md-6 col-lg-2 col-xlg-3">
            <div class="card card-hover">
                <div class="box bg-cyan text-center">
                    <h1 class="font-light text-white">
                        <i class="mdi mdi-pencil"></i>
                    </h1>
                    <h6 class="text-white">Elements</h6>
                </div>
            </div>
        </div>

        <!-- Column -->
        <div class="col-md-6 col-lg-2 col-xlg-3">
            <div class="card card-hover">
                <div class="box bg-success text-center">
                    <h1 class="font-light text-white">
                        <i class="mdi mdi-calendar-check"></i>
                    </h1>
                    <h6 class="text-white">Calnedar</h6>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-2 col-xlg-3">
            <div class="card card-hover">
                <div class="box bg-warning text-center">
                    <h1 class="font-light text-white">
                        <i class="mdi mdi-alert"></i>
                    </h1>
                    <h6 class="text-white">Errors</h6>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>

</div>


@endsection
