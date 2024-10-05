<h1>
  Platforms
</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Headquarters</th>
      <th></th>
      </tr>
    </thead>
    <tbody>
  <?php 
    while ($platform=$platforms->fetch_assoc()) {
      ?>
      <tr>
        <td><?php echo $platform['platform_id']; ?></td>
        <td><?php echo $platform['platform_name'];?></td>
        <td><?php echo $platform['headquarters'];?></td>
        <td>
        </td>
      </tr>
      <?php
    }
  ?>
    </tbody>
  </table>
</div>
