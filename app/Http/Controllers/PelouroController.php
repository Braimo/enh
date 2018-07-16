<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelouro;
class PelouroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //




         $pelouros = array();
                $search = \Request::get('search');
                if(isset($search)){
      $pelouros= Pelouro::where('pelouro_name','=',$search)->orderBy('id')->paginate(6);
  }
     
  else{

         $pelouros = Pelouro::all()->sortByDesc('pelouro_name');
        

  }


        return view('pelouro.pelouros')->withPelouros($pelouros);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $pelouros = Pelouro::all();
        return view('pelouro.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $pelouro = new Pelouro;

        $pelouro->pelouro_name = $request->pelouro_name;
        $pelouro->pelouro_code  = $request->pelouro_code;
        $pelouro->pelouro_contact = $request->pelouro_contact;
        $pelouro->save();
       
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
        //
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
