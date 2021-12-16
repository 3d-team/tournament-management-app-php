@extends('layouts.index')

@section('content')
<div class="row">
    <div class="col-md-12 stretch-card">
      <div class="card">
        <div class="card-body">
            <p class="card-title text-center">Lịch thi đấu - Kết quả</p>
            <hr/>

            <ul class="nav nav-pills justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Hôm nay</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Hôm qua, thứ 5</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Thứ 7, 03/11</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">04/11</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">05/11</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Chọn ngày</a>
                </li>
            </ul>

            <p class="card-title text-center">KQTĐ</p>

            <p class="card-title">Ghi chú: </p>
            <ul class="nav px-4">
                <li class="nav-item">
                  <a class="text-dark mr-5" aria-selected="true">Đang diễn ra</a>
                </li>
                <li class="nav-item">
                  <a class="font-italic mr-5" aria-selected="false">(2 - 0): Tỉ số hiệp phụ</a>
                </li>
                <li class="nav-item">
                  <a class="mr-5" aria-selected="false"><span class="badge badge-danger border border-dark rounded"> 1</span> Số thẻ đỏ</a>
                </li>
            </ul> 
            
            <div class="d-flex bg-light justify-content-between align-items-end 
                flex-wrap mb-3 mt-3 p-3 border border-dark rounded">
                <h3 class="text-dark">Giải Movies</h3>

                <ul class="nav">
                    <li class="nav-item">
                      <a class="text-dark mr-2" href="#">LTĐ |</a>
                    </li>
                    <li class="nav-item">
                      <a class="text-success mr-2" href="#"> KQ |</a>
                    </li>
                    <li class="nav-item">
                      <a class="text-dark" href="#">BXH</a>
                    </li>
                    
                </ul>
            </div>

            <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th scope="col">#Thời gian</th>
                    <th scope="col">Bảng đấu</th>
                    <th scope="col">Đội nhà</th>
                    <th scope="col">Tỉ số</th>
                    <th scope="col">Đội khách</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">FT - 04/11</th>
                        <td>Bảng B</td>
                        <td>Hà Nội T&T</td>
                        <td><span class="badge badge-success rounded">1 - 1</span></td>
                        <td>Sông Lam Nghệ An</td>
                        <td><button class="btn btn-xs btn-dark">></button></td>
                    </tr>

                    <tr>
                        <th scope="row">FT - 03/11</th>
                        <td>Bảng D</td>
                        <td>HAGL</td>
                        <td><span class="badge badge-success rounded">1 - 1</span></td>
                        <td>Than Quảng Ninh</td>
                        <td><button class="btn btn-xs btn-dark">></button></td>
                    </tr>

                    <tr>
                        <th scope="row">FT - 02/11</th>
                        <td>Bảng A</td>
                        <td>FLC Thanh Hóa</td>
                        <td><span class="badge badge-success rounded">1 - 1</span></td>
                        <td>Sông Lam Nghệ An</td>
                        <td><button class="btn btn-xs btn-dark">></button></td>
                    </tr>

                    <tr>
                        <th scope="row">FT - 04/11</th>
                        <td>Bảng B</td>
                        <td>Hà Nội T&T</td>
                        <td><span class="badge badge-success rounded">1 - 1</span></td>
                        <td>Sông Lam Nghệ An</td>
                        <td><button class="btn btn-xs btn-dark">></button></td>
                    </tr>

                    <tr>
                        <th scope="row">FT - 03/11</th>
                        <td>Bảng D</td>
                        <td>HAGL</td>
                        <td><span class="badge badge-success rounded">1 - 1</span></td>
                        <td>Than Quảng Ninh</td>
                        <td><button class="btn btn-xs btn-dark">></button></td>
                    </tr>

                    <tr>
                        <th scope="row">FT - 02/11</th>
                        <td>Bảng A</td>
                        <td>FLC Thanh Hóa</td>
                        <td><span class="badge badge-success rounded">1 - 1</span></td>
                        <td>Sông Lam Nghệ An</td>
                        <td><button class="btn btn-xs btn-dark">></button></td>
                    </tr>
                 
                </tbody>
              </table>
        </div>
      </div>
    </div>
  </div>
@endsection