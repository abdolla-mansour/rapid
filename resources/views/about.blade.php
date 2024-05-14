@extends('layout.master')
@section('content')
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
            <div class="row" >
                <div class="col-lg-6" style="margin-top: 100px">
                    <div class="experience" style="">
                        <div class="experience-num" >+{{ date('Y') - 2019 }}</div>
                        <div class="experience-tit" >سنوات الخبرة</div>
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
                </div>
            </div>
        </div>
    </section>

    <div class="values">
        <div class="container">
            <h3 class="page-sub-tit text-center">قيمنا</h3>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="value-item">
                        Emphasizing that we are strategic partners with our customers in order to achieve the highest levels
                        of cooperation with them. </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="value-item">
                        Implementation of the plans laid down to confirm our ability to achieve the strategic goals of our
                        clients. </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="value-item">
                        Constant pursuit of development to keep pace with everything new in the fields of our workers.
                    </div>
                </div>

            </div>
        </div>

    </div>
    <section class="clients">
        <div class="container">
            <h2>عملائنا</h2>
            <section class="d-flex" style="justify-content: center">
                @foreach ($clients as $client)
                <div class="" style="text-align: center; margin: 10px; ">
                    <img style=" border-radius: 50%;
                    width: 100px;
                    height: 100px;
                    display:block;
  margin: 0 auto;
                    " src="{{ url('storage').'/'.$client->photo }}">
                    <span style="display: inline-block;">{{$client->name}}</span>
                </div>
                @endforeach
            </section>
        </div>
    </section>
@endsection
@section('script')
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.customer-logos').slick({
                slidesToShow: 6,
                slidesToScroll: 1,
                autoplay: false,
                autoplaySpeed: 150,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 3
                    }
                }]
            });
        });
    </script>
@endsection
