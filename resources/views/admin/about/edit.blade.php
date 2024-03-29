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
                <form action="{{route('about.update',$edit->id)}}" method="post">
                    @csrf
                    @method('put')
                    <section class="form-group">
                        <label for="cont">Content:</label>
                        <textarea id="cont" name="cont" style="resize: none; height: 150px" class="form-control">{{$edit->Content}}</textarea>
                    </section>
                    <section class="form-group">
                        <label for="font">Font Size:</label>
                        <input type="number" class="form-control" id="font" name="font" min="10" max="32" value="{{$edit->FontSize}}">
                    </section>
                    <section class="form-group">
                        <label for="color">Color:</label>
                        <input type="color" class="form-control" id="color" name="color" value="{{$edit->Color}}" >
                    </section>
                    <section class="form-group">
                        <input type="submit" class="form-control btn btn-success btn-block" value="submit">
                    </section>
                </form>
            </section>
        </section>
    </section>
@endsection
