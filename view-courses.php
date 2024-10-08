<div class="row">
  <div class="col">
    <h1>Shows</h1>
  </div>
  <div class="col-auto">
  <?php
  include "view-shows-newform.php"
    ?>
  </div>
</div>
<h1>
  Shows
</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Title</th>
      <th>Genre</th>
      <th></th>
      </tr>
    </thead>
    <tbody>
  <?php 
    while ($course=$courses->fetch_assoc()) {
      ?>
      <tr>
        <td><?php echo $course['show_id']; ?></td>
        <td><?php echo $course['show_title'];?></td>
        <td><?php echo $course['genre'];?></td>
        <td>
          <form method="post" action="sections-by-course.php">
            <input type="hidden" name="cid" value="<?php echo $course['show_id']; ?>">
            <button type="submit" class="btn btn-primary">Episodes</button>
          </form>
        </td>
      </tr>
      <?php
    }
  ?>
    </tbody>
  </table>
</div>
