@Extends('layout')
@section('admin_content')
<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
				<?php 
					$name = Session::get('admin_name');
					if($name){
						echo 'Xin chào ' .$name;
					}
				?>
				</h1>
			</div>
</div><!--/.row-->
@endsection