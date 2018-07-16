 <form style="width: 100%; margin-left: 15px;" action="{{url()->current()}}" method="get" >
  <div class="row" >
 
  <div class="input-group mb-3 col-md-4">

  <select class="custom-select" id="inputGroupSelect01">
        <option selected disabled="true">Escolha um critério...</option>
        <option value="1">Projecto</option>
        <option value="2">Departamento</option>
        <option value="3">Área</option>
        <option value="4">Pelouro</option>
        <option value="5">Projecto</option>
  </select>
                                                 
</div>

 <div class="input-group col-md-8 mb-3">
         <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username" aria-describedby="basic-addon2" name="search">
         <div class="input-group-append">
         <input type="submit" class="btn btn-md btn-primary" id="search" value="Search">
          </div>
</div>
</div>
</form>

