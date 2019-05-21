      <!-- sidebar menu: : style can be found in sidebar.less atau MENU -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="<?= !isset($page) && !isset($statusMenu) ? "active" : "" ?>">
          <a href="index.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview <?= $page == "personalia" ? "active" : "" ?>">
        <!-- diatas aktif default active  -->
          <a href="#">
            <i class="fa fa-users"></i> <span>Data Personalia</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?= $page == "personalia" && $statusMenu == "admin" ? "active" : "" ?>"><a href="personalia.php?page=personalia&page2=admin"><i class="fa fa-user"></i> Data</a></li>
          </ul>
        </li>
        <li class="treeview <?= $page == "keuangan" ? "active" : "" ?>">
        
        <!-- diatas aktif default active  -->
          <a href="#">
            <i class="fa fa-file-o"></i> <span>Admin Personalia</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           <li class="<?= $page == "AdminPersonalia" && $statusMenu == "admin" ? "active" : "" ?>"><a href="AdminPersonalia.php?page=AdminPersonalia&page2=admin"><i class="fa fa-users"></i> Data Admin</a></li>
          </ul>
        </li>
        <li class="treeview <?= $page == "simpanpinjam" ? "active" : "" ?>">
        <!-- diatas aktif default active  -->
