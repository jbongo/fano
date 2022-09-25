@include('layouts.header')
@include('layouts.nav')

<div class="content-page">
    <div class="content">
        
       <!-- start page title -->
       <div class="row">
           <div class="col-12">
               <div class="page-title-box">
                   <div class="page-title-right">
                       <ol class="breadcrumb m-0">
                           <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                           <li class="breadcrumb-item"><a href="javascript: void(0);">eCommerce</a></li>
                           <li class="breadcrumb-item active">Orders</li>
                       </ol>
                   </div>
                   <h4 class="page-title">Orders</h4>
               </div>
           </div>
       </div>
       <!-- end page title --> 

       <div class="row">
           <div class="col-12">
               <div class="card">
                   <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-5">
                            <a href="javascript:void(0);" class="btn btn-primary mb-2"  data-bs-toggle="modal" data-bs-target="#standard-modal"><i class="mdi mdi-plus-circle me-2"></i> Nouveau rôle</a>
                        </div>
                        <div class="col-sm-7">
                            <div class="text-sm-end">
                                <button type="button" class="btn btn-success mb-2 me-1"><i class="mdi mdi-cog"></i></button>
                                <button type="button" class="btn btn-light mb-2 me-1">Import</button>
                                <button type="button" class="btn btn-light mb-2">Export</button>
                            </div>
                        </div><!-- end col-->
                    </div>
                    <div class="row">
                        <div class="col-6">
                            @if (session('message'))       
                                <div class="alert alert-success text-secondary alert-dismissible fade in">
                                    <i class="dripicons-checkmark me-2"></i>
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <a href="#" class="alert-link"><strong> {{ session('message') }}</strong></a> 
                                </div>
                            @endif 
                            @if ($errors->has('role'))
                                <br>
                                <div class="alert alert-warning text-secondary " role="alert">
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                                    <strong>{{$errors->first('role')}}</strong> 
                                </div>
                            @endif

                        </div>
                    </div>
                   
                       <div class="table-responsive">
                           <table class="table table-centered table-borderless table-hover w-100 dt-responsive nowrap" id="products-datatable">
                               <thead class="table-light">
                                   <tr>
                                  
                                       <th>Rôles</th>
                                       <th>Statut</th>

                                       <th style="width: 125px;">Action</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   @foreach ($roles as $role)
                                       
                                  
                                    <tr>
                                      
                                        <td><a href="apps-ecommerce-orders-details.html" class="text-body fw-bold">{{$role->name}}</a> </td>
                                        <td>
                                            @if($role->archive == false) <span class="badge bg-success">Actif</span>
                                            @else<span class="badge bg-warning">Archivé</span>@endif
                                        </td>
                                      
                                        <td>
                                           {{-- <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a> --}}
                                           <a href="javascript:void(0);" class="action-icon edit-role text-success"> <i class="mdi mdi-square-edit-outline"></i></a>
                                           @if($role->archive == false)
                                           <a data-href="{{route('role.archive', $role->id)}}" style="cursor: pointer;" class="action-icon archive-role text-warning"> <i class="mdi mdi-archive-arrow-down"></i></a>
                                           @else
                                           <a data-href="{{route('role.unarchive', $role->id)}}" style="cursor: pointer;" class="action-icon unarchive-role text-success"> <i class="mdi mdi-archive-arrow-up"></i></a>
                                           @endif
                                        </td>
                                    </tr>
                                   @endforeach
                                   
                               </tbody>
                           </table>
                       </div>
                   </div> <!-- end card-body-->
               </div> <!-- end card-->
           </div> <!-- end col -->
       </div>
       <!-- end row -->  
        
    </div> <!-- End Content -->
    <div id="standard-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="standard-modalLabel">Ajouter un rôle</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="{{route('role.store')}}" method="post">
                <div class="modal-body">
                
                    @csrf
                    <div class="col-lg-12">
                        
                        <div class="form-floating mb-3">
                            <input type="text" name="role" value="{{old('role') ? old('role') : ''}}" class="form-control" id="floatingInput" >
                            <label for="floatingInput">Rôle</label>
                            @if ($errors->has('role'))
                                <br>
                                <div class="alert alert-warning text-secondary " role="alert">
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                                    <strong>{{$errors->first('role')}}</strong> 
                                </div>
                            @endif
                        </div>
                        
                        
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>

                </div>
            </form>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->




</div> <!-- content-page -->

@section('js')
<script>
    $(function() {
        $.ajaxSetup({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
        })
        $('[data-toggle="tooltip"]').tooltip()
        $('body').on('click','a.archive-role',function(event) {
            let that = $(this)
            event.preventDefault();

            const swalWithBootstrapButtons = swal.mixin({
            confirmButtonClass: 'btn btn-success',
            cancelButtonClass: 'btn btn-danger',
            buttonsStyling: false,
            });

            swalWithBootstrapButtons.fire({
            title: 'Archiver',
            text: "Confirmer ?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Oui',
            cancelButtonText: 'Non',
            reverseButtons: true
            }).then((result) => {
            if (result.isConfirmed) {
                
                $('[data-toggle="tooltip"]').tooltip('hide')
                    $.ajax({                        
                        url: that.attr('data-href'),
                        type: 'PUT',
                        success: function(data){
                            // document.location.reload();
                        },
                        error : function(data){
                        console.log(data);
                        }
                    })
                    .done(function () {

                        swalWithBootstrapButtons.fire(
                            'Archivé',
                            '',
                            'success'
                        )
                            document.location.reload();

                            // that.parents('tr').remove();
                    })
               

            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                'Annulé',
                'Rôle non archivé :)',
                'error'
                )
            }
            }); 
            })

    });


</script>

<script>

    // Désarchiver

    $(function() {
        $.ajaxSetup({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
        })
        $('[data-toggle="tooltip"]').tooltip()
        $('body').on('click','a.unarchive-role',function(event) {
            let that = $(this)
            event.preventDefault();
            
            const swalWithBootstrapButtons = swal.mixin({
            confirmButtonClass: 'btn btn-success',
            cancelButtonClass: 'btn btn-danger',
            buttonsStyling: false,
            });

            swalWithBootstrapButtons.fire({
            title: 'Désarchiver',
            text: "Confirmer ?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Oui',
            cancelButtonText: 'Non',
            reverseButtons: true
            }).then((result) => {
            if (result.isConfirmed) {
                
                $('[data-toggle="tooltip"]').tooltip('hide')
                    $.ajax({                        
                        url:that.attr('data-href'),
                        // url:"/role/desarchiver/2",
                        
                        type: 'POST',
                        success: function(data){
                           
                            // document.location.reload();
                        },
                        error : function(data){
                        console.log(data);
                        }
                    })
                    .done(function () {

                        swalWithBootstrapButtons.fire(
                            'Désarchivé',
                            '',
                            'success'
                            )
                        document.location.reload();
                    })
                

            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                'Annulé',
                'Rôle non désarchivé :)',
                'error'
                )
            }
            }); 
            })

    });
   

</script>
@endsection
@include('layouts.footer')
