@extends('layouts.app2')
@section('content')
@include('contact.delete_contact')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Fano</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Contact</a></li>
                    <li class="breadcrumb-item active">Liste des contacts</li>
                </ol>
            </div>
            <h4 class="page-title">Liste des contacts</h4>
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
                                    <th>Nom</th>
                                    <th>Prénom(s)</th>
                                    <th>Email</th>
                                    <th>Contact(s)</th>
                                    <th>Adresse</th>
                                    <th>Modifier</th>
                                    <th>Supprimer</th>

                                </tr>
                            </thead>


                            <tbody>


                                @foreach ($contacts as $contact)
                                    <tr>
                                        <td>{{ $contact->firstname }}</td>
                                        <td>{{ $contact->lastname }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->phone1 }} / {{ $contact->phone2 }}</td>
                                        @if ($contact->isArchive == 0)
                                            <td>Actif</td>
                                            <td><button id="edit"><a href="#"
                                                        data-bs-toggle="modal" data-bs-target="#edit_contact{{ $contact->id }}"
                                                        data-id="{{ $contact->id }}"><i
                                                            class=" dripicons-pencil"></i></a></button> </td>
                                            <td><button id="delete" value="{{ $contact->email }}"><a href="#"
                                                        data-bs-toggle="modal" data-bs-target="#delete_contact"
                                                        data-id="{{ $contact->id }}"><i
                                                            class=" dripicons-trash"></i></a></button> </td>
                                        @else
                                            <td>Inactif</td>
                                            <td><button id="edit"><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#edit_contact{{ $contact->id }}" data-id="{{ $contact->id }}"><i
                                                            class=" dripicons-pencil"></i></a></button> </td>
                                            <td><button id="delete"><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#delete_contact"
                                                        data-id="{{ $contact->id }}"><i
                                                            class=" dripicons-trash"></i></a></button> </td>
                                        @endif

                                    </tr>

                                    @include('contact.edit_contact')
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

