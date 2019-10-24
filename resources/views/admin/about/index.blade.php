@extends('layouts.app')
@section('content')
    @if (session('edit'))
        <section class="alert-danger col-4 offset-4">
            <h5 class="text-center">{{session('edit')}}</h5>
        </section>
    @endif
    @if (session('delete'))
        <section class="alert-danger col-4 offset-4">
            <h5 class="text-center">{{session('delete')}}</h5>
        </section>
    @endif
    <section class="container-fluid">
        <section class="row">
            <section class="col-6 offset-3">
                <table class="table table-hover table-hover table-bordered table-light">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Image</th>
                        <th>Caption</th>
                        <th>alt</th>
                        <th>details</th>
                        <th>edit</th>
                        <th>delete</th>
                    </tr>
                    </thead>
                    @foreach($index as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td><img src="{{asset('Images/slider/'.$item->Image)}}" style="width: 50px"></td>
                            <td>{{str_limit($item->Caption,10)}}</td>
                            <td>{{$item->alt}}</td>
                            <td>
                                <form action="{{route('slider.show',$item->id)}}" method="get">
                                    @csrf
                                    <input type="submit" class="btn btn-success" value="details">
                                </form>
                            </td>
                            <td>
                                <form action="{{route('slider.edit',$item->id)}}" method="get">
                                    @csrf
                                    <input type="submit" class="btn btn-warning" value="edit">
                                </form>
                            </td>
                            <td>
                                <form action="{{route('slider.destroy',$item->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" class="btn btn-danger" value="delete">
                                </form>
                            </td>
                        </tr>
                    @endforeach

                    <tr>
                        <td colspan="7">{{$index->links()}}</td>
                    </tr>

                </table>
            </section>
        </section>
    </section>
@endsection
