@extends('layouts.app')

@section('content')

<div class="container">
    <div class = "row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1> MOVIE STORE
                            <a href="{{ url('create-movie') }}" class="btn btn-primary float-end">ADD NEW Movie</a>
                       </h1>
                    </div>
                    <div class="card-body">
                    <center>
                    <div class="row">
                    @foreach ($products as $item)
                    <div class="col-sm">
                        <div class="card" style="width: 17.65rem; border-radius: 10px">
                            <img style="border-radius: 10px;" src="{{ asset('upload/products/' . $item->image) }}" width="280px" height="360px" alt="image">
                            <div class="card-body">
                                <h5><b class="card-title">{{$item->name}}</b></h5>
                                <p><b  class="card-text">: {{$item->tags}} </b></p>
                            <form action="{{ url('view-movie/'.$item->id) }}" method="post">
                                @csrf
                                <input hidden type="text" name="object" value="{{ $item }}">
                                <button class="btn btn-primary" type="submit">View</button>
                            </form>
                            </div>
                        </div>
                    </div>  
                    @endforeach
                    </div>
                    </div>
                </div>
            </div>
    </div>
</div>

@endsection 