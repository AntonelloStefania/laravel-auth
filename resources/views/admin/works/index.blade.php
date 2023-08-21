@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        @foreach($sites as $site)
            <div class="col-12 col-md-6 col-lg-4 my-4 d-flex flex-wrap justify-content-center">
                
                <div class="card d-flex flex-column justify-content-between">
                    <div class="card-img-top">
                        <img class="img-fluid" src="{{$site->image}}" alt="">
                    </div>
                    <div class="card-title text-center my-3">
                        <h4><a href="#">{{$site->title}}</a></h4>
                        
                    </div>
                    <div class="card-text text-center">
                        <p>{{$site->description}}</p>
                    </div>
                    {{-- <div>
                        <ul>
                            <li>
                                <span class="fw-bold">frontend:</span> {{$site->front_ender}}
                            </li>
                            <li>
                                <span class="fw-bold"> backend:</span> {{$site->back_ender}}
                            </li>
                            <li>
                                <span class="fw-bold">user experience:</span> {{$site->ux}}
                            </li>
                            <li>
                                <span class="fw-bold"> user interface:</span> {{$site->ui}}
                            </li>
                            <li>
                                <span class="fw-bold">illustrator:</span> {{$site->illustrator}}
                            </li>
                        </ul>
                    </div> --}}
                    <div class="my-4 px-3">
                        <a href="#">{{$site->link}}</a>
                    </div>
                    <div>
                        <a class="btn btn-primary btn-sm" href="{{route('admin.works.show', $site->id)}}">Show More</a>
                    </div>
                </div>
            </div>
            @endforeach
    </div>
</div>

@endsection