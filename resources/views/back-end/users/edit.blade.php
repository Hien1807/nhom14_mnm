@extends('back-end.layouts.master')
@section('content')
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Khách hàng</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><small>Sửa thông tin khách hàng</small></h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">					
					<div class="panel-body">

						<form action="" method="POST" role="form">
				      		{{ csrf_field() }}

				      		<div class="form-group">
				      			<label for="input-id">Tên Khách hàng</label>
				      			<input type="text" name="txtnameu" id="inputTxtName" class="form-control" value="{!! old('txtnameu', isset($data['name']) ? $data['name'] : null)!!}" required="required">
				      		</div>
							<div class="form-group">
								<label for="input-id">Email</label>
								<input type="text" name="txtemailu" id="inputTxtemail" class="form-control" value="{!! old('txtemailu', isset($data['email']) ? $data['email'] : null)!!}" required="required">
							</div>
							<div class="form-group">
								<label for="input-id">Số điện thoại</label>
								<input type="text" name="txtphone" id="inputTxtphone" class="form-control" value="{!! old('txtphone', isset($data['phone']) ? $data['phone'] : null)!!}" required="required">
							</div>
							<div class="form-group">
								<label for="input-id">Địa chỉ</label>
								<input type="text" name="txtaddress" id="inputTxtaddress" class="form-control" value="{!! old('txtaddress', isset($data['address']) ? $data['address'] : null)!!}" required="required">
							</div>
				      		<input type="submit" name="btnCateAdd" class="btn btn-primary" value="Cập nhật" class="button" />
				      	</form>					      	
					</div>
				</div>
			</div>
		</div><!--/.row-->		
	</div>	<!--/.main-->
<!-- =====================================main content - noi dung chinh trong chu -->
@endsection