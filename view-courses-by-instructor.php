<h1>
  Shows by Actors
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
    while ($course=$courses->fetch_assoc()) {
      ?>
      <tr>
        <td><?php echo $course['show_id']; ?></td>
        <td><?php echo $course['show_title'];?></td>
        <td><?php echo $course['genre'];?></td>
        <td><?php echo $course['title_epsisode'];?></td>
        <td><?php echo $course['season_number'];?></td>
        <td><?php echo $course['episode_number'];?></td>
      </tr>
      <?php
    }
  ?>
    </tbody>
  </table>
</div>
