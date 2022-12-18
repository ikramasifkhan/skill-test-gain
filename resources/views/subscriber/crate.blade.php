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
                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="" value="">
                    @if($errors->has('first_name'))
                        <div class="text-danger">{{ $errors->first('first_name') }}</div>
                    @endif
                </div>

                <div class="col-sm-6">
                    <label for="last_name" class="form-label">Last name</label>
                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="" value="">
                    @if($errors->has('last_name'))
                        <div class="text-danger">{{ $errors->first('last_name') }}</div>
                    @endif
                </div>

                <div class="col-sm-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com">
                    <div class="invalid-feedback">
                        Please enter a valid email address for shipping updates.
                    </div>
                </div>

                <div class="col-sm-6">
                    <label for="address" class="form-label">Birth date</label>
                    <input type="text" class="form-control" id="address" placeholder="1234 Main St">
                    <div class="invalid-feedback">
                        Please enter your shipping address.
                    </div>
                </div>

                <div class="col-md-2">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
        </form>
    </div>
@endsection



