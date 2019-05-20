      <!-- sidebar menu: : style can be found in sidebar.less atau MENU -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="<?= !isset($page) && !isset($statusMenu) ? "active" : "" ?>">
          <a href="index.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview <?= $page == "pergudangan" ? "active" : "" ?>">
        <!-- diatas aktif default active  -->
          <a href="#">
            <i class="fa fa-industry"></i> <span>Pergudangan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?= $page == "pergudangan" && $statusMenu == "home" ? "active" : "" ?>"><a href="pergudangan.php?page=pergudangan&page2=home"><i class="fa fa-home"></i> Home</a></li>
            <li class="<?= $page == "pergudangan" && $statusMenu == "admin" ? "active" : "" ?>"><a href="pergudangan.php?page=pergudangan&page2=admin"><i class="fa fa-users"></i> Admin Site</a></li>
          </ul>
        </li>
        <li class="treeview <?= $page == "ecommerce" ? "active" : "" ?>">
        <!-- diatas aktif default active  -->
        <a href="#">
            <i class="fa fa-industry"></i> <span>Simpan Pinjam</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?= $page == "simpanpinjam" && $statusMenu == "home" ? "active" : "" ?>"><a href="simpanpinjam.php?page=simpanpinjam&page3=home"><i class="fa fa-home"></i> Home</a></li>
            <li class="<?= $page == "simpanpinjam" && $statusMenu == "admin" ? "active" : "" ?>"><a href="simpanpinjam.php?page=simpanpinjam&page3=admin"><i class="fa fa-users"></i> Admin Site</a></li>
          </ul>
        </li>
        <li class="treeview <?= $page == "ecommerce" ? "active" : "" ?>">
        <!-- diatas aktif default active  -->
          <a href="#">
            <i class="fa fa-cart-plus"></i> <span>E-Commerce</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?= $page == "ecommerce" && $statusMenu == "home" ? "active" : "" ?>"><a href="index.php?page=ecommerce&page2=home"><i class="fa fa-home"></i> Home</a></li>
            <li class="<?= $page == "ecommerce" && $statusMenu == "admin" ? "active" : "" ?>"><a href="index.php?page=ecommerce&page2=admin"><i class="fa fa-users"></i> Admin Site</a></li>
          </ul>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-th"></i> <span>Widgets</span>
          </a>
        </li>
      </ul>