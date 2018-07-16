
@extends('layout.centralize')


@section('content')


  <div class="card border-secondary " style="max-width: 80%; margin: auto">
            <div class="card-header"><h2> Registo de Documento</h2></div>
            <div class="card-body text-secondary">
                
             

                  
              

                  @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif


              <form method="POST" action="/documentos" enctype="multipart/form-data">
                            {{ csrf_field() }}
                          <div class="form-group">
                            <label for="proj_name">Nome do Projecto</label>
                            <input type="text" class="form-control" name="name"  placeholder="Nome do documento">
                            
                          </div>

                          <div class="form-group">
                            <label for="doc">File</label>
                            <input type="text" class="form-control" name="doc">
                            
                          </div>

                          <div class="form-group">
                            <label for="file">File</label>
                            <input type="file" class="form-control" name="file">
                            
                          </div>
                      
                          <center>

                            <div class="form-group">
                            
                            <input type="submit" class="btn btn-success btn-lg"   value="Gravar Ficheiro">
                            
                          </div> 
                          </center> 

                      </form>

                              
              </div>

          
    </div>
  
@endsection
















































