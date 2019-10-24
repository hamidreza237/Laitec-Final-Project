@extends('layouts.app')
@section('content')
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
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Comment</th>
                        <th>details</th>
                        <th>delete</th>
                    </tr>
                    </thead>
                    @foreach($index as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->FullName}}</td>
                            <td>{{$item->Email}}</td>
                            <td>{{str_limit($item->Comment,10)}}</td>
                            <td>
                                <form action="{{route('contact.show',$item->id)}}" method="get">
                                    @csrf
                                    <input type="submit" class="btn btn-success" value="details">
                                </form>
                            </td>
                            <td>
                                <form action="{{route('contact.destroy',$item->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" class="btn btn-danger" value="delete">
                                </form>
                            </td>
                        </tr>
                    @endforeach

                    <tr>
                        <td colspan="6">{{$index->links()}}</td>
                    </tr>

                </table>
            </section>
        </section>
    </section>
@endsection
