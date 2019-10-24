@extends('layouts.app')
@section('content')
    <section class="container-fluid">
        <section class="row">
            <section class="col-6 offset-3">
                <section class="card">
                    <section class="card-header">{{$show->FullName}}</section>
                    <section class="card-body">{{$show->Comment}}</section>
                    <section class="card-footer">{{$show->Email}}</section>
                </section>
            </section>
        </section>
    </section>
    <section class="col-4 offset-3 mt-2">
        <a href="{{route('contact.index')}}"><-----</a>
    </section>
@endsection
