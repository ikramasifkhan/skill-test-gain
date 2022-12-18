@extends('master')

@section('content')
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Subscriber</h1>
    </div>
    <div class="d-flex justify-content-between">
        <h2>Add Subscriber</h2>
        <div>
            <a href="{{route('subscriber.index')}}" class="btn btn-primary">Subscriber List</a>
        </div>
    </div>
    <div>
        <form action="{{route('subscriber.store')}}" method="post">
            <div class="row g-3">
                @csrf
                <div class="col-sm-6">
                    <label for="first_name" class="form-label">First name</label>
                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name">
                    @if($errors->has('first_name'))
                        <div class="text-danger">{{ $errors->first('first_name') }}</div>
                    @endif
                </div>

                <div class="col-sm-6">
                    <label for="last_name" class="form-label">Last name</label>
                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name">
                    @if($errors->has('last_name'))
                        <div class="text-danger">{{ $errors->first('last_name') }}</div>
                    @endif
                </div>

                <div class="col-sm-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com">
                    @if($errors->has('email'))
                        <div class="text-danger">{{ $errors->first('email') }}</div>
                    @endif
                </div>

                <div class="col-sm-6">
                    <label for="birth_date" class="form-label">Birth date</label>
                    <input type="date" name="birth_date" class="form-control" id="birth_date" placeholder="1234 Main St">
                    @if($errors->has('birth_date'))
                        <div class="text-danger">{{ $errors->first('birth_date') }}</div>
                    @endif
                </div>

                <div class="col-md-2">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
        </form>
    </div>
@endsection



