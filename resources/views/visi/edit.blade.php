@extends('layouts.app')

@section('title', 'Data visi')

@section('content')

<div class="container">
    <a href="/admin/visi" class="btn btn-info mb-3">Back</a>
    <div class="row">
        <div class="col-md-8">
            <form action={{ route('visi.update', $visi->id) }} method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="title" placeholder="Judul" value="{{ $visi->title }}">
                </div>
                @error('title')
                <small style="color:red">{{ $message }}</small>    
                @enderror

                <div class="form-group">
                    <label for="">Description</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Description">{{ $visi->description }}</textarea>
                </div>
                @error('description')
                <small style="color:red">{{ $message }}</small>    
                @enderror
                <img src="/image/{{ $visi->image }}" alt="" class="img-fluid">
                
                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" class="form-control" name="image">
                </div>
                @error('image')
                <small style="color:red">{{ $message }}</small>    
                @enderror
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection