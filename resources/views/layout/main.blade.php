<!doctype html>
<html lang="en">
  <head>
   @include('partials._head')
  </head>
  <body>

    @include('partials._nav')

    <div>

      
      <div class="row jumbotron" >

        

        <div class="col-md-3 offset-md-1 well">
         
          @yield('sidebar')

        </div>


        <div class="col-md-7">

          <div class="row">

           @yield('search')
            
          </div>

          
          <div>
          
          <!-- Page Content -->
         @yield('content')
          </div>

        </div>



      </div>

    </div>

  
    @include('partials._foot')
    @include('partials._scripts')   

  </body>
</html>