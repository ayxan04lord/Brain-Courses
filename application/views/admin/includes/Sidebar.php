<nav class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 navbar-light bg-white border-bottom border-bottom-lg-0 border-end-lg" id="navbarVertical">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler ms-n2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand py-lg-2 mb-lg-5 px-lg-6 me-0" href="<?php echo base_url('admin/dashboard'); ?>">
            <img src="https://preview.webpixels.io/web/img/logos/clever-primary.svg" alt="...">
        </a>
        <!-- User menu (mobile) -->
        <div class="navbar-user d-lg-none">
            <!-- Dropdown -->
            <div class="dropdown">
                <!-- Toggle -->
                <a href="#" id="sidebarAvatar" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar-parent-child">
                        <img alt="Image Placeholder" src="https://images.unsplash.com/photo-1548142813-c348350df52b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar- rounded-circle">
                        <span class="avatar-child avatar-badge bg-success"></span>
                    </div>
                </a>
                <!-- Menu -->
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="sidebarAvatar">
                    <hr class="dropdown-divider">
                    <a href="#" class="dropdown-item">Logout</a>
                </div>
            </div>
        </div>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidebarCollapse">
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#sidebar-projects" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebar-projects"><i class="bi bi-briefcase"></i>Courses</a>
                    <div class="collapse" id="sidebar-projects">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item"><a href="<?php echo base_url('admin/course_create'); ?>" class="nav-link">Create</a></li>
                            <li class="nav-item"><a href="<?php echo base_url('admin/course_list'); ?>" class="nav-link">List</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
            
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#sidebar-projects1" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebar-projects"><i class="bi bi-arrow-left-right"></i>Slider</a>
                    <div class="collapse" id="sidebar-projects1">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item"><a href="<?php echo base_url('admin/slider_create'); ?>" class="nav-link">Create</a></li>
                            <li class="nav-item"><a href="<?php echo base_url('admin/slider_list'); ?>" class="nav-link">List</a></li>
                        </ul>
                    </div>
                </li>



            </ul>

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#sidebar-projects2" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebar-projects"><i class="bi bi-people"></i></i>Partners</a>
                    <div class="collapse" id="sidebar-projects2">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item"><a href="<?php echo base_url('admin/partners_create'); ?>" class="nav-link">Create</a></li>
                            <li class="nav-item"><a href="<?php echo base_url('admin/partners_list'); ?>" class="nav-link">List</a></li>
                        </ul>
                    </div>
                </li>
            </ul>

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#sidebar-projects3" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebar-projects"><i class="bi bi-people"></i></i>Category</a>
                    <div class="collapse" id="sidebar-projects3">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item"><a href="<?php echo base_url('admin/category_create'); ?>" class="nav-link">Create</a></li>
                            <li class="nav-item"><a href="<?php echo base_url('admin/category_list'); ?>" class="nav-link">List</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
            <!-- Divider -->
            <hr class="navbar-divider my-5 opacity-20">
            <!-- Navigation -->

            <!-- Push content down -->
            <div class="mt-auto"></div>
            <!-- User (md) -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-person-square"></i> Account
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-box-arrow-left"></i> Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>