@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800"><b>Batch Test</b></h1>
  <a href="#" class="d-none d-sm-inline-block btn btn-lg btn-primary shadow-sm" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus fa-sm text-white-50"></i> Add Batch</a>
</div>

<div class="card">
  <div class="card-header">
    <h3 class="card-title">Batch List</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>
            <center>Batch No</center>
          </th>
          <th>
            <center>Course</center>
          </th>
          <th>
            <center>Batch Name</center>
          </th>
          <th>
            <center>More</center>
          </th>

        </tr>
      </thead>
      <tbody>

        @foreach($batchs as $batch)
        <tr>
          <td>{{ $batch->id }}</td>
          <td>{{ $batch->course_id }}</td>
          <td>{{ $batch->batch_name }}</td>
          <td>
            <center>
              <button role="button" href="#" class="btn btn-primary btn-circle btn-sm btn-edit" data-toggle="modal" data-target="#mdl-edit"><i class="fas fa-edit"></i>
              </button>

              <button role="button" href="#" class="btn btn-danger btn-circle btn-sm btn-del" data-toggle="modal" data-target="#mdl-del"><i class="fas fa-trash"></i>
              </button></center>
          </td>

        </tr>
        @endforeach

        </tfoot>
    </table>
  </div>
  <!-- /.card-body -->
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Batch Add</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- general form elements -->
        <div class="card card-primary">

          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" action="/slo/batch" method="POST">
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Select Course</label>
                <select class="form-control " name="course_id" required>
                  <option value="">Select Course</option>
                  <option value="1">Course 1</option>
                  <option value="2">Course 2</option>
                  <option value="3">Course 3</option>
                </select>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Batch Name</label>
                <input type="text" class="form-control" name="batch_name" id="exampleInputEmail1" placeholder="Batch Name">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Max Student</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Max Student">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Batch Start Date </label>
                <input type="date" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Batch End Date </label>
                <input type="date" class="form-control" id="exampleInputPassword1">
              </div>
            </div>
            @csrf
            <!-- /.card-body -->

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>


@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
  console.log('Hi!');
</script>
@stop




<script>
  $(function() {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>