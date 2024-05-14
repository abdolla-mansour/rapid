@extends('layout.master')
@section('content')
    <section class="content sec-padding">
        <div class="container">
            <h1 class="sec-tit">
                Photo library </h1>

            <div class="row">
                @foreach ($galleries as $gallery)
                <div class="col-md-4">

                    <div class="media-item-wrap">
                        <a href="../../media/%d8%a7%d9%84%d8%a7%d8%ad%d8%aa%d9%81%d8%a7%d9%84-%d8%a8%d8%a7%d9%84%d9%8a%d9%88%d9%85-%d8%a7%d9%84%d9%88%d8%b7%d9%86%d9%8a-93/index9ed2.html?lang=en"
                            title="Celebrating the 93rd National Day">
                            <div class="media-item">

                                <div class="media-item-thumb">
                                    <img width="1000" height="1000"
                                        src="../../wp-content/uploads/2023/09/%d9%85%d8%aa%d9%89-%d8%a7%d9%84%d9%8a%d9%88%d9%85-%d8%a7%d9%84%d9%88%d8%b7%d9%86%d9%8a-%d8%a7%d9%84%d8%b3%d8%b9%d9%88%d8%af%d9%8a-1443.html"
                                        class="img-fluid wp-post-image" alt="" decoding="async" fetchpriority="high"
                                        srcset="https://satc.com.sa/wp-content/uploads/2023/09/متى-اليوم-الوطني-السعودي-1443.webp 1000w, https://satc.com.sa/wp-content/uploads/2023/09/متى-اليوم-الوطني-السعودي-1443-300x300.webp 300w, https://satc.com.sa/wp-content/uploads/2023/09/متى-اليوم-الوطني-السعودي-1443-150x150.webp 150w, https://satc.com.sa/wp-content/uploads/2023/09/متى-اليوم-الوطني-السعودي-1443-768x768.webp 768w"
                                        sizes="(max-width: 1000px) 100vw, 1000px" />
                                </div>
                                <div class="media-item-body">
                                </div>


                            </div>
                            <h3 class="media-item-tit text-center">


                                Celebrating the 93rd National Day

                            </h3>

                        </a>
                    </div>
                </div>
                @endforeach
                
              
            </div>


        </div>
    </section>
@endsection
