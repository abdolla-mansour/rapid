@extends('admin.layout.master')
@section('content')
    <div class="card row justify-content-center">
        <div class='card-header row justify-content-between'>
            <h5 class="col-3 card-title m-4">الاخبار</h5>
            <button class="col-2 btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">اضافة خبر</button>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>العنوان</th>
                            <th>المحتوي</th>
                            <th>الصورة</th>
                            <th>اجراء</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($news as $item)
                            <tr>
                                <td>{{ $item->title }}</td>
                                <td> {{ $item->content }} </td>
                                <td><img src="{{ url('storage') . '/' . $item->image }}" width="100px" height="100px" alt=""></td>
                                <td>
                                    <a href="{{ route('admin.news.destroy', $item->id) }}" class="btn btn-danger">حذف</a>
                                    <button class=" btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal{{ $item->id }}">تعديل</button>
                                </td>
                            </tr>


                            {{-- My Modal --}}
                            <div class="modal fade" id="modal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">تعديل الخبر</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form method="POST" action="{{ route('admin.news.update', $item->id) }}" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')

                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">عنوان الخبر:</label>
                                                    <input type="text" value="{{ $item->title }}" name="title" class="form-control" id="recipient-name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="message-text" class="col-form-label">المحتوي:</label>
                                                    <textarea name="content" class="form-control" id="message-text">{{ $item->content }}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="message-text" class="col-form-label">الصورة:</label>
                                                    <input type="file" name="image" class="form-control" id="message-text">
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
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">اضافة خبر</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="{{ route('admin.news.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="modal-body">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">عنوان الخبر:</label>
                            <input type="text" name="title" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">المحتوي:</label>
                            <textarea name="content" class="form-control" id="message-text"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">الصورة:</label>
                            <input type="file" name="image" class="form-control" id="message-text">
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
