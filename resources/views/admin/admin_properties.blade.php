@Extends('layout')
@section('admin_content')
	<div class="row">
	<div class="card mb-3">
                            <div class="card-header-tab card-header">
                                <div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i class="header-icon lnr-laptop-phone mr-3 text-muted opacity-6"> </i>Properties
                                </div>
                            </div>
                            <div class="card-body">
                              
                                  <div class="row"><div class="col-sm-12">
                                    <form class="modal-content animate" action="{{URL::to('properties-update')}}" method="post">
                                        <div class="container">
                                            {{csrf_field()}}
                                            <label for="post_show"><b>Số lượng tải bài viết </b></label>
                                            <input type="text" placeholder="Số lượng tải" name="post_show" value="{{$properties->posts_show}}" required>
                                            <label for="post_load"><b>Số lượng tải bài viết tiếp theo</b></label>
                                            <input type="text" placeholder="Số lượng tải" name="post_load"  value="{{$properties->posts_load}}" required>
                                            <button type="submit">Cập nhật</button>
                                        </div>
                                    </form>
                                    </div>
                                </div>

</div><!--/.row-->
@endsection