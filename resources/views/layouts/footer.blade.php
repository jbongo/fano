
                    <!-- Footer Start -->
                    <footer class="footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6">
                                    <script>document.write(new Date().getFullYear())</script> © Fano
                                </div>
                                <div class="col-md-6">
                                    <div class="text-md-end footer-links d-none d-md-block">
                                        <a href="javascript: void(0);">About</a>
                                        <a href="javascript: void(0);">Support</a>
                                        <a href="javascript: void(0);">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>
                    <!-- end Footer -->

                </div> <!-- content-page -->

            </div> <!-- end wrapper-->
        </div>
        <!-- END Container -->


        <!-- Right Sidebar -->
        <div class="end-bar">

            <div class="rightbar-title">
                <a href="javascript:void(0);" class="end-bar-toggle float-end">
                    <i class="dripicons-cross noti-icon"></i>
                </a>
                <h5 class="m-0">Settings</h5>
            </div>

            <div class="rightbar-content h-100" data-simplebar>

                <div class="p-3">
                    <div class="alert alert-warning" role="alert">
                        <strong>Customize </strong> the overall color scheme, sidebar menu, etc.
                    </div>

                    <!-- Settings -->
                    <h5 class="mt-3">Color Scheme</h5>
                    <hr class="mt-1" />

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="color-scheme-mode" value="light"
                            id="light-mode-check" checked />
                        <label class="form-check-label" for="light-mode-check">Light Mode</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="color-scheme-mode" value="dark"
                            id="dark-mode-check" />
                        <label class="form-check-label" for="dark-mode-check">Dark Mode</label>
                    </div>

                    <!-- Left Sidebar-->
                    <h5 class="mt-4">Left Sidebar</h5>
                    <hr class="mt-1" />

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="compact" value="fixed" id="fixed-check"
                            checked />
                        <label class="form-check-label" for="fixed-check">Scrollable</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="compact" value="condensed"
                            id="condensed-check" />
                        <label class="form-check-label" for="condensed-check">Condensed</label>
                    </div>

                   <div class="d-grid mt-4">
                    <button class="btn btn-primary" id="resetBtn">Reset to Default</button>
                   </div>
                </div> <!-- end padding-->

            </div>
        </div>

        <div class="rightbar-overlay"></div>
        <!-- /End-bar -->
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script src="{{asset('assets/js/vendor/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets/js/vendor/dataTables.bootstrap5.js')}}"></script>
        <script src="{{asset('assets/js/vendor/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('assets/js/vendor/responsive.bootstrap5.min.js')}}"></script>
        <script src="{{asset('assets/js/vendor/apexcharts.min.js')}}"></script>
        <script src="{{asset('assets/js/vendor/dataTables.checkboxes.min.js')}}"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!-- bundle -->
        <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
        <script src="{{ asset('assets/js/app.min.js') }}"></script>

        <!-- third party js -->
        <script src="{{ asset('assets/js/vendor/chart.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/jquery.dataTables.min.js') }}"></script>
         <script src="{{ asset('assets/js/vendor/dataTables.bootstrap5.js') }}"></script>
         <script src="{{ asset('assets/js/vendor/dataTables.responsive.min.js') }}"></script>
         <script src="{{ asset('assets/js/vendor/responsive.bootstrap5.min.js') }}"></script>
         <script src="{{ asset('assets/js/vendor/dataTables.buttons.min.js') }}"></script>
         <script src="{{ asset('assets/js/vendor/buttons.bootstrap5.min.js') }}"></script>
         <script src="{{ asset('assets/js/vendor/buttons.html5.min.js') }}"></script>
         <script src="{{ asset('assets/js/vendor/buttons.flash.min.js') }}"></script>
         <script src="{{ asset('assets/js/vendor/buttons.print.min.js') }}"></script>
         <script src="{{ asset('assets/js/vendor/dataTables.keyTable.min.js') }}"></script>
         <script src="{{ asset('assets/js/vendor/dataTables.select.min.js') }}"></script>
         <script src="{{ asset('assets/js/vendor/fixedColumns.bootstrap5.min.js') }}"></script>
         <script src="{{ asset('assets/js/vendor/fixedHeader.bootstrap5.min.js') }}"></script>
        <!-- third party js ends -->

        <!-- demo app -->
        <script src="assets/js/pages/demo.dashboard-projects.js"></script>
        <!-- end demo js-->


         <!-- demo app -->
         <script src="assets/js/pages/demo.datatable-init.js"></script>

         <!-- end demo js-->

        @yield('js')
    </body>
</html>
