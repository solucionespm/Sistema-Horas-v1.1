<div class="contentpanel">
     <div class="col-sm-12">
      <div class="panel panel-dark panel-alt">
          <div class="panel-heading">
              <div class="panel-btns">
                <a href="#" class="panel-close">&times;</a>
              </div><!-- panel-btns -->
          <h3 class="panel-title">Hour Detail</h3>
          <p><?= $customerName . ' | ' . $fecha; ?></p>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table mb30">
                    <thead>
                        <tr>
                            <th style="text-align: center;">User</th>
                            <th style="text-align: center;">Task</th>
                            <th style="text-align: center;">Subtask</th>
                            <th style="text-align: center;">Detail</th>
                            <th style="text-align: center;">Date</th>
                            <th style="text-align: center;">Start</th>
                            <th style="text-align: center;">End</th>
                            <th style="width: 120px; text-align: center;">Total</th>
                            <th></th>
                        </tr>
                     </thead>
                     <tbody class="tasksList">
                         <?php
                            $balance = 0;
                            foreach($horas as $h){
                         ?>
                         <tr>
                             <td>User</td>
                             <td>
                                <?= $h['tarea']; ?>
                             </td>
                             <td>
                                <?= $h['subtarea']; ?>
                             </td>
                             <td>
                                <?= $h['detalle_horas']; ?>
                             </td>
                             <td style="text-align: center;">
                                <?php 
                                    $fechaA = explode('-', $h['fecha_horas']);
                                    $fecha = $fechaA[1] . '/' . $fechaA[2] . '/' . $fechaA[0];
                                    echo $fecha;
                                ?>
                             </td>
                             <td style="text-align: center;">
                                 <?= substr($h['inicio_horas'], 0, -3); ?>
                             </td>
                             <td style="text-align: center;">
                                 <?= substr($h['fin_horas'], 0, -3); ?>
                             </td>
                             <td style="text-align: center;">
                                 <?php
                                    $ts1 = strtotime(str_replace('/', '-', '12/01/2014 ' . $h['inicio_horas']));
                                    $ts2 = strtotime(str_replace('/', '-', '12/01/2014 ' . $h['fin_horas']));
                                    $diff = abs($ts1 - $ts2) / 3600;
                                    $diff = number_format($diff, 1, '.', '');
                                    echo $diff . ' Horas';
                                ?>
                             </td>
                         </tr>
                         <?php
                            }
                         ?>
                     </tbody>
                </table>
            </div><!-- table-responsive -->
        </div>
      </div><!-- panel -->
    </div><!-- col-sm-6 -->
</div>