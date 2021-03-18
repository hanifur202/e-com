@extends('backend.master')

@section('content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="{{ url('dashboard') }}">Starlight</a>
      <span class="breadcrumb-item active">Dashboard</span>
    </nav>

    <div class="sl-pagebody">

        <div class="sl-page-title">
            <h5 class="text-center">All Category{{ $can_count }}</h5>


          </div><!-- sl-page-title -->
          @if (session('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ (session('success')) }}</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
            
          @endif
          @if (session('delete'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ (session('delete')) }}</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
            
          @endif
  
          <div class="card pd-20 pd-sm-40" >
            <div class="row row-sm mg-t-20">
              <div class="col-xl-12">
              <a href="{{ url('admin/category-add') }}" style="float: right; margin-bottpm:5px" ><i class="fa fa-plus"></i> ADD</a>
                <div class="table-responsive">
                    <table class="table mg-b-0">
                      <thead>
                        <tr>
                  
                          <th>SL</th>
                          <th>category Name</th>
                          <th>Created</th>
                          <th class="text-center">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($categorys as $key => $data) 
                        <tr>
                            <td>{{ $categorys->firstItem()   + $key}}</td>
                          <td>{{ $data->category_name }}</td>
                          <td>{{ $data->created_at->diffForHumans()}}</td>
                          <td class="text-center">
                              <a class="btn btn-outline-info" href="{{ url('admin/category-edit') }}/{{ $data->id }}">Edit</a>
                              <a class="btn btn-outline-danger" href="{{ url('admin/category-delete/') }}/{{ $data->id }}">Delete</a>
                          </td>
                        </tr>
                        @endforeach
                        
                      </tbody>
                    </table>
                    {{ $categorys->links() }}
                  </div>
                </div>
              </div>
  
           
          </div><!-- card -->

    </div><!-- sl-pagebody -->
    <footer class="sl-footer">
      <div class="footer-left">
        <div class="mg-b-2">Copyright &copy; 2017. Starlight. All Rights Reserved.</div>
        <div>Made by ThemePixels.</div>
      </div>
      <div class="footer-right d-flex align-items-center">
        <span class="tx-uppercase mg-r-10">Share:</span>
        <a target="_blank" class="pd-x-5" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/starlight"><i class="fa fa-facebook tx-20"></i></a>
        <a target="_blank" class="pd-x-5" href="https://twitter.com/home?status=Starlight,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/starlight"><i class="fa fa-twitter tx-20"></i></a>
      </div>
    </footer>
  </div><!-- sl-mainpanel -->
@endsection

