@Extends('layout')
@section('admin_content')
<div class="row">
	<div class="card mb-3">
                            <div class="card-header-tab card-header">
                                <div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i class="header-icon lnr-laptop-phone mr-3 text-muted opacity-6"> </i>Brands
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
                                          <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"  aria-label="Position: activate to sort column ascending">thương hiệu</th>
                                          <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"  aria-label="Office: activate to sort column ascending">Ngày tạo</th>
                                          <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"  aria-label="Age: activate to sort column ascending">Ngày cập nhật</th>
                                          <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"  aria-label="Start date: activate to sort column ascending">Thao tác</th>
                                    </thead>
                                    <tbody>

                    @foreach ($brands as $key => $brand)
                    
                  <tr>
                    <td>
                        {{$brand->brand_id}}
                    </td>
                    <td id="{{$brand->brand_id}}">
                      {{$brand->brand_name}}
                    </td>
                    <td>
                      {{$brand->created_at}}
                    </td>
                    <td>
                      {{$brand->updated_at}}
                    </td>
                    <td>
                     <div class="card-tools">
                      <a onclick="update({{$brand->brand_id}})" class="text-muted">
                        <i class="fa fa-edit"></i>
                      </a>
                      <a href="{{URL::to('brands-delete/'.$brand->brand_id)}}" class="text-muted">
                        <i class="	fa fa-times"></i>
                      </a>
                      </div>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                                    <tfoot>
                                        <tr><td rowspan="5" colspan="5"><?php
                                        
                                        $message = Session::get('massege');
							                          if($message){
								                        echo $message;
								                        Session::put('massege',null);
							                          }
                                        ?>&nbsp;</td></tr>
                                    </tfoot>
                                </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example_previous"><a href="#" aria-controls="example" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example_next"><a href="#" aria-controls="example" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                            </div>
                        </div>
			<div id="id01" class="modal">
  
				<form class="modal-content animate" action="{{URL::to('brands-add')}}" method="post">
					<div class="imgcontainer">
						<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
						<h1 class="page-header test">
						 THÊM THƯƠNG HIỆU SẢN PHẨM
						</h1>
					</div>

					<div class="container">
						{{csrf_field()}}
						<label for="brand_name"><b>Tên thương hiệu</b></label>
						<input type="text" placeholder="tên thương hiệu" name="brand_name" required>
						<button type="submit">Thêm</button>
					</div>

					<div class="container" style="background-color:#f1f1f1">
					<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
					</div>
				</form>
			</div>

      <div id="id02" class="modal">
				<form id="update-cat" class="modal-content animate" method="post">
					<div class="imgcontainer">
						<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
						<h1 class="page-header test">
						 CẬP NHẬT THƯƠNG HIỆU SẢN PHẨM
						</h1>
					</div>

					<div class="container">
						{{csrf_field()}}
            <input id="cat_id" name="brand_id" type="hidden">
						<label for="brand_name"><b>Tên thương hiệu</b></label>
						<input id="brandName" type="text" placeholder="tên thương hiệu" name="brand_name" required>
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
  document.getElementById('update-brand').action= "{{URL::to('brands-update')}}";
  document.getElementById('brandName').value = document.getElementById(id).innerHTML;
  document.getElementById('brand_id').value = id;
};
// function delete(id){
//    document.getElementById('update-cat').action= "{{URL::to('brands-delete')}}";
// }
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