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
                                          @foreach($result as $item)
                                              <tr>  
                                                <th scope="row">{{ $item["id"] }}</th>
                                                <td>{{ $item["name"]}}</td>
                                                <td> {{$item["numMatch"]}}</td>
                                                <td>{{$item["win"]}} - {{$item["draw"]}} - {{$item["lose"]}}</td>
                                                <td> {{$item["goals"]}}</td>
                                                <td>{{$item["goalsConceded"]}}</td>
                                                <td>0</td>
                                                <td>{{$item["redCard"]}}</td>
                                                <td>{{$item["yellowCard"]}}</td>
                                              </tr>
                                          @endforeach
                                          <tr class="table-primary">
                                            <th scope="row" colspan="3">Tổng</th>
                                    
                                            <td>{{$summary["win"]}} - {{$summary["draw"]}} - {{$summary["lose"]}}</td>
                                            <td>{{$summary["goals"]}}</td>
                                            <td>{{$summary["goalsConceded"]}}</td>
                                            <td>0</td>
                                            <td>{{$summary["redCard"]}}</td>
                                            <td>{{$summary["yellowCard"]}}</td>
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