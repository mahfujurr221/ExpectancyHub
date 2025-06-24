@extends('backend.layouts.master')
@section('content')

<div class="card">
    <div class="card-body">
        <form>
            <div class="mt-3 row">
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Search by Title" name="title"
                        value="{{ request()->title }}">
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-primary">Search</button>
                    <a href="{{ route('countries.index') }}" class="btn btn-danger">Clear</a>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <h4 class="card-title">Country List</h4>
            </div>
            <div class="col-md-6 text-end">
                <a class="btn btn-primary" href="{{ route('countries.create') }}" title="Add Country">
                    <i class="bi bi-plus"></i> Add Country
                </a>
            </div>
        </div>
    </div>
    
    <div class="card-body">
        <x-table :columns="['#', 'Flag', 'Name', 'Description', 'Actions']">
            @forelse($countries as $key => $data)
            <tr class="text-center">
                <td>{{ $key + 1 }}</td>
                <td>
                    @if($data->flag)
                    <img src="{{ asset('storage/' . $data->flag) }}" alt="{{ $data->name }}" width="50">
                    @else
                    <img src="{{ asset('images/default-flag.png') }}" alt="Default Flag" width="50">
                    @endif
                </td>
                <td>{{ $data->name }}</td>
                <td>
                    {{ Str::limit($data->description, 100) }}
                </td>
                <td style="min-width: 100px" class="text-center">
                    <a class="btn btn-info btn-sm" href="{{ route('countries.edit', $data->id) }}" title="Edit">
                        <i class="bi bi-pencil"></i>
                    </a>
                    <form action="{{ route('countries.destroy', $data->id) }}" method="POST"
                        style="display: inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Are you sure to delete?')" title="Delete">
                            <i class="bi bi-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center">No data found</td>
            </tr>
            @endforelse
        </x-table>
    </div>
</div>

@endsection

@push('scripts')
@endpush