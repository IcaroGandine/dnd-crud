<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WeaponModel;

class ExampleController extends Controller
{
    private $objWeapon;


    public function __construct()
    {
        $this->objWeapon = new WeaponModel();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $weapon = $this->objWeapon->all();
        return view("index", compact('weapon'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cad = $this->objWeapon->create([
            'name' => $request->name,
            'damage' => $request->damage,
            'weight' => $request->weight,
            'type' => $request->type,
            'description' => $request->description,


        ]);

        if ($cad) {
            return redirect('weapons');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $weapon = $this->objWeapon->find($id);
        return view('show', compact('weapon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $weapon = $this->objWeapon->find($id);
        return view('create', compact('weapon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->objWeapon->where(['id' => $id])->update([
            'name' => $request->name,
            'damage' => $request->damage,
            'weight' => $request->weight,
            'type' => $request->type,
            'description' => $request->description,
        ]);


        return redirect('weapons');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = $this->objWeapon->find($id);
        $data->delete();

        return redirect('weapons');
    }
}
