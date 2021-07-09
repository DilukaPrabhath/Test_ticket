@extends('customer.layouts.master')

@section('content')

      <!-- Begin Page Content -->
      <div class="container-fluid">

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div class="input-group disab col-md-6" id="rate">

                <input type="text" class="form-control col-md-6" id="usid" name="usid" autocomplete="off" placeholder="Ticket Number">

                <span class="input-group-btn">
                    <a href="#" id="srcbtn" name="srcbtn" style="height: 38px;" class="btn btn-danger"><span class="fa fa-search" style="margin-top: 3px;"></span></a>
                </span>
              </div>
          <a href="{{url('/create')}}" class="btn btn-success btn-circle btn-lg"><i class="fas fa-plus"></i></a>

        </div>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Ticket</h6>

          </div>
          <div class="card-body">
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label class="form-group col-md-6">Ticket Number :</label>
                    <label class="form-group col-md-6" id="cust_num"></label>
                  </div>
                <div class="form-group col-md-12">
                  <label class="form-group col-md-6">Full Name :</label>
                  <label class="form-group col-md-6" id="cust_name"></label>
                </div>
                <div class="form-group col-md-12">
                    <label class="form-group col-md-6">Problem Discription :</label>
                    <label class="form-group col-md-6" id="cust_prob"></label>
                </div>
                <div class="form-group col-md-12">
                    <label class="form-group col-md-6">Email :</label>
                    <label class="form-group col-md-6" id="cust_email"></label>
                </div>
                <div class="form-group col-md-12">
                    <label class="form-group col-md-6">Phone Number :</label>
                    <label class="form-group col-md-6" id="cust_mobile"></label>
                </div>
                <div class="form-group col-md-12">
                    <label class="form-group col-md-6">Status :</label>
                    <label class="form-group col-md-6" id="status"></label>
                </div>
                <div class="form-group col-md-12">
                    <label class="form-group col-md-6">Admin Reply :</label>
                    <label class="form-group col-md-6" id="cust_reply"></label>
                </div>
          </div>
        </div>

      </div>
    </div>
      <!-- /.container-fluid -->

      <script>

$(document).ready(function(){
            //.log("HI1");
        var ser = $("#usid").val();
        $("#srcbtn").click(function(){
          if(ser != null){
            load_rows();
          }else{
         alert("HI");
          }
        });
      });


function load_rows(){
    console.log("HI");
    var nub= $('#usid').val();
        $.ajax({
          type:"POST",
          url:"{{ url('/cust_data_report') }}",
          async:false,
          data:{"nub": nub},
          headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          beforeSend: function(){},
          success: function(data){
           //console.log(data);
           if(data.status == 0){
            var sts = "Pending"
           }else if(data.status == 1){
            var sts = "Completed"
           }else if(data.status == 3){
            var sts = "working on"
           }else{

           }
           document.getElementById('cust_num').innerHTML    = data.ticket_num;
           document.getElementById('cust_name').innerHTML   = data.full_name;
           document.getElementById('cust_prob').innerHTML   = data.message;
           document.getElementById('cust_email').innerHTML  = data.email;
           document.getElementById('cust_mobile').innerHTML = data.mobile;
           document.getElementById('cust_reply').innerHTML  = data.reply;
           document.getElementById('status').innerHTML      = sts;

          },
          error:function(){
              console.log("error!");
            }
      });


      }

      </script>

@stop
