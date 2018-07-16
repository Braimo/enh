<table class="table table-hover" style="text-align: center;" >
              <thead style="background-color:#e6f9ff">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Código do Projecto</th>
                  <th scope="col">Nome do Projecto</th>
                  <th scope="col">Área</th>
                  
                </tr>
              </thead>
              <tbody>
              	
                <tr>
                  <td>{{ $projecto->id}}</td>
                  <td>{{ $projecto->proj_code}}</td>
                  <td>{{ $projecto->proj_name}}</td>
                  <td>{{ $projecto->proj_area}}</td>
                </tr>
                
               
              </tbody>
          </table>