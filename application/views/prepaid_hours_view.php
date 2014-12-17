<div class="panelDetailHours">
</div>
<div class="contentpanel panelPrepaids">
        
      <div class="row">
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
        <div class="col-md-12">
          <div class="panel panel-default panel-dark panel-alt">
            <div class="panel-heading">
              <h4 class="panel-title" style="float:left;">Hours</h4>
              <button class="btn btn-info trigger" data-dialog="somedialog" style="float:right;"><i class="fa fa-lightbulb-o"></i> <span>LOAD HOURS</span></button>
              <div class="clear"></div>
            </div>
            <div class="panel-body">
                <form id="prepaidHoursForm" method="post" action="">   
                <div class="row" style="padding: 5px 0px;">
                    <div class="col-sm-3">
                        <label class="control-label">Customer</label>
                        <div class="form-group">
                            <select name="customer" class="form-control customer">
                              <option value="0" selected>Select a customer...</option>
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
        
        <!--
        <div class="col-md-12 theCalendar">
          <div id="calendar"></div>
        </div>
        -->
      </div>
</div>
   
<div id="somedialog" class="dialog">
					<div class="dialog__overlay"></div>
					<div class="dialog__content">
						<div class="morph-shape" data-morph-open="M33,0h41c0,0,0,9.871,0,29.871C74,49.871,74,60,74,60H32.666h-0.125H6c0,0,0-10,0-30S6,0,6,0H33" data-morph-close="M33,0h41c0,0-5,9.871-5,29.871C69,49.871,74,60,74,60H32.666h-0.125H6c0,0-5-10-5-30S6,0,6,0H33">
							<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 80 60" preserveAspectRatio="none">
								<path d="M33,0h41c0,0-5,9.871-5,29.871C69,49.871,74,60,74,60H32.666h-0.125H6c0,0-5-10-5-30S6,0,6,0H33"></path>
							</svg>
						</div>
						<div class="dialog-inner">
							<h2 style="margin: 0px; padding: 0px;"><strong>Load Hours</strong></h2>
							<form id="loadHoursClient" method="post" action="">   
                            <div class="row" style="padding: 5px 0px;">
                                <div class="col-sm-12">
                                    <label class="control-label">Customer</label>
                                    <div class="form-group">
                                        <select name="customer" class="form-control customer">
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
                                  <div class="col-sm-6">
                                   <label class="control-label">Date</label>
                                        <div class="input-group">
                                            <input type="text" name="fechaLoad" class="form-control" id="fechaLoad">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                        </div>
                                   </div>
                                   <div class="col-sm-6">
                                    <label class="control-label">Hours</label>
                                    <div class="form-group">
                                        <input type="text" name="horasQ" class="form-control" style="width: 120px; float: left;" id="horasQ">
                                        <span>:</span>
                                        <select name="minutosQ" class="form-control" style="width: 80px; float: right;">
                                          <option value="0" selected>00</option>
                                          <option value=".5">30</option>
                                        </select>
                                    </div>
                                  </div>
                                  <div class="clear"></div>
                                  <div class="form-group" style="padding-top: 10px;">
                        <button type="submit" name="saveLoad" class="btn btn-info btn-lg"><i class="fa fa-save"></i> <span>Save</span></button>
                        <a data-dialog-close class="btn btn-default btn-lg"><i class="fa fa-close"></i> <span>Cancel</span></a>
                      </div>
                              </div>
						</div>
					</div>
				</div>   
    
 