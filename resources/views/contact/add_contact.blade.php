@include('layouts.header')
@include('layouts.nav')
    <div class="content">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Fano</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Contact</a></li>
                            <li class="breadcrumb-item active">Ajouter un contact</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Ajouter un contact</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <!-- Form row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Ajouter un contact</h4>
                        <p class="text-muted font-14">
                            @if (Session::has('message'))
                                <div class="alert alert-success" role="alert">
                                    {{ Session::get('message') }}
                                </div>
                            @endif
                        </p>

                        <div class="tab-content">
                            <div class="tab-pane show active" id="form-row-preview">
                                <form method="POST" action="{{ route('add_contact') }}">
                                    @csrf
                                    <div class="row g-2">
                                        <div class="mb-3 col-md-6">
                                            <label for="inputEmail4" class="form-label">Nom</label>
                                            <input class="form-control" id="firstname" type="text" name="firstname"
                                                required placeholder="Entrez votre nom">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="inputPassword4" class="form-label">Prénom(s)</label>
                                            <input type="text" id="lastname" name="lastname" required
                                                class="form-control" placeholder="Entrez votre prénom">
                                        </div>
                                    </div>

                                    <div class="row g-2">
                                        <div class="mb-3 col-md-6">
                                            <label for="inputPassword4" class="form-label">Email</label>
                                            <input type="email" id="email" name="email" required
                                                class="form-control" placeholder="Saisissez à nouveau votre email">

                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="inputState" class="form-label">Numéro de téléphone 1</label>
                                            <input type="number" id="phone1" name="phone1" required
                                                class="form-control" placeholder="Numéro de téléphone 1">
                                        </div>

                                    </div>
                                    <div class="row g-2">
                                        <div class="mb-3 col-md-6">
                                            <label for="inputState" class="form-label">Numéro de téléphone 2</label>
                                            <input type="number" id="phone2" name="phone2" required
                                                class="form-control" placeholder="Numéro de téléphone 2">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="inputState" class="form-label">Adresse</label>
                                            <input type="text" id="address" name="address" required
                                                class="form-control" placeholder="Saisissez votre adresse">
                                        </div>

                                    </div>

                                    <div class="row g-2">
                                        <div class="mb-3 col-md-6">
                                            <label for="inputState" class="form-label">Poste</label>
                                            <select id="post" name="post" required
                                            class="form-control">
                                                <option value="manager">Gérant</option>
                                                <option value="commercial">Commercial</option>
                                                <option value="deliverer">Livreur</option>
                                            </select>

                                        </div>

                                    </div>
                                    <button type="submit" class="btn btn-primary">Valider</button>
                                </form>
                            </div> <!-- end preview-->


                        </div> <!-- end tab-content-->

                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div> <!-- End Content -->

    @include('layouts.footer')
@push('scripts')
@endpush
