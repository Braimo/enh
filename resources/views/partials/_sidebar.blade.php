   <div class="panel-heading" role="tab" id="collapseListGroupHeading1">
                  <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" href="#collapseListGroup1" aria-expanded="false" aria-controls="collapseListGroup1">
                      Pelouros
                    </a>
                  </h4>
                </div>

              <div id="collapseListGroup1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseListGroupHeading1">
                  <ul class="list-group">
                    @foreach($pelouros as $pelouro)
                    <li class="list-group-item list-group-item-primary">{{$pelouro->pelouro_name}}</li>
      
                    @endforeach
                    <li class="list-group-item list-group-item-primary"><a href="/pelouros/create" class="btn btn-sm btn-danger">Novo Pelouro</a></li> 
                  </ul>
                 
              </div>



              <div class="panel-heading" role="tab" id="collapseListGroupHeading2">
                  <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" href="#collapseListGroup2" aria-expanded="false" aria-controls="collapseListGroup2">
                      Projectos
                    </a>
                  </h4>
                </div>

              <div id="collapseListGroup2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseListGroupHeading2">
                  <ul class="list-group">
                    @foreach($projectos as $projecto)
                      <li class="list-group-item list-group-item-primary">{{$projecto->proj_name}}</span></li>
                    @endforeach
                      <li class="list-group-item list-group-item-primary"><a  href="/projectos/create" class="btn btn-sm btn-danger">Novo Projecto</a></li> 
                      
                 </ul>
                 
              </div>


               <div class="panel-heading" role="tab" id="collapseListGroupHeading3">
                  <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" href="#collapseListGroup3" aria-expanded="false" aria-controls="collapseListGroup3">
                      Áreas
                    </a>
                  </h4>
                </div>

              <div id="collapseListGroup3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseListGroupHeading3">
                  <ul class="list-group">
                    @foreach($areas as $area)
                      <li class="list-group-item list-group-item-primary"> {{$area->area_name}} </li>
                      @endforeach   
                      <li class="list-group-item list-group-item-primary"><a href="/areas/create" class="btn btn-sm btn-danger">Nova Área</a></li> 
                 </ul>
                 
              </div>
