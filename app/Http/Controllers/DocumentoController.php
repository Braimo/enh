<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Documento;
class DocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('documento.download');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view('documento.create');
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

       

            $doc = new Documento;

            $doc->name = $request->name;
            $doc->file = $request->doc;
            $doc->save();

           /* if(Input::file('file')){
                if(file_exists(Input::file('file')->move(getcwd().'\docs'.$request->file)))
                {
                    unlink(Input::file('file')->move(getcwd().'\docs'.$request->file));
                    
                }
            }*/


            #$docName = $doc->id .'.'.$request->file('file')->getClientOriginalExtension();
           # $request->file('file')->move(base_path().'/public/docs/',$docName);

                $file = Input::file('file');
                $destination ='docs';
                $filename = $file->getClientOriginalName();
                $uploadSuccess = Input::file('file')->move($destination,$filename);

                if( $uploadSuccess ) {
                       return \Response::json('success', 200); // or do a redirect with some message that file was uploaded
                    } else {
                       return \Response::json('error', 400);
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

    public function download(){
         $url = response()->file('./docs/Depth_Convert_SeisWorks.pdf');
       return $url;
    }
}
