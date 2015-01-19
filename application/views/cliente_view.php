<div class="col-md-12">
    <div class="panel panel-default panel-dark panel-alt">
        <div class="container-fluid">
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
                <div class="panel-heading">
                    <h4 class="panel-title" style="float:left;">Register Client</h4>
                    <div class="clear"></div>
                </div>
                <div class="col-md-9" class="col-lg-1 col-offset-6 centered">
                    <form role="form" method="post" action="" >
                        <div class="form-group">
                            <label for="customer">Client</label>
                            <input type="text" id="customer" name="customer" class="form-control" placeholder="Client Name">
                        </div>
                        <div class="form-group">
                            <label for="ejemplo_email_1">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                        </div>
                        <div class="form-group">
                            <button name="saveLoad" type="submit" class="btn btn-default">Register</button>            
                        </div>
                      </form>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
</div>