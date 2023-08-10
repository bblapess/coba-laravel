@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Posts Categories</h1>
    </div>

    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show col-lg-6" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="table-responsive col-lg-6">
        <a href="/dashboard/categories/create" class="btn btn-primary"><span data-feather="plus-circle"></span> Tambah Posts</a>
            <table class="table table-striped table-sm my-3">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a href="/dashboard/categories/{{ $category->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
                            <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                            <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf 
                                <button class="badge bg-danger border-0" onclick="return confirm('Apakah anda yakin untuk menghapus data?')"><span data-feather="trash-2"></span></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
              </tbody>
        </table>
    </div>
@endsection