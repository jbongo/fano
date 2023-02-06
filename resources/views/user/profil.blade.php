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
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Profil</a></li>

                    </ol>
                </div>
                <h4 class="page-title">Profil</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-xl-4 col-lg-5">
            <div class="card text-center">
                <div class="card-body">
                    <img src="assets/images/users/avatar-1.jpg" class="rounded-circle avatar-lg img-thumbnail"
                    alt="profile-image">

                    <h4 class="mb-0 mt-2">{{$contact->lastname}} {{$contact->firstname}}</h4>

                    <div class="text-start mt-3">

                        <p class="text-muted mb-2 font-13"><strong>Nom complet :</strong> <span class="ms-2">{{$contact->firstname}} {{$contact->lastname}}</span></p>

                        <p class="text-muted mb-2 font-13"><strong>Numéro de téléphone :</strong><span class="ms-2">{{$contact->phone1}} @if ($contact->phone2!=null)

                          /  {{ $contact->phone2}} @endif </span></p>

                        <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span class="ms-2 ">{{$contact->email}}</span></p>

                        <p class="text-muted mb-1 font-13"><strong>Adresse :</strong> <span class="ms-2">{{$contact->address}}</span></p>



                    </div>


                </div> <!-- end card-body -->
            </div> <!-- end card -->

        </div> <!-- end col-->

        <div class="col-xl-8 col-lg-7">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-pills bg-nav-pills nav-justified mb-3">
                        <li class="nav-item">
                            <a href="#aboutme" data-bs-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                                Informations générales
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#password" data-bs-toggle="tab" aria-expanded="true" class="nav-link rounded-0 active">
                                Changement de mot de passe
                            </a>
                        </li>

                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane" id="aboutme">

                            <h5 class="text-uppercase"><i class="mdi mdi-briefcase me-1"></i>
                                Modifier mes Informations</h5>

                                <form id="postForm{{ $contact->id }}" method="POST" action="{{route('update_contact',['contact_id'=>$contact->id])}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row g-2">
                                        <div class="mb-3 col-md-6">
                                            <label for="inputEmail4" class="form-label">Nom</label>
                                            <input class="form-control" id="firstname" type="text" name="firstname" value="{{ $contact->firstname }}"
                                                required placeholder="Entrez votre nom">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="inputPassword4" class="form-label">Prénom(s)</label>
                                            <input type="text" id="lastname" name="lastname" value="{{ $contact->lastname }}" required
                                                class="form-control" placeholder="Entrez votre prénom">
                                        </div>
                                    </div>

                                    <div class="row g-2">
                                        <div class="mb-3 col-md-6">
                                            <label for="inputPassword4" class="form-label">Email</label>
                                            <input type="email" id="email" name="email" value="{{ $contact->email }}"
                                                required class="form-control"
                                                placeholder="Saisissez à nouveau votre email">

                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="inputState" class="form-label">Numéro de téléphone 1</label>
                                            <input type="number" id="phone1" name="phone1" value="{{ $contact->phone1 }}"
                                                required class="form-control"
                                                placeholder="Numéro de téléphone 1">
                                        </div>

                                    </div>
                                    <div class="row g-2">
                                        <div class="mb-3 col-md-6">
                                            <label for="inputState" class="form-label">Numéro de téléphone 2</label>
                                            <input type="number" id="phone2" name="phone2" value="{{ $contact->phone2 }}"
                                                required class="form-control"
                                                placeholder="Numéro de téléphone 2">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="inputState" class="form-label">Adresse</label>
                                            <input type="text" id="address" name="address" value="{{ $contact->address }}"
                                                required class="form-control"
                                                placeholder="Saisissez votre adresse">
                                        </div>

                                    </div>

                                        <button type="submit" class="btn btn-primary" id="update" value="update">Valider</button>

                                </form>

                        </div> <!-- end tab-pane -->
                        <!-- end about me section content -->

                        <div class="tab-pane show active" id="timeline">

                            <form method="POST" action="{{ route('reset_password',['user_id'=>$user->id]) }}">
                                @csrf

                                <!-- Email Address -->
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input class="form-control" id="email" type="email" name="email"
                                        value="{{ $contact->email }}" required placeholder="Entrez votre adresse mail">
                                </div>
                                <!-- Password -->
                                <div class="mb-3">
                                    <label for="password" class="form-label">Mot de passe</label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="password" name="password" required
                                            class="form-control" placeholder="Entrez votre motre de passe">
                                        <div class="input-group-text" data-password="false">
                                            <span class="password-eye"></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Confirm Password -->
                                <div class="mb-3">
                                    <label for="password" class="form-label">Confirmation du mot de passe</label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="password_confirmation" name="password_confirmation"
                                            required class="form-control" placeholder="Entrez votre motre de passe">
                                        <div class="input-group-text" data-password="false">
                                            <span class="password-eye"></span>
                                        </div>
                                    </div>
                                </div>


                                <div class="mb-3 text-center">
                                    <button class="btn btn-primary" type="submit"> Réinitialiser le mot de passe
                                    </button>
                                </div>

                            </form>

                        </div>
                        <!-- end timeline content-->

                        <div class="tab-pane" id="settings">
                            <form>
                                <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Personal Info</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="firstname" class="form-label">First Name</label>
                                            <input type="text" class="form-control" id="firstname" placeholder="Enter first name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="lastname" class="form-label">Last Name</label>
                                            <input type="text" class="form-control" id="lastname" placeholder="Enter last name">
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->

                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="userbio" class="form-label">Bio</label>
                                            <textarea class="form-control" id="userbio" rows="4" placeholder="Write something..."></textarea>
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="useremail" class="form-label">Email Address</label>
                                            <input type="email" class="form-control" id="useremail" placeholder="Enter email">
                                            <span class="form-text text-muted"><small>If you want to change email please <a href="javascript: void(0);">click</a> here.</small></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="userpassword" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="userpassword" placeholder="Enter password">
                                            <span class="form-text text-muted"><small>If you want to change password please <a href="javascript: void(0);">click</a> here.</small></span>
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->

                                <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-office-building me-1"></i> Company Info</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="companyname" class="form-label">Company Name</label>
                                            <input type="text" class="form-control" id="companyname" placeholder="Enter company name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="cwebsite" class="form-label">Website</label>
                                            <input type="text" class="form-control" id="cwebsite" placeholder="Enter website url">
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->

                                <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-earth me-1"></i> Social</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="social-fb" class="form-label">Facebook</label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="mdi mdi-facebook"></i></span>
                                                <input type="text" class="form-control" id="social-fb" placeholder="Url">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="social-tw" class="form-label">Twitter</label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="mdi mdi-twitter"></i></span>
                                                <input type="text" class="form-control" id="social-tw" placeholder="Username">
                                            </div>
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="social-insta" class="form-label">Instagram</label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="mdi mdi-instagram"></i></span>
                                                <input type="text" class="form-control" id="social-insta" placeholder="Url">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="social-lin" class="form-label">Linkedin</label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="mdi mdi-linkedin"></i></span>
                                                <input type="text" class="form-control" id="social-lin" placeholder="Url">
                                            </div>
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="social-sky" class="form-label">Skype</label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="mdi mdi-skype"></i></span>
                                                <input type="text" class="form-control" id="social-sky" placeholder="@username">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="social-gh" class="form-label">Github</label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="mdi mdi-github"></i></span>
                                                <input type="text" class="form-control" id="social-gh" placeholder="Username">
                                            </div>
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->

                                <div class="text-end">
                                    <button type="submit" class="btn btn-success mt-2"><i class="mdi mdi-content-save"></i> Save</button>
                                </div>
                            </form>
                        </div>
                        <!-- end settings content-->

                    </div> <!-- end tab-content -->
                </div> <!-- end card body -->
            </div> <!-- end card -->
        </div> <!-- end col -->
    </div>
    <!-- end row-->

</div>

@include('layouts.footer')
@push('scripts')
@endpush
