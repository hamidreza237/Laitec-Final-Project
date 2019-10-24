@extends('layouts.app')
@section('content')
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
                <form action="{{route('slider.update',$edit->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <section class="form-group">
                        <label for="image">Image:</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </section>
                    <section class="form-group">
                        <label for="caption">Caption:</label>
                        <textarea class="form-control" id="caption" name="caption" style="resize: none; height: 75px">{{$edit->Caption}}</textarea>
                    </section>
                    <section class="form-group">
                        <label for="alter">alter:</label>
                        <textarea class="form-control" id="alter" name="alter" style="resize: none; height: 50px">{{$edit->alt}}</textarea>
                    </section>
                    <section class="form-group">
                        <input type="submit" class="form-control btn btn-success btn-block" value="submit">
                    </section>
                </form>
            </section>
        </section>
    </section>
@endsection
