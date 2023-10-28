<ul class="menu-inner py-1">
    <!-- Dashboards -->
    <li class="menu-item <?= Request::is('/') ? 'active' : '' ?>">
        <a href="{{route('dashboard')}}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div class="text-truncate">Trang chủ</div>
        </a>
    </li>
    <li class="menu-item">
        <a href="#" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div class="text-truncate">Nợ phải thu</div>
        </a>
    </li>
    <li class="menu-item">
        <a href="#" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div class="text-truncate">Cầm đồ</div>
        </a>
    </li>
    <li class="menu-item">
        <a href="#" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div class="text-truncate">Trả góp</div>
        </a>
    </li>

    <!-- Layouts -->
    <li class="menu-item <?= Request::is('customers*') ? 'open' : '' ?>">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-layout"></i>
            <div class="text-truncate">Quản lý khách hàng</div>
        </a>

        <ul class="menu-sub">
            <li class="menu-item <?= Request::is('customers*') ? 'active' : '' ?>">
                <a href="{{route('customers.index')}}" class="menu-link ">
                    <div class="text-truncate">Danh sách khách hàng</div>
                </a>
            </li>
        </ul>
    </li>
    <?php
    // echo '<pre>';
    // var_dump(request()->path(), Request::is('asset'));
    // die;
    ?>
    <li class="menu-item <?= Request::is('asset*') ? 'open' : '' ?>">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-layout"></i>
            <div class="text-truncate">Quản lý tài sản</div>
        </a>

        <ul class="menu-sub">
            <li class="menu-item <?= Request::is('asset*') ? 'active' : '' ?>">
                <a href="{{route('asset.index')}}" class="menu-link">
                    <div class="text-truncate">Danh sách tài sản</div>
                </a>
            </li>
        </ul>
    </li>
    <li class="menu-item <?= Request::is('users*') ? 'open' : '' ?>">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-layout"></i>
            <div class="text-truncate">Quản lý nhân viên</div>
        </a>

        <ul class="menu-sub">
            <li class="menu-item <?= Request::is('users*') ? 'active' : '' ?>">
                <a href="{{route('users.index')}}" class="menu-link">
                    <div class="text-truncate">Danh sách nhân viên</div>
                </a>
            </li>
        </ul>
    </li>
    <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-layout"></i>
            <div class="text-truncate">Quản lý thu chi</div>
        </a>

        <ul class="menu-sub">
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link">
                    <div class="text-truncate">Quản lý thu chi</div>
                </a>
            </li>
        </ul>
    </li>
    <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-layout"></i>
            <div class="text-truncate">Thống kê</div>
        </a>

        <ul class="menu-sub">
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link">
                    <div class="text-truncate">Thống kê</div>
                </a>
            </li>
        </ul>
    </li>
    <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-layout"></i>
            <div class="text-truncate">Cài đặt</div>
        </a>

        <ul class="menu-sub">
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link">
                    <div class="text-truncate">Cài đặt</div>
                </a>
            </li>
        </ul>
    </li>

    <!-- Apps & Pages -->

</ul>