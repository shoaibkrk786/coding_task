@extends('layout.layout')
@section('contant')
    <div class="container">

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Number of Question</th>
                <th>Duration</th>
                <th>Resumeable</th>
                <th>Published</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($ques as $q)
            <tr>
                <td>{{$q->id}}</td>
                <td>{{$q->name}}</td>
                <td>{{$q->question->count()}}-<a href="{{url('questionairs/create/'.$q->id)}}">Add</a></td>
                <td>{{$q->duration}}</td>
                <td>{{$q->resume}}</td>
                <td>Doe</td>
                <td><a href="">Edit</a>-<a href="{{url('questionairs/delete/'.$q->id)}}">Delete</a></td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection