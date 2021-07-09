  @extends('backend.admin.layout.master')

  @section('content')

        <!-- Begin Page Content -->
        <div class="container-fluid">


          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Ticket Table</h6>

            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="example1" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th></th>
                      <th>Ticket Number</th>
                      <th>Customer Name</th>
                      <th>Email</th>
                      <th>Mobile</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>

                @foreach($data as $value)
                  <tr>
                    <td></td>
                    <td>{{$value->ticket_num}}</td>
                    <td>{{$value->full_name}}</td>
                    <td>{{$value->email}}</td>
                    <td>{{$value->mobile}}</td>
                    <td>
                         @if ($value->status == 1)
                     <span class="badge badge-success">Completed</span>
                    @elseif ($value->status == 3)
                      <span class="badge badge-danger">working on</span>
                    @elseif ($value->status == 0)
                      <span class="badge badge-warning">Pending</span>
                    @endif
                    </td>

                    <td class="project-actions">
                          <a class="btn btn-info btn-circle btn-sm" href="tickets/view/{{$value->id}}">
                              <i class="fa fa-eye">
                              </i>
                          </a>

                              </i>
                          </a>
                      </td>
                  </tr>
                  @endforeach

                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

@stop
