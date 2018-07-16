
<html>
   @include('partials._head')
    <body>
      @include('partials._nav')
        @section('sidebar')
            @include('partials._sidebar')
         @endsection

        <div class="container">
             @include('partials._projecto')
        </div>

     @include('partials._scripts')   
    </body>

</html>