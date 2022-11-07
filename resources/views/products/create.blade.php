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
                        <h1> ADD Movie
                            <a href="{{ url('products') }}" class="btn btn-danger float-end">BACK</a>
                        </h1>
                    </div>
                    <div class="card-body">

                        <form action="{{ url('create-movie') }}" method="POST" enctype="multipart/form-data"> 
                    @csrf
                        <div class="form-group mb-3">
                            <lable for="">IMAGE</lable>
                            <input type="file" name="image" class="form-control">

                        </div>
                        <div class="form-group mb-3">
                            <lable for="">Name</lable>
                            <input type="text" name="name" class="form-control">

                        </div>
                        <div class="form-group mb-3">
                            <lable for="">TAGS (ประเภคของหลัง ตัวอย่าง: แอคชั่น/แฟนตาซี)</lable>
                             <input type="text" name="tags" class="form-control">

                        </div>
                        <div class="form-group mb-3">
                            <lable for="">Description</lable>
                            <textarea type="text" name="description" class="form-control"></textarea>
                            @error('description')
                                <div class="div.alert alert-denger"> * * *</div>
                            @enderror


                        </div>
                        <div class="form-group m-3">
                            <button type="submit" class="btn btn-primary">Save Movie</button>
                        </div>
                    </form>
                </div>
            </div>
    </div>
</div>

@endsection 