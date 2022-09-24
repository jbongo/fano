@extends('layouts.app2')
@section('content')
    @include('user.delete_user')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Fano</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Utilisateur</a></li>
                        <li class="breadcrumb-item active">Liste des utilisateurs</li>
                    </ol>
                </div>
                <h4 class="page-title">Liste des utilisateurs</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="header-title">Liste des utilisateurs</h4>

                    <div class="tab-content">
                        <div class="tab-pane show active" id="multi-item-preview">
                            <table id="selection-datatable" class="table table-striped dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Email</th>
                                        <th>Rôle</th>
                                        <th>Statut</th>
                                        <th>Modifier</th>
                                        <th>Supprimer</th>

                                    </tr>
                                </thead>


                                <tbody>


                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->role->name }}</td>
                                            @if ($user->isArchive == 0)
                                                <td>Actif</td>
                                                <td><button id="edit"><a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#edit_user{{ $user->id }}" data-id="{{ $user->id }}"><i
                                                                class=" dripicons-pencil"></i></a></button> </td>
                                                <td><button id="delete" value="{{ $user->email }}"><a href="#"
                                                            data-bs-toggle="modal" data-bs-target="#delete_user"
                                                            data-id="{{ $user->id }}"><i
                                                                class=" dripicons-trash"></i></a></button> </td>
                                            @else
                                                <td>Inactif</td>
                                                <td><button id="edit"><a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#edit_user{{ $user->id }}" data-id="{{ $user->id }}"><i
                                                                class=" dripicons-pencil"></i></a></button> </td>
                                                <td><button id="delete"><a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#delete_user" data-id="{{ $user->id }}"><i
                                                                class=" dripicons-trash"></i></a></button> </td>
                                            @endif

                                        </tr>
                                        @include('user.edit_user')
                                    @endforeach

                                </tbody>
                            </table>
                        </div> <!-- end preview-->

                    </div> <!-- end tab-content-->

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div> <!-- end row-->
@endsection
@push('scripts')
@endpush
