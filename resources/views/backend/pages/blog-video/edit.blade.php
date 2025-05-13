@extends('backend.layouts.master')
@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <h4 class="card-title">Update Blog Video</h4>
            </div>
            <div class="mt-1 col-md-6 text-end">
                <a class="btn btn-primary" href="{{ route('blog-videos.index') }}">
                    <i class="bi bi-list"></i> Blog Video List
                </a>
            </div>
        </div>
    </div>
    <form action="{{ route('blog-videos.update', $blogVideo->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="py-3 card-body">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="row">
                        <div class="mb-2 form-group">
                            <label class="form-label" for="title">Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="title" placeholder="Enter Title" required
                                value="{{ $blogVideo->title }}">
                            @error('title')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-2 form-group">
                            <label class="form-label" for="url">Url<span class="text-danger">*</span> </label>
                            <input type="text" class="form-control" name="url" placeholder="Enter Url" required
                                value="{{ $blogVideo->url }}">
                            @error('url')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3 form-group">
                            <label class="form-label" for="description">Description</label>
                                <textarea name="description" class="form-control" placeholder="Enter Description"
                                    rows="10">{{ $blogVideo->description }}</textarea>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="py-3 text-center card-footer">
            <button type="submit" class="btn btn-primary">Save Changes</button>
        </div>
    </form>
</div>
@endsection

@push('scripts')
<script>
</script>
@endpush