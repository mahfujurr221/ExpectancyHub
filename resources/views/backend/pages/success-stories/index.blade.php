@extends('backend.layouts.master')

@push('css')
@endpush
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="card-title"> Success Stories List </h4>
                </div>
                <div class="col-md-6 text-end">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
                        <i class="bi bi-plus"></i> Add New
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <x-table :columns="['#', 'Image', 'Status', 'Action']">
                @forelse($data as $key => $item)
                    <tr class="text-center">
                        <td>{{ $key + 1 }}</td>
                        <td>
                            @if ($item->file_url)
                                <img src="{{ asset($item->file_url) }}" alt="Image" style="width: 50px">
                            @endif
                        </td>
                        <td>
                            @if ($item->status == 1)
                                <span class="badge bg-success">Active</span>
                            @else
                                <span class="badge bg-danger">Inactive</span>
                            @endif
                        </td>
                        <td>
                            <button class="btn btn-info btn-sm editButton" data-bs-toggle="modal"
                                data-bs-target="#editModal" data-id="{{ $item->id }}"  data-status="{{ $item->status }}"
                                data-file_url="{{ $item->file_url }}"
                                title="Edit">
                                <i class="bi bi-pencil"></i>
                            </button>
                            <form action="{{ route('success-story.destroy', $item->id) }}" method="POST"
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
                        <td colspan="7" class="text-center">No data found</td>
                    </tr>
                @endforelse
            </x-table>
        </div>
    </div>

    {{-- Add Modal --}}
    <x-modal id="addModal" title="Add New Success Story" modalSize="modal-md" action="{{ route('success-story.store') }}">
        <x-slot name="footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </x-slot>

        <div class="mb-2 form-group">
            <label class="form-label" for="file_url">Image <span class="text-danger">*</span></label>
            <input type="file" name="file_url" class="form-control" required>
            @error('file_url')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-2 form-group">
            <label class="form-label" for="status">Status <span class="text-danger">*</span></label>
            <select name="status" class="form-control" required>
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
            @error('status')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </x-modal>


    {{-- Edit Modal --}}
    <x-modal id="editModal" title="Update Success Story" modalSize="modal-md">
        @csrf
        @method('PUT')
        <x-slot name="footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Update changes</button>
        </x-slot>

        <div class="mb-2 form-group">
            <label class="form-label" for="file_url">Image <span class="text-danger">*</span></label>
            <input type="file" name="file_url" class="form-control mb-3">
            <img src="" id="edit_image" alt="Image" style="width: 50px">
            @error('file_url')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-2 form-group">
            <label class="form-label" for="status">Status <span class="text-danger">*</span></label>
            <select name="status" class="form-control" id="edit_status" required>
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
            @error('status')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>


    </x-modal>
@endsection

@push('scripts')
    <script></script>
    <script>
        $(document).on('click', '.editButton', function() {
            var id = $(this).data('id');
            var file_url = $(this).data('file_url');
            var status = $(this).data('status');
            var url = "{{ route('success-story.update', ':id') }}";
            url = url.replace(':id', id);

            if (file_url) {
                $('#edit_image').attr('src', '{{ asset(':file_url') }}'.replace(':file_url', file_url));
                $('#edit_image').show();

            } else {
                $('#edit_image').attr('src', '');
                $('#edit_image').hide();
            }
            $('#edit_status').val(status);
            $('#editModal').find('form').attr('action', url);
        });
    </script>
@endpush
