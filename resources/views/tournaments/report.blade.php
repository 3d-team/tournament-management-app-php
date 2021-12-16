@extends('layouts.index')

@section('content')
<div class="row">
    <div class="col-md-12 stretch-card">
      <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-end flex-wrap mb-3">
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <button type="button" class="btn btn-success mr-3 rounded ">Tất cả đội đấu</button>
                    <button type="button" class="btn btn-success mr-3 rounded">Tất cả vòng đấu</button>
                    <button type="button" class="btn btn-success rounded">Hiển thị 4 cột</button>
                </div>

                <button type="button" class="btn btn-primary rounded">Tải về</button>
            </div>


            
            <ul class="nav nav-tabs justify-content-center">
                <li class="nav-item">
                  <a class="nav-link active text-success" data-toggle="tab" aria-current="page" href="#tab1">Đội bóng</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-success" data-toggle="tab" href="#tab2">Cầu thủ</a>
                </li>
            </ul>

            <div class="card">

                <div class="card-body">

                    <div class="tab-content">

                        <div id="tab1" class="tab-pane fade in active show">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="card-title">Bảng A</p>
                                </div>
                                <hr/>
                                <div class="col-md-12 stretch-card">
                                    <table class="table table-bordered">
                                        <thead class="table-dark">
                                          <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Tên đội</th>
                                            <th scope="col">Số trận</th>
                                            <th scope="col">T - H - B</th>
                                            <th scope="col">Số bàn ghi được</th>
                                            <th scope="col">Số bàn thua</th>
                                            <th scope="col">Phản lưới nhà</th>
                                            <th scope="col">Thẻ vàng</th>
                                            <th scope="col">Thẻ đỏ</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <th scope="row">1</th>
                                            <td>Viettel</td>
                                            <td>0</td>
                                            <td>0 - 0 - 0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                          </tr>

                                          <tr>
                                            <th scope="row">2</th>
                                            <td>Sông Lam Nghệ An</td>
                                            <td>0</td>
                                            <td>0 - 0 - 0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                          </tr>

                                          <tr>
                                            <th scope="row">3</th>
                                            <td>Hà Nội T&T</td>
                                            <td>0</td>
                                            <td>0 - 0 - 0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                          </tr>

                                          <tr>
                                            <th scope="row">4</th>
                                            <td>FLC Thanh Hóa</td>
                                            <td>0</td>
                                            <td>0 - 0 - 0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                          </tr>

                                          <tr>
                                            <th scope="row">5</th>
                                            <td>HAGL</td>
                                            <td>0</td>
                                            <td>0 - 0 - 0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                          </tr>

                                          <tr>
                                            <th scope="row">6</th>
                                            <td>Thanh Quảng Ninh</td>
                                            <td>0</td>
                                            <td>0 - 0 - 0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                          </tr>

                                          <tr>
                                            <th scope="row">7</th>
                                            <td>CLB TP.HCM</td>
                                            <td>0</td>
                                            <td>0 - 0 - 0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                          </tr>

                                          <tr class="table-primary">
                                            <th scope="row" colspan="3">Tổng</th>
                                    
                                            <td>0 - 0 - 0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                          </tr>

                                        </tbody>
                                      </table>
                                </div>
                            </div>
                        </div>

                        <div id="tab2" class="tab-pane fade">
                          
                        </div>

                      </div>
                </div>
            </div>
            
        </div>
      </div>
    </div>
  </div>
@endsection