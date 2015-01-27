<?php
$getCliente = $this->clientes_model->get_clientes_single($customer);
$clienteName = $getCliente[0]['cliente'];

$getProyecto = $this->clientes_model->get_proyecto_single($project);
$proyectoName = $getProyecto[0]['proyecto'];

$getTarea = $this->tasks_model->get_tasks_single($task);
$tareaName = $getTarea[0]['tarea'];

$getSubTarea = $this->tasks_model->get_subtasks_single($subtasks);
$subTareaName = $getSubTarea[0]['subtarea'];
?>
<tr>
    <td>
        <?= $fecha; ?>
        <input type="hidden" name="fecha[]" value="<?= $fecha; ?>">
    </td>
    <td>
        <?= $from; ?>
        <input type="hidden" name="from[]" value="<?= $from; ?>">
    </td>
    <td>
        <?= $to; ?>
        <input type="hidden" name="to[]" value="<?= $to; ?>">
    </td>
    <td>
        <?php
        $ts1 = strtotime(str_replace('/', '-', '12/01/2014 ' . $from));
        $ts2 = strtotime(str_replace('/', '-', '12/01/2014 ' . $to));
        $diff = abs($ts1 - $ts2) / 3600;
        $diff = number_format($diff, 1, '.', '');
        ?>
        <?= $diff; ?> Horas
        <input type="hidden" name="hours[]" value="<?= $diff; ?>">
    </td>
    <td>
        <?= $clienteName; ?>
        <input type="hidden" name="customer[]" value="<?= $customer; ?>">
    </td>
    <td>
        <?= $proyectoName; ?>
        <input type="hidden" name="project[]" value="<?= $project; ?>">
    </td>
    <td>
        <?= $tareaName; ?>
        <input type="hidden" name="task[]" value="<?= $task; ?>">
    </td>
    <td>
        <?= $subTareaName; ?>
        <input type="hidden" name="subtask[]" value="<?= $subtasks; ?>">
    </td>
    <td>
        <?= $detail; ?>
        <input type="hidden" name="detail[]" value="<?= $detail; ?>">
    </td>
    <td class="table-action">
      <a href="#" class="delete-row"><i class="fa fa-trash-o"></i></a>
    </td>
</tr>