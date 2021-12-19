@extends('layouts.index')

@section('content')
<div class="row">
    <div class="col-md-12 stretch-card">
      <div class="card">
        <div class="card-body">
            <h1 class="card-title text-center">Quản lí giải đấu</h1>
            <hr/>

            <div class="d-flex justify-content-between align-items-end flex-wrap mb-3">
                <p class="text-dark font-italic">Bạn có thể quản lí địa điểm thi đấu của toàn giải đấu.</p>
            </div>

            <ul class="nav nav-tabs justify-content-center">
                <li class="nav-item">
                  <a class="nav-link active text-success" data-toggle="tab" aria-current="page" href="#tab1">Giai đoạn đấu vòng tròn</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-success" data-toggle="tab" href="#tab2">Giai đoạn loại trực tiếp</a>
                </li>
            </ul>

            <div class="card">

                <div class="card-body">
                    <ul class="nav nav-pills justify-content-center">
                        <li class="nav-item mr-5">
                            <a class="nav-link active bg-success" href="#">1</a>
                        </li>
                        <li class="nav-item mr-5">
                            <a class="nav-link bg-success text-dark" href="#">2</a>
                        </li>
                        <li class="nav-item mr-5">
                            <a class="nav-link bg-success text-dark" href="#">3</a>
                        </li>
                        <li class="nav-item mr-5">
                            <a class="nav-link bg-success text-dark" href="#">4</a>
                        </li>
                        <li class="nav-item mr-5">
                            <a class="nav-link bg-success text-dark" href="#">5</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link bg-success text-dark" href="#">6</a>
                        </li>
                    </ul>
                    <hr/>

                    <div class="tab-content">

                        <div id="tab1" class="tab-pane fade in active show">
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <p class="card-title">Bảng A</p>
                                </div>
                                <hr/>
                                <div class="col-md-12 stretch-card">
                                    <table class="table table-bordered">
                                        <thead>
                                          <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Đội nhà</th>
                                            <th scope="col">Đội khách</th>
                                            <th scope="col">Địa điểm</th>
                                            <th scope="col">Ngày, tháng, năm</th>
                                            <th scope="col">Giờ, phút</th>
                                          </tr>
                                        </thead>
                                        <tbody> 
                                          @foreach ($data as $match)
                                            <tr>
                                              <th scope="row">{{ $match->stt }}</th>
                                              <td>{{ $match->team_1 }}</td>
                                              <td>{{ $match->team_2 }}</td>
                                              <td>{{ $match->address }}</td>
                                              <td>{{ $match->date }}</td>
                                              <td>{{ $match->time }}</td>
                                            </tr>
                                          @endforeach
                                        </tbody>
                                      </table>
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