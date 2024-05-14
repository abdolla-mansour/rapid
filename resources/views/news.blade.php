@extends('layout.master')
@section('content')
    <section class="content">
        <div class="page-main mb-5">
            <div class="container">
                <h1 class="sec-tit">
                    الأخبار </h1>

            </div>
        </div>

        <div class="page-posts">
            <div class="container">
                <div class="row">
                    @foreach ($news as $item )
                    <div class="col-md-4">
                        <div class="news-item">
                            <div class="news-item-thumb text-center">
                                <a href="{{ route('news.show',$item->id) }}"
                                    title="{{ $item->title }}">
                                    <img width="1024" height="635"
                                        src="{{ url('storage').'/'.$item->image }}"
                                        class=" wp-post-image" alt="" decoding="async" loading="lazy"
                                        srcset="{{ url('storage').'/'.$item->image }} 1024w, {{ url('storage').'/'.$item->image }} 300w, {{ url('storage').'/'.$item->image }} 1600w"
                                        sizes="(max-width: 1024px) 100vw, 1024px" /> </a>
                            </div>
                            <div class="news-item-body">
                                <h5 class="news-item-tit">
                                    <a href="{{ route('news.show',$item->id) }}"
                                        title="{{ $item->title }}">
                                        {{ $item->title }}</a>
                                </h5>
                                <div class="news-item-exp">
                                    <p>{{ $item->content }}</p>
                                </div>
                                <div class="news-item-url">
                                    <a class="main-btn"
                                        href="{{ route('news.show',$item->id) }}"
                                        title="{{ $item->title }}">
                                        اقرأ المزيد </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

    </section>
@endsection
