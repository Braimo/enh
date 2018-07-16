
@extends('layout.centralize')


@section('content')


  <div class="card border-secondary " style="max-width: 90%; margin: auto;">
            <div class="card-header"><h2> Registo de Pelouro</h2></div>
            <div class="card-body text-secondary">
                
             

              <form action="/pelouros" method="POST"> 

                         {{csrf_field()}}

                          <div class="form-group">
                            <label for="pelouro_name">Nome do Pelouro</label>
                            <input type="text" class="form-control" name="pelouro_name"  placeholder="Nome do Pelouro...">
                            
                          </div>

                          <div class="form-group">
                            <label for="pelouro_code">Código do Pelouro</label>
                            <input type="text" class="form-control" name="pelouro_code"  placeholder="Código do Pelouro...">
                            
                          </div>

                           <div class="form-group">
                            <label for="pelouro_contact">Contacto do Pelouro</label>
                            <input type="text" class="form-control" name="pelouro_contact"  placeholder="Contacto do Pelouro...">
                            
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
















































