<div class="modal fade" id="edit_contact{{ $contact->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modifier cet utilisateur</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="notification">

                </div>
                <form id="postForm{{ $contact->id }}" method="POST" action="{{ route('update_contact',['contact_id'=>$contact->id])  }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row g-2">
                        <div class="mb-3 col-md-6">
                            <label for="inputEmail4" class="form-label">Nom</label>
                            <input class="form-control" id="firstname" type="text" name="firstname"
                                value="{{ $contact->firstname }}" required placeholder="Entrez votre nom">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="inputPassword4" class="form-label">Prénom(s)</label>
                            <input type="text" id="lastname" name="lastname" value="{{ $contact->lastname }}"
                                required class="form-control" placeholder="Entrez votre prénom">
                        </div>
                    </div>

                    <div class="row g-2">
                        <div class="mb-3 col-md-6">
                            <label for="inputPassword4" class="form-label">Email</label>
                            <input type="email" id="email" name="email" value="{{ $contact->email }}" required
                                class="form-control" placeholder="Saisissez à nouveau votre email">

                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="inputState" class="form-label">Numéro de téléphone 1</label>
                            <input type="number" id="phone1" name="phone1" value="{{ $contact->phone1 }}" required
                                class="form-control" placeholder="Numéro de téléphone 1">
                        </div>

                    </div>
                    <div class="row g-2">
                        <div class="mb-3 col-md-6">
                            <label for="inputState" class="form-label">Numéro de téléphone 2</label>
                            <input type="number" id="phone2" name="phone2" value="{{ $contact->phone2 }}" required
                                class="form-control" placeholder="Numéro de téléphone 2">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="inputState" class="form-label">Adresse</label>
                            <input type="text" id="address" name="address" value="{{ $contact->address }}" required
                                class="form-control" placeholder="Saisissez votre adresse">
                        </div>

                    </div>
                    <div class="row g-2">
                        <div class="mb-3 col-md-6">
                            <label for="inputState" class="form-label">Poste</label>
                            <select id="post" name="post" required class="form-control">

                                @php
                                    use App\Models\Manager;
                                    use App\Models\Commercial;
                                    use App\Models\Deliverer;
                                @endphp

                                @if (App\Models\Manager::where('contact_id', '=', $contact->id)->where('isArchive', '=', 0)->first())

                                    <option value="manager">Gérant</option>
                                    <option value="commercial">Commercial</option>
                                    <option value="deliverer">Livreur</option>
                                    <input type="hidden" name="ancien_post" value="manager" />
                                    
                                @elseif (App\Models\Commercial::where('contact_id', '=', $contact->id)->where('isArchive', '=', 0)->first())


                                    <option value="commercial">Commercial</option>
                                    <option value="manager">Gérant</option>
                                    <option value="deliverer">Livreur</option>
                                    <input type="hidden" name="ancien_post" value="commercial" />
                                @elseif (App\Models\Deliverer::where('contact_id', '=', $contact->id)->where('isArchive', '=', 0)->first())

                                    <option value="deliverer">Livreur</option>
                                    <option value="commercial">Commercial</option>
                                    <option value="manager">Gérant</option>
                                    <input type="hidden" name="ancien_post" value="deliverer" />
                                @endif



                            </select>

                        </div>

                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="update" value="update">Valider</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>
