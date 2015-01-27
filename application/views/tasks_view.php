<div class="contentpanel">
    
      <div class="row">
       
        <div class="col-md-12">
          <div class="panel panel-default panel-dark panel-alt">
            <div class="panel-heading">
              <h4 class="panel-title">Add tasks</h4>
            </div>
            <div class="panel-body">
                <?php
                    if($mensaje){
                ?>
                    <div class="alert alert-info">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <strong>Congratulations!</strong> <?= $mensaje; ?>
                    </div>
                <?php
                    }
                ?>
                <form id="taskListForm" method="post" action="">   
                <div class="row" style="padding: 5px 0px;">
                    <div class="col-sm-2">
                       <label class="control-label">Date</label>
                        <div class="input-group">
                            <input type="text" name="fecha" class="form-control" id="datepicker">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        </div>
                    </div>   
                    <div class="col-sm-2">
                        <label class="control-label">From</label>        
                          <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                            <div class="bootstrap-timepicker"><input name="from" id="fromTime" type="text" class="form-control"/></div>
                          </div>
                    </div>
                    <div class="col-sm-2">
                        <label class="control-label">To</label>        
                          <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                            <div class="bootstrap-timepicker"><input name="to" id="toTime" type="text" class="form-control"/></div>
                          </div>
                    </div>
                    <div class="col-sm-3">
                        <label class="control-label">Customer</label>
                        <div class="form-group">
                            <select name="customer" id="selectCustomer" class="form-control">
                              <option value="0" selected>Select a customer...</option>
                              <?php
                                foreach($clients as $c){
                                    $countProyectos = $this->clientes_model-> count_projects($c['id_clientes']);
                                    if($countProyectos!=0){
                              ?>
                              <option value="<?= $c['id_clientes']; ?>"><?= $c['cliente']; ?></option>
                              <?php
                                    }
                                }
                              ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                      <label class="control-label">Project</label>
                        <div class="form-group" id="selectProject">
                            <select name="project" class="form-control" disabled>
                              <option value="0" selected>Select a project...</option>
                            </select>
                        </div>
                    </div>
                </div><!-- row -->
                
                <div class="row" style="padding: 5px 0px;">
                    <div class="col-sm-3">
                        <label class="control-label">Task</label>
                        <div class="form-group">
                            <select name="task" id="selectTask" class="form-control">
                              <option value="0" selected>Select a task...</option>
                              <?php
                                foreach($tasks as $t){
                              ?>
                              <option value="<?= $t['id_tareas']; ?>"><?= $t['tarea']; ?></option>
                              <?php
                                }
                              ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                      <label class="control-label">Subtask</label>
                        <div class="form-group" id="selectSubtask">
                            <select name="task" class="form-control" disabled>
                              <option value="0">Select a subtask...</option>
                            </select>
                        </div>
                    </div>   
                    <div class="col-sm-5">
                      <div class="form-group">
                        <textarea id="detail" name="detail" cols="30" rows="2" class="form-control" placeholder="Detail"></textarea>
                      </div>
                    </div>
                    <div class="col-sm-1">
                      <div class="form-group">
                        <button type="submit" name="agregarTask" class="btn btn-default btn-lg"><i class="fa fa-plus"></i></button>
                      </div>
                    </div>
                </div>
                </form>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                      <div class="table-responsive">
                          <form id="tasksFinal" method="post" action="">   
                          <table class="table mb30">
                            <thead>
                              <tr>
                                <th style="width: 90px;">Date</th>
                                <th style="width: 90px;">From</th>
                                <th style="width: 90px;">To</th>
                                <th style="width: 90px;">Hours</th>
                                <th>Customer</th>
                                <th>Proyecto</th>
                                <th>Task</th>
                                <th>Subtask</th>
                                <th>Detail</th>
                                <th style="width: 120px; text-align: center;">
                                <button type="submit" name="guardar" class="btn btn-info saveTasksBtn">
                                <i class="fa fa-save"></i></button>
                                </th>
                              </tr>
                            </thead>
                            <tbody class="tasksList">
                              
                            </tbody>
                          </table>
                          </form>
                      </div><!-- table-responsive -->
                    </div><!-- col-md-6 -->
                </div>
            </div>
          </div>
        </div>
        
        <!--
        <div class="col-md-12 theCalendar">
          <div id="calendar"></div>
        </div>
        -->
      </div>
</div>
    
 