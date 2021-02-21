@extends('admin.admin_layouts')

@section('admin_content')
<!-- ########## START: MAIN PANEL ########## -->

@php 
$blogcategory = DB::table('post_category')->get();
@endphp


    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <span class="breadcrumb-item active">Blog Section</span>
      </nav>

      <div class="sl-pagebody">
        </div><!-- row -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Update Post
          <a href="{{ route('all.blogpost') }}" class="btn btn-success btn-sm pull-right">All Product</a></h6>


<form method="post" action="{{ url('update/post/'.$blogedit->id) }}" enctype="multipart/form-data">
  @csrf


          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Post Title(ENGLISH): <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="post_title_en" value="{{ $blogedit->post_title_en }}">
                </div>


              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Post Title(HINDI): <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="post_title_in" value="{{ $blogedit->post_title_in }}">
                </div>
              </div><!-- col-4 -->
              
              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Category: <span class="tx-danger">*</span></label>
                  <select class="form-control select2" data-placeholder="Choose country" name="category_id">
                    <option label="Choose Category"></option>
                    @foreach($blogcategory as $row)
                    <option value="{{ $row->id }}" <?php if($row->id == $blogedit->category_id){echo "selected";} ?>>

                      {{ $row->category_name_en }}


                    </option>
                    @endforeach
                    
                  </select>
                </div>
              </div><!-- col-4 -->


              
              
              

            


              


              

              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Post Details(ENGLIST): <span class="tx-danger">*</span></label>
                  <textarea class="form-control" id="summernote" name="details_en">
                    {!! $blogedit->details_en !!}
                  </textarea>
                </div>
              </div>


              <!-- col-4 -->
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Post Details(HINDI): <span class="tx-danger">*</span></label>
                  <textarea class="form-control" id="summernote1" name="details_in">
                    {!! $blogedit->details_in !!}
                  </textarea>
                </div>
              </div><!-- col-4 -->
            </div>
          </div>

              


              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Post Image: <span class="tx-danger">*</span></label>
                  <label class="custom-file"><br>
                    <br>
                    <br>
                  <input type="file" id="file" class="custom-file-input" name="post_image" onchange="readURL(this);" >
                  <span class="custom-file-control"></span>
                  <img src="#" id="one">
                 </label>
                </div>
              </div><!-- col-4 --><!-- col-4 -->



<div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Old Image: <span class="tx-danger">*</span></label>
                  <label class="custom-file"><br>
          <img src="{{ URL::to($blogedit->post_image) }}" style="height: 130px; width: 130px;">

          <input type="hidden" name="old_image" value="{{ $blogedit->post_image }}">
                    <br>
                    <br>
                    <br>
                    <br>
                 </label>
                </div>
              </div><!-- col-4 --><!-- col-4 -->

             


            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5" type="submit">Submit Form</button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
        </div><!-- card -->


        </form>

        
    </div><!-- sl-mainpanel -->
  </div>

    <!-- ########## END: MAIN PANEL ########## -->

 <script type="text/javascript">
  function readURL(input){
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#one')
        .attr('src', e.target.result)
        .width(80)
        .height(80);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>

@endsection
