@extends('adminapp.master')

@section('content')
<div class="bagian-tambah" style="padding-left: 40px;">
  <form action="{{ route('products.create') }}" method="post">
    @csrf
    <button class="btn btn-flat btn-primary">Tambah</button>
  </form>
</div>
    <div class="bagian-table" style="padding: 40px;">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Harga</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $product->nama }}</td>
                        <td>{{ $product->harga }}</td>
                        <td>{{ $product->jumlah }}</td>
                        <td>
                          <div class="action d-flex">
                            <form action="{{ route('products.edit', $product->id) }}" method="post" class="mr-2">
                              @method('put')
                              @csrf
                                <button class="btn btn-flat btn-warning">Edit</button>
                            </form>
  
                            <form action="{{ route('products.delete', $product->id) }}" method="post">
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