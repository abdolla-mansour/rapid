@extends('layout.master')
@section('content')
    <section class="home-video">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('sliders/building.avif') }}" style="min-width: 100%" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>خدمات البناء والتشطيب </h5>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('sliders/road.jpg') }}" style="min-width: 100%" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>خدمات اعمال الطرق</h5>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('sliders/room.jpg') }}" style="min-width: 100%" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>خدمات الديكور و الاثاث</h5>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('sliders/telcome.jpg') }}" style="min-width: 100%" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>خدمات الاتصالات و الصيانة</h5>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('sliders/security.jpg') }}" style="min-width: 100%" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>خدمات الانظمة الامنية</h5>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('sliders/truck.avif') }}" style="min-width: 100%" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>خدمات لوجستية</h5>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

    </section>

    <section class="about">
        <div class="container">
            <!--<span class="progress-left-about"></span>-->
            <h3 class="sec-tit">
                من نحن </h3>
                <div class="about-info">
                  <div class="about-cont">
                      <p><strong>تمتلك شركة سريع العربية خبرات طويلة في بناء المشاريع و قد حثثت نجاحا مطلقا منذ تاسيسها عام 2019 في تقديم خدمة متميزة للعملاء حيث تمتاز بدقة تنفيذ عالي الجودة فقد وضعنا الجودة هي المعيار الاساسي في تنفيذ المشاريع و هو مصدم لدينا عن المعيار الربحي و بالتالي نعمل علي مبدا ثابت وهو ان العميل اولا. </strong></p>
                  </div>
              </div>
            <div class="row">
                <div class="col-lg-6" style="margin-top: 100px">
                  <div class="experience">
                    <div class="experience-num" >+{{ date('Y') - 2019 }}</div>
                    <div class="experience-tit">سنوات الخبرة</div>
                </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-items">
                        <div class="about-item">
                            <h1 class="sppb-addon-title">الرؤية</h1>
                            <div class="sppb-addon-content">
                                <div class="sppb-addon-text">
                                    <div dir="rtl">ان طموح الريادة و شغف التميز يجعلنا في سعي دائم لان نكون الافضل في حجم و نوعية استثمارتنا ، متسلحين بالتطوير الدائم لادئنا بما يواكب طموحتنا و تنويع منتجاتنا بما يتماشي مع رغبات عملائنا ليدفعنا في النهاية نحو تقوية قدراتنا التنافسية في جميع الانشطة التي نعمل بها لنكون واحدة من اولي شركات المقاولات و البناء في المملكة العربية السعودية يجب ان ينظر الينا الشركاء و العملاء كجزء لا يتجزا من عملية نجاحه.</div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="about-links d-flex justify-content-md-between">
                        <a class="main-btn" href="{{ route('about') }}">
                            اقرأ المزيد </a>

                        <a class="main-btn" href="">
                            <i class="fa-regular fa-file-pdf"></i>
                            الملف التعريفي لشركة </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
