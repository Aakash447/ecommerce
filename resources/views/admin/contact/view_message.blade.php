@extends('admin.admin_layouts')

@section('admin_content')

@php

$blogcategory = DB::table('post_category')->get();

@endphp

        <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <span class="breadcrumb-item active">Blog Section</span>
      </nav>

      <div class="sl-pagebody">

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Post Update
            <a href="{{ route('all.blogpost') }}  " class="btn btn-success btn-sm pull-right">All Post</a>
          </h6>
          

          <form >


          <div class="form-layout">
            <div class="row mg-b-25">

              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Name: <span class="tx-danger"></span></label>
                  <input class="form-control" type="text" name="post_title_en"  
                  value="{{ $message->name  }} ">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Phone: <span class="tx-danger"></span></label>
                  <input class="form-control" type="text" name="post_title_in" 
                  value="{{ $message->phone  }} "
                   >
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Email: <span class="tx-danger"></span></label>
                  <input class="form-control" type="text" name="post_title_in" 
                  value="{{ $message->email  }} "
                   >
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Messages : <span class="tx-danger"></span></label>
                  <textarea class="form-control"  name="details_en" >
                    {{ $message->message  }}

                  </textarea>
                    
                  
                </div>
              </div><!-- col-4 -->

 


            </div><!-- row -->


            

            </div> <!-- row ends -->

            <br><br>

          </div><!-- form-layout -->
        </div><!-- card -->

        </form>





      </div>


    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->






@endsection
