@extends('layouts.app')
@section('content')
    <section class="container-fluid">
        <section class="row">
            <section class="col-6 offset-3">
                <section class="card" style="width:800px">
                    <img class="card-img-top" src="{{asset('Images/gallery/'.$show->Image)}}">
                </section>
                <section>
                    <a href="{{route('gallery.index')}}"><-----</a>
                </section>
            </section>
        </section>
    </section>
@endsection
