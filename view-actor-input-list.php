<select class="form-select" id="iid" name="iid">
<?php
while ($actorItem= $actorList->fetch_assoc()){
?>
  <option value="<?php echo $actorItem['actor_id']; ?>"><?php echo $actorItem['actor_name']; ?></option>
<?php
}
?>
</select>
