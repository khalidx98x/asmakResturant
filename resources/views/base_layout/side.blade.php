<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="">
            <h3 class="pb-2 display-5 ">Asmak Resturant</h3>
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">

                <li class="active has-sub">
                    <a class="js-arrow" href="">
                        <i class="fas fa-home"></i>الرئيسة</a>

                </li>

                <li class="active has-sub">

                    <a class="js-arrow" href="#">
                        <i class="zmdi zmdi-settings"></i>موظف الاستقبال</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">

                        <li>
                            <a href="">
                                <i class="fas fa-user-plus"></i> إضافة موظف
                            </a>

                        </li>

                        <li>
                            <a href="">
                                <i class="fas fa-users"></i> عرض الموظفين

                            </a>

                        </li>

                    </ul>
                </li>

                <li class="active has-sub">

                    <a class="js-arrow" href="#">
                        <i class="zmdi zmdi-settings"></i>إدارة المدراء</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">

                        <li>
                            <a href="{{route('admin.floorManagers.create')}}">
                                <i class="fas fa-user-plus"></i> إضافة مدير
                            </a>
                        </li>

                        <li>
                            <a href="{{route('admin.floorManagers.index')}}"> <i class="fas fa-users"></i> عرض المدراء</a>
                        </li>

                    </ul>
                </li>

                <li class="active has-sub">

                    <a class="js-arrow" href="#">
                        <i class="zmdi zmdi-settings"></i>إدارة الطوابق</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">

                        <li>
                            <a href="{{route('admin.floors.create')}}"><i class="fas fa-plus"></i>
                            إضافة طابق </a>
                        </li>

                        <li>
                            <a href="{{route('admin.floors.index')}}"><i class="fas fa-table"></i>
                                عرض الطوابق</a>
                        </li>

                    </ul>
                </li>

                <li class="active has-sub">

                    <a class="js-arrow" href="#">
                        <i class="zmdi zmdi-settings"></i>إدارة الطاولات </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">

                        <li>
                            <a href="{{route('admin.tables.create')}}"><i class="fas fa-plus"></i>
                            إضافة طاولة </a>
                        </li>

                        <li>
                            <a href="{{route('admin.tables.index')}}"><i class="fas fa-table"></i>
                                عرض الطاولات</a>
                        </li>

                    </ul>
                </li>

            </ul>
        </nav>
    </div>
</aside>