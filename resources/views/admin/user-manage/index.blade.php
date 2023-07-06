@extends('layouts.admin.index')

@section('content')
<section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">

            <!-- <h5 class="card-title">Association Information</h5> -->
            <h5 class="card-title"></h5>

            <!-- Custom Styled Validation with Tooltips -->
            <form class="row g-3 needs-validation" novalidate action={{ url('admin/user/store') }}
            method="POST">
            @csrf

              <div class="col-md-12 position-relative">
                <label class="form-label">Fullname<font color="red">*</font></label>
                <input type="text" class="form-control" id="validationTooltip01" name="fullname" required autofocus="autofocus">
                <div class="invalid-tooltip">
                  The Fullname field is required.
                </div>
              </div>

              <div class="col-md-6 position-relative">
                <label class="form-label">Username<font color="red">*</font></label>
                <input type="text" class="form-control" id="validationTooltip01" name="username" required>
                <div class="invalid-tooltip">
                  The Fullname field is required.
                </div>
              </div>

              <div class="col-md-6 position-relative">
                <label class="form-label">Password<font color="red">*</font></label>
                <input type="password" class="form-control" id="password" name="password" required>
                <input type="checkbox" onclick="myFunction()">Show Password
                <div class="invalid-tooltip">
                  The Password field is required.
                </div>
              </div>



              <div class="col-md-6 position-relative">
                <label class="form-label">User Type<font color="red">*</font></label>
                <div class="col-sm-12">
                  <select class="form-select" aria-label="Default select example"
                  name="user_role_id" id="validationTooltip03" required>
                  <option value="" selected disabled>Select User Type</option>
                  @foreach ($usertype as $user )
                  <option value="{{ $user->user->id }}" selected disabled>{{ $user->user->type }}</option>
                  @endforeach

                  </select>
                  <div class="invalid-tooltip">
                    The User Type field is required.
                  </div>
                </div>
              </div>

              <div class="col-md-6 position-relative">
                <label class="form-label">Active<font color="red">*</font></label>
                <div class="col-sm-12">
                  <select class="form-select" aria-label="Default select example" id="validationTooltip03" name="status" required>
                    <option value="" selected disabled>Select Status</option>
                    <option value="Active">Active</option>
                    <option value="Inactive">Inactive</option>
                  </select>
                  <div class="invalid-tooltip">
                    The Active field is required.
                  </div>
                </div>
              </div>

              <div class="col-12">
                <button type="submit" class="btn btn-warning" name="submit">Save User</button>
                <button type="reset" class="btn btn-primary">Cancel</button>
              </div>
            </form><!-- End Custom Styled Validation with Tooltips -->

          </div>
        </div>

      </div>

  </section>

@endsection
