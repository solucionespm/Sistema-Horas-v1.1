<!-- Versión compilada y comprimida del CSS de Bootstrap -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
<div style="font-family: sans-serif; ">
<div class="panel-heading">
    <div class="panel-btns">
        &nbsp;
    </div><!-- panel-btns -->          
    <div><span style="font-size:12px;">CUSTOMER: <?= $customerName; ?></span>
    <div><span style="font-size:12px;">PERIOD: <?= $fecha; ?></span>
    <div align="center"><span style="font-size:14px; font-weight: bold;">Prepaid Hours Report</span></div>
</div>
<div class="table-responsive">
    <table class="table mb30">
        <thead>
            <tr>
                <th style="width: 100px; text-align: left;">Month</th>
                <th style="width: 130px; text-align: center;">Credit</th>
                <th style="width: 130px; text-align: center;">Debit</th>
                <th style="width: 130px; text-align: right;">Balance</th>
            </tr>
         </thead>
         <tbody class="tasksList">
             <?php
                $balance = 0;
                foreach($prepaidData as $h){
             ?>
             <tr>
                 <td class="month" style="font-weight: bold; text-align: left;">
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
                    <span style="font-size:12px;"><p><?= $mesT . ' ' . $year; ?></p>
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
                 <td style="color: <?= $co; ?>; text-align: right; font-weight: bold;">
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
                }
                $horas = $si . $hour .':'. $minu;
             ?>
            <tr>
                <td> &nbsp; </td>
                <td> &nbsp; </td> 
                <td> &nbsp; </td>
                <td> &nbsp; </td>
            </tr>   
            <tr>
                <td> &nbsp; </td>
                <td> &nbsp; </td>
                <td style="width: 80px; text-align: right; font-weight: bold; font-size:12px;">
                    Available Hours
                </td>
                <td style="text-align: right;">
                    <span style="font-size:12px; font-weight: bold;"><?= $horas; ?></span>
                </td>
            </tr>
         </tbody>
    </table>
</div><!-- table-responsive -->