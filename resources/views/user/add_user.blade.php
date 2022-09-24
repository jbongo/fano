@extends('layouts.app2')
@section('content')


<div class="content">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Fano</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Utilisateur</a></li>
                        <li class="breadcrumb-item active">Ajouter un utilisateur</li>
                    </ol>
                </div>
                <h4 class="page-title">Ajouter un utilisateur</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <!-- Form row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Ajouter un utilisateur</h4>
                    <p class="text-muted font-14">
                        @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('message') }}
                            </div>
                        @endif
                    </p>

                    <div class="tab-content">
                        <div class="tab-pane show active" id="form-row-preview">
                            <form method="POST" action="{{ route('add_user') }}">
                                @csrf
                                <div class="row g-2">
                                    <div class="mb-3 col-md-6">
                                        <label for="inputEmail4" class="form-label">Email</label>
                                        <input class="form-control" id="email" type="email" name="email"
                                            required placeholder="Entrez votre adresse mail">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="inputPassword4" class="form-label">Mot de passe</label>
                                        <input type="password" id="password" name="password" required
                                            class="form-control" placeholder="Entrez votre motre de passe">
                                    </div>
                                </div>

                                <div class="row g-2">
                                    <div class="mb-3 col-md-6">
                                        <label for="inputPassword4" class="form-label">Comirmation du mot de
                                            passe</label>
                                        <input type="password" id="password_confirmation" name="password_confirmation"
                                            required class="form-control"
                                            placeholder="Saisissez à nouveau votre motre de passe">

                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label for="inputState" class="form-label">Role</label>
                                        <select id="inputState" name="role" class="form-select">
                                            @foreach ($role as $role)
                                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                                            @endforeach

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
@endsection
@push('scripts')

@endpush
