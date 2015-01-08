<div class="table-responsive">
    <table class="table mb30">
        <thead>
            <tr>
                <th style="text-align: center;">Customer</th>
                <th style="text-align: center;">Last Activity</th>
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
                 <td style="font-weight: bold;"><?= $h['cliente']; ?></td>
                 <td class="month">
                    <?php
                     $fechaArr = explode(' ',$h['ultima_fecha']); 
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
                        
                        echo $mesT . ' ' . $year;
                    ?>
                 </td>
                 <td style="text-align: center; color: <?= ($h['saldo']>=0)?'#1D2939':'#A30006'; ?>">
                    <?php
                        $saldoArray = explode('.', $h['saldo']);
                        $hours = $saldoArray[0];
                        if($saldoArray == 0){
                            $minutes = '00';
                        }else{
                            $minutes = '30';
                        }
                        echo $hours . ':' . $minutes;
                    ?>
                 </td>
                    <!-- Se agrego el atributo visibility como parametro showButton para efectos de prueba -->
                    <td id="viewtd" style="width: 120px; text-align: center; visibility: <?=$showButton ?>;">
                        <button href="#" class="btn btn-success sendreporte" data-customer="<?= $h['id_clientes']; ?>"><i class="fa fa-envelope"></i> Enviar reporte</button>
                    </td>
                    <td id="viewtd2" style="width: 120px; text-align: center; visibility: <?=$showButton ?>;">
                        <button href="#" class="btn btn-success goToHours" data-customer="<?= $h['id_clientes']; ?>"><i class="fa fa-book"></i> Ver detalle</button>
                    </td>
             </tr>
             <?php
                }
             ?>
         </tbody>
    </table>
</div><!-- table-responsive -->