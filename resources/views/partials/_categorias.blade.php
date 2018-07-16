<table class="table table-hover" style="text-align: center;" >
              <thead style="background-color:#e6f9ff">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nome da Categoria</th>
                  <th scope="col">Código da Categoria</th>
                </tr>
              </thead>
              <tbody>
              	 @foreach( $categorias as $categoria)
                <tr>
                  <td>{{ $categoria->id}}</td>
                  <td>{{ $categoria->cat_code}}</td>
                  <td>{{ $categoria->cat_name}}</td>
                </tr>
                 @endforeach
               
              </tbody>
          </table>
