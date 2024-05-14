@extends('layout.master')
@section('content')
    <section class="content page-contact">
        <div class="container">
            <h3 class="sec-tit">الفروع</h3>

            <div class="branches">
                <div class="tab">
                    <ul class="tabs">
                        @foreach ($branches as $branch)
                            <li>
                                <a class="main-btn" href="javascript:void(0)">
                                    {{ $branch->name }} </a>
                            </li>
                        @endforeach

                    </ul>
                    <div class="tab_content">
                        @foreach ($branches as $branch)
                            <div class="tabs_item">
                                <div class="branches-item">
                                    <div class="row align-items-center">
                                        <div class="col-md-8">
                                            <div class="map">
                                                <iframe src="{{ $branch->map_link }}" width="600" height="450"
                                                    style="border:0;" allowfullscreen="" loading="lazy"
                                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="branches-item-info">
                                                <h4 class="branches-item-tit">
                                                    تفاصيل {{ $branch->name }} </h4>
                                                <div class="branches-item-contact-info">
                                                    <div class="branches-item-contact-info-item d-flex">
                                                        <div class="branches-item-contact-info-item-icon">
                                                            <img
                                                                src="https://satc.com.sa/wp-content/themes/satc/assets/images/icon-map.png">
                                                        </div>
                                                        <div class="branches-item-contact-info-item-data">
                                                            <h6 class="branches-item-contact-info-item-tit">
                                                                العنوان </h6>
                                                            <div class="branches-item-contact-info-item-info">
                                                                {{ $branch->address }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="branches-item-contact-info-item d-flex align-items-center">
                                                        <div class="branches-item-contact-info-item-icon">
                                                            <img
                                                                src="https://satc.com.sa/wp-content/themes/satc/assets/images/icon-email.png">
                                                        </div>
                                                        <div class="branches-item-contact-info-item-data">
                                                            <h6 class="branches-item-contact-info-item-tit">
                                                                البريد الالكتروني </h6>
                                                            <div class="branches-item-contact-info-item-info">
                                                                <a href="mailto:{{ $branch->email }}">
                                                                    {{ $branch->email }}
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="branches-item-contact-info-item d-flex align-items-center">
                                                        <div class="branches-item-contact-info-item-icon">
                                                            <img
                                                                src="https://satc.com.sa/wp-content/themes/satc/assets/images/icon-phone.png">
                                                        </div>
                                                        <div class="branches-item-contact-info-item-data">
                                                            <h6 class="branches-item-contact-info-item-tit">
                                                                رقم الهاتف </h6>
                                                            <div class="branches-item-contact-info-item-info">
                                                                <a href="tel: {{ $branch->phone }}">
                                                                    {{ $branch->phone }} </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- / tabs_item -->
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>
            <!--    --> <!--    <p>-->
            <!--        --> <!--    </p>-->
            </section>
            
@endsection
