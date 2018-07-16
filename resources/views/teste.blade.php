<!doctype html>
<html lang="en">
  <head>
   @include('partials._head')
  </head>
  <body>

    @include('partials._nav')

    <div>

      
      <div class="row jumbotron" style="margin-top: 20px; padding-left:0px;">

        

        <div class="col-md-3 offset-md-1">
         
          @include('partials._sidebar')

        </div>


        <div class="col-md-7">

          <div class="row">

            @include('partials._search')
            
          </div>

          
          <div>
          
          <!-- Page Content -->
           @include('partials._table')

          </div>

        </div>



      </div>

    </div>

    @include('partials._modal')
    @include('partials._foot')
    @include('partials._scripts')   

  </body>
</html>