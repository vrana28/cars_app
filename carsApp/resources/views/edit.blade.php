
@extends('layouts.app')
@section('title')
    Create New Car
@endsection
@section('content')
<div class="container  mt-5"> 
<div class="row">
            <div class="col-md-12">
                <form action="{{route('cars.update',['car'=>$car])}}" method="post">
                @csrf
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="">Make: </label>
                            <input type="text" name="make" class="form-control" value="{{$car->make}}" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="">Model: </label>
                            <input type="text" name="model" class="form-control" value="{{$car->model}}" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="">Produced on: </label>
                            <input type="date" name="produced_on" class="form-control" value="{{$car->produced_on}}" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12 mt-3">
                            <button type="submit" class="btn btn-block btn-success ">Update</button>
                        </div>
                    </div>
                </form>
            </div>
    </div>
</div>
@endsection

