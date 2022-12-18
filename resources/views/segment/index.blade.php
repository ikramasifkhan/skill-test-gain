@extends('master')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Segment</h1>
    </div>
    <div class="d-flex justify-content-between">
        <h2>Segment List</h2>
        <div>
            <a href="{{route('segments.create')}}" class="btn btn-primary">Add Segment</a>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Segment Name</th>
                <th scope="col">Segments</th>
            </tr>
            </thead>
            <tbody>
                @foreach($segments as $segment)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$segment->segment_name}}</td>
                        <td>
                            @foreach($segment->rules as $rule)
                                {{$rule->logic_field->field_name}} {{$rule->logic->logic_name}} {{$rule->description}} {{$rule->pivot->group}}
                            @endforeach
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection



