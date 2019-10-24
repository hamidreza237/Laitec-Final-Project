@extends('layouts.app')
@section('content')
    <section class="container-fluid">
        <section class="row">
            <section class="col-6 offset-3">
                <section class="card">
                    <section class="card-header">{{$show->Title}}</section>
                    <section class="card-body">{{$show->Description}}</section>
                    <section class="card-footer">{{$show->Keywords}}</section>
                </section>
            </section>
        </section>
    </section>
    <section class="col-4 offset-3 mt-2">
        <a href="{{route('setting.index')}}"><-----</a>
    </section>
@endsection
