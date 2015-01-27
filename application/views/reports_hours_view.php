<div class="contentpanel panelPrepaids">
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-default panel-dark panel-alt">
            <div class="panel-heading">
              <h4 class="panel-title" style="float:left;">Hours</h4>
              <div class="clear"></div>
            </div>
            <div class="panel-body">
                <form id="reportHoursForm" method="post" action="">   
                <div class="row" style="padding: 5px 0px;">
                    <div class="col-sm-3">
                        <label class="control-label">Users</label>
                        <div class="form-group">
                            <select name="user" class="form-control customer">
                              <option value="all">All users</option>
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
                        <label class="control-label">Customer</label>
                        <div class="form-group">
                            <select name="customer" class="form-control customer">
                              <option value="all">All customers</option>
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
                    <div class="col-sm-2">
                        <label class="control-label">Block Stat.</label>
                        <div class="form-group">
                            <select name="blocked" class="form-control">
                              <option value="all">All</option>
                              <option value="1">Blocked</option>
                              <option value="0">Unblocked</option>
                            </select>
                        </div>
                    </div> 
                    <div class="col-sm-2">
                        <label class="control-label">Bill.</label>
                        <div class="form-group">
                            <select name="billable" class="form-control">
                              <option value="all">All</option>
                              <option value="0">Not Billable</option>
                              <option value="1">Billable</option>
                            </select>
                        </div>
                    </div> 
                    <div class="clear" style="padding: 5px;"></div>
                    <div class="col-sm-3">
                        <label class="control-label">Options</label>
                        <div class="form-group">
                            <select name="option" class="form-control optionSelect">
                              <option value="0" selected>Select an option...</option>
                              <option value="range">Range</option>
                              <option value="<?= $thisMonth; ?>">This month</option>
                              <?php
                                foreach($month as $m){
                              ?>
                                  <option value="<?= $m['meses']; ?>"><?= $m['mesesTexto']; ?></option>
                              <?php
                                }
                              ?>
                            </select>
                        </div>
                    </div> 
                    <div class="col-sm-2 pickerFromTo">
                       <label class="control-label">Date from</label>
                        <div class="input-group">
                            <input type="text" name="fechaFrom" class="form-control" id="datepickerFrom">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        </div>
                    </div>
                    <div class="col-sm-2 pickerFromTo">
                       <label class="control-label">Date to</label>
                        <div class="input-group">
                            <input type="text" name="fechaTo" class="form-control" id="datepickerTo">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        </div>
                    </div>
                    <div class="col-sm-1">
                     <label></label>
                      <div class="form-group">
                        <button type="submit" name="viewPrepaid" class="btn btn-default btn-lg"><i class="fa fa-search"></i> <span>View</span></button>
                      </div>
                    </div>
                </div><!-- row -->
                </form>
                <hr>
                <div class="row">
                    <div class="col-md-12 loadHoursTable">
                      
                    </div><!-- col-md-6 -->
                </div>
            </div>
          </div>
        </div>
      </div>
</div>
   

    
 