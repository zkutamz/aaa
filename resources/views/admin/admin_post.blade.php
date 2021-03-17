@Extends('layout')
@section('admin_content')
<div class="row">
	<div class="card mb-3">
                            <div class="card-header-tab card-header">
                                <div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i class="header-icon lnr-laptop-phone mr-3 text-muted opacity-6"> </i>Posts
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                  <div class="row">
                                    <div class="col-sm-12 col-md-1">
                                      <div class="card-tools">
                                        <a onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="btn btn-tool btn-sm">
                                        <i class="fa fa-plus-square" style={size="20px";}></i>
                                      </a>
                                      </div>
                                    </div>

                                    <div class="col-sm-12 col-md-1">
                                      <div id="example_length">
                                        <label>Show 
                                          <select name="example_length" aria-controls="example" class="custom-select custom-select-sm form-control form-control-sm">
                                          <option value="10">10</option>
                                          <option value="25">25</option>
                                          <option value="50">50</option>
                                          <option value="100">100</option>
                                        </select> entries</label>
                                      </div>
                                    </div>
                                    
                                    <div class="col-sm-12 col-md-6"><div id="example_filter" class="dataTables_filter">
                                      <label>Search:
                                        <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example">
                                      </label>
                                    </div>
                                  </div>
                                </div>
                                  <div class="row"><div class="col-sm-12">
                                    <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered dataTable dtr-inline" role="grid" aria-describedby="example_info">
                                    <thead>
                                        <tr role="row">
                                          <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1"  aria-sort="ascending" aria-label="Name: activate to sort column descending">ID</th>
                                          <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"  aria-label="Position: activate to sort column ascending">Tiêu đề bài viết</th>
                                          <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"  aria-label="Office: activate to sort column ascending">Ngày tạo</th>
                                          <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"  aria-label="Age: activate to sort column ascending">Ngày cập nhật</th>
                                          <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"  aria-label="Start date: activate to sort column ascending">Thao tác</th>
                                    </thead>
                                    <tbody>

                   
                    @foreach($posts as $key => $post)
                  <tr>
                    <td>
                        {{$post->id}}
                    </td>
                    <td >
                        {{$post->title}}
                    </td>
                    <td>
                      {{$post->created_at}}
                    </td>
                    <td>
                     {{$post->updated_at}}
                    </td>
                    <td>
                     <div class="card-tools">
                      <a onclick="update()" class="text-muted">
                        <i class="fa fa-edit"></i>
                      </a>
                      <a onclick="update()" class="text-muted">
                        <i class="	fa fa-times"></i>
                      </a>
                      </div>
                    </td>
                  </tr>
                 @endforeach
                  </tbody>
                                    <tfoot>
                                        <tr><td rowspan="5" colspan="5">&nbsp;</td></tr>
                                    </tfoot>
                                </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example_previous"><a href="#" aria-controls="example" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example_next"><a href="#" aria-controls="example" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                            </div>
                        </div>
			<div id="id01" class="modal">
  
				<form class="modal-content animate" action="{{URL::to('posts-add')}}" method="post"enctype="multipart/form-data">
					<div class="imgcontainer">
						<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
						<h1 class="page-header test">
						 THÊM BÀI VIẾT
						</h1>
					</div>

					<div class="container">
						{{csrf_field()}}
						<label for="posts_name"><b>Tiêu đề</b></label>
						<input type="text" placeholder="Tiêu đề bài viết" name="posts_name" required>
						<label for="post_desc"><b>Mô tả</b></label>
						<input type="text" placeholder="Mô tả bài viết" name="post_desc" required>
						<label for="avatar"><b>Choose a profile picture:</b></label>
						<input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg" class="form-control">
						<label for="cat_id"><b>Danh mục</b></label>
						<select name="cat_id" aria-controls="example" class="custom-select custom-select-sm form-control form-control-sm">
							@foreach ($categories as $key => $category)
								<option value="{{$category->id}}">{{$category->name}}</option>
							@endforeach
            </select>

						<label for="post_link"><b>Link liên kết</b></label>
						<input type="text" placeholder="Link bài viết" name="post_link" required>
						<button type="submit">Thêm</button>
					</div>

					<div class="container" style="background-color:#f1f1f1">
					<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
					</div>
				</form>
			</div>

      <!-- <div id="id02" class="modal">
				<form id="update-cat" class="modal-content animate" method="post">
					<div class="imgcontainer">
						<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
						<h1 class="page-header test">
						 CẬP NHẬT DANH MỤC SẢN PHẨM
						</h1>
					</div>

					<div class="container">
						{{csrf_field()}}
            <input id="cat_id" name="cat_id" type="hidden">
						<label for="cat_name"><b>Tên danh mục</b></label>
						<input id="catName" type="text" placeholder="tên danh mục" name="cat_name" required>
						<button type="submit">Cập nhật</button>
					</div>

					<div class="container" style="background-color:#f1f1f1">
					<button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
					</div>
				</form>
			</div> -->
</div><!--/.row-->
<script>
function update(id){
  document.getElementById('id02').style.display='block';
  document.getElementById('update-cat').action= "{{URL::to('categories-update')}}";
  document.getElementById('catName').value = document.getElementById(id).innerHTML;
  document.getElementById('cat_id').value = id;
};
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
@endsection