@extends('layouts.app')
@section('title')
    Create New Car
@endsection
@section('content')
<div class="d-flex justify-content-between align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2>Create a new Car</h2>
</div>
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $errors)
                <li>{{$errors}}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{route('cars.store')}}" method="post">
                @csrf
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="">Make: </label>
                            <input type="text" name="make" class="form-control" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="">Model: </label>
                            <input type="text" name="model" class="form-control" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="">Produced on: </label>
                            <input type="date" name="produced_on" class="form-control" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success w-50 float-right">Create</button>
                        </div>
                    </div>
                </form>
@endsection