@extends('backend.master')
@section('content')

<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="{{ url('dashboard') }}">Starlight</a>
    <span class="breadcrumb-item active">ADD Category</span>
  </nav>

  <div class="sl-pagebody">
    <div class="sl-page-title">
      <h5>ADD New Category</h5>
    </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40">
      <h6 class="card-body-title">ADD New</h6>
      @if (session('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ (session('success')) }}</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        
      @endif
      

       <form action="{{ url('admin/category-post') }}" method="POST">
        @csrf
      <div class="form-layout">
        <div class="row mg-b-25">
 
          <div class="col-lg-12">
            <div class="form-group mg-b-10-force">
              <label for="category_name" class="form-control-label">Add Category <span class="tx-danger">*</span></label>
              <input class="form-control" type="text" @error('category_name') is-invalid @enderror value="{{ old('category_name') }}"
              id="category_name " name="category_name"  placeholder="Ex:Fashion">

              @error('category_name')
                  <div class="alert alert-danger">{{ $message }}</div>
               @enderror
            </div>
          </div><!-- col-8 -->
        </div><!-- row -->

        <div class="form-layout-footer text-center">
          <button style="cursor: pointer" type="submit" class="btn btn-info mg-r-5">Submit Form</button>
         
        </div><!-- form-layout-footer -->
      </div><!-- form-layout -->
     </form>
    </div><!-- card -->

  <footer class="sl-footer">
    <div class="footer-left">
      <div class="mg-b-2">Copyright © 2017. Starlight. All Rights Reserved.</div>
      <div>Made by ThemePixels.</div>
    </div>
    <div class="footer-right d-flex align-items-center">
      <span class="tx-uppercase mg-r-10">Share:</span>
      <a target="_blank" class="pd-x-5" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/starlight"><i class="fa fa-facebook tx-20"></i></a>
      <a target="_blank" class="pd-x-5" href="https://twitter.com/home?status=Starlight,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/starlight"><i class="fa fa-twitter tx-20"></i></a>
    </div>
  </footer>
</div>
@endsection


