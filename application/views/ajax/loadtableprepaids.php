<div class="table-responsive">
    <table class="table mb30">
        <thead>
            <tr>
                <th style="text-align: center;">Month</th>
                <th style="width: 120px; text-align: center;">Credit</th>
                <th style="width: 120px; text-align: center;">Debit</th>
                <th style="width: 120px; text-align: center;">Balance</th>
                <th></th>
            </tr>
         </thead>
         <tbody class="tasksList">
             <?php
                $balance = 0;
                foreach($prepaidData as $h){
             ?>
             <tr>
                 <td class="month" style="font-weight: bold;">
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
                    <p><?= $mesT . ' ' . $year; ?></p>
                    <?php
                    }elseif($h['horas']<0){
                    ?>
                    <a class="loadHourDetail" data-fecha="<?= $year . '-' . $month; ?>" data-customer="<?= $h['id_clientes']; ?>" href="javascript:void(0);">
                    <?= $mesT . ' ' . $year; ?>
                     </a>
                    <?php
                    }
                    ?>
                 </td>
                 <td style="text-align: right;">
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
                 </td>
                 <td style="color: #A30006; text-align: right;">
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
                     <?php 
                        $hour = floor($bc);
                        $min = round(60*($bc - $hour));
                        echo $si;
                        echo $hour;
                        echo ":";
                        if($min==0){
                            echo $min . "0";
                        }else{
                            echo $min;
                        }
                      ?>
                 </td>
                 <td></td>
             </tr>
             <?php
                }
             ?>
         </tbody>
    </table>
</div><!-- table-responsive -->