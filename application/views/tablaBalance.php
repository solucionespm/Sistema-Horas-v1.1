<!-- Versión compilada y comprimida del CSS de Bootstrap -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">

<div class="table-responsive">
    <table class="table table-hover" >
        <thead>
            <tr>
                <th>
                    Month
                </th>
                <th>
                    Credit
                </th>
                <th>
                    Debit
                </th>
                <th>
                    Balance
                </th>
            </tr>
        </thead>
        <tbody>        
            <?php
            $saldo = 0;
            setlocale(LC_TIME, 'en_US');
                //$mesPrepaid = date('Y-m-d');
            foreach($balance as $value){
                $mes = explode("-",$value['fecha_prepaid']);
                $mes_nomb = strftime("%B",mktime(0, 0, 0, $mes[1], 1, 2000));              
            ?>
            <tr>
                <td><?= $mes_nomb ?></td>
                <!-- Condicionamos si es positivo o negativo-->
                <?php if($value['horas'] > 0){ 
                        $hours = date('H:i', strtotime($value['horas']));
                ?>
                    <td><?= $hours ?></td>
                    <td> &nbsp; </td>
                <?php }else{ 
                        $hours = date('H:i', strtotime($value['horas']));
                ?>
                    <td> &nbsp; </td>
                    <td class="text-danger">- <?= $hours ?></td>
                <?php } ?>
                <?php 
                    $saldo = $saldo + ((float)$value['horas']);
                    if($saldo<0){
                        $co='text-danger';
                        $si = "-";
                        $bc = $saldo * -1;
                    }else{
                        $co='';
                        $si = "&nbsp;";
                        $bc = $saldo;
                    }
                    $saldo = date('H:i', strtotime($bc));
                    ?>
                    <td class="<?= $co ?>"><b><?= $si ?><?= $hours ?></b>                        
                    </td>
            </tr>
            <?php
            } //Fin bucle
            ?>
        </tbody>
    </table>
</div>
