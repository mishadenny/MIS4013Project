<h1>
  Shows by Platfom
</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Platform Name</th>
      <th>Show Title</th>
      <th>Genre</th>
      </tr>
    </thead>
    <tbody>
  <?php 
    while ($platform=$platforms->fetch_assoc()) {
      ?>
      <tr>
        <td><?php echo $platform['platform_id']; ?></td>
        <td><?php echo $platform['platform_name'];?></td>
        <td><?php echo $platform['show_title'];?></td>
        <td><?php echo $platform['genre'];?></td>
      </tr>
      <?php
    }
  ?>
    </tbody>
  </table>
</div>
