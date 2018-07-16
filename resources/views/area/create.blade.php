
@extends('layout.centralize')


@section('content')


  <div class="card border-secondary " style="max-width: 90%; margin: auto;">
            <div class="card-header"><h2> Registo de Área</h2></div>
            <div class="card-body text-secondary">
                
             

              <form action="/areas" method="POST"> 

                         {{csrf_field()}}

                          <div class="form-group">
                            <label for="area_name">Nome da Área</label>
                            <input type="text" class="form-control" name="area_name"  placeholder="Nome da área">
                            
                          </div>

                          <div class="form-group">
                            <label for="area_code">Código da Área</label>
                            <input type="text" class="form-control" name="area_code"  placeholder="Código da área...">
                            
                          </div>

                           <div class="form-group">
                            <label for="area_local">Localização</label>
                            <input type="text" class="form-control" name="area_local"  placeholder="Localização da área...">
                            
                            </div>


                            <center>

                            <div class="form-group">
                            
                            <input type="submit" class="btn btn-success btn-lg"   placeholder="Nome do documento" value="Concluir">
                            
                          </div> 
                          </center> 

        

                      
            </form>
                  
        
           
              

          </div>
    </div>
  
@endsection
















































