 <!-- Sidebar -->
 <!-- Color: #343d58 -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="/inicio/">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-shopping-basket"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Mandado a casa<sup>DIY</sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-1">
<div class="sidebar-brand-text mx-3">{{ Auth::user()->nombre }} <sup>{{ Auth::user()->apellido }}</sup></div>
<hr class="sidebar-divider my-1">
<!-- ITEM INICIO -->
    <li class="nav-item">
        <a class="nav-link" href="/inicio/">
            <i class="fas fa-fw fa-bars"></i>
            <span>Inicio</span></a>
    </li>
    @if( Auth::user()->level == "admin")
<!-- ITEM USUARIOS -->
    <li class="nav-item">
        <a class="nav-link" href="/usuarios">
            <i class="fas fa-fw fa-user"></i>
            <span>Usuarios</span></a>
    </li>
<!-- ITEM INVENTARIO -->
    <li class="nav-item">
        <a class="nav-link" href="/inicio/">
            <i class="fas fa-fw fa-shopping-cart"></i>
            <span>Inventario</span></a>
    </li>
    @endif
    @if( Auth::user()->level == "cliente")
<!-- ITEM PEDIDO -->
    <li class="nav-item">
        <a class="nav-link" href="/shopping">
            <i class="fas fa-fw fa-cart-arrow-down"></i>
            <span>Mi pedido</span></a>
    </li>
    @endif
   
<!-- ITEM SALIR -->
<li class="nav-item">
    <a class="nav-link" href="{{ route('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Salir</span></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
    </li>
<!-- ITEM CARGAR MENú -->
    <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>

 <!-- End of Sidebar -->