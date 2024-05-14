<section class="mobile-nav-list">
    <a class="mobile-logo text-center" href="index.html" title="logo">
        <img class="img-fluid" src="{{ asset('img/logo.png') }}" alt="">
    </a>
    <ul id="menu-%d8%a7%d9%84%d9%82%d8%a7%d8%a6%d9%85%d8%a9-%d8%a7%d9%84%d8%b1%d8%a6%d8%b3%d9%8a%d8%a9"
        class="mobile-list list-unstyled">
        <li
            class="linkMenu menu-item menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-286 active">
            <a class='' href='{{ route('home') }}'>الرئيسية</a>
        </li>
        <li class="linkMenu menu-item menu-item menu-item-type-post_type menu-item-object-page menu-item-101"><a
                class='' href='{{ route('about') }}'>من نحن</a>
        </li>
        <li
            class="linkMenu2 menu-item menu-item menu-item-type-post_type_archive menu-item-object-works menu-item-has-children menu-item-58">
            <a class='' href='fields/index.html'>خدماتنا</a><i class='dd-trigger fas fa-long-arrow-alt-down'></i>
            <ul class="sub-menu depth-0">
                @foreach ($services as $service )
                <li
                class="linkMenu4 menu-item menu-item menu-item-type-taxonomy menu-item-object-works_cat menu-item-103">
                <a class=''  href='{{ route('service.show',$service->id) }}'>{{ $service->name }}</a>
            </li>
                @endforeach


            </ul>
        </li>
        {{-- <li
            class="linkMenu2 menu-item menu-item menu-item-type-post_type_archive menu-item-object-media menu-item-has-children menu-item-108">
            <a class='' href='media/index.html'>المركز الاعلامي</a><i
                class='dd-trigger fas fa-long-arrow-alt-down'></i>
            <ul class="sub-menu depth-0">

                <li
                    class="linkMenu4 menu-item menu-item menu-item-type-taxonomy menu-item-object-media_cat menu-item-109">
                    <a class=''
                        href='mediaCat/%d9%85%d9%83%d8%aa%d8%a8%d8%a9-%d8%a7%d9%84%d8%b5%d9%88%d8%b1/index.html'>مكتبة
                        الصور</a>
                </li>
                <li
                    class="linkMenu4 menu-item menu-item menu-item-type-taxonomy menu-item-object-media_cat menu-item-110">
                    <a class=''
                        href='mediaCat/%d9%85%d9%83%d8%aa%d8%a8%d8%a9-%d8%a7%d9%84%d9%81%d9%8a%d8%af%d9%8a%d9%88/index.html'>مكتبة
                        الفيديو</a>
                </li>
            </ul>
        </li> --}}
        <li
            class="linkMenu menu-item menu-item menu-item-type-post_type_archive menu-item-object-projects menu-item-139">
            <a class='' href='{{ route('project') }}'>مشاريعنا</a>
        </li>
        <li class="linkMenu menu-item menu-item menu-item-type-post_type menu-item-object-page menu-item-179"><a
                class='' href='{{ route('news') }}'>الأخبار</a>
        </li>
        <li
            class="linkMenu menu-item menu-item menu-item-type-post_type_archive menu-item-object-branches menu-item-206">
            <a class=''href='{{ route('branch') }}'>الفروع</a>
        </li>
    </ul>
</section>

<header class="head-video">
    <div class="container">
        <div class="main-nav">
            <div class="menu-logo">
                <a href="index.html" title="logo">
                    <img class="img-fluid" src="{{ asset('img/logo.png') }}" alt="">
                </a>
            </div>
            <ul id="menu-%d8%a7%d9%84%d9%82%d8%a7%d8%a6%d9%85%d8%a9-%d8%a7%d9%84%d8%b1%d8%a6%d8%b3%d9%8a%d8%a9-1"
                class="nav-list">
                <li
                    class="linkMenu menu-item menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-286 {{ request()->is('/') ? 'active' : '' }} ">
                    <a class='' href='{{ route('home') }}'>الرئيسية</a>
                </li>
                <li class="linkMenu menu-item menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-101 {{ request()->is('/about') ? 'active' : '' }}"><a
                        class='' href='{{ route('about') }}'>من نحن</a>
                </li>
                <li
                    class="linkMenu2 menu-item menu-item menu-item-type-post_type_archive menu-item-object-works menu-item-has-children menu-item-58  ">
                    <a class='' href=''>خدماتنا</a><i
                        class='dd-trigger fas fa-long-arrow-alt-down'></i>
                    <ul class="sub-menu depth-0">
                        @foreach ($services as $service )
                        <li
                        class="linkMenu4 menu-item menu-item menu-item-type-taxonomy menu-item-object-works_cat menu-item-103">
                        <a class='' href='{{ route('service.show',$service->id) }}'>{{ $service->name }}</a>
                    </li>
                        @endforeach

                    </ul>
                </li>
                {{-- <li
                    class="linkMenu menu-item menu-item menu-item-type-post_type_archive menu-item-object-projects menu-item-139">
                    <a class='' href='{{ route('gallery') }}'>معرض الصور</a>
                </li> --}}
                <li
                    class="linkMenu menu-item menu-item menu-item-type-post_type_archive menu-item-object-projects menu-item-139">
                    <a class='' href='{{ route('project') }}'>مشاريعنا</a>
                </li>
                <li class="linkMenu menu-item menu-item menu-item-type-post_type menu-item-object-page menu-item-179"><a
                        class='' href='{{ route('news') }}'>الأخبار</a>
                </li>
                <li
                    class="linkMenu menu-item menu-item menu-item-type-post_type_archive menu-item-object-branches menu-item-206">
                    <a class='' href='{{ route('branch') }}'>الفروع</a>
                </li>
            </ul>
            <div class="menu-icons d-flex align-items-center">
                <a class="lang" href="{{ route('contactus') }}"> تواصل معنا </a>
                <a class="nav-btn" href="javascript:void(0)">
                    <i class="fa-solid fa-bars"></i>
                </a>
            </div>


        </div>



    </div>
</header>
