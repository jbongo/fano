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

                       <div class="table-responsive">
                           <table class="table table-centered table-borderless table-hover w-100 dt-responsive nowrap" id="products-datatable">
                               <thead class="table-light">
                                   <tr>
                                  
                                       <th>Rôles</th>

                                       <th style="width: 125px;">Action</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   <tr>
                                      
                                       <td><a href="apps-ecommerce-orders-details.html" class="text-body fw-bold">#BM9708</a> </td>
                                      
                                       <td>
                                           <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                           <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                           <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                       </td>
                                   </tr>
                                   <tr>
                                      
                                    <td><a href="apps-ecommerce-orders-details.html" class="text-body fw-bold">#BM9708</a> </td>
                                   
                                    <td>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                                   
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
                            <input type="text" class="form-control" id="floatingInput" >
                            <label for="floatingInput">Rôle</label>
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
@include('layouts.footer')
