             <!-- ========== Left Sidebar Start ========== -->
             <div class="leftside-menu leftside-menu-detached">

                <div class="leftbar-user">
                    <a href="javascript: void(0);">
                        <img src="assets/images/users/avatar-1.jpg" alt="user-image" height="42" class="rounded-circle shadow-sm">
                        <span class="leftbar-user-name">Dominic Poisson</span>
                    </a>
                </div>

                <!--- Sidemenu -->
                <ul class="side-nav">



                    <li class="side-nav-item">
                        <a href="apps-calendar.html" class="side-nav-link">
                            <i class="uil-calender"></i>
                            <span> Tableau de board </span>
                        </a>
                    </li>

                   <!-- Contact -->
                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarEmail" aria-expanded="false" aria-controls="sidebarEmail" class="side-nav-link">
                            <i class="uil-envelope"></i>
                            <span> Contact </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarEmail">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="{{ route('add_contact') }}">Ajouter un contact</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact_list') }}">Liste de tous les contacts</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- Utilisateur -->
                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarEmail" aria-expanded="false" aria-controls="sidebarEmail" class="side-nav-link">
                            <i class="uil-envelope"></i>
                            <span> Utilisateur </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarEmail">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="{{ route('add_user') }}">Ajouter un utilisateur</a>
                                </li>
                                <li>
                                    <a href="{{ route('user_list') }}">Liste de tous les utilisateurs</a>
                                </li>
                            </ul>
                        </div>
                    </li>


                    <li class="side-nav-item">
                        <a href="apps-calendar.html" class="side-nav-link">
                            <i class="uil-calender"></i>
                            <span> Paramètres </span>
                        </a>
                    </li>




                <!-- end Help Box -->
                <!-- End Sidebar -->

                <div class="clearfix"></div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->
            <div class="content-page">
