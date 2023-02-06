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
                            <a href="{{route('dashboard.index')}}" class="side-nav-link">
                                <i class="uil-presentation-line "></i>
                                <span> Tableau de board </span>
                            </a>
                        </li>

                       <!-- Contact -->
                        <li class="side-nav-item">
                            <a href="apps-calendar.html" class="side-nav-link">
                                <i class="uil-chart"></i>
                                <span> Statistiques </span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('profil') }}" class="side-nav-link">
                                <i class="uil-calender"></i>
                                <span> Profil </span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebaruser" aria-expanded="false" aria-controls="sidebarEmail" class="side-nav-link">
                                <i class="uil-user"></i>
                                <span> Utilisateurs </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebaruser">
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
                            <a data-bs-toggle="collapse" href="#sidebarcontact" aria-expanded="false" aria-controls="sidebarEmail" class="side-nav-link">
                                <i class="uil-user-square"></i>
                                <span> Employé </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarcontact">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="{{ route('add_contact') }}">Ajouter un employé</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('contact_list') }}">Liste de tous les employés</a>
                                        <a href="apps-email-inbox.html">Gestion</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a href="apps-calendar.html" class="side-nav-link">
                                <i class="uil-wallet"></i>
                                <span> Clients </span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="apps-calendar.html" class="side-nav-link">
                                <i class="uil-wallet"></i>
                                <span> Fournisseurs </span>
                            </a>
                        </li>


                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#droits" aria-expanded="false" aria-controls="droits" class="side-nav-link">
                                <i class="uil-folder-lock"></i>
                                <span> Droits </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="droits">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="{{route('role.index')}}">Rôles</a>
                                    </li>
                                    <li>
                                        <a href="{{route('permission.index')}}">Permissions</a>
                                    </li>
                                </ul>
                            </div>
                        </li>




                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#parametre" aria-expanded="false" aria-controls="parametre" class="side-nav-link">
                                <i class="uil-cog"></i>
                                <span> Paramètres </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="parametre">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="{{route('role.index')}}">Entreprise</a>
                                    </li>
                                </ul>
                            </div>
                        </li>





                    <!-- end Help Box -->
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>
                    <!-- Sidebar -left -->

                </div>
                <!-- Left Sidebar End -->
                <div class="content-page">
