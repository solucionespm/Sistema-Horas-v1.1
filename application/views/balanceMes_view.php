<!-- Versión compilada y comprimida del CSS de Bootstrap -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
<div style="font-family: sans-serif; ">
<div class="contentpanel">
     <div class="col-sm-12">
      <div class="panel panel-dark panel-alt">
          <div class="panel-heading">
              <div class="panel-btns">
                &nbsp;
              </div><!-- panel-btns -->          
              <div><span style="font-size:12px;">CUSTOMER: <?= $customerName; ?></span></div>
              <div><span style="font-size:12px;">PERIOD: <?= $fecha; ?></span></div>
              <div align="center"><span style="font-size:14px; font-weight: bold;">Hour Detail Report</span></div>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table mb30">
                    <thead>
                        <tr>
                            <th style="width: 100px; text-align: center;"><span style="font-size:12px;">User</span></th>
                            <th style="width: 100px; text-align: center;"><span style="font-size:12px;">Task</span></th>
                            <th style="width: 100px; text-align: center;"><span style="font-size:12px;">Subtask</span></th>
                            <th style="width: 120px; text-align: center;"><span style="font-size:12px;">Detail</span></th>
                            <th style="width: 100px; text-align: center;"><span style="font-size:12px;">Date</span></th>
                            <th style="width: 100px; text-align: center;"><span style="font-size:12px;">Start</span></th>
                            <th style="width: 100px; text-align: center;"><span style="font-size:12px;">End</span></th>
                            <th style="width: 100px; text-align: center;"><span style="font-size:12px;">Total</span></th>
                            <th></th>
                        </tr>
                     </thead>
                     <tbody class="tasksList">
                         <?php
                            $balance = 0; $total = 0;
                            foreach($horas as $h){
                         ?>
                         <tr>
                             <td style="width: 100px; text-align: center;"><span style="font-size:12px;">User</span></td>
                             <td style="width: 100px; text-align: center;">
                                 <span style="font-size:12px;"><?= $h['tarea']; ?></span>
                             </td>
                             <td style="width: 100px; text-align: center;">
                                 <span style="font-size:12px;"><?= $h['subtarea']; ?></span>
                             </td>
                             <td style="width: 120px; text-align: center;">
                                 <span style="font-size:12px;"><?= $h['detalle_horas']; ?></span>
                             </td>
                             <td style="width: 100px; text-align: center;">
                               <span style="font-size:12px;"><?php 
                                    $fechaA = explode('-', $h['fecha_horas']);
                                    $fecha = $fechaA[1] . '/' . $fechaA[2] . '/' . $fechaA[0];
                                    echo $fecha;
                                   ?></span>
                             </td>
                             <td style="width: 100px; text-align: center;">
                                 <span style="font-size:12px;"><?= substr($h['inicio_horas'], 0, -3); ?></span>
                             </td>
                             <td style="width: 100px; text-align: center;">
                                 <span style="font-size:12px;"><?= substr($h['fin_horas'], 0, -3); ?></span>
                             </td>
                             <td style="width: 100px; text-align: center;">
                                 <span style="font-size:12px;"><?php
                                    $ts1 = strtotime(str_replace('/', '-', '12/01/2014 ' . $h['inicio_horas']));
                                    $ts2 = strtotime(str_replace('/', '-', '12/01/2014 ' . $h['fin_horas']));
                                    $diff = abs($ts1 - $ts2) / 3600;
                                    $diff = number_format($diff, 1, '.', '');
                                    echo $diff . ' Horas';
                                     ?></span>
                             </td>
                         </tr>
                         <?php 
                                (float)$total = $total + $diff;
                            }
                         ?>
                        <tr>
                            <td colspan="7" style="width: 100px; text-align: right;"><span style="font-size:12px;">Total</span></td>
                            <td style="width: 100px; text-align: center;"> <span style="font-size:12px;">
                                <?php
                                echo number_format($total,2,",",".") . ' Horas';
                                ?></span>
                            </td>
                        </tr>
                     </tbody>
                </table>
            </div><!-- table-responsive -->
        </div>
      </div><!-- panel -->
    </div><!-- col-sm-6 -->
</div>
</div>