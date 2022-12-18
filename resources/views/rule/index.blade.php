@extends('master')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
    </div>
    <h2>Rule List</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Logic Field Name</th>
                <th scope="col">Logic</th>
                <th scope="col">Description</th>
            </tr>
            </thead>
            <tbody>
            @foreach($rules as $rule)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$rule->logic_field->field_name}}</td>
                    <td>{{$rule->logic->logic_name}}</td>
                    <td>{{$rule->description}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection


