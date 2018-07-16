<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Categoria;
use App\Ficheiro;

class FicheiroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      

            /*
                $file = 'docs/';
                $documento = Input::get('file');
                $url =$file.''.$documento;
                foreach()


            return response()->file($url);*/


                    $err ='';
                    $files = array();
                    $search = \Request::get('search');
                            if(isset($search)){

                  $files= Ficheiro::where('file_name','=',$search)->orderBy('id')->paginate(6);
                   if(count($files)==0)

                    $err = "File Not Found";
              }
                 
              else{

                     $files= Ficheiro::all();
                    

              }
             
        

         

          #$files = File::files('docs'); 
          #$docs  = Ficheiro::all();
                
                #$files[] =$file->getPathname();
                #$files [] = $file->getRealPath();
                #$files = $file->getBasename();

           



            return view('ficheiro.ficheiros')->withFiles($files)->withErr($err);
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ficheiro.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $file= new Ficheiro;
        
                    $ficheiro = Input::file('documento');
                    $destination ='docs';
                    $filename = $ficheiro->getClientOriginalName();
                    $uploadSuccess = Input::file('documento')->move($destination,$filename);

        
                    $file->file_name = $filename;
                    $file->file_category = $request->file_category;
                    $file->file_deadline = $request->file_deadline;
                    $file->file_comments = $request->file_comments;
                    $file->save();


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
        $ficheiro = Ficheiro::find($id);
         return view('ficheiro.show')->withFicheiro($ficheiro);
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

     public function getCatName(){

        $categorias = Categoria::all();
       return view('ficheiro.create')->withCategorias($categorias);
    }


     public function download($id){

       $ficheiro =  Ficheiro::find($id);

       $path ='docs/';

        
                
                $url = $path.''.$ficheiro->file_name;
                

        

       return response()->file($url);
    }
}



