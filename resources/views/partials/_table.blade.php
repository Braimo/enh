 <a href="/ficheiros/create"><span class="btn  fa fa-plus fa-upload " style="float: right; margin-bottom: 10px;" >Upload</span></a>
 <p style="color: red; text-align: center;"><strong>{{$err}}</strong></p>
<table class="table table-hover"  >
              <thead style="background-color:#e6f9ff">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nome do Documento</th>
                  <th scope="col">Data de Criação</th>
                  <th scope="col">Descrição</th>
                  <th scope="col">Acções</th>
                </tr>
              </thead>
              <tbody>
                 @foreach($files as $doc)
                <tr>
                 
                 
                  <td scope="row">{{$doc->id}}</td>
                  <td>{{$doc->file_name}}</td>
                  <td>{{$doc->created_at}}</td>
                  <td>{{$doc->file_comments}}</td>
                  <td><a href="/ficheiros/{{$doc->id}}" class="btn btn-default btn-sm">
                        Visualizar
                    </a>

                    
                  </td>
               
                 
                </tr>
                @endforeach
              </tbody>
          </table>

          <hr>
<p class="bg-danger"> <strong>Total de Ficheiros: </strong> {{ count($files) }} </p>