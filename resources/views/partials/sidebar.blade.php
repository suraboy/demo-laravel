<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SuksaMartket</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route("home")}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>หน้าหลัก</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        เมนูจัดการ
    </div>


    <!-- Nav Item - Order -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('shops.info')}}">
            <i class="fas fa-fw fa-store"></i>
            <span>จัดการร้านค้า</span></a>
    </li>
    <!-- Nav Item - Order -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('orders.index')}}">
            <i class="fas fa-fw fa-shopping-cart"></i>
            <span>รายการคำสั่งซื้อ</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        รายงาน
    </div>

    <!-- Nav Item - Agent Report -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('agent-report.index')}}">
            <i class="fas fa-fw fa-file"></i>
            <span>รายงานสถิติ</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <div class="sidebar-heading">
        การตั้งค่า
    </div>

    <!-- Nav Item - Setting -->
    <li class="nav-item">
        <a class="nav-link" href="{{route("partners.info",["id"=>auth::user()->id])}}">
            <i class="fas fa-fw fa-user"></i>
            <span>ข้อมูลผู้ใช้งาน</span></a>
    </li>
    <!-- Nav Item - Log out -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-out-alt fa-fw"></i>
            <span>ออกจากระบบ</span>
        </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
