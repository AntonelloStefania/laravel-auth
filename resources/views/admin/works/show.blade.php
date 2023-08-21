@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 text-center my-5">
            <div class="my-5 text-white">
                <h1 >{{$site->title}}</h1>
            </div>
            <div>
                <img src="{{$site->image}}" alt="">
            </div>
            
        </div>
    </div>
</div>


@endsection