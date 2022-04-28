<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                @role('dokter')
                    <li> <a class="waves-effect waves-dark" href="/dokter" aria-expanded="false"><i
                                class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a>
                    </li>
                @endrole
                @role('admin')
                    <li> <a class="waves-effect waves-dark" href="/administrator/" aria-expanded="false"><i
                                class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a>
                    </li>
                @endrole
                @role('admin')
                    <li> <a class="waves-effect waves-dark" href="/administrator/data-pasien" aria-expanded="false"><i
                                class="fa fa-table"></i><span class="hide-menu">Data Pasien</span></a>
                    </li>
                @endrole
                @role('dokter')
                    <li> <a class="waves-effect waves-dark" href="/dokter/daftar-pasien" aria-expanded="false"><i
                                class="fa fa-user-circle-o"></i><span class="hide-menu">Data Pasien</span></a>
                    </li>
                @endrole
                @role('admin')
                    <li> <a class="waves-effect waves-dark" href="/administrator/spesialis" aria-expanded="false"><i
                                class="fa fa-table"></i><span class="hide-menu">Spesialis</span></a>
                    </li>
                @endrole
                @role('admin')
                    <li> <a class="waves-effect waves-dark" href="/administrator/data-dokter" aria-expanded="false"><i
                                class="fa fa-table"></i><span class="hide-menu">Data Dokter</span></a>
                    </li>
                @endrole
                @role('admin')
                    <li> <a class="waves-effect waves-dark" href="/administrator/data-contact" aria-expanded="false"><i
                                class="fa fa-smile-o"></i><span class="hide-menu">Contact</span></a>
                    </li>
                @endrole
            </ul>
            <div class="text-center mt-4">
                <a href="{{ route('logout') }}"
                    class="btn waves-effect waves-light btn-info hidden-md-down text-white">Logout</a>
            </div>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
