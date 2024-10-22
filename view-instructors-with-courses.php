<div class="row">
  <div class="col">
<h1>Actors with Shows</h1>
  </div>
<?php
  include "view-actors-with-shows-newform.php"
  ?>
</div>
<div class="card-group">
  <?php 
    while ($instructor = $instructors->fetch_assoc()) {
  ?>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><?php echo $instructor['actor_name']; ?></h5>
        <ul class="list-group">
          <?php
            $courses = selectCoursesByInstructors($instructor['actor_id']);
            while ($course = $courses->fetch_assoc()) {
          ?>
            <li class="list-group-item">
             Title: <?php echo $course['show_title']; ?> Title Episode: <?php echo $course['title_episode']; ?> Season: <?php echo $course['season_number']; ?> Episode <?php echo $course['episode_number']; ?>
            </li>
          <?php
            }
          ?>
        </ul>
        <p class="card-text">
          <small class="text-body-secondary">Age: <?php echo $instructor['age']; ?></small>
        </p>
      </div>
    </div>  
  <?php
    }
  ?>
</div>
