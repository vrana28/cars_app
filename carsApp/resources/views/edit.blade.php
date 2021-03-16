<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Cars Application</title>
</head>
<body>
<div class="container mt-3"> 
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
</body>
</html>