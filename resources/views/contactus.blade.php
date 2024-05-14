@extends('layout.master')
@section('content')
  <section class="content page-contact">
   <div class="contact-form container">

    <h3 class="sec-tit">
        اسألنا </h3>


    <div class="form">

        <div class="wpcf7 no-js" id="wpcf7-f5-o1" lang="ar" dir="rtl">
            <div class="screen-reader-response">
                <p role="status" aria-live="polite" aria-atomic="true"></p>
                <ul></ul>
            </div>
            <form action="{{ route('admin.contact.store') }}" method="post" class="wpcf7-form init"
                aria-label="نموذج الاتصال" novalidate="novalidate" data-status="init">
               @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <span class="wpcf7-form-control-wrap" data-name="your-name"><input size="40"
                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                                    aria-required="true" aria-invalid="false" placeholder="الاسم بالكامل *"
                                    value="" type="text" name="name" /></span>
                        </div>
                        <div class="form-group">
                            <span class="wpcf7-form-control-wrap" data-name="your-tel"><input size="40"
                                    class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel form-control"
                                    aria-required="true" aria-invalid="false" placeholder="رقم الهاتف*"
                                    value="" type="tel" name="phone" /></span>
                        </div>
                        <div class="form-group">
                            <span class="wpcf7-form-control-wrap" data-name="your-email"><input
                                    size="40"
                                    class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control"
                                    aria-required="true" aria-invalid="false"
                                    placeholder="البريد الالكتروني *" value="" type="email"
                                    name="email" /></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <span class="wpcf7-form-control-wrap" data-name="your-message">
                                <textarea cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea form-control" aria-invalid="false"
                                    placeholder="رسالتك *" name="message"></textarea>
                            </span>
                        </div>
                    </div>
                </div>
                <button class="main-btn" type="submit">
                    ارسل
                </button>

                <div class="wpcf7-response-output" aria-hidden="true"></div>
            </form>
        </div>
    </div>
</div>

  </div>
  </section>
  @endsection