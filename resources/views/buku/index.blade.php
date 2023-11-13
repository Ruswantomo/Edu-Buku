@extends('base')

@section('container')
    <h1 class="text-center">Daftar Buku</h1>
    <a href="/dashboard/buku/create" class="btn btn-primary mb-3">Tambah Buku</a>

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-striped table-bordered text-center">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bukus as $buku)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>
                            <img width="100" src="{{ asset('storage/' . $buku->gambar) }}" class="img-fluid" alt="...">
                        </td>
                        <td>{{ $buku->nama }}</td>
                        <td>{{ $buku->jumlah }}</td>
                        <td>
                            <a href="/dashboard/buku/{{ $buku->id }}/edit" class="btn btn-warning">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
