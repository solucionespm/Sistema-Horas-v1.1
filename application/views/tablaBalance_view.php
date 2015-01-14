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
            foreach($dataReporte as $value){
                $mes = explode("-",$value['fecha_prepaid']);
                $mes_nomb = strftime("%B",mktime(0, 0, 0, $mes[1], 1, 2000));
                $year = $mes[0];
            ?>
            <tr>
                <td><?= $mes_nomb . ' ' . $year ?></td>
                <td>
                    <?php
                        if((float)$value['horas']>0){
                            $tplus = (float)$value['horas']; 
                            $hour = floor($tplus);
                            $min = round(60*($tplus - $hour));
                            $si = '';
                            if($min==0){
                                $minu = $min . "0";
                            }else{
                                $minu = $min;
                            }
                            $horas = $si . $hour .':'. $minu;
                            echo $horas;
                        }
                    ?>
                </td>
                <td class="text-danger">
                    <?php
                        if((float)$value['horas']<0){
                            $tminus = (float)$value['horas']*-1; 
                            $hour = floor($tminus);
                            $min = round(60*($tminus - $hour));
                            $si = '-';
                            if($min==0){
                                $minu = $min . "0";
                            }else{
                                $minu = $min;
                            }
                            $horas = $si . $hour .':'. $minu;
                            echo $horas;
                        }
                    ?>
                </td>
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
                    ?>
                <td class="<?= $co ?>">
                <?php 
                    $hour = floor($bc);
                    $min = round(60*($bc - $hour));
                    if($min==0){
                        $minu = $min . "0";
                    }else{
                        $minu = $min;
                    }
                    $horas = $si .''. $hour .':'. $minu;
                    echo $horas;
                ?>
                </td>
            </tr>
            <?php
            } //Fin bucle
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
                <td>
                    TOTAL BALANCE
                </td>
                <td>
                    <?= $horas; ?>
                </td>
            </tr>
        </tbody>
    </table>
</div>
