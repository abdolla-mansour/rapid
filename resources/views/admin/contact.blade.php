@extends('admin.layout.master')
@section('content')
<div class="card row justify-content-center">
    <div class='card-header row justify-content-between'>
        <h5 class="col-3 card-title m-4">الرسائل</h5>

    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>الاسم</th>
                  <th>رقم الهاتف</th>
                  <th>البريد الالكتروني</th>
                  <th>الرسالة</th>
                </tr>
              </thead>
              <tbody class="table-border-bottom-0">
                @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact->name }}</td>
                    <td> {{ $contact->phone }} </td>
                    <td> {{ $contact->email }} </td>
                    <td> {{ $contact->message }} </td>
                    <td>
                        <a href="{{ route('admin.contact.destroy',$contact->id) }}" class="btn btn-danger">حذف</a>
                    </td>
                </tr>
               @endforeach
              </tbody>
            </table>
          </div>
    </div>
</div>

@endsection
