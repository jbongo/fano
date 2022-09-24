<div class="modal" tabindex="-1" id="delete_user">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div id="notification">

            </div>
            <form id="postFormDelete" method="POST" action="javascript:void(0)" >
                @csrf
                <p>Voulez vous vraiment supprimer ce utilisateur?</p>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="destroy" value="delete">Confirmer</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
