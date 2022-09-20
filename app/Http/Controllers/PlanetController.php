<?php

namespace App\Http\Controllers;

use App\Models\Planet;
use App\Http\Requests\PlanetRequest;


class PlanetController extends Controller
{
    public function show($id)
    {
        $planet = Planet::find($id);
        return view('planets.show', ['planet'=> $planet]);
    }

    public function edit($id)
    {
        $planet = Planet::find($id);
        return view('planets.edit', ['planet' => $planet]);
    }
    public function update(PlanetRequest $request, $id)
    {
        $planet = Planet::find($id);

        $planet->jname = $request->jname;
        $planet->ename = $request->ename;
        $planet->radius = $request->radius;
        $planet->weight = $request->weight;

        $planet->save();

        return redirect('/planets');
    }

    public function index()
    {
        $planets = Planet::all();
        return view('planets.index', ['planets'=>$planets]);
    }
    public function create()
    {
        return view('planets.create');
    }

    public function store(PlanetRequest $request)
    {
        $planet = new Planet;

        $planet->jname = $request->jname;
        $planet->ename = $request->ename;
        $planet->radius = $request->radius;
        $planet->weight = $request->weight;

        $planet->save();

        return redirect('/planets');
    }
    public function destroy($id)
    {
        $planet = Planet::find($id);
        $planet->delete();

        return redirect('/planets');
    }
}
