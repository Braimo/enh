<table class="table table-hover" style="text-align: center; margin-top: 10px;" >
              <thead style="background-color:#e6f9ff">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nome do Ficheiro</th>
                  <th scope="col">Data de Criação</th>
                  <th scope="col">Prazo</th>
                </tr>
              </thead>
              <tbody>
              	
                <tr>
                  <td>{{ $ficheiro->id}}</td>
                  <td>{{ $ficheiro->file_name}}</td>
                  <td>{{ $ficheiro->created_at}}</td>
                  <td>{{ $ficheiro->file_deadline}}</td>
                </tr>
              </tbody>
          </table>