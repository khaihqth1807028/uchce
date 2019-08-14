<?php

namespace App\Http\Controllers;


use App\chungcumii;
use App\chungcumini;
use App\chungcuModel;
use Illuminate\Http\Request;

class chungcu extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = chungcumini::paginate(2);
        $data = ['list' => $list];
        return view('list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ucche');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $chungcu = new chungcumini();

        $chungcu->name = $request->get('name');
        $chungcu->price = $request->get('price');
        $chungcu->address = $request->get('address');
        $chungcu->description = $request->get('decription');
        $chungcu->avartar = $request->get('avartar');
        $chungcu->save();
        return redirect('/chungcu');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $chungcu = new chungcumini();
        $chungcu->name = $request->get('name');
        $chungcu->price = $request->get('price');
        $chungcu->address = $request->get('address');
        $chungcu->description = $request->get('decription');
        $chungcu->avartar = $request->get('avartar');
        $chungcu->save();
        return redirect('/chungcu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
