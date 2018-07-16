
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


              <form method="POST" action="/projectos">
                            {{ csrf_field() }}
                          <div class="form-group">
                            <label for="proj_name">Nome do Projecto</label>
                            <input type="text" class="form-control" name="proj_name"  placeholder="Nome do documento">
                            
                          </div>
                          <div class="row">

                         @include('partials._criterio');
                            
                          </div>





                          <div class="row">

                            <div class="col-md-6">

                                <div class="form-group">
                                  <label for="proj_inicio">Início</label>
                                  <input type="date" name="proj_inicio">
                                  
                              </div>
                              
                            </div>


                             <div class="col-md-6">
                                    <div class="form-group">
                                  <label for="proj_fim">Fim</label>
                                  <input type="date" name="proj_fim">
                                  
                                    </div>
                          </div>
                            
                          </div>

                          <div class="form-group">
                              <label for="proj_desc">Comment:</label>
                              <textarea class="form-control" name="desc" rows="5" id="description"></textarea>
                          </div>





                          <div class="form-group">
                            
                            <input type="submit" class="btn btn-success btn-md"   placeholder="Nome do documento" value="Salvar">
                            
                          </div> 


                      </form>

                              
              </div>

          
    </div>
  
@endsection
















































