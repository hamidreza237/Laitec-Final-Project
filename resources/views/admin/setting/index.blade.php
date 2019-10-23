@extends('layouts.app')
@section('content')

    <section class="container-fluid">
        <section class="row">
            <section class="col-6 offset-3">
                <table class="table table-hover table-hover table-bordered table-light">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Author</th>
                        <th>Keywords</th>
                        <th>details</th>
                        <th>delete</th>
                    </tr>
                    </thead>
                    @foreach($index as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->Title}}</td>
                            <td>{{str_limit($item->Description,10)}}</td>
                            <td>{{$item->Author}}</td>
                            <td>{{str_limit($item->Keywords,10)}}</td>
                            <td>
                                <form action="" method="get">
                                    @csrf
                                    <input type="submit" class="btn btn-success" value="details">
                                </form>
                            </td>
                            <td>
                                <form action="{{route('setting.destroy',$item->id)}}" method="post">
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