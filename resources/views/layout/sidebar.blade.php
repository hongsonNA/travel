{{-- <!-- BEGIN: Main Menu--> --}}
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
      <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" navigation-header"><span>General</span><i class=" feather icon-minus" data-toggle="tooltip" data-placement="right" data-original-title="General"></i>
                </li>
                <li class=" nav-item">
                    <a href="/">
                        <i class="fab fa-themeisle"></i>
                        <span class="menu-title" data-i18n="Dashboard">Bảng điều khiển</span>
                    </a>
                    <!-- <ul class="menu-content">
                        <li><a class="menu-item" href="dashboard-ecommerce.html" data-i18n="eCommerce">eCommerce</a>
                        </li>
                        <li><a class="menu-item" href="dashboard-analytics.html" data-i18n="Analytics">Analytics</a>
                        </li>
                        <li><a class="menu-item" href="dashboard-fitness.html" data-i18n="Fitness">Fitness</a>
                        </li>
                        <li class="active"><a class="menu-item" href="dashboard-crm.html" data-i18n="CRM">CRM</a>
                        </li>
                    </ul> -->
                </li>
                <li class=" nav-item"><a href="index-2.html"><i class="far fa-newspaper"></i><span class="menu-title" data-i18n="Dashboard">NEWS</span></a>
                    <ul class="menu-content">
                        <li><a  class="menu-item" href="{{ route('listNews') }}" data-i18n="eCommerce"><span class="badge badge badge-primary badge-pill float-right mr-2">3</span>Danh sách</a>
                        </li>
                        <li><a class="menu-item" href="{{ route('addNews') }}">Thêm mới</a>
                        </li>
                    </ul>
                </li>

                </ul>
      </div>
    </div>
    {{-- <!-- END: Main Menu--> --}}