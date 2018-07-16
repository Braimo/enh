
@extends('layout.centralize')


@section('content')


  <div class="card border-secondary " style="max-width: 80%; margin: auto">
            <div class="card-header"><h2> Registo de Projecto</h2></div>
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


              <form method="POST" action="/blogs">
                            {{ csrf_field() }}
                          
                          <div class="form-group">
                            <label for="name">Nome do  blog</label>
                            <input type="text" class="form-control" name="name"  placeholder="Nome do documento">
                            
                          </div>
                          
                             <div class="form-group">
                            <label for="name">Nome do  blog</label>
                            <input type="text" class="form-control" name="title"  placeholder="Nome do documento">
                            
                          </div>



                          

                          <div class="form-group">
                              <label for="proj_desc">Comment:</label>
                              <textarea class="form-control" name="description" rows="5" id="description"></textarea>
                          </div>





                          <div class="form-group">
                            
                            <input type="submit" class="btn btn-success btn-md"   placeholder="Nome do documento" value="Salvar">
                            
                          </div> 


                      </form>

                              
              </div>

          
    </div>
  
@endsection
















































