@extends('layout.master')
@section('content')
    <section class="content">

        <div class="page-main">
            <div class="container">
                <h1 class="sec-tit">
                    {{ $news->title }}
                </h1>
                <div class="page-thumb mb-3">
                    <img width="194" height="274" src="{{ url('storage').'/'.$news->image }}"
                        class=" mx-auto d-block wp-post-image" alt="" decoding="async"
                        fetchpriority="high" />
                </div>
                <div class="page-editor">
                    <p>{{ $news->content }}</p>
                </div>
            </div>
        </div>

    </section>
@endSection
