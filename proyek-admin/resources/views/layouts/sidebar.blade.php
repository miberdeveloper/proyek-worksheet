<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MENU NAVIGATION</li>
    <li class="{{Request::is('admin') ? 'active' : '' }}">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
    </li>
    <li class="{{Request::is('pergudangan') ? 'active' : '' }}">
        <a href="#">
            <i class="fa fa-home"></i> <span>Pergudangan</span>
        </a>
    </li>
    <li class="{{Request::is('ecommerce') ? 'active' : '' }}">
        <a href="#">
            <i class="fa fa-cart-plus"></i> <span>E-Commerce</span>
        </a>
    </li>
    <li class="{{Request::is('ecommerce') ? 'active' : '' }}">
        <a href="#">
            <i class="fa fa-user"></i> <span>Personalia</span>
        </a>
    </li>
    <li class="{{Request::is('ecommerce') ? 'active' : '' }}">
        <a href="#">
            <i class="fa fa-money"></i> <span>Keuangan</span>
        </a>
    </li>
    <li class="{{Request::is('ecommerce') ? 'active' : '' }}">
        <a href="#">
            <i class="fa fa-cart-plus"></i> <span>Simpan & Pinjam</span>
        </a>
    </li>
    <li class="{{Request::is('ecommerce') ? 'active' : '' }}">
        <a href="#">
            <i class="fa fa-plus-square"></i> <span>Login & Register</span>
        </a>
    </li>


</ul>
{{-- <li class="treeview
    {{Request::is('admin/photo') || Request::is('admin/video*') ? 'active' : '' }} ">
        <a href="#">
            <i class="fa fa-photo"></i> <span>Galeri</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="{{Request::is('admin/photo*') ? 'active' : '' }}">
                <a href="{{ route('photo.index') }}"><i class="fa fa-file-image-o"></i> Foto</a>
            </li>
            <li class="{{Request::is('admin/video*') ? 'active' : '' }}">
                <a href="{{ route('video.index') }}"><i class="fa fa-file-movie-o"></i> Video</a>
            </li>
        </ul>
</li> --}}
