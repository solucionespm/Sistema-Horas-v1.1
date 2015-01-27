<select name="project" class="form-control theproject">
  <option value="0" selected>Select a project...</option>
  <?php
    foreach($projects as $p){
  ?>
      <option value="<?= $p['id_proyectos']; ?>"><?= $p['proyecto']; ?></option>
  <?php
    }
  ?>
</select>