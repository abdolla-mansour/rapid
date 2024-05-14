<nav
class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
id="layout-navbar">
<div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
  <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
    <i class="ti ti-menu-2 ti-sm"></i>
  </a>
</div>

<div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
 

  <ul class="navbar-nav flex-row align-items-center ms-auto">
    <!-- User -->
    <li class="nav-item navbar-dropdown dropdown-user dropdown">
      <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
        <div class="avatar avatar-online">
          <img src="{{ asset('admin') }}/img/avatars/1.png" alt class="h-auto rounded-circle" />
        </div>
      </a>
      <ul class="dropdown-menu dropdown-menu-end">
        <li>
          <!-- Button trigger modal -->
          <button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#model">
            <i class="me-2 ti-sm fa-solid fa-key"></i>
            Change password
          </button>
        </li>
        <li>
          <form class="" action="{{ route('logout') }}" method="POST">
            @csrf
            <button class='dropdown-item'>
              <i class="ti ti-logout me-2 ti-sm"></i>
              <span class="align-middle">Log Out</span>
            </button>
          </form>
        </li>
      </ul>
    </li>
    <!--/ User -->
  </ul>
</div>


</nav>

<!-- Modal -->
<div class="modal fade" id="model" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-danger" id="exampleModalLabel">تغيير كلمه المرور</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ route('admin.change-password', Auth::user()->id) }}" method="POST">
        @csrf
        <div class="modal-body">
          <span>من فضلك اختر كلمه سر قويه</span>
          <div class="mt-2">
            <input name="password" value="" placeholder="Password" type="password" class="form-control" />
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <input name="password_confirmation" placeholder="Confirm Password" type="password" class="mt-2 form-control" />
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button class="btn btn-danger">Change</button>
        </div>
      </form>
    </div>
  </div>
</div>