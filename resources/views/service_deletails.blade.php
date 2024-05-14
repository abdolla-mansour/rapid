@extends('layout.master')
@section('content')
<section class="content sec-padding">
    <div class="container">
        <h1 class="sec-tit">
            {{ $service_data->name }}       </h1>

                                    <div class="work-item-page " data-sr-id="1" style="">
                        <div class="row align-items-center no-gutters">
                                                            <div class="col-md-4">
                                    <div class="work-item-page-thumb">
                                        <img width="768" height="1024" src="{{ url('storage').'/'.$service_data->image }}" class="img-fluid wp-post-image" alt="" decoding="async" fetchpriority="high" srcset="{{ url('storage').'/'.$service_data->image }} 768w, {{ url('storage').'/'.$service_data->image }} 225w, {{ url('storage').'/'.$service_data->image }} 1094w" sizes="(max-width: 768px) 100vw, 768px">                                    </div>
                                </div>
                                                        <div class="col-md-8">
                                <div class="work-item-page-body">
                                    <h5 class="work-item-page-tit">
                                        {{ $service_data->name }}                                </h5>
                                    <div class="work-item-page-exp">
                                        <p>{{ $service_data->content }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


            </div>
</section>
@endsection
