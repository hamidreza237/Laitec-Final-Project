@extends('layouts.app')
@section('content')
    @if (session('save'))
        <section class="alert-success col-4 offset-4">
            <h5 class="text-center">{{session('save')}}</h5>
        </section>
    @endif
    @if ($errors->any())
        <section class="col-4 offset-4 border-10 rounded text-justify text-light font-weight-bold bg-danger">
            @foreach($errors->all() as $item)
                <h5>{{$item}}</h5>
            @endforeach
        </section>
    @endif
    <section class="container-fluid">
        <section class="row">
            <section class="col-6 offset-3">
                <form action="{{route('gallery.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <section class="form-group">
                        <label for="image">Image:</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </section>
                    <section class="form-group">
                        <input type="submit" class="form-control btn btn-success btn-block" value="submit">
                    </section>
                </form>
                <form action="{{route('gallery.index')}}" method="get">
                    @csrf
                    <section class="form-group">
                        <input type="submit" class="form-control btn btn-info btn-block" value="show all">
                    </section>
                </form>
            </section>
        </section>
    </section>
@endsection
