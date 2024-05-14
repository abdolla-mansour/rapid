@extends('admin.layout.master')
@section('content')
    <div class="card row justify-content-center">
        <div class='card-header row justify-content-between'>
            <h5 class="col-3 card-title m-4">الفروع</h5>
            <button class="col-2 btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">اضافة فرع</button>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>الاسم</th>
                            <th>العنوان</th>
                            <th>الايميل</th>
                            <th>رقم التليفون</th>
                            <th>رابط الخريطة</th>
                            <th>اجراء</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($branches as $branch)
                            <tr>
                                <td>{{ $branch->name }}</td>
                                <td> {{ $branch->address }} </td>
                                <td> {{ $branch->email }} </td>
                                <td> {{ $branch->phone }} </td>
                                <td> {{ $branch->map_link }} </td>
                                <td>
                                    <a href="{{ route('admin.branch.destroy', $branch->id) }}" class="btn btn-danger">حذف</a>
                                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#model_{{ $branch->id }}">تعديل الفرع</button>
                                </td>
                            </tr>

                            <!-- Modal -->
                            <div class="modal fade" id="model_{{ $branch->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">تعديل الفرع</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form method="POST" action="{{ route('admin.branch.update', $branch->id) }}" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')

                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">الاسم:</label>
                                                    <input type="text" value="{{ $branch->name }}" name="name" class="form-control" id="recipient-name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">العنوان:</label>
                                                    <input type="text" value="{{ $branch->address }}" name="address" class="form-control" id="recipient-name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">البريد الالكتروني:</label>
                                                    <input type="email"  value="{{ $branch->email }}" name="email" class="form-control" id="recipient-name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">رقم الهاتف:</label>
                                                    <input type="text" value="{{ $branch->phone }}" name="phone" class="form-control" id="recipient-name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">لينك العنوان:</label>
                                                    <input type="text" value="{{ $branch->map_link }}" name="map_link" class="form-control" id="recipient-name">
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
                    <h5 class="modal-title" id="exampleModalLabel">اضافة فرع</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="{{ route('admin.branch.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="modal-body">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">الاسم:</label>
                            <input type="text" name="name" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">العنوان:</label>
                            <input type="text" name="address" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">البريد الالكتروني:</label>
                            <input type="email" name="email" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">رقم الهاتف:</label>
                            <input type="text" name="phone" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">لينك العنوان:</label>
                            <input type="text" name="map_link" class="form-control" id="recipient-name">
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
