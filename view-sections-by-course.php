<h1>
  Episodes by Shows
</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Show Title</th>
      <th>Genre</th>
      <th>Title Episode</th>
      <th>Season Number</th>
      <th>Episode Number</th>
      </tr>
    </thead>
    <tbody>
  <?php 
    while ($section=$sections->fetch_assoc()) {
      ?>
      <tr>
        <td><?php echo $section['show_id']; ?></td>
        <td><?php echo $section['show_title'];?></td>
        <td><?php echo $section['genre'];?></td>
        <td><?php echo $section['episode_title'];?></td>
        <td><?php echo $section['season_number'];?></td>
        <td><?php echo $section['episode_number'];?></td>
      </tr>
      <?php
    }
  ?>
    </tbody>
  </table>
</div>
