@extends('layout.master')
@section('content')
    <section class="content sec-padding projects-page">
        <div class="container">
            <h1 class="sec-tit">
                مشاريعنا </h1>
            <div class="row">
              @foreach ($projects as $project)
              <div class="col-md-6">
                <div class="project-item">
                    <div class="project-item-wrap">
                        <div class="project-item-thumb">
                            <img width="660" height="458"
                                src="{{ url('storage').'/'.$project->image }}"
                                class="img-fluid wp-post-image" alt="" decoding="async" fetchpriority="high"
                                srcset="{{ url('storage').'/'.$project->image }} 660w, {{ url('storage').'/'.$project->image }} 300w"
                                sizes="(max-width: 660px) 100vw, 660px" />
                        </div>
                        <div class="project-item-body">
                            <h4 class="project-item-tit">{{ $project->name }}</h4>

                            <div class="project-item-exp">
                                {{ $project->description }}
                            </div>
                            <div class="project-item-url">
                                <a class="main-btn"
                                    href="{{ route('project.show', $project->id) }}"
                                    title="">
                                    تفاصيل المشروع </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
              @endforeach
                
              
            </div>
        </div>
    </section>
@endSection
