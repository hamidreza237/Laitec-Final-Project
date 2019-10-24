@extends('layouts.app')
@section('content')
    <section class="container-fluid">
        <section class="row">
            <section class="col-6 offset-3">
                <section class="card">
                    <section class="card-body">{{$show->Content}}</section>
                </section>
                <section>
                    <a href="{{route('about.index')}}"><-----</a>
                </section>
            </section>
        </section>
    </section>
@endsection
