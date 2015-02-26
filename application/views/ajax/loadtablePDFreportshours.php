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

                    <div style="float:left;">
                        <img style="margin-bottom: 5px;" src="<?= base_url('assets/images/logospm.jpg'); ?>" />
                        <h4 style="margin: 0px;"><b>USER: </b><?= $nameUser; ?></h4>
                        <h4 style="margin: 0px;"><b>CUSTOMER: </b><?= $nameCustomer; ?></h4>
                        <h4 style="margin: 0px; margin-bottom: 10px;"><b>PERIOD: </b><?= $period; ?></h4>
                    </div>
                    <div class="clear"></div>
                    <div class="table-responsive col-md-12">
                        <table class="table table-bordered" id="myTable">
                            <thead>
                                <tr>
                    <!--                <th style="text-align: center;">Bi.</th>
                                    <th style="text-align: center;">Pr.</th>
                                    <th style="text-align: center;">Bl.</th>-->
                                    <th style="width: 40px; text-align: center;">User</th>
                                    <th style="width: 120px; text-align: center;">Customer</th>
                                    <th style="width: 120px; text-align: center;">Project</th>
                                    <th style="width: 120px; text-align: center;">Task</th>
                                    <th style="width: 120px; text-align: center;">Subtask</th>
                                    <th style="text-align: center;">Detail</th>
                                    <th style="width: 120px; text-align: center;">Date</th>
                                    <th style="width: 90px; text-align: center;">Start</th>
                                    <th style="width: 90px; text-align: center;">End</th>
                                    <th style="width: 80px; text-align: center;">Total</th>
                                </tr>
                             </thead>
                             <tbody class="tasksList">
                                 <?php
                                     //$balance = 0;
                                    foreach($resultadoHora as $h){
                                        $checkBill = $this->hours_model->checkBill($h['id_horas']);
                                 ?>
                                 <tr>
                                     <td style="width: 40px; text-align: center;"><?= $h['acronimo_usuarios']; ?></td>
                                     <td><?= $h['cliente']; ?></td>
                                     <td><?= $h['proyecto']; ?></td>
                                     <td><?= $h['tarea']; ?></td>
                                     <td><?= $h['subtarea']; ?></td>
                                     <td><?= $h['detalle_horas']; ?></td>
                                     <td style="text-align: center;"><?= date('d-m-Y', strtotime($h['fecha_horas'])); ?></td>
                                     <td style="width: 90px; text-align: center;"><?= substr($h['inicio_horas'], 0, -3); ?></td>
                                     <td style="width: 90px; text-align: center;"><?= substr($h['fin_horas'], 0, -3); ?></td>
                                     <td style="width: 80px; text-align: center;">
                                         <?php
                                            $ts1 = strtotime(str_replace('/', '-', '12/01/2014 ' . $h['inicio_horas']));
                                            $ts2 = strtotime(str_replace('/', '-', '12/01/2014 ' . $h['fin_horas']));
                                            $diff = abs($ts1 - $ts2) / 3600;
                                            $diff = number_format($diff, 1, '.', '');
                                            echo $diff;
                                         ?>
                                     </td>
                                 </tr>
                                 <?php
                                    }
                                 ?>
                             </tbody>
                        </table>

                    </div>

    </body>
</html>