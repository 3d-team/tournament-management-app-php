@extends('layouts.index')

@section('content')
<div class="row">
    <div class="col-md-12 stretch-card">
      <div class="card">
        <div class="card-body">
            <h1 class="card-title text-left font-weight-bold">Tạo giải đấu</h1>
            <hr/>

            <div class="row bg-light border border-dark rounded p-3">
                <div class="col-md-4">
                    <h2 class="card-title text-left font-weight-bold">Logo giải đấu</h2>
                    <img src="{{asset('images/temp.png') }}" class="img-fluid" alt="Responsive image">
                </div>

                <div class="col-md-4 mr-2">
                    <form method="post">
                      @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Tên giải đấu <span class="text-danger"> *</span></label>
                          <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Giải đấu ABC ...">
                        </div>

                        <div class="form-group">
                          <label for="exampleInputPassword1">Địa điểm <span class="text-danger"> *</span></label>
                          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Địa điểm tổ chức ...">
                        </div>

                        <div class="form-group">
                          <label for="exampleInput2">Hình thức thi đấu <span class="text-danger"> *</span></label>
                          <input type="text" name="form" class="form-control" id="exampleInput2" placeholder="Hình thức thi đấu ...">
                        </div>

                        <div class="form-group ">
                            <label for="quantity">Số lượng đội bóng <span class="text-danger"> *</span></label>
                            <input type="number" name="number_team" class="form-control" id="team-quantity" aria-describedby="emailHelp" placeholder="0">
                          </div>
                        
                        <button type="submit" class="btn btn-primary">Tạo giải</button>
                      </form>
                </div>

                <div class="col-md-3">
                    <h2 class="card-title text-left font-weight-bold">Hình thức thi đấu <span class="text-danger"> *</span></h2>
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                          <a class="nav-link active bg-success" href="#">Đấu trực tiếp</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-dark" href="#">Đấu vòng tròn</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-dark" href="#">Loại trực tiếp</a>
                        </li>
                       
                      </ul>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>
@endsection