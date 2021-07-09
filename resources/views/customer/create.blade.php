@extends('customer.layouts.master')

@section('content')

      <!-- Begin Page Content -->
      <div class="container-fluid">

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800"></h1>


        </div>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add Ticket</h6>

          </div>
          <div class="card-body">


<!------------------------------------content --------------------------------------------------->

<form method="post" action="{{url('user/ticket/store')}}" enctype="multipart/form-data" >
 {{ csrf_field() }}
<div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputEmail4">Full Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="name">
    @error('name')
    <div class="alert" style="color: red;padding-left: 0px;">{{ $message }}</div>
    @enderror
  </div>
</div>
<div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputZip">Problam Discription</label>
    <textarea id="discription" class="form-control" name="discription" rows="4" cols="65" placeholder="discription"></textarea>
    @error('discription')
    <div class="alert" style="color: red;padding-left: 0px;">{{ $message }}</div>
    @enderror
  </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="email">
      @error('email')
      <div class="alert" style="color: red;padding-left: 0px;">{{ $message }}</div>
      @enderror
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Phone Number</label>
      <input type="number" class="form-control" id="mobile" name="mobile" placeholder="mobile">
      @error('mobile')
      <div class="alert" style="color: red;padding-left: 0px;">{{ $message }}</div>
      @enderror
    </div>
  </div>

<div class="form-group">
</div>
<button type="submit" class="btn btn-primary">Submit</button>
<a href="{{url('/')}}"  class="btn btn-info">Back</a>
</form>

<!---------------------------------------------------------------- content ------------------------------------------------------------------>


          </div>
        </div>

      </div>
      <!-- /.container-fluid -->

@stop
