@extends('admin.layout.master')
@section('content')
    <div class="card row justify-content-center">
        <div class='card-header row justify-content-between'>
            <h5 class="col-3 card-title m-4">الإعدادات</h5>
            {{-- <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_id">تعديل الخدمة</button> --}}
            {{-- <button class="col-2 btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">تعديل إعدادات الموقع</button> --}}

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <h2 class="d-inline-flex">إعدادات الصفحه الرئيسية</h2>
                <button class="btn btn-primary d-inline-flex" data-bs-toggle="modal" data-bs-target="#modal_home_add_image">اضافه صوره</button>
                <table class="table">
                    <thead>
                        <tr>
                            {{-- home page --}}
                            <th>الصور الرئيسية</th>
                            <th>الإسم لكل صوره</th>
                            <th>اجراء</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($home_settings as $home_setting)
                            <tr>
                                <td><img width="100" src="{{ asset('storage/' . $home_setting->home_image) }}" alt=""></td>
                                <td> {{ $home_setting->image_name }} </td>
                                <td>
                                    <div class="btn-group">
                                        <form method="POST" action="{{ route('admin.home.setting.delete', $home_setting->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger">حذف</button>
                                        </form>
                                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_{{ $home_setting->id }}">تعديل</button>
                                    </div>
                                </td>
                            </tr>

                            <!-- Modal -->
                            <div class="modal fade" id="modal_{{ $home_setting->id }}" tabindex="-1" aria-labelledby="ex" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="ex">اضافة خدمة</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form method="POST" action="{{ route('admin.home.setting.update', $home_setting->id) }}" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')

                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">اسم الخدمة:</label>
                                                    <input type="text" value="{{ $home_setting->image_name }}" name="image_name" class="form-control" id="recipient-name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="message-text" class="col-form-label">الصورة:</label>
                                                    <input type="file" name="home_image" class="form-control" id="message-text">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
                                                <button type="submit" class="btn btn-primary">حفظ</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
                <br>
                <h2>إعدادات صفحه من نحن</h2>
                <table class="table">
                    <thead>
                        <tr>
                            {{-- about page --}}
                            <th>من نحن</th>
                            <th>الرؤية</th>
                            <th>اجراء</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <tr>
                            <td> {{ $about_setting->how_ar_we }} </td>
                            <td> {{ $about_setting->vision }} </td>
                            <td>
                                <button class="col-2 btn btn-primary" data-bs-toggle="modal" data-bs-target="#about_modal">تعديل</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <h2 class="d-inline-flex">إعدادات قيمنا</h2>
                <button class="btn btn-primary d-inline-flex" data-bs-toggle="modal" data-bs-target="#rate_modal">اضافه</button>
                <table class="table">
                    <thead>
                        <tr>
                            {{-- rate about page --}}
                            <th>قيمنا</th>
                            <th>اجراء</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($rate_settings as $rate)
                            <tr>
                                <td>{{ $rate->rate }}</td>
                                <td>
                                    <div class="btn-group">
                                        <form action="{{ route('admin.rate.setting.delete', $rate->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger waves-effect waves-light">حذف</button>
                                        </form>
                                        <button class="col-2 btn btn-primary" data-bs-toggle="modal" data-bs-target="#rate_about_modal_{{ $rate->id }}">تعديل</button>
                                    </div>
                                </td>
                            </tr>

                            <!-- Rate Modal -->
                            <div class="modal fade" id="rate_about_modal_{{ $rate->id }}" tabindex="-1" aria-labelledby="" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="">اضافة خدمة</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form method="POST" action="{{ route('admin.rate.setting.update', $rate->id) }}">
                                            @csrf
                                            @method('PUT')

                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="rate" class="col-form-label">قيمنا:</label>
                                                    <textarea name="rate" class="form-control" id="rate">{{ $rate->rate }}</textarea>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
                                                <button type="submit" class="btn btn-primary">حفظ</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
                <br>
                <h2>باقي الإعدادات</h2>
                <table class="table">
                    <thead>
                        <tr>
                            {{-- another settings --}}
                            <th>facebook</th>
                            <th>linkedin</th>
                            <th>tweeter</th>
                            <th>instagram</th>
                            <th>snapchat</th>
                            <th>tiktok</th>
                            <th>whatsapp</th>
                            <th>email</th>
                            <th>phone</th>
                            <th>head office</th>
                            <th>اجراء</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <tr>
                            <td> {{ $setting->facebook }} </td>
                            <td> {{ $setting->linkedin }} </td>
                            <td> {{ $setting->tweeter }} </td>
                            <td> {{ $setting->instagram }} </td>
                            <td> {{ $setting->snapchat }} </td>
                            <td> {{ $setting->tiktok }} </td>
                            <td> {{ $setting->whatsapp }} </td>
                            <td> {{ $setting->email }} </td>
                            <td> {{ $setting->phone }} </td>
                            <td> {{ $setting->head_office }} </td>
                            <td>
                                <button class="col-2 btn btn-primary" data-bs-toggle="modal" data-bs-target="#another_modal">تعديل</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="modal_home_add_image" tabindex="-1" aria-labelledby="ex" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ex">اضافة صوره</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="{{ route('admin.home.setting.create') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="modal-body">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">اسم الصوره:</label>
                            <input type="text" name="image_name" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">الصورة:</label>
                            <input type="file" name="home_image" class="form-control" id="message-text">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
                        <button type="submit" class="btn btn-primary">حفظ</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- Rate Modal -->
    <div class="modal fade" id="rate_modal" tabindex="-1" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="">اضافة خدمة</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="{{ route('admin.rate.setting.create') }}">
                    @csrf

                    <div class="modal-body">
                        <div class="form-group">
                            <label for="rate" class="col-form-label">قيمنا:</label>
                            <textarea name="rate" class="form-control" id="rate"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
                        <button type="submit" class="btn btn-primary">حفظ</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- About Modal -->
    <div class="modal fade" id="about_modal" tabindex="-1" aria-labelledby="about_modal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="">اضافة خدمة</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="{{ route('admin.about.setting.update') }}">
                    @csrf
                    @method('PUT')

                    <div class="modal-body">
                        <div class="form-group">
                            <label for="how_ar_we" class="col-form-label">من نحن:</label>
                            <textarea name="how_ar_we" class="form-control" id="how_ar_we">{{ $about_setting->how_ar_we }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="vision" class="col-form-label">الرؤية:</label>
                            <textarea name="vision" class="form-control" id="vision">{{ $about_setting->vision }}</textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
                        <button type="submit" class="btn btn-primary">حفظ</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- Another Modal -->
    <div class="modal fade" id="another_modal" tabindex="-1" aria-labelledby="another_modal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="">اضافة خدمة</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="{{ route('admin.setting.update') }}">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="facebook" class="col-form-label">facebook:</label>
                            <input type="text" value="{{ $setting->facebook }}" name="facebook" class="form-control" id="facebook">
                        </div>
                        <div class="form-group">
                            <label for="linkedin" class="col-form-label">linkedin:</label>
                            <input type="text" value="{{ $setting->linkedin }}" name="linkedin" class="form-control" id="linkedin">
                        </div>
                        <div class="form-group">
                            <label for="tweeter" class="col-form-label">tweeter:</label>
                            <input type="text" value="{{ $setting->tweeter }}" name="tweeter" class="form-control" id="tweeter">
                        </div>
                        <div class="form-group">
                            <label for="instagram" class="col-form-label">instagram:</label>
                            <input type="text" value="{{ $setting->instagram }}" name="instagram" class="form-control" id="instagram">
                        </div>
                        <div class="form-group">
                            <label for="snapchat" class="col-form-label">snapchat:</label>
                            <input type="text" value="{{ $setting->snapchat }}" name="snapchat" class="form-control" id="snapchat">
                        </div>
                        <div class="form-group">
                            <label for="tiktok" class="col-form-label">tiktok:</label>
                            <input type="text" value="{{ $setting->tiktok }}" name="tiktok" class="form-control" id="tiktok">
                        </div>
                        <div class="form-group">
                            <label for="whatsapp" class="col-form-label">whatsapp:</label>
                            <input type="text" value="{{ $setting->whatsapp }}" name="whatsapp" class="form-control" id="whatsapp">
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-form-label">email:</label>
                            <input type="text" value="{{ $setting->email }}" name="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="phone" class="col-form-label">phone:</label>
                            <input type="text" value="{{ $setting->phone }}" name="phone" class="form-control" id="phone">
                        </div>
                        <div class="form-group">
                            <label for="head_office" class="col-form-label">head_office:</label>
                            <input type="text" value="{{ $setting->head_office }}" name="head_office" class="form-control" id="head_office">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
                        <button type="submit" class="btn btn-primary">حفظ</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
