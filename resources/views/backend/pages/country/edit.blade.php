@extends('backend.layouts.master')
@section('content')

<div class="card">

    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <h4 class="card-title">Edit Country</h4>
            </div>
            <div class="mt-1 col-md-6 text-end">
                <a class="btn btn-primary" href="{{ route('countries.index') }}">
                    <i class="bi bi-list"></i> Country List
                </a>
            </div>
        </div>
    </div>

    <form action="{{ route('countries.update', $country->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="py-3 card-body row">

            <div class="mb-3 col-6">
                <label>Name <span class="text-danger">*</span></label>
                <input type="text" name="name" class="form-control" value="{{ $country->name }}" required>
            </div>

            <div class="mb-3 col-6">
                <label>Code <span class="text-danger">*</span></label>
                <input type="text" name="code" class="form-control" value="{{ $country->code }}" required>
            </div>

            <div class="mb-3">
                <label>Description</label>
                <textarea name="description" class="form-control">{{ $country->description }}</textarea>
            </div>

            <div class="mb-5 row">
                <label>Flag</label>
                <div class="col-md-6">
                    <input type="file" name="flag" class="form-control" id="flagInput">
                </div>
                <div class="mt-2 col-md-6">
                    <img id="flagPreview"
                        src="{{ asset($country->flag ? $country->flag : 'uploads/user.png') }}"
                        alt="Flag Preview"
                        style="{{ $country->flag ? '' : 'display:none;' }} max-height: 100px;">
                </div>
            </div>

            <div class="py-3 text-center card-footer">
                <button type="submit" class="btn btn-primary">Update Country</button>
            </div>
        </div>
    </form>
</div>

@endsection

@push('scripts')
<script>
    document.getElementById('flagInput').addEventListener('change', function(event) {
        const preview = document.getElementById('flagPreview');
        const file = event.target.files[0];

        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            };
            reader.readAsDataURL(file);
        } else {
            preview.src = '';
            preview.style.display = 'none';
        }
    });
</script>
@endpush
