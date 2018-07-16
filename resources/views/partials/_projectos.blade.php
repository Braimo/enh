<table class="table table-hover" style="text-align: center;" >
              <thead style="background-color:#e6f9ff">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Código do Projecto</th>
                  <th scope="col">Nome do Projecto</th>
                  <th scope="col">Área</th>
                  <th scope="col">Descrição</th>
                  <th scope="col">Detalhes</th>
                </tr>
              </thead>
              <tbody>
              	 @foreach( $projectoList as $projecto)
                <tr>
                  <td>{{ $projecto->id}}</td>
                  <td>{{ $projecto->proj_code}}</td>
                  <td>{{ $projecto->proj_name}}</td>
                  <td>{{ $projecto->proj_area}}</td>
                  <td>{{ $projecto->proj_desc}}</td>
                  <td><button type="button" class="btn btn-default btn-sm">
                        Visualizar
                    </button>

                    <button type="button" class="btn btn-default btn-sm">
                        Download
                    </button>

                  </td>
                 
                </tr>
                 @endforeach
               
              </tbody>
          </table>
