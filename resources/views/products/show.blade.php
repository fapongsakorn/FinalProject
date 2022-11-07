@extends('layouts.app')

@section('content')

<div class="container">
    <div class = "row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1> MOVIE STORE
                            <a href="{{ url('products') }}" class="btn btn-danger float-end">BACK</a>
                       </h1>
                    </div>
                    <br></br>
                    <center>
                        <from>
                        <img style="border-radius: 10px;" src="{{ asset('upload/products/' . $products->image) }}" width="280px" height="360px" alt="image">
                        <div class="card-body">
                            <h5><b class="card-title">{{$products->name}}</b></h5>
                            <b><p class="card-text">: {{$products->tags}}</p></b>
                            <p class="card-text">Description: {{$products->description}}</p>
                         </div>
                         <a href="{{ url('edit-movie/'.$products->id) }}" class="btn btn-warning btn-sm">Edit</a>
                         <a href="{{ url('delete-movie/'.$products->id) }}" class="btn btn-danger btn-sm">Delete</a>
                        </from>
                    <br></br>
                </div>
            </div>
    </div>
</div>

@endsection 