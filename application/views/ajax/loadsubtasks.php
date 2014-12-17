<select name="subtasks" class="form-control thesubtask">
  <option value="0" selected>Select a subtask...</option>
  <?php
    foreach($subtasks as $s){
  ?>
      <option value="<?= $s['id_subtareas']; ?>"><?= $s['subtarea']; ?></option>
  <?php
    }
  ?>
</select>