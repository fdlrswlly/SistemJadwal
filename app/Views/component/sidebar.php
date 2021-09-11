<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('theme'); ?>home.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SI-DULE<sup>MIQAT</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('Home')?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Data Master
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo base_url('Jadwal')?>" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-calendar-alt"></i>
                    <span>Jadwal Pelajaran</span>
                </a>
                
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="<?php echo base_url('theme'); ?>/theme/buttons.html">Buttons</a>
                        <a class="collapse-item" href="<?php echo base_url('theme'); ?>/theme/cards.html">Cards</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <?php if (in_groups('admin')):?>
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo base_url('Kelas')?>" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-door-open"></i>
                    <span>Kelas</span>
                </a>
            <?php endif; ?>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="<?php echo base_url('theme'); ?>/theme/utilities-color.html">Colors</a>
                        <a class="collapse-item" href="<?php echo base_url('theme'); ?>/theme/utilities-border.html">Borders</a>
                        <a class="collapse-item" href="<?php echo base_url('theme'); ?>/theme/utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="<?php echo base_url('theme'); ?>/theme/utilities-other.html">Other</a>
                    </div>
                </div>
            </li>
            
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo base_url('Guru'); ?>" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <span>Guru</span>
                </a>
                </li>
            
            <?php if (in_groups('admin')):?>
                <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo base_url('Pelajaran'); ?>" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fa fa-book" aria-hidden="true"></i>
                    <span>Data Pelajaran</span>
                    </a>
            <?php endif; ?>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <li class="nav-item">
                    <a class="nav-link collapsed" href="<?php echo base_url('logout'); ?>" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fa fa-sign-out-alt" aria-hidden="true"></i>
                    <span>Logout</span>
                    </a>
            <!-- Heading -->
            

            

        </ul>
        <!-- End of Sidebar -->