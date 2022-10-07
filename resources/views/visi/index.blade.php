@extends('layouts.app')

@section('title', 'Data visi')

@section('content')

<div class="container">
    <a href="/admin/visi/create" class="btn btn-info mb-3"> Tambah Data</a>

    @if ($message = Session::get('message'))
        <div class="alert alert-success">
        <strong>Succes</strong>
        <p>{{ $message }}</p>
        </div>        
    @endif

    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped" cellpadding="10">
            <tr>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Description</th>
                        <th>Gambar</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 0
                    @endphp
                    @foreach ($visi as $visi)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $visi->title }}</td>
                        <td>{{ $visi->description }}</td>
                        <td>
                            <img src="/image/{{ $visi->image }}" alt="" class="" width="100">
                        </td>
                        <td>
                            <a href="{{route('visi.edit', $visi->id)}}" class="btn btn-warning">Edit</a>
                            
                            <form action="{{ route('visi.destroy', $visi->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </tr>
        </table>
    </div>
</div>

@endsection