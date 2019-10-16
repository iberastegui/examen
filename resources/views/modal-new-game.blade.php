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
        <form action="{{ route('game') }}" method="post">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Start</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
