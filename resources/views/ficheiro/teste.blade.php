
<html>
   @include('partials._head')
    <body>
      @include('partials._nav')
        @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container">
            Teste!
        </div>

     @include('partials._scripts')   
    </body>

</html>