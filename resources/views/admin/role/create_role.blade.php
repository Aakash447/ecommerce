@extends('admin.admin_layouts')

@section('admin_content')

        <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <span class="breadcrumb-item active">Admin Section</span>
      </nav>

      <div class="sl-pagebody">

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">New Admin</h6>
          
          <p class="mg-b-20 mg-sm-b-30">New Admin Add Form</p>

          <form method="post" action="{{ route('store.admin') }} " >
            @csrf

          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label"> Name <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="name"  placeholder="Enter Name" required="">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Phone: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="phone"  placeholder="Enter Phone" required="">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="email" name="email" required=""  >
                </div>
              </div><!-- col-4 -->

              
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Password: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="password" name="password" required="" >
                </div>
              </div><!-- col-4 -->


            </div><!-- row -->


            <hr>
            

            <div class="row"> <!-- row starts -->
              <div class="col-lg-4">
                  <label class="ckbox">
                    <input type="checkbox" name="category" value="1">
                    <span>Category</span>
                  </label>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                  <label class="ckbox">
                    <input type="checkbox" name="coupon" value="1">
                    <span>Coupon</span>
                  </label>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                  <label class="ckbox">
                    <input type="checkbox" name="product" value="1">
                    <span>Product</span>
                  </label>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                  <label class="ckbox">
                    <input type="checkbox" name="orders" value="1">
                    <span>Orders</span>
                  </label>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                  <label class="ckbox">
                    <input type="checkbox" name="blog" value="1">
                    <span>Blog</span>
                  </label>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                  <label class="ckbox">
                    <input type="checkbox" name="other" value="1">
                    <span>Other</span>
                  </label>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                  <label class="ckbox">
                    <input type="checkbox" name="reports" value="1">
                    <span>Reports</span>
                  </label>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                  <label class="ckbox">
                    <input type="checkbox" name="user_role" value="1">
                    <span>User_role</span>
                  </label>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                  <label class="ckbox">
                    <input type="checkbox" name="return_order" value="1">
                    <span>Return_order</span>
                  </label>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                  <label class="ckbox">
                    <input type="checkbox" name="contact" value="1">
                    <span>Contact</span>
                  </label>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                  <label class="ckbox">
                    <input type="checkbox" name="product_comment" value="1">
                    <span>Product_comment</span>
                  </label>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                  <label class="ckbox">
                    <input type="checkbox" name="setting" value="1">
                    <span>Setting</span>
                  </label>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                  <label class="ckbox">
                    <input type="checkbox" name="stock" value="1">
                    <span>Stock</span>
                  </label>
              </div><!-- col-4 -->





            </div> <!-- row ends -->

            <br><br>

            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5" type="submit">Submit</button>

            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
        </div><!-- card -->

        </form>





      </div>


    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->


@endsection
