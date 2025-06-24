@extends('backend.layouts.master')
@section('content')

<div class="card">
    <div class="card-body">
        <form action="{{ route('countries.update', $country->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Name <span class="text-danger">*</span></label>
                <input type="text" name="name" value="{{ $country->name }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Code <span class="text-danger">*</span></label>
                <input type="text" name="code" value="{{ $country->code }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Description</label>
                <textarea name="description" class="form-control">{{ $country->description }}</textarea>
            </div>

            <div class="mb-3">
                <label>Flag</label>
                <input type="file" name="flag" class="form-control">
                @if($country->flag)
                    <img src="{{ asset('storage/' . $country->flag) }}" alt="flag" width="100" class="mt-2">
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('countries.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>

@endsection
