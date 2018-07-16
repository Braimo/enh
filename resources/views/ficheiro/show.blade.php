
<html>
   @include('partials._head')
    <body>
      @include('partials._nav')
        @section('sidebar')
            @include('partials._sidebar')
         @endsection

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                 @include('partials._ficheiro')
                </div>

                <div class="col-md-4">
                 
                    <div class="jumbotron" style="margin-top: 10px;">
                          <p style="text-align: center;">{{$ficheiro->file_name}}</p>
                          <hr class="my-4">
                         <div class="row">
                            <div class="col-sm-6">
                                <a class="btn btn-success btn-sm btn-block" href="/download/{{$ficheiro->id}}" role="button">Download</a>
                            </div>
                         <div class="col-sm-6">
                                <a class="btn btn-danger btn-sm btn-block" href="#" role="button">Editar</a>
                            </div>
                         </div>
                </div>

                </div>
            </div>
            
        </div>

     @include('partials._scripts')   
    </body>

</html>