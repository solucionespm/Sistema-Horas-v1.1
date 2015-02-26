<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="<?= base_url('assets/bootstrap_reports/css/bootstrap-theme.min.css'); ?>" media="print" />
        <link rel="stylesheet" href="<?= base_url('assets/bootstrap_reports/css/bootstrap.min.css'); ?>"  media="print" />
        <style>
            table thead tr th, table tbody td{
                padding: 4px;
            }
            h1, h2, h3, h4{
                margin:0px;
            }
            
            .panel25{
                padding: 5px;
                border: 1px solid #000;
                display: block;
                margin: 5px 0px;
                width: 23%;
            }
            
            .panel50{
                padding: 5px;
                border: 1px solid #000;
                display: block;
                margin: 5px 0px;
                width: 48%;
            }
            
            .panel75{
                padding: 5px;
                border: 1px solid #000;
                display: block;
                margin: 5px 0px;
                width: 73%;
            }
            
            .panel100{
                padding: 5px;
                border: 1px solid #000;
                display: block;
                margin: 5px 0px;
                width: 98%;
            }
            
            
        </style>
    </head>
    <body>
        
        <div class="container-fluid">
                <!--aqui colocar contenido para usar el bootstrap de print INICIO-->
                <img src="<?= base_url('assets/images/logospm.jpg'); ?>" />
                <h1>SolucionesPM</h1>
                <h2>SolucionesPM</h2>
                <h3>SolucionesPM</h3>
                <div class="panel50">
                    <h4>Panel para info</h4>
                </div>
                <div class="panel50">
                    <h4>Panel para info</h4>
                </div>
                <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>
                <!--aqui colocar contenido para usar el bootstrap de print FIN-->
        </div>
    </body>
</html>
