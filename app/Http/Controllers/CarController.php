<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\TipoAcessibilidade;
use App\Http\Requests\CarRequestStore;
use App\Http\Requests\CarRequestUpdate;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all();

        return view('index', [
            'cars' => $cars
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $tiposAcessibilidades = TipoAcessibilidade::all();

        return view('create', [
            'tiposAcessibilidades' => $tiposAcessibilidades
        ]);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CarRequestStore $request)
    {
        $data = $request->validated();

        if(Car::create($data)){
            return redirect()->route('car.index')->with('msg', 'Car created successfully');
        }

        return redirect()->back()->with('msg', 'Car creation failed');
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        $tiposAcessibilidades = TipoAcessibilidade::all();

        return view('edit', [
            'car' => $car, 
            'tiposAcessibilidades' => $tiposAcessibilidades]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CarRequestUpdate $request, Car $car)
    {
        $data = $request->validated();

        if($car){
            if($data){
                if($car->update($data)){
                    return redirect()->route('car.index')->with('msg', 'Car updated successfully');
                }
            }
            return redirect()->route('car.index')->with('msg', 'Car update failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        if($car){
            if($car->delete()){
                return response()->json([
                    'success' => true,
                    'message' => 'Car deleted successfully',
                    'route_link' => route('car.index')
                ]);
            }

            return response()->json([
                'success' => false,
                'message' => 'Car deletion failed',
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'not-found',
        ], 404);
    }
}
