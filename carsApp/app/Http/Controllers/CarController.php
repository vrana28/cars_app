<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){

        $cars = Car::Paginate(request(key:'perPage',default:5));
        //$user_id = auth()->user()->id;
        //$user = User::find($user_id);
        //$cars = Car::all();
        return view('index',['cars'=>$cars]);
    }


    public function create(){
        return view('create');
    }

    //

    public function store(Request $request){
        $make = $request['make'];
        $model = $request['model'];
        $produced_on = $request['produced_on'];

        $car = new Car();

        $car->make = $make;
        $car->model = $model;
        $car->produced_on = $produced_on;
        $car->user_id = auth()->user()->id;

        $car->save();
        $request->session()->flash('status','Car was successfully added!');
        return redirect()->route(route:"cars.index");
    }

    public function edit($car_id){

        $car = Car::findOrFail($car_id);

        return view('edit',[
            "car" => $car
        ]);
    }

    public function update($car_id){
        $car = Car::findOrFail($car_id);
        $car->make = request()->input(key:"make");
        $car->model = request()->input(key:"model");
        $car->produced_on = request()->input(key:"produced_on");
        $car->update();

        return redirect()->route(route:"cars.index");
    }

    public function destroy($car_id){
        Car::destroy($car_id);
        return redirect()->route(route:"cars.index");
    }

}
