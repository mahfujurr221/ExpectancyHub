@extends('backend.layouts.master')
@section('content')

<div class="card">
    <div class="card-header">
        <h4 class="card-title">Edit Service</h4>
        <a href="{{ route('services.index') }}" class="btn btn-sm btn-primary float-end"><i class="bi bi-list"></i>
            Service List</a>
    </div>

    <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card-body row">
            <div class="mb-3 col-md-6">
                <label>Service Name <span class="text-danger">*</span></label>
                <input type="text" name="name" class="form-control" value="{{ $service->name }}" required>
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3 col-md-6">
                <label>Image</label>
                <input type="file" name="image" class="form-control" id="imageInput">
                @error('image')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label>Description</label>
                <textarea name="description" class="form-control summernote">{{ $service->description }}</textarea>
                @error('description')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <img id="imagePreview" src="{{ asset($service->image ?? 'uploads/no-image.png') }}" alt="Image Preview"
                    style="max-height:100px;">
            </div>
        </div>

        <div class="text-center card-footer">
            <button class="btn btn-primary">Update Service</button>
        </div>
    </form>
</div>

@endsection

@push('scripts')
<script>
    document.getElementById('imageInput').addEventListener('change', function (event) {
        const preview = document.getElementById('imagePreview');
        const file = event.target.files[0];

        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            };
            reader.readAsDataURL(file);
        }
    });
</script>
@endpush