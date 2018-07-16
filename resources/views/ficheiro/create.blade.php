
@extends('layout.centralize')


@section('content')


  <div class="card border-secondary " style="max-width: 90%; margin: auto;">
            <div class="card-header"><h2> Registo de Documento</h2></div>
            <div class="card-body text-secondary">
                
             <div class="row">

                  
              <div class="col-md-12">

              <form method="post" action="/ficheiros" enctype="multipart/form-data">
                          {{ csrf_field()}}
                         <div class="form-group">
                          
                          <input type="file" id="avatar" name="documento">
                          </div>

                          <div class="form-group">
                            <label for="file_name">Nome do Ficheiro</label>
                            <input type="text" class="form-control" name="file_name"  placeholder="Nome do documento">
                            
                          </div>

                          <div class="row">

                            <div class="col-md-6">

                                <div class="form-group">

                                  <?php
                                  use App\Categoria;
                                  $categorias =  Categoria::all();


                                  ?>
                                  <label for="file_category">Categoria </label>
                                  <select class="custom-select" id="inputGroupSelect01" name="file_category">
                                  <option selected>Escolha uma categoria</option>
                                   @foreach($categorias as $categoria)
                                  <option value="{{ $categoria->id }}">{{ $categoria->cat_name}}</option>
                                  

                                   @endforeach
                           </select>
                          </div>
                              
                            </div>


                             <div class="col-md-6">
                                    <div class="form-group">
                                  <label for="file_name">Nome do(a) {{}}</label>
                                  <select class="custom-select" id="inputGroupSelect01">
                                  <option selected>Escolha uma opcao</option>
                                  <option value="1">Área 1</option>
                                  <option value="1">Área 2</option>
                                  <option value="2">Área 3</option>
                                  <option value="3">Área 4</option>
                                  <option value="4">Área 5</option>
                                  <option value="5">Área 6</option>
                           </select>
                          </div>
                            </div>
                            
                          </div>

                          <div class="form-group">
                            <label for="file_name">Categoria do Ficheiro</label>
                            <select class="custom-select" id="inputGroupSelect01">
                                  <option selected>Escolha uma categoria</option>
                                  <option value="1">Projecto</option>
                                  <option value="1">Subcomissão</option>
                                  <option value="2">Departamento</option>
                                  <option value="3">Área</option>
                                  <option value="4">Pelouro</option>
                                  <option value="5">Projecto</option>
                           </select>
                          </div>


                          <div class="form-group">
                            <label for="file_deadline">Prazo</label>
                            <input type="date" name="file_deadline">
                            
                          </div>

                          <div>
                              <p>Atribuir Permissões:</p>
                          </div>
                          <div class="row">
                            

                            <div class="col-md-8">
                            <div class="row">

                          <nav>
                          <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Usuários</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Departamentos</a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Específicos</a>
                          </div>
                          </nav>


                            <div class="tab-content" id="nav-tabContent">

                              <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" >


                                    <div class="container" style="margin:auto; padding-left: 0px">


                                      <table class="table table-hover">
                                        <thead style="background-color:#e6f9ff">
                                          <tr>
                                            
                                            <th scope="col">Usuário</th>
                                            <th scope="col">Forbidden</th>
                                            <th scope="col">Read</th>
                                            <th scope="col">Write</th>
                                            <th scope="col">Update</th>
                                            <th scope="col">Admin</th>
                                          </tr>

                                        </thead>

                                        <tbody>
                                          <tr>
                                            
                                            <td>Utilizador</td>
                                            <td>

                                              <div class="input-group">
                                                    <input type="radio" aria-label="Radio button for following text input">     
                                              </div>

                                            </td>

                                            <td>
                                                <div class="input-group">
                                                    <input type="radio" aria-label="Radio button for following text input">     
                                                 </div>
                                            </td>

                                            <td>
                                                <div class="input-group">
                                                    <input type="radio" aria-label="Radio button for following text input">     
                                                </div>
                                            </td>

                                            <td>
                                                <div class="input-group">
                                                    <input type="radio" aria-label="Radio button for following text input">     
                                                </div>
                                            </td>


                                            <td>
                                                <div class="input-group">
                                                    <input type="radio" aria-label="Radio button for following text input">     
                                                </div>
                                            </td>
                                            
                                          </tr>

                                          <tr>
                                            <td>Admin</td>
                                            <td>

                                              <div class="input-group">
                                                    <input type="radio" aria-label="Radio button for following text input">     
                                              </div>

                                            </td>

                                            <td>
                                                <div class="input-group">
                                                    <input type="radio" aria-label="Radio button for following text input">     
                                                 </div>
                                            </td>

                                            <td>
                                                <div class="input-group">
                                                    <input type="radio" aria-label="Radio button for following text input">     
                                                </div>
                                            </td>

                                            <td>
                                                <div class="input-group">
                                                    <input type="radio" aria-label="Radio button for following text input">     
                                                </div>
                                            </td>


                                            <td>
                                                <div class="input-group">
                                                    <input type="radio" aria-label="Radio button for following text input">     
                                                </div>
                                            </td>
                                          </tr>

                                          <tr>
                                            <td>Super-Admin</td>
                                           <td>

                                              <div class="input-group">
                                                    <input type="radio" aria-label="Radio button for following text input">     
                                              </div>

                                            </td>

                                            <td>
                                                <div class="input-group">
                                                    <input type="radio" aria-label="Radio button for following text input">     
                                                 </div>
                                            </td>

                                            <td>
                                                <div class="input-group">
                                                    <input type="radio" aria-label="Radio button for following text input">     
                                                </div>
                                            </td>

                                            <td>
                                                <div class="input-group">
                                                    <input type="radio" aria-label="Radio button for following text input">     
                                                </div>
                                            </td>


                                            <td>
                                                <div class="input-group">
                                                    <input type="radio" aria-label="Radio button for following text input">     
                                                </div>
                                            </td>
                                          </tr>

                                        

                                        </tbody>

                                      </table>
                                   
                                   </div>
            


                              </div>

                              <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                    <div class="container" style="margin:auto; padding-left: 0px">


                                      <table class="table table-hover">
                                        <thead style="background-color:#e6f9ff">
                                          <tr>
                                            
                                            <th scope="col">Pelouro</th>
                                            <th scope="col">Forbidden</th>
                                            <th scope="col">Read</th>
                                            <th scope="col">Write</th>
                                            <th scope="col">Update</th>
                                            <th scope="col">Admin</th>
                                          </tr>

                                        </thead>

                                        <tbody>
                                          <tr>
                                            
                                            <td>Pesquisa & Produção</td>
                                            <td>

                                              <div class="input-group">
                                                    <input type="radio" aria-label="Radio button for following text input">     
                                              </div>

                                            </td>

                                            <td>
                                                <div class="input-group">
                                                    <input type="radio" aria-label="Radio button for following text input">     
                                                 </div>
                                            </td>

                                            <td>
                                                <div class="input-group">
                                                    <input type="radio" aria-label="Radio button for following text input">     
                                                </div>
                                            </td>

                                            <td>
                                                <div class="input-group">
                                                    <input type="radio" aria-label="Radio button for following text input">     
                                                </div>
                                            </td>


                                            <td>
                                                <div class="input-group">
                                                    <input type="radio" aria-label="Radio button for following text input">     
                                                </div>
                                            </td>
                                            
                                          </tr>

                                          <tr>
                                            <td>Engenharia</td>
                                            <td>

                                              <div class="input-group">
                                                    <input type="radio" aria-label="Radio button for following text input">     
                                              </div>

                                            </td>

                                            <td>
                                                <div class="input-group">
                                                    <input type="radio" aria-label="Radio button for following text input">     
                                                 </div>
                                            </td>

                                            <td>
                                                <div class="input-group">
                                                    <input type="radio" aria-label="Radio button for following text input">     
                                                </div>
                                            </td>

                                            <td>
                                                <div class="input-group">
                                                    <input type="radio" aria-label="Radio button for following text input">     
                                                </div>
                                            </td>


                                            <td>
                                                <div class="input-group">
                                                    <input type="radio" aria-label="Radio button for following text input">     
                                                </div>
                                            </td>
                                          </tr>

                                          <tr>
                                            <td>Administração e Finanças</td>
                                           <td>

                                              <div class="input-group">
                                                    <input type="radio" aria-label="Radio button for following text input">     
                                              </div>

                                            </td>

                                            <td>
                                                <div class="input-group">
                                                    <input type="radio" aria-label="Radio button for following text input">     
                                                 </div>
                                            </td>

                                            <td>
                                                <div class="input-group">
                                                    <input type="radio" aria-label="Radio button for following text input">     
                                                </div>
                                            </td>

                                            <td>
                                                <div class="input-group">
                                                    <input type="radio" aria-label="Radio button for following text input">     
                                                </div>
                                            </td>


                                            <td>
                                                <div class="input-group">
                                                    <input type="radio" aria-label="Radio button for following text input">     
                                                </div>
                                            </td>
                                          </tr>

                                          <tr>
                                            <td>Comercial</td>
                                           <td>

                                              <div class="input-group">
                                                    <input type="radio" aria-label="Radio button for following text input">     
                                              </div>

                                            </td>

                                            <td>
                                                <div class="input-group">
                                                    <input type="radio" aria-label="Radio button for following text input">     
                                                 </div>
                                            </td>

                                            <td>
                                                <div class="input-group">
                                                    <input type="radio" aria-label="Radio button for following text input">     
                                                </div>
                                            </td>

                                            <td>
                                                <div class="input-group">
                                                    <input type="radio" aria-label="Radio button for following text input">     
                                                </div>
                                            </td>


                                            <td>
                                                <div class="input-group">
                                                    <input type="radio" aria-label="Radio button for following text input">     
                                                </div>
                                            </td>
                                          </tr>

                                        </tbody>

                                      </table>
                                   
                                   </div>

                              </div>

                              <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                
                                  <div class="container">
                                      <h1 class="display-4">Permissões específicas</h1>

                                      <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
                                    </div>
                              </div>
                            </div>

                          </div>
                                          
                          </div>


                            
                         </div>

                       <div class="form-group">
                            
                            <textarea name="file_comments" rows="8" style="width: 60%">Adicionar comentários... </textarea>
                            
                          </div>


                           <center>

                            <div class="form-group">
                            
                            <input type="submit" class="btn btn-success btn-lg"   placeholder="Nome do documento" value="Gravar Ficheiro">
                            
                          </div> 
                          </center> 
                          
             </form>
                  
            </div>

          </div>
           
              

          </div>
    </div>
@endsection
















































