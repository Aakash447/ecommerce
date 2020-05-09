@extends('admin.admin_layouts')

@section('admin_content')
	
	    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">


      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>This Year Report</h5>

        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title"><span class="badge badge-success"> Total Selling Amount This Year :</span> <span class="badge badge-success">Rs {{ $total  }}</span>    </h6>


          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">Payment Type</th>
                  <th class="wd-15p">Transaction Id</th>
                  <th class="wd-12p">Sub Total</th>
                  <th class="wd-12p">Shipping</th>
                  <th class="wd-12p">Total</th>
                  <th class="wd-12p">Date</th>
                  <th class="wd-15p">Status</th>
                  <th class="wd-15p">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($order as $row)
                <tr>
                  <td> {{ $row->payment_type }} </td>
                  <td> {{ $row->blnc_transection }} </td>
                  <td> {{ $row->subtotal }} </td>
                  <td> {{ $row->shipping }} </td>
                  <td> {{ $row->total }} </td>
                  <td> {{ $row->date }} </td>
                  <td> 
                          @if($row->status == 0)
                            <span class="badge badge-warning">Pending</span>
                          @elseif($row->status == 1)
                            <span class="badge badge-info">Payment Accepted</span>
                          @elseif($row->status == 2)
                            <span class="badge badge-warning">Progress</span>
                          @elseif($row->status == 3)
                            <span class="badge badge-success">Delivered</span>
                          @else
                            <span class="badge badge-danger">Cancle</span>
                          @endif
                  </td>
                  <td>
                  	<a href=" {{ URL::to('admin/view/order/'.$row->id ) }} "
                     class="btn btn-sm btn-danger"  >View</a>
                  </td>

                </tr>
                @endforeach
              
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->



 
    <!-- ########## END: MAIN PANEL ########## -->


    


@endsection