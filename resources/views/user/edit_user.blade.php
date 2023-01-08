<div class="modal fade" id="edit_user{{ $user->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modifier cet utilisateur</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="notification">

                </div>
                <form id="postForm{{ $user->id }}" method="POST" action="javascript:void(0)" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-2">
                        <div class="mb-3 col-md-6">
                            <label for="inputPassword4" class="form-label">Email</label>
                            <input type="email" id="email" name="email" value="{{ $user->email }}"
                                required class="form-control"
                                placeholder="Saisissez à nouveau votre email">

                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="inputPassword4" class="form-label">Rôle</label>
                            <select id="inputState" name="role" class="form-select">

                                {{ $roles = App\Models\Role::where('id', '<>', $user->role->id)->get() }}
                                <option value="{{ $user->role->id }}">{{ $user->role->name }}</option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>

                    <div class="row g-2">
                        <div class="mb-3 col-md-6">
                            <label for="inputPassword4" class="form-label">Statut</label>
                            <select id="inputState" name="isArchive" class="form-select">
                                @if ( $user->isArchive==0 )
                                <option value="0">Actif</option>
                                <option value="1">Inactif</option>
                                @else
                                <option value="1">Inactif</option>
                                <option value="0">Actif</option>

                                @endif

                            </select>

                        </div>

                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-primary" id="update" value="update">Valider</button>
                    </div>
                </form>

            </div>

        </div>
      </div>
</div>

