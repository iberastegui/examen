<div class="modal" tabindex="-1" role="dialog" id="modal-new-game">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Choose your settings for the new game</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            @csrf
            <div class="form-group">
                <label for="rows">Number of Rows</label>
                <input type="text" class="form-control" id="rows">
            </div>
            <div class="form-group">
                <label for="columns">Number of Columns</label>
                <input type="text" class="form-control" id="columns">
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='start'>Start</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
