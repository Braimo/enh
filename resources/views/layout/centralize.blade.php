<!doctype html>
<html lang="en">
  <head>
   @include('partials._head')
  </head>
  <body>

    @include('partials._nav')

    <div>

      
      <div class="row jumbotron" style="margin-top: 20px; padding-left:0px;">

        

        <div class="col-md-1 ">
         
          

        </div>


        <div class="col-md-10">

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