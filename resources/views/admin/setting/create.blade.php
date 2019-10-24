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
                <form action="{{route('setting.store')}}" method="post">
                    @csrf
                    <section class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </section>
                    <section class="form-group">
                        <label for="desc">Description:</label>
                        <textarea class="form-control" id="desc" name="desc" style="resize: none; height: 150px"></textarea>
                    </section>
                    <section class="form-group">
                        <label for="key">Keywords:</label>
                        <textarea class="form-control" id="key" name="key" style="resize: none; height: 75px"></textarea>
                    </section>
                    <section class="form-group">
                        <label for="author">Author:</label>
                        <input type="text" class="form-control" id="author" name="author">
                    </section>
                    <section class="form-group">
                        <input type="submit" class="form-control btn btn-success btn-block" value="submit">
                    </section>
                </form>
                <form action="{{route('setting.index')}}" method="get">
                    @csrf
                    <section class="form-group">
                        <input type="submit" class="form-control btn btn-info btn-block" value="show all">
                    </section>
                </form>
            </section>
        </section>
    </section>
@endsection
