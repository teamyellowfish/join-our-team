    
  @extends('layouts.main')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Url Shortner</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Url Shortner</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Url Shortner</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="ShortURLForm">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Enter Title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Url</label>
                    <input type="text" name="url" class="form-control" id="url" placeholder="Url">
                  </div>
               
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>

      

        <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Url Shortner</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div style="overflow-x:auto;">
                <table id="ShorturlTable" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sl No.</th>
                    <th>Title</th>
                    <th>Url</th>
                    <th>Shortened url</th>
                    <th>Created at</th>
                    <th>Copy</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                  </tbody>
                 
                </table>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
    
  
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @endsection

  @section('scripts')
  <script>
$(function () {
  var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
    shorturlTable();
  $('#ShortURLForm').validate({
    rules: {
      title: {
        required: true,
      },
      url: {
        required: true,
        url: true
      },

    },
    messages: {
      title: {
        required: "Please enter a title"
      },
      url: {
        required: "Please provide a URL",
        url: "Please enter a valid URL"
      }
    },
    submitHandler: function () {
        $.ajax({
            type: 'POST',
            dataType: 'json',
            data: $('#ShortURLForm').serialize(),
            url: '{{route('submit_url')}}',
            success: function (response) {
                if (response.status == true) {
                    $('#ShortURLForm')[0].reset();
                    shorturlTable();
                    Toast.fire({
                      icon: 'success',
                      title: 'Short Url Created Successfully.'
                    });
                }
            },
            error: function (response) {
               
                $.each(response.responseJSON.errors, function (field_name, error) {
                var msg = '<span class="error invalid-feedback" for="' + field_name + '">' + error + '</span>';
                $("#ShortURLForm").find('input[name="' + field_name + '"], select[name="' + field_name + '"], textarea[name="' + field_name + '"]')
                  .removeClass('is-valid').addClass('is-invalid').attr("aria-invalid", "true").after(msg);
                });
            }
        });

    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    },
    
  });
});

    function shorturlTable() {
        var ShorturlTableData = $('#ShorturlTable').DataTable({
                processing: true,
                serverSide: true,
                stateSave: true,
                ajax: "{{ route('url_shortner') }}",
                columns: [
            {data: 'DT_RowIndex', orderable: false, searchable: false},
            {data: 'title', name: 'title'},
            {data: 'url', name: 'url'},
            {data: 'short_url', name: 'short_url'},
            {data: 'created_at', name: 'created_at'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
                ],
                bDestroy: true,
            }).page.len(10).draw();
        }
</script>
<script>
    function copyToClipboard(button,text) {
      navigator.clipboard.writeText(text);
      button.innerHTML = 'Copied';
      setTimeout(function() { button.innerHTML = 'Copy'; }, 2000);
    }
</script>


  @endsection