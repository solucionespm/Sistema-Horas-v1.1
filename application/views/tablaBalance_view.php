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
        <div class="panel-heading">  
            <div align="center" style="font-weight: bold;">Prepaid Hours Report</div>
        </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px; text-align: center;">#</th>
                        <th style="width: 100px; text-align: center;">Month</th>
                        <th style="width: 130px; text-align: center;">Credit</th>
                        <th style="width: 130px; text-align: center;">Debit</th>
                        <th style="width: 130px; text-align: center;">Balance</th>
                    </tr>
                 </thead>
                 <tbody>
                     <?php
                        $balance = 0; $cont = 1;
                        foreach($prepaidData as $h){
                     ?>
                     <tr>
                        <th style="text-align: center;" scope="row"><?= $cont; ?></th>
                        <td class="month" style="text-align: left; font-size:12px;">
                            <?php
                             $fechaArr = explode(' ',$h['fecha_prepaid']); 
                             $fechaArr = explode('-', $fechaArr[0]);
                             $year = $fechaArr[0];
                             $month = $fechaArr[1];

                             if($month==1){$mesT = 'January';}
                             if($month==2){$mesT = 'February';}    
                             if($month==3){$mesT = 'March';}    
                             if($month==4){$mesT = 'April';}    
                             if($month==5){$mesT = 'May';}    
                             if($month==6){$mesT = 'June';}    
                             if($month==7){$mesT = 'July';}    
                             if($month==8){$mesT = 'August';}    
                             if($month==9){$mesT = 'September';}    
                             if($month==10){$mesT = 'October';}    
                             if($month==11){$mesT = 'November';}    
                             if($month==12){$mesT = 'December';} 

                                if($h['horas']<0){
                                    $class= 'horasDetalle';
                                }

                                if($h['horas']>0){
                                    $class= 'comentarioDetalle';
                                }
                            ?>                    
                            <?php
                            if($h['horas']>0){
                            ?>
                            <span style="font-size:12px;"><?= $mesT . ' ' . $year; ?>
                            <?php
                            }elseif($h['horas']<0){
                            ?>
                            <?= $mesT . ' ' . $year; ?></span>
                            <?php
                            }
                            ?>
                         </td>
                         <td style="text-align: center;">
                          <span style="font-size:12px;">
                            <?php
                                if($h['horas']>0){
                                    $tplus = $h['horas']; 
                                    $hour = floor($tplus);
                                    $min = round(60*($tplus - $hour));
                                    echo $hour;
                                    echo ":";
                                    if($min==0){
                                        echo $min . "0";
                                    }else{
                                        echo $min;
                                    }
                                }
                            ?>
                        </span>
                         </td>
                         <td style="color: #A30006; text-align: center;">
                         <span style="font-size:12px;">
                             <?php
                                if($h['horas']<0){
                                    $tminus = $h['horas']*-1; 
                                    $hour = floor($tminus);
                                    $min = round(60*($tminus - $hour));
                                    echo "-";
                                    echo $hour;
                                    echo ":";
                                    if($min==0){
                                        echo $min . "0";
                                    }else{
                                        echo $min;
                                    }
                                }
                            ?>
                            </span>
                         </td>
                            <?php 
                            $balance = $balance + ($h['horas']);
                            if($balance<0){
                                $co="#A30006";
                                $si = "-";
                                $bc = $balance * -1;
                            }else{
                                $co="#555555";
                                $si = "";
                                $bc = $balance;
                            }
                            ?>
                         <td style="color: <?= $co; ?>; text-align: center; font-weight: bold;">
                             <span style="font-size:12px;">
                             <?php 
                                $hour = floor($bc);
                                $min = round(60*($bc - $hour));
                                echo $si;
                                echo $hour;
                                echo ":";
                                if($min==0){
                                    $minu = $min . "0";
                                    echo $minu;
                                }else{
                                    $minu = $min;
                                    echo $minu;
                                }
                              ?>
                                </span>
                         </td>
                     </tr>
                     <?php
                        $cont = $cont +1;
                        }
                        $horas = $si . $hour .':'. $minu; //Utilizado para mostrar Available Hours
                     ?>   
                    <tr>
                        <td colspan = "4" style="text-align: right;"> Available Hours &nbsp;&nbsp; </td>
                        <td style="text-align: center;">
                            <span style="font-size:12px; font-weight: bold;"><?= $horas; ?></span>
                        </td>
                    </tr>
                 </tbody>
            </table>
        </div>
    </body>
</html>