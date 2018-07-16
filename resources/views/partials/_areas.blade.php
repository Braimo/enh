<table class="table table-hover" style="text-align: center;" >
              <thead style="background-color:#e6f9ff">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nome da Área</th>
                  <th scope="col">Código da Área</th>
                  <th scope="col">Localização</th>
                  
                </tr>
              </thead>
              <tbody>
              	 @foreach( $areas as $area)
                <tr>
                  <td>{{ $area->id}}</td>
                  <td>{{ $area->area_name}}</td>
                  <td>{{ $area->area_code}}</td>
                  <td>{{ $area->area_local}}</td> 
                </tr>
                 @endforeach
               
              </tbody>
          </table>
