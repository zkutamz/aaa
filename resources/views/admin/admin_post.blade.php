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
              <select name="example_length" aria-controls="example"  class="custom-select custom-select-sm form-control form-control-sm">
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
              <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1"  >ID</th>
              <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" >Tiêu đề bài viết</th>
              <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" >Mô tả bài viết</th>
              <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" >Danh mục</th>
              <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" >Thương hiệu</th>
              <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" >Cấp độ</th>
              <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" >Link</th>
              <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" >Ngày tạo</th>
              <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" >Ngày cập nhật</th>
              <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" >Thao tác</th>
            </tr>                            
          </thead>
          <tbody>

                   
          @foreach($posts as $key => $post)
            <tr>
              <td id="post-id-{{$post->id}}">
                {{$post->id}}
              </td>
              <td id="post-title-{{$post->id}}">
                {{$post->title}}
              </td>
              <td id="post-desc-{{$post->id}}">
                {{$post->description}}
              </td>
              <td name = "post-category-{{$post->id}}" id="{{$post->category_id}}">
                {{$post->name}}
              </td>
              <td name="post-brand-{{$post->id}}" id="{{$post->brand_id}}">
                {{$post->brand_name}}
              </td>
              <td id="post-level-{{$post->id}}">
                {{$post->level}}
              </td>
              <td id="post-link-{{$post->id}}">
                {{$post->link}}
              </td>
              <td >
                {{$post->created_at}}
              </td>
              <td >
                {{$post->updated_at}}
              </td>
              <td>
                <div class="card-tools">
                  <a onclick="update({{$post->id}})" class="text-muted">
                    <i class="fa fa-edit"></i>
                  </a>
                  <a onclick="return confirm('Bạn thực sự muốn xóa bài viết này.')" href="{{URL::to('posts-delete/'.$post->id)}}" class="text-muted">
                    <i class="	fa fa-times"></i>
                  </a>
                </div>
              </td>
            </tr>
          @endforeach 
          </tbody>
          <tfoot>
            <tr><td rowspan="5" colspan="10"><?php
                                        
                                        $message = Session::get('message');
							                          if($message){
								                        echo $message;
								                        Session::put('message',null);
							                          }
                                        ?>&nbsp;</td></tr>
          </tfoot>
        </table>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-5">
        <div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries
        </div>
      </div>
      <div class="col-sm-12 col-md-7">
        <div class="dataTables_paginate paging_simple_numbers" id="example_paginate">
          <ul class="pagination">
            <li class="paginate_button page-item previous disabled" id="example_previous">
              <a href="#" aria-controls="example" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
            </li>
            <li class="paginate_button page-item active">
              <a href="#" aria-controls="example" data-dt-idx="1" tabindex="0" class="page-link">1</a>
            </li>
            <li class="paginate_button page-item ">
              <a href="#" aria-controls="example" data-dt-idx="2" tabindex="0" class="page-link">2</a>
            </li>
            <li class="paginate_button page-item ">
              <a href="#" aria-controls="example" data-dt-idx="3" tabindex="0" class="page-link">3</a>
            </li>
            <li class="paginate_button page-item ">
              <a href="#" aria-controls="example" data-dt-idx="4" tabindex="0" class="page-link">4</a>
            </li>
            <li class="paginate_button page-item ">
              <a href="#" aria-controls="example" data-dt-idx="5" tabindex="0" class="page-link">5</a>
            </li>
            <li class="paginate_button page-item ">
              <a href="#" aria-controls="example" data-dt-idx="6" tabindex="0" class="page-link">6</a>
            </li>
            <li class="paginate_button page-item next" id="example_next">
              <a href="#" aria-controls="example" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
                               
	<div id="id01" class="modal" onsubmit="return check()">
  
				<form class="modal-content animate" action="{{URL::to('post-add')}}" method="post"enctype="multipart/form-data">
					<div class="imgcontainer">
						<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
						<h1 class="page-header test">
						 THÊM BÀI VIẾT
						</h1>
					</div>

					<div class="container">
						{{csrf_field()}}
						<label for="posts_name"><b>Tiêu đề</b></label>
						<input type="text" placeholder="Tiêu đề bài viết" id = "post_title" name="post_title" required>
						<label for="post_desc"><b>Mô tả</b></label>
						<input type="text" placeholder="Mô tả bài viết" id = "post_desc" name="post_desc" required>
						<label for="avatar"><b>Choose a profile picture:</b></label>
						<input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg" class="form-control" required>
            
						<label for="cat_id"><b>Danh mục</b></label>
						<select name="cat_id" aria-controls="example" class="custom-select custom-select-sm form-control form-control-sm">
							@foreach ($categories as $key => $category)
								<option value="{{$category->id}}">{{$category->name}}</option>
							@endforeach
            </select>

            <label for="brand_id"><b>Thương hiệu</b></label>
						<select name="brand_id" id="brand_id" aria-controls="example" class="custom-select custom-select-sm form-control form-control-sm">
							@foreach ($brands as $key => $brand)
								<option value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
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

      <div id="id02" class="modal" onsubmit="return check()">
				<form id="update-post" class="modal-content animate" method="post" onsubmit="return check()">
					<div class="imgcontainer">
						<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
						<h1 class="page-header test">
						 CẬP NHẬT BÀI VIẾT
						</h1>
					</div>

					<div class="container">
            {{csrf_field()}}
            <input id="post_id" name="post_id" type="hidden">
					  <label for="post_title"><b>Tiêu đề</b></label>
						<input type="text" placeholder="Tiêu đề bài viết"  name="post_title" id="post_title" required>
						<label for="post_desc"><b>Mô tả</b></label>
						<input type="text" placeholder="Mô tả bài viết" name="post_desc" id="post_desc" required>
						<label for="avatar"><b>Choose a profile picture:</b></label>
						<input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg" class="form-control">
						<label for="cat_id"><b>Danh mục</b></label>
						<select name="cat_id" id="cat_id" aria-controls="example" class="custom-select custom-select-sm form-control form-control-sm">
							@foreach ($categories as $key => $category)
								<option value="{{$category->id}}">{{$category->name}}</option>
							@endforeach
            </select>

            <label for="brand_id"><b>Thương hiệu</b></label>
						<select name="brand_id" id="brand_id" aria-controls="example" class="custom-select custom-select-sm form-control form-control-sm">
							@foreach ($brands as $key => $brand)
								<option value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
							@endforeach
            </select>

						<label for="post_link"><b>Link liên kết</b></label>
						<input type="text" placeholder="Link bài viết" name="post_link" id="post_link" required>
						<button type="submit">Cập nhật</button>
					</div>

					<div class="container" style="background-color:#f1f1f1">
					  <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
					</div>
				</form>
			</div>
</div><!--/.row-->
<script>
function update(id){
  document.getElementById('id02').style.display='block';
  document.getElementById('update-post').action= "{{URL::to('post-update')}}";
  document.getElementById('post_title').value = document.getElementById('post-title-'+id).innerHTML.trim();
  document.getElementById('post_desc').value = document.getElementById('post-desc-'+id).innerHTML.trim();
  document.getElementById('post_link').value = document.getElementById('post-link-'+id).innerHTML.trim();
  document.getElementById('cat_id').value = document.getElementsByName('post-category-'+id)[0].id;
  document.getElementById('brand_id').value = document.getElementsByName('post-brand-'+id)[0].id;
  document.getElementById('post_id').value = id;
};
// function delete(id){
//    document.getElementById('update-cat').action= "{{URL::to('categories-delete')}}";
// }
// Get the modal
var modal1 = document.getElementById('id01');
var modal2 = document.getElementById('id02');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
    else if (event.target == modal2) {
        modal2.style.display = "none";
    }
}
function check(){
    let seoTitleMin = parseInt({{$properties->seo_title_min}});
    let seoTitleMax = {{$properties->seo_title_max}};
    let seoDescriptionMin = {{$properties->seo_description_min}};
    let seoDescriptionMax = {{$properties->seo_description_max}};
    let title = document.getElementById('post_title').value.trim();
    let description = document.getElementById('post_desc').value.trim();
   
    if(title.length < seoTitleMin){
      alert("Tiêu đề hiện có "+ title.length +" ký tự.\nTiêu đề tối thiểu phải "+seoTitleMin+" ký tự.");
      return false;
    }
    else if(title.lenght > seoTitleMax){
      alert("Tiêu đề hiện có "+ title.length +" ký tự.\nTiêu đề tối đa chỉ "+seoTitleMax+" ký tự.");
      return false;
    }
      alert()
    if(description.length < seoDescriptionMin){
      alert("Mô tả hiện có "+ description.length +" ký tự.\nMô tả tối thiểu phải "+seoDescriptionMin+" ký tự.");
      return false;
    }
    else if(description.length > seoDescriptionMax){
      alert("Mô tả hiện có "+ description.length +" ký tự.\nMô tả tối đa chỉ "+seoDescriptionMax+" ký tự.");
      return false;
    }
    return min;
}
</script>
@endsection