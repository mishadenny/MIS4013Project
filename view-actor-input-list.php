<select class="form-select" id="iid" name="iid">
<?php
while ($actorItem= $actorList->fetch_assoc()){
  $selText ="";
  if($selectedActor == $actorItem['actor_id']) {
    $selText="selected";
  }
?>
  <option value="<?php echo $actorItem['actor_id']; ?>" <?=$selText?>><?php echo $actorItem['actor_name']; ?></option>
<?php
}
?>
</select>
