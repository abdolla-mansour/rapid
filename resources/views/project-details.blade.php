@extends('layout.master')
@section('content')
    <section class="content single-pro">
        <div class="container">
            <h3 class="sec-tit">{{ $project->name }}</h3>
            <div class="pro-data">
                <div class="page-thumb">
                    <img width="660" height="458" src="{{ url('storage') . '/' . $project->image }}"
                        class="img-fluid mx-auto d-block wp-post-image" alt="" decoding="async" fetchpriority="high"
                        srcset="{{ url('storage') . '/' . $project->image }} 660w, {{ url('storage') . '/' . $project->image }} 300w"
                        sizes="(max-width: 660px) 100vw, 660px" />
                </div>
                <div class="pro-duration">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-md-auto">
                            <h6 class="pro-duration-tit">{{ $project->name }}</h6>
                        </div>

                    </div>
                </div>

                <div class="pro-details">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="pro-detail-item">
                                <div class="pro-detail-icon">
                                    <img class="img-fluid"
                                        src="https://satc.com.sa/wp-content/themes/satc/assets/images/icon-pro-money.png">
                                </div>
                                <h6 class="pro-detail-tit">
                                    : القيمة المالية </h6>
                                <div class="pro-detail-data">{{ $project->budaget }}</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="pro-detail-item">
                                <div class="pro-detail-icon">
                                    <img class="img-fluid"
                                        src="https://satc.com.sa/wp-content/themes/satc/assets/images/icon-pro-user.png">
                                </div>
                                <h6 class="pro-detail-tit">
                                    : مالك المشروع </h6>
                                <div class="pro-detail-data">{{ $project->client }}</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="pro-detail-item">
                                <div class="pro-detail-icon">
                                    <img class="img-fluid"
                                        src="https://satc.com.sa/wp-content/themes/satc/assets/images/icon-pro-owner.png">
                                </div>
                                <h6 class="pro-detail-tit">
                                    : منفذ المشروع </h6>
                                <div class="pro-detail-data">شركة سريع العربية</div>
                            </div>
                        </div>
                        {{-- <div class="col-md-3">
                        <div class="pro-detail-item">
                            <div class="pro-detail-icon">
                                <img class="img-fluid" src="https://satc.com.sa/wp-content/themes/satc/assets/images/icon-pro-map.png">
                            </div>
                            <h6 class="pro-detail-tit">
                                : عنوان المشروع                                </h6>
                            <div class="pro-detail-data">شرق مدينة الرياض</div>
                        </div>
                    </div> --}}
                    </div>
                </div>
                <div class="pro-content-items">
                    <div class="pro-content-item">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="pro-content-item-editor">
                                    <p style="text-align: right;">{{ $project->description }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="pro-content-item-images">
                                    @if(isset($project->photos))
                                        @foreach (json_decode($project->photos) as $photo)
                                            <a class="fancybox" data-fancybox="gallery"
                                            href="{{ url('storage').'/'.$project->image }} ">
                                                <img src="{{ url('storage').'/'.$project->image }}"
                                                    alt="" />
                                            </a>
                                        @endforeach
                                    @endif
                                    
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endSection
