@extends('adminapp.master')

@section('content')
<div class="bagian-tambah" style="padding-left: 40px;">
    <form action="{{ route('category.create') }}" method="post">
        @csrf
      <button class="btn btn-flat btn-primary">Tambah</button>
    </form>
  </div>
        <div class="bagian-table" style="padding: 40px;">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Name</th>
                  <th scope="col">Description</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
                <tbody>
                  @foreach ($items as $item)
                  <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $item->name }}</td>
                          <td>{{ $item->description }}</td>
                          <td>
                            <div class="action d-flex">
                              <form action="{{ route('category.edit', $item->id) }}" method="post" class="mr-2">
                                @method('put')
                                @csrf
                                  <button class="btn btn-flat btn-warning">Edit</button>
                              </form>
    
                              <form action="{{ route('category.delete', $item->id) }}" method="post">
                                @method('delete')
                                @csrf
                                  <button class="btn btn-flat btn-danger" onclick="return confirm('Delete data?')">Hapus</button>
                              </form>
                            </div>
                          </td>
                  </tr>
                  @endforeach
                </tbody>
            </table>
</div>
@endsection