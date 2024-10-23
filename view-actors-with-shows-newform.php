<!-- Modal for Adding New Episodes -->
<div class="modal fade" id="newEpisodesModal" tabindex="-1" aria-labelledby="newEpisodesModallabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newEpisodesModallabel">New Episode</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="iid" class="form-label">Actor</label>
            <?php
              $actorList = selectInstructorsForInput();
              $selectedActor = 0;
              include "view-actor-input-list.php";
            ?>
          </div>
          <div class="mb-3">
            <label for="cid" class="form-label">Show ID</label>
            <input type="number" class="form-control" id="cid" name="cid">
          </div>
          <div class="mb-3">
            <label for="titleepisode" class="form-label">Title Episode</label>
            <input type="text" class="form-control" id="titleepisode" name="titleepisode">
          </div>
          <div class="mb-3">
            <label for="seasonnumber" class="form-label">Season Number</label>
            <input type="text" class="form-control" id="seasonnumber" name="seasonnumber">
          </div>
          <div class="mb-3">
            <label for="episodenumber" class="form-label">Episode Number</label>
            <input type="text" class="form-control" id="episodenumber" name="episodenumber">
          </div>
          <input type="hidden" name="actionType" value="Add">
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
