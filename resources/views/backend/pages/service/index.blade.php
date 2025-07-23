@extends('backend.layouts.master')
@section('content')

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <h4 class="card-title">Service List</h4>
            </div>
            <div class="col-md-6 text-end">
                <a class="btn btn-primary" href="{{ route('services.create') }}">
                    <i class="bi bi-plus"></i> Add Service
                </a>
            </div>
        </div>
    </div>

    <div class="card-body">
        <x-table :columns="['#', 'Image', 'Name', 'Description', 'Actions']">
            @forelse($services as $key => $service)
                <tr class="text-center">
                    <td>{{ $key + 1 }}</td>
                    <td>
                        @if($service->image)
                            <img src="{{ asset($service->image) }}" width="50" alt="Image">
                        @else
                            <img src="{{ asset('uploads/no-image.png') }}" width="50" alt="No Image">
                        @endif
                    </td>
                    <td>{{ $service->name }}</td>
                    <td>{{ Str::limit(strip_tags($service->description), 100) }}</td>
                    <td>
                        <a class="btn btn-info btn-sm" href="{{ route('services.edit', $service->id) }}"><i class="bi bi-pencil"></i></a>
                        <form action="{{ route('services.destroy', $service->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Are you sure to delete?')" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="5" class="text-center">No data found</td></tr>
            @endforelse
        </x-table>
    </div>
</div>
@endsection
