@extends('master')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Subscriber</h1>
    </div>
    <div class="d-flex justify-content-between">
        <h2>Subscriber List</h2>
        <div>
            <a href="{{route('subscriber.create')}}" class="btn btn-primary">Add Subscriber</a>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">BirthDate</th>
                <th scope="col">Created At</th>
            </tr>
            </thead>
            <tbody>
            @foreach($subscribers as $subscriber)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$subscriber->first_name}}</td>
                    <td>{{$subscriber->last_name}}</td>
                    <td>{{$subscriber->email}}</td>
                    <td>{{$subscriber->birth_date}}</td>
                    <td>{{$subscriber->created_at}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection


