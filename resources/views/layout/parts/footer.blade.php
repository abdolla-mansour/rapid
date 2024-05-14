<footer>
    <div class="container">

        <div class="sec-head mb-4 d-flex flex-wrap justify-content-between align-items-end">
            <div class="col-md-4">
                <h3 class="sec-tit text-white mb-0">
                     تواصل معنا                </h3>
            </div>
            <div class="col-md-8">
                <div class="newsletter">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <div class="newsletter-des">
                                احصل على إشعارات بشأن التحديثات وكن أول من يحصل على اخر جديدنا.                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="newsletter-form">
                                <form class="form"
                                      method="post"
                                      class="news-letter-form"
                                      action=""
                                    <input type="hidden" name="nlang" value="">
                                        <input type="email"
                                               class="form-control"
                                               name="ne"
                                               placeholder="البريد الالكتروني *"
                                               required>
                                          <button class="main-btn"
                                                  type="submit">
                                        ارسل                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="foot-contact">
            <div class="row">
                <div class="col-md-6">
                    <div class="foot-contact-info-item d-flex">
                        <div class="foot-contact-info-item-icon">
                            <img src="{{asset('asset/')}}/images/icon-map.png">
                        </div>
                        <div class="foot-contact-info-item-cont">
                            <h6 class="foot-contact-info-item-tit">
                                المكتب الرئيسي                            </h6>
                            <div class="foot-contact-info-item-data">
                                المملكة العربية السعودية - الرياض
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="foot-contact-info-item d-flex">
                        <div class="foot-contact-info-item-icon">
                            <img src="{{asset('asset/')}}/images/icon-email.png">
                        </div>
                        <div class="foot-contact-info-item-cont">
                            <h6 class="foot-contact-info-item-tit">
                                البريد الالكتروني                            </h6>
                            <div class="foot-contact-info-item-data">
                                <a href="mailto:info@rapidarabian.com">
                                    Info@rapidarabian.com                              </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="foot-contact-info-item d-flex">
                        <div class="foot-contact-info-item-icon">
                            <img src="{{asset('asset/')}}/images/icon-phone.png">
                        </div>
                        <div class="foot-contact-info-item-cont">
                            <h6 class="foot-contact-info-item-tit">
                                رقم الهاتف                            </h6>
                            <div class="foot-contact-info-item-data">
                                <a href="tel:00966112100490">
                                    +966112100490                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright d-md-inline-flex">
            جميع الحقوق محفوظة لموقع            <a href="{{ route('home') }}"
               title="شركة سريع العربية">
                شركة سريع العربية                -

                تصميم شركة                <a target="_blank" href="https://coding-site.com/">
                    coding site                </a>
        </div>
    </div>
</footer>
