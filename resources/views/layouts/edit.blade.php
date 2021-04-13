@extends('layouts.app')
@section('content')
<div class="container">
    <!-- memperbarui data article sesuai id yang diperboleh dari parameter url browser -->
    <form action="/articles/{{$articles->id}}" method="post" enctype="multipart/form-data">
        @method('PUT');
        @csrf
        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" class="form-control" required="required" name="title" value="{{$articles->title}}"></br>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <input type="text" class="form-control" required="required" name="content" value="{{$articles->content}}"></br>
        </div>
        <div class="form-group">
            <label for="image">Feature Image</label>
            <input type="file" class="form-control" required="required" name="image" value="{{$articles->featured_image}}"></br>
            <img width="150px" src="{{asset('storage/'.$articles->featured_image)}}">
        </div>
        <button type="submit" class="btn btn-primary float-right">Ubah Data</button>
    </form>
</div>
@endsection