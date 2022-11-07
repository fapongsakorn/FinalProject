@extends('layouts.app')

@section('content')

<div class="container">
    <div class = "row">
            <div class="col-md-12">
                @if (session('status'))
                    <h6 class="alert alert-success">{{session('status')}}</h6>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h1> Edit Movie
                            <a href="{{ url('products') }}" class="btn btn-danger float-end">BACK</a>
                        </h1>
                    </div>
                    <div class="card-body">

                        <form action="{{ url('update-movie/'.$products->id) }}" method="POST" enctype="multipart/form-data"> 
                    @csrf
                    @method('PUT')

                        <div class="form-group mb-3">
                        <img style="border-radius: 10px;" src="{{ asset('upload/products/' . $products->image) }}" width="280px" height="360px" alt="image">
                            <br></br><lable for="">IMAGE</lable>
                            <input type="file" name="image" class="form-control">

                        </div>
                        <div class="form-group mb-3">
                            <lable for="">Name</lable>
                            <input type="text" name="name" value="{{$products->name}}" class="form-control">

                        </div>
                        <div class="form-group mb-3">
                            <lable for="">TAGS (ประเภคของหลัง ตัวอย่าง: แอคชั่น/แฟนตาซี)</lable>
                             <input type="text" name="tags" value="{{$products->tags}}" class="form-control">

                        </div>
                        <div class="form-group mb-3">
                            <lable for="">Description</lable>
                            <input type="text" name="description" value="{{$products->description}}" class="form-control" >
                        </div>
                        <div class="form-group m-">
                            <button type="submit" class="btn btn-primary">Update Movie</button>
                        </div>
                    </form>
                </div>
            </div>
    </div>
</div>

@endsection 