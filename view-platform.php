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
          <form method="post" action="shows-by-platform.php">
            <input type="hidden" name="cid" value="<?php echo $platform['platform_id']; ?>">
            <button type="submit" class="btn btn-primary">Shows</button>
          </form>
        </td>
      </tr>
      <?php
    }
  ?>
    </tbody>
  </table>
</div>
