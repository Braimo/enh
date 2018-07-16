<table class="table table-hover" style="text-align: center;" >
              <thead style="background-color:#e6f9ff">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nome do Pelouro</th>
                  <th scope="col">Código do Pelouro</th>
                  <th scope="col">Contacto do Pelouro</th> 
                  </tr>
              </thead>
              <tbody>
              	 @foreach( $pelouros as $pelouro)
                <tr>
                  <td>{{ $pelouro->id}}</td>
                  <td>{{ $pelouro->pelouro_name}}</td>
                  <td>{{ $pelouro->pelouro_code}}</td>
                  <td>{{ $pelouro->pelouro_contact}}</td>
                </tr>
                 @endforeach
               
              </tbody>
          </table>
