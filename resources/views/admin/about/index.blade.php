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
                        <th>Content</th>
                        <th>Font Size</th>
                        <th>Color</th>
                        <th>details</th>
                        <th>edit</th>
                        <th>delete</th>
                    </tr>
                    </thead>
                    @foreach($index as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{str_limit($item->Content,10)}}</td>
                            <td>{{$item->FontSize}}</td>
                            <td><section style="width: 25px;height: 25px;background-color: {{$item->Color}}"></section></td>
                            <td>
                                <form action="{{route('about.show',$item->id)}}" method="get">
                                    @csrf
                                    <input type="submit" class="btn btn-success" value="details">
                                </form>
                            </td>
                            <td>
                                <form action="{{route('about.edit',$item->id)}}" method="get">
                                    @csrf
                                    <input type="submit" class="btn btn-warning" value="edit">
                                </form>
                            </td>
                            <td>
                                <form action="{{route('about.destroy',$item->id)}}" method="post">
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
