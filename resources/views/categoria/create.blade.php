
@extends('layout.centralize')


@section('content')


  <div class="card border-secondary " style="max-width: 90%; margin: auto;">
            <div class="card-header"><h2> Adicionar Categoria</h2></div>
            <div class="card-body text-secondary">
                
             

              <form action="/categorias" method="POST"> 

                         {{csrf_field()}}

                          <div class="form-group">
                            <label for="cat_name">Nome da Categoria</label>
                            <input type="text" class="form-control" name="cat_name"  placeholder="Nome da Categoria...">
                            
                          </div>

                          <div class="form-group">
                            <label for="cat_code">Código da Categoria</label>
                            <input type="text" class="form-control" name="cat_code"  placeholder="Código da Categoria...">
                            
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
















































