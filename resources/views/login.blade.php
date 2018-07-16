<!doctype html>
<html>
@include('partials._head')



<body class="container jumbotron lead" > 

<center>

  <h2>Sistema de Gestão de Dados - ENH</h2>
  <div class="card border-secondary " style="max-width: 18rem;">
  <div class="card-header text"><h2>Login</h2></div>
  <div class="card-body text-secondary">
      
      <div class="row">
        <div class="col-md-12 container">
        
      <form>

          <div class="form-group">
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" >
            <!--small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small -->
          </div>
          <div class="form-group">
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
          </div>
          <a href="#" ><small style="margin-top:220; ">Esqueceu a senha?</small></a>

          <button type="submit" class="btn btn-sm btn-block btn-success">Entrar</button>

       </form>
    

        </div>
    </div>
 
    

  </div>
</div>
</center>

@include('partials._foot')
@include('partials._scripts')
</body>



























