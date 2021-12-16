@extends('layouts.index')

@section('content')
<div class="row">
	<div class="col-md-12 stretch-card">
	  <div class="card">
		<div class="card-body">
			<p class="card-title text-center">Danh sách cầu thủ</p>
			<hr/>

			<div class="d-flex justify-content-between align-items-end flex-wrap mb-3">
				<button type="button" class="btn btn-light bg-white btn-icon mr-3 mt-2 mt-xl-0">
					<i class="mdi mdi-plus text-muted"></i>
				</button>
				<button class="btn btn-primary mt-2 mt-xl-0">
					Tải xuống danh sách
				</button>
			</div>

			<div class="col-md-12 stretch-card mb-3">
				<div class="card bg-light rounded border border-dark">
					<div class="card-body">
						<div class="d-flex justify-content-between align-items-end flex-wrap">
							<button class="btn btn-success mt-2 mt-xl-0">
								Thêm thành viên
							</button>

							<button class="btn btn-primary mt-2 mt-xl-0">
								Tải lên danh sách
							</button>
						</div>
					</div>
				</div>
			</div> 
			
			<div class="col-md-12 stretch-card">
				<div class="card bg-light">

					<div class="card-body">
						<div class="row">
							<div class="col-md-3">
								<img style="width: 100px" class="card-img-top" 
									src="../images/faces/face1.jpg" alt="Card image cap">
							</div>

							<div class="col-md-9">
								<form>

									<div class="row">
										<div class="col">
											<div class="form-group">
												<label>Tên cầu thủ <span class="text-danger">*</span></label>
												<div class="input-group">
												  <div class="input-group-prepend bg-transparent">
													<span class="input-group-text bg-transparent border-right-0">
													  <i class="mdi mdi-account-outline text-primary"></i>
													</span>
												  </div>
												  <input type="text" name="fullname" class="form-control form-control-lg border-left-0" placeholder="Tên cầu thủ">
												</div>
											  </div>
										</div>
					
										<div class="col">
											<div class="form-group">
												<label>Số áo <span class="text-danger">*</span></label>
												<div class="input-group">
												  <div class="input-group-prepend bg-transparent">
													<span class="input-group-text bg-transparent border-right-0">
													  <i class="mdi mdi-account-outline text-primary"></i>
													</span>
												  </div>
												  <input type="text" name="number" class="form-control form-control-lg border-left-0" placeholder="Số áo">
												</div>
											  </div>
										</div>
									</div>
					
									<div class="row">
										<div class="col">
											<div class="form-group">
												<label>Vị trí thi đấu</label>
												<div class="input-group">
												  <div class="input-group-prepend bg-transparent">
													<span class="input-group-text bg-transparent border-right-0">
													  <i class="mdi mdi-account-outline text-primary"></i>
													</span>
												  </div>
												  <input type="text" name="type" class="form-control form-control-lg border-left-0" 
													placeholder="Vị trí thi đấu">
												</div>
											  </div>
										</div>
					
										<div class="col">
											<div class="form-group">
												<label>Vai trò</label>
												<div class="input-group">
												  <div class="input-group-prepend bg-transparent">
													<span class="input-group-text bg-transparent border-right-0">
													  <i class="mdi mdi-account-outline text-primary"></i>
													</span>
												  </div>
												  <input type="text" class="form-control form-control-lg border-left-0" 
													placeholder="Vai trò">
												</div>
											  </div>
										</div>
									</div>
					
									<div class="row">
										<div class="col">
											<div class="form-group">
												<label>Số điện thoại</label>
												<div class="input-group">
												  <div class="input-group-prepend bg-transparent">
													<span class="input-group-text bg-transparent border-right-0">
													  <i class="mdi mdi-account-outline text-primary"></i>
													</span>
												  </div>
												  <input type="text" class="form-control form-control-lg border-left-0" placeholder="Số điện thoại">
												</div>
											  </div>
										</div>
					
										<div class="col">
											<div class="form-group">
												<label>CMND/CCCD <span class="text-danger">*</span></label>
												<div class="input-group">
												  <div class="input-group-prepend bg-transparent">
													<span class="input-group-text bg-transparent border-right-0">
													  <i class="mdi mdi-email-outline text-primary"></i>
													</span>
												  </div>
												  <input type="text" class="form-control form-control-lg border-left-0" 
													placeholder="CMND/CCCD">
												</div>
											  </div>
										</div>
									</div>
					
									<div class="mt-3 text-center">
										<button type="button" class="btn btn-success">Lưu</button>
									</div>
								</form>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	  </div>
	</div>
</div>
@endsection