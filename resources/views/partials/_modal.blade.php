<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Carregar Ficheiro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
         


          <form>

               <div class="custom-file">
                  <label class="custom-file-label" for="customFile">Seleccione o Ficheiro</label>
                  <input type="file" class="custom-file-input" id="customFile">
                 
                </div>

                <div class="form-group">
                  <label for="file_name">Nome do Ficheiro</label>
                  <input type="email" class="form-control" name="file_name"  placeholder="Nome do documento">
                  
                </div>

                <div class="form-group">
                  <label for="file_name">Categoria do Ficheiro</label>
                  <select class="custom-select" id="inputGroupSelect01">
                        <option selected>Escolha uma categoria</option>
                        <option value="1">Projecto</option>
                        <option value="2">Departamento</option>
                        <option value="3">Área</option>
                        <option value="3"></option>
                        <option value="4">Pelouro</option>
                        <option value="5">Projecto</option>
                 </select>
                </div>
                
                
          </form>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>