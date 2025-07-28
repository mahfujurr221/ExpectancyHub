@extends('backend.layouts.master')
@section('content')

<div class="card">
    <div class="card-header">
        <h4 class="card-title">Sub-Service List</h4>
        <a href="{{ route('sub-services.create') }}" class="btn btn-sm btn-success float-end">
            <i class="bi bi-plus"></i> Add Sub-Service
        </a>
    </div>

    <div class="card-body table-responsive">
        <table class="table align-middle table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Sub-Service Name</th>
                    <th>Parent Service</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th width="160">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($subservices as $key => $sub)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $sub->name }}</td>
                        <td>{{ $sub->service->name ?? 'N/A' }}</td>
                        <td>
                            @if ($sub->image)
                                <img src="{{ asset( $sub->image) }}" alt="Image" width="80">
                            @else
                                <span class="text-muted">No Image</span>
                            @endif
                        </td>
                        <td>{!! Str::limit(strip_tags($sub->description), 100) !!}</td>
                        <td>
                            <a href="{{ route('sub-services.edit', $sub->id) }}" class="btn btn-sm btn-primary">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <form action="{{ route('sub-services.destroy', $sub->id) }}" method="POST"
                                style="display:inline-block;"
                                onsubmit="return confirm('Are you sure to delete this sub-service?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">No sub-services found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
