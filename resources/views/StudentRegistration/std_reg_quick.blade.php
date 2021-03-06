@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Student Registration</h1>
<style>
  .btn-secondary:not(:disabled):not(.disabled).active,
  .btn-secondary:not(:disabled):not(.disabled):active,
  .show>.btn-secondary.dropdown-toggle {
    color: #fff;
    background-color: #dc3545 !important;
    border-color: #dc3545;
  }
</style>
@stop

@section('content')

<div class="container-fluid">
  <form class="form-label-left input_mask">
    <div class="row">
      <div class="col-md-8">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Course / Batch / Identity Selection</h3>
          </div>
          <div class="card-body">
            <div class="form-group row">
              <label class="col-form-label col-md-2 col-sm-2 ">Faculty</label>
              <div class="col-md-10 col-sm-10 ">
                <select class="form-control" name="faculty" id="faculty" required="required">
                  <option selected>Select Option</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-form-label col-md-2 col-sm-2 ">Department </label>
              <div class="col-md-10 col-sm-10 ">
                <select class="form-control" required="required" id="dept">
                  <option value="">Select Faculty first</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-form-label col-md-2 col-sm-2 ">Course</label>
              <div class="col-md-10 col-sm-10 ">
                <select class="form-control" required="required" id="course" name="course_select">
                  <option value="">Select Department first</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-form-label col-md-2 col-sm-2 ">Batch <span class="required">*</span>
              </label>
              <div class="col-md-10 col-sm-10 ">
                <select class="form-control" required="required" id="batch" name="batch_select">
                  <option value="">Select Course first</option>
                </select>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-form-label col-md-4 col-sm-4 ">Identity <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 ">
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                      <label class="btn btn-secondary">
                        <input type="radio" name="gender" value="nic" checked="checked"> NIC
                      </label>
                      <label class="btn btn-secondary">
                        <input type="radio" name="gender" value="passport1"> PASSPORT
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-form-label col-md-3 col-sm-3 ">Country<span class="required">*</span>
                  </label>
                  <div class="col-md-9 col-sm-9 ">
                    <select class="form-control" name="country" id="country" required="required">
                      <option disabled>Select Passport to view Countries</option>
                      <option value="LK" selected>Sri Lanka</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-8 col-12">
        <div class="info-box bg-gradient-success">
          <span class="info-box-icon"><i class="fas fa-fw fa-user-graduate "></i></span>
          <div class="info-box-content">
            <span class="info-box-number">
              <h4>0000 0000 000000</h4>
            </span>

            <div class="progress">
              <div class="progress-bar" style="width: 100%"></div>
            </div>
            <span class="progress-description">
              Available Registration Number
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
    </div>



    <div class="row">
      <div class="col-lg-12">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Student Main Details</h3>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-3">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user"></i></span></div>
                  <select class="form-control col-lg-12" required="required" name="title" id="select" style="width:144px">
                    <option>Select Title</option>
                    <option value="1">Mr.</option>
                    <option value="2">Ms.</option>
                    <option value="3">Mrs.</option>
                    <option value="4">Rev.</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3" align="right">
                <div id="genderContainer">
                  <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary">
                      <input type="radio" name="gender" value="male"> Male
                    </label>
                    <label class="btn btn-secondary">
                      <input type="radio" name="gender" value="female"> Female
                    </label>
                    <label class="btn btn-secondary">
                      <input type="radio" name="gender" value="other"> Other
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class=" input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                  </div>
                  <textarea class="form-control" name="given_name[]" placeholder="Full Name" required="required" rows="1" cols="50"></textarea>
                </div>
                <div class=" input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-list-ol"></i></span>
                  </div>
                  <input type="text" class="form-control nic-pass" id="nicpass" name="nic_no[]" placeholder="NIC/Passport" pattern="[0-9]{9}[x|X|v|V]|[0-9]{12}" required="required">
                </div>
                <div class=" input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-dollar-sign"></i>&nbsp;&nbsp;</span>
                  </div>
                  <input type="text" class="form-control" required="required" id="select-payment-plan" name="payment_plan[]">
                </div>
                <div class=" input-group md-3">
                  <div class="input-group-prepend">
                    \ <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                  </div>
                  <input type="date" class="form-control" placeholder="Initial Starting Date" name="date[]">
                </div>
                <br>
              </div>

              <div class="col-md-6">
                <div class="input-group mb-3">
                  <input type="text" class="form-control" name="student_name[]" placeholder="Name with Initials" required="required">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                  </div>
                </div>
                <div class="input-group mb-3">
                  <input type="text" class="form-control mobile" name="mobile[]" value="0" placeholder="Mobile No eg:0711234567" pattern="[0]{1}[0-9]{9}" required="required">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                  </div>
                </div>
                <div class="input-group mb-3">
                  <input type="text" class="form-control" id="select-discounts" name="discount[]">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-file-invoice-dollar"></i>&nbsp;</span>
                  </div>
                </div>
                <div class="input-group mb-3">
                  <select class="form-control" required="required" name="grace_period[]" id="select">
                    <option>Select Grace Period</option>
                    <option value="0">Not Applicable</option>
                    <option value="1">1 Months</option>
                    <option value="2">3 Months</option>
                    <option value="5">5 Months</option>
                  </select>
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="far fa-calendar"></i></span>
                  </div>
                </div>
                <br>
              </div>

            </div>



            <div class="row">
              <div class="col-md-6 col-sm-6  form-group has-feedback">
                <button type="button" class="btn btn-success btn-add-row">Save</button>
                <button class="btn btn-dark" type="reset">Reset</button>
              </div>
            </div>
            <hr>
            <div class="form-group row">
              <div class="col-md-2 col-sm-2">
                <button type="button" class="btn btn-dark">Reset All</button>
                <!-- <button type="submit" name="submit" id="btnSubmit" class="btn btn-info">Submit</button> -->
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>
  </form>
</div>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
  $(function() {

    $("input[data-bootstrap-switch]").each(function() {
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  });
</script>
@stop