@extends('backend.layouts.master')
@section('content')

<div class="card">
    <div class="card-body">
        <form action="{{ route('countries.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label>Name <span class="text-danger">*</span></label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Code <span class="text-danger">*</span></label>
                <input type="text" name="code" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Description</label>
                <textarea name="description" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label>Flag</label>
                <input type="file" name="flag" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('countries.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>

@endsection