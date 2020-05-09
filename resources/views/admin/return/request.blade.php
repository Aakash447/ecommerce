@extends('admin.admin_layouts')

@section('admin_content')
	
	    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">


      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Return Order</h5>

        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Return Order List </h6>


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
                  <th class="wd-15p">Return</th>
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
                          @if($row->return_order == 1)
                            <span class="badge badge-warning">Pending</span>
                          @elseif($row->return_order == 2)
                            <span class="badge badge-success">Success</span>
                          @endif
                  </td>
                  <td>
                  	<a href=" {{ URL::to('admin/approve/return/'.$row->id ) }} "
                     class="btn btn-sm btn-danger"  >Approve</a>
                  </td>

                </tr>
                @endforeach
              
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->



 
    <!-- ########## END: MAIN PANEL ########## -->


    


@endsection