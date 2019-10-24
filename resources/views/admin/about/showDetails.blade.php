@extends('layouts.app')
@section('content')
    <section class="container-fluid">
        <section class="row">
            <section class="col-6 offset-3">
                <section class="card" style="width:400px">
                    <img class="card-img-top" src="{{asset('Images/slider/'.$show->Image)}}" alt="{{$show->alt}}">
                    <section class="card-body">
                        <h4 class="card-title">{{$show->alt}}</h4>
                        <p class="card-text">{{$show->Caption}}</p>
                    </section>
                </section>
                <section>
                    <a href="{{route('slider.index')}}"><-----</a>
                </section>
            </section>
        </section>
    </section>
@endsection
