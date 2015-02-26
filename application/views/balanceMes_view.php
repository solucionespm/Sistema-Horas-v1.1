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
                <h4 style="margin: 0px;"><b>CUSTOMER: </b><?= $customerName; ?></h4>
                <h4 style="margin: 0px; margin-bottom: 10px;"><b>PERIOD: </b><?= $fecha; ?></h4>
            </div>  
            <div align="center"><span style="font-size:14px; font-weight: bold;">Hour Detail Report</span></div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px; text-align: center;">#</th>
                        <th style="width: 50px; text-align: center;"><span style="font-size:12px;">User</span></th>
                        <th style="width: 150px; text-align: center;"><span style="font-size:12px;">Task</span></th>
                        <th style="width: 150px; text-align: center;"><span style="font-size:12px;">Subtask</span></th>
                        <th style="width: 300px; text-align: center;"><span style="font-size:12px;">Detail</span></th>
                        <th style="width: 50px; text-align: center;"><span style="font-size:12px;">Date</span></th>
                        <th style="width: 50px; text-align: center;"><span style="font-size:12px;">Start</span></th>
                        <th style="width: 50px; text-align: center;"><span style="font-size:12px;">End</span></th>
                        <th style="width: 50px; text-align: center;"><span style="font-size:12px;">Total</span></th>
                    </tr>
                 </thead>
                 <tbody>
                     <?php
                        $balance = 0; $total = 0; $cont = 1;
                        foreach($horas as $h){
                     ?>
                     <tr>
                        <th style="text-align: center;" scope="row"><?= $cont; ?></th>
                        <td style="width: 100px; text-align: center;"><span style="font-size:12px;">User</span></td>
                        <td style="width: 100px; text-align: center;">
                             <span style="font-size:12px;"><?= $h['tarea']; ?></span>
                        </td>
                        <td style="width: 100px; text-align: center;">
                            <span style="font-size:12px;"><?= $h['subtarea']; ?></span>
                        </td>
                        <td style="width: 700px; text-align: left;">
                            <span style="font-size:12px;"><?= $h['detalle_horas']; ?></span>
                        </td>
                        <td style="width: 30px; text-align: center;">
                            <span style="font-size:12px;"><?php 
                                $fechaA = explode('-', $h['fecha_horas']);
                                $fecha = $fechaA[1] . '/' . $fechaA[2] . '/' . $fechaA[0];
                                echo $fecha;
                               ?>
                            </span>
                        </td>
                        <td style="width: 30px; text-align: center;">
                            <span style="font-size:12px;"><?= substr($h['inicio_horas'], 0, -3); ?></span>
                        </td>
                        <td style="width: 30px; text-align: center;">
                            <span style="font-size:12px;"><?= substr($h['fin_horas'], 0, -3); ?></span>
                            </td>
                        <td style="width: 30px; text-align: center;">
                            <span style="font-size:12px;"><?php
                                $ts1 = strtotime(str_replace('/', '-', '12/01/2014 ' . $h['inicio_horas']));
                                $ts2 = strtotime(str_replace('/', '-', '12/01/2014 ' . $h['fin_horas']));
                                $diff = abs($ts1 - $ts2) / 3600;
                                $diff = number_format($diff, 2, ':', '');
                                echo $diff . ' Horas';
                                 ?>
                            </span>
                        </td>
                    </tr>
                    <?php 
                            $cont = $cont +1;
                            (float)$total = $total + $diff;
                        }
                    ?>
                    <tr>
                        <td colspan="8" style="width: 100px; text-align: right;"><span style="font-size:12px;">Total &nbsp;&nbsp;</span></td>
                        <td style="width: 100px; text-align: center;"> <span style="font-size:12px;">
                            <?php
                            echo number_format($total,2,":",".") . ' Horas';
                            ?></span>
                        </td>
                    </tr>
                 </tbody>
            </table>
        </div>
    </body>
</html>