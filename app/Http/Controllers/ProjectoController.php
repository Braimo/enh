<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Projecto;

class ProjectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $projectoList = array();
                $search = \Request::get('search');
                if(isset($search)){
      $projectoList= Projecto::where('proj_name','=',$search)->orderBy('id')->paginate(6);
  }
     
  else{

         $projectoList = Projecto::all()->sortByDesc('proj_name');
        

  }
  return view('projecto.projectos')->withProjectoList($projectoList);

       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('projecto.create');
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

        $this->validate($request, array(
                                    'proj_name' => 'required',
                                    'proj_inicio' => 'required|before:proj_fim',
                                    'proj_fim' => 'required|after:proj_inicio',
                                        ));

        $projecto = new Projecto;

        $projecto->proj_name = $request->proj_name;
        $projecto->proj_code = $request->proj_code;
        $projecto->proj_area = $request->proj_area;
        $projecto->proj_inicio = $request->proj_inicio;
        $projecto->proj_fim = $request->proj_fim;
        $projecto->desc = $request->desc;

        $projecto->save();

        return redirect()->route('projectos.show', $projecto->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id

     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $projecto = Projecto::find($id);
         return view('projecto.show')->withProjecto($projecto);
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
