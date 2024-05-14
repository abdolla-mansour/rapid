@extends('admin.layout.master')
@section('content')
<div class="card row justify-content-center">
    <div class='card-header row justify-content-between'>
        <h5 class="col-3 card-title m-4">المشاريع</h5>
        <button class="col-2 btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">اضافة المشروع</button>

    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>اسم المشروع</th>
                  <th>المحتوي</th>
                  <th>التكلفة</th>
                  <th>العميل</th>
                  <th>اجراء</th>
                </tr>
              </thead>
              <tbody class="table-border-bottom-0">
                @foreach($projects as $project)
                <tr>
                    <td>{{ $project->name }}</td>
                    <td> {{ $project->description }} </td>
                    <td>{{ $project->budaget }}</td>
                    <td>{{ $project->client }}</td>
                    <td>
                        <a href="{{ route('admin.project.destroy',$project->id) }}" class="btn btn-danger">حذف</a>
                    </td>
                </tr>
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
          <h5 class="modal-title" id="exampleModalLabel">اضافة مشروع</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" action="{{ route('admin.project.store') }}" enctype="multipart/form-data">
            @csrf
        <div class="modal-body">
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">اسم المشروع:</label>
              <input type="text" name="name" class="form-control" id="recipient-name">
            </div>
            <div class="form-group">
                <label for="message-text" class="col-form-label">المحتوي:</label>
                <textarea name="description" class="form-control" id="message-text"></textarea>
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">الصورة الرئيسية:</label>
                <input type="file" name="image" class="form-control" id="message-text">
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">صور المشروع:</label>
                <input type="file" multiple name="photos[]" class="form-control" id="message-text">
              </div>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">تكلفة المشروع:</label>
                <input type="text" name="budaget" class="form-control" id="recipient-name">
              </div>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">العميل:</label>
                <input type="text" name="client" class="form-control" id="recipient-name">
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
  <?php
//    dd($errors->all())
  ?>
@endsection
