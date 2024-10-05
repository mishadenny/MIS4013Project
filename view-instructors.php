<h1>
  Actors
</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Age</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
  <?php 
    while ($instructor=$instructors->fetch_assoc()) {
      ?>
      <tr>
        <td><?php echo $instructor['actor_id']; ?></td>
        <td><?php echo $instructor['actor_name'];?></td>
        <td><?php echo $instructor['age'];?></td>
        <td><a href="courses-by-instructor.php?id=<?php echo $instructor['actor_id']; ?>">Shows</a></td>
      </tr>
      <?php
    }
  ?>
    </tbody>
  </table>
</div>
