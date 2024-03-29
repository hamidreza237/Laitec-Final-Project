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
                <form action="{{route('about.store')}}" method="post">
                    @csrf
                    <section class="form-group">
                        <label for="cont">Content:</label>
                        <textarea id="cont" name="cont" style="resize: none; height: 150px" class="form-control"></textarea>
                    </section>
                    <section class="form-group">
                        <label for="font">Font Size:</label>
                        <input type="number" class="form-control" id="font" name="font" min="10" max="32" value="10">
                    </section>
                    <section class="form-group">
                        <label for="color">Color:</label>
                        <input type="color" class="form-control" id="color" name="color" value="#000" >
                    </section>
                    <section class="form-group">
                        <input type="submit" class="form-control btn btn-success btn-block" value="submit">
                    </section>
                </form>
                <form action="{{route('about.index')}}" method="get">
                    @csrf
                    <section class="form-group">
                        <input type="submit" class="form-control btn btn-info btn-block" value="show all">
                    </section>
                </form>
            </section>
        </section>
    </section>
@endsection
