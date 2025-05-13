@extends('backend.layouts.master')
@section('content')
@can('dashboard')
<div class="card col-12 containing-card">
    <div class="card-header">
        <b>Todays Activity</b>
    </div>
    <div class="p-2 row">
        <div class="col-md-3 col-sm-6">
            <div class="shadow card bg-light">
                <div class="card-body">
                    <h6 class="logo-info card-title text-uppercase font-weight-bold">New Registered</h6>
                    <p class="logo-info card-text fs-5 fw-bold">0</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="shadow card bg-light">
                <div class="card-body">
                    <h6 class="logo-info card-title text-uppercase font-weight-bold">Course Added</h6>
                    <p class="logo-info card-text fs-5 fw-bold">0</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="shadow card bg-light">
                <div class="card-body">
                    <h6 class="logo-info card-title text-uppercase font-weight-bold">Videos Added</h6>
                    <p class="logo-info card-text fs-5 fw-bold">0</p>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="shadow card bg-light">
                <div class="card-body">
                    <h6 class="logo-info card-title text-uppercase font-weight-bold">Visited</h6>
                    <p class="logo-info card-text fs-5 fw-bold">0</p>
                </div>
            </div>
        </div>
        
    </div>
</div>

<div class="card col-12 containing-card">
    <div class="card-header">
        <b>Total</b>
    </div>
    <div class="p-2 row">
        <div class="col-md-3 col-sm-6">
            <div class="shadow card bg-light">
                <div class="card-body">
                    <h6 class="logo-info card-title text-uppercase font-weight-bold">Total Registered</h6>
                    <p class="logo-info card-text fs-5 fw-bold">0</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="shadow card bg-light">
                <div class="card-body">
                    <h6 class="logo-info card-title text-uppercase font-weight-bold">Total Course</h6>
                    <p class="logo-info card-text fs-5 fw-bold">0</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="shadow card bg-light">
                <div class="card-body">
                    <h6 class="logo-info card-title text-uppercase font-weight-bold">Total Videos</h6>
                    <p class="logo-info card-text fs-5 fw-bold">0</p>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="shadow card bg-light">
                <div class="card-body">
                    <h6 class="logo-info card-title text-uppercase font-weight-bold">Total Visited</h6>
                    <p class="logo-info card-text fs-5 fw-bold">0</p>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endcan
@endsection