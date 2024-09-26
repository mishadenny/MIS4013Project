<h1>
  Instructors
</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Office</th>
      </tr>
    </thead>
    <tbody>
  <?php 
    while ($instrcutor=$instructors->fetch_assoc()) {
      ?>
      <tr>
        <td><?php echo $instrcutor['instructor_id']; ?></td>
        <td><?php echo $instrcutor['instructor_name'];?></td>
        <td><?php echo $instrcutor['office_number'];?></td>
      </tr>
      <?php
    }
  ?>
    </tbody>
  </table>
</div>
