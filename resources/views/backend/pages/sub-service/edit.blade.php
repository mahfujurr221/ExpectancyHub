@extends('backend.layouts.master')
@section('content')

<div class="card">
    <div class="card-header">
        <h4 class="card-title">Edit Sub-Service</h4>
        <a href="{{ route('sub-services.index') }}" class="btn btn-sm btn-primary float-end">
            <i class="bi bi-list"></i> Sub-Service List
        </a>
    </div>

    <form action="{{ route('sub-services.update', $subservice->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card-body row">
            <div class="mb-3 col-md-6">
                <label>Parent Service <span class="text-danger">*</span></label>
                <select name="service_id" class="form-control" required>
                    <option value="">Select Service</option>
                    @foreach($services as $service)
                        <option value="{{ $service->id }}" {{ $subservice->service_id == $service->id ? 'selected' : '' }}>
                            {{ $service->name }}
                        </option>
                    @endforeach
                </select>
                @error('service_id')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3 col-md-6">
                <label>Sub-Service Name <span class="text-danger">*</span></label>
                <input type="text" name="name" class="form-control" value="{{ $subservice->name }}" required>
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3 col-md-6">
                <label>Image</label>
                <input type="file" name="image" class="form-control" id="subServiceImageInput">
                @error('image')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3 col-md-12">
                <label>Description</label>
                <textarea name="description" class="form-control summernote">{{ $subservice->description }}</textarea>
                @error('description')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3 col-md-6">
                @if($subservice->image)
                    <img id="subServiceImagePreview" src="{{ asset('uploads/subservices/'.$subservice->image) }}" alt="Image Preview" style="max-height:100px;">
                @else
                    <img id="subServiceImagePreview" src="#" alt="Image Preview" style="display:none; max-height:100px;">
                @endif
            </div>
        </div>

        <div class="text-center card-footer">
            <button class="btn btn-primary">Update Sub-Service</button>
        </div>
    </form>
</div>

@endsection

@push('scripts')
<script>
    document.getElementById('subServiceImageInput').addEventListener('change', function (event) {
        const preview = document.getElementById('subServiceImagePreview');
        const file = event.target.files[0];

        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            };
            reader.readAsDataURL(file);
        } else {
            preview.style.display = 'none';
            preview.src = '';
        }
    });
</script>
@endpush
