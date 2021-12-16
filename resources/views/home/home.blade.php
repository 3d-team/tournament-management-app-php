@extends('layouts.index')

@section('content')
<div class="row">
    <div class="col-md-7 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <p class="card-title">Lưu lượng truy cập</p>
          <p class="mb-4">Biểu đồ lưu lượng người xem theo dõi giải đấu</p>
          <div id="cash-deposits-chart-legend" class="d-flex justify-content-center pt-3"></div>
          <canvas id="cash-deposits-chart"></canvas>
        </div>
      </div>
    </div>

    <div class="col-md-5 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <p class="card-title">Tổng doanh thu</p>
          <h1>$ 28835</h1>
          <h4>Doanh số theo từng năm</h4>
          <p class="text-muted">Biểu đồ trực quan so sánh doanh thu so sánh giữa các năm</p>
          <div id="total-sales-chart-legend"></div>                  
        </div>
        <canvas id="total-sales-chart"></canvas>
      </div>
    </div>

</div>

<div class="row">
    <div class="col-md-12 stretch-card">
      <div class="card">
        <div class="card-body">
          <p class="card-title">Những trận đấu gần đây</p>
          <div class="table-responsive">
            <table id="recent-purchases-listing" class="table">
              <thead>
                <tr>
                    <th>#ID</th>
                    <th>Thời gian</th>
                    <th>Địa điểm</th>
                    <th>Đội 1</th>
                    <th>Tỷ số</th>
                    <th>Đội 2</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    <td>12</td>
                    <td>21h00 23/11/2021</td>
                    <td>SVĐ Hàng Đẫy</td>
                    <td>Hà Nội T&T</td>
                    <td>0 - 0</td>
                    <td>Sông Lam Nghệ An</td>
                </tr>

                <tr>
                  <td>11</td>
                  <td>21h00 26/11/2021</td>
                  <td>SVĐ Mỹ Đình</td>
                  <td>Hoàng Anh Gia Lai</td>
                  <td>0 - 0</td>
                  <td>CLB TP.HCM</td>
                </tr>

                <tr>
                  <td>10</td>
                  <td>21h00 20/11/2021</td>
                  <td>SVĐ TP.HCM</td>
                  <td>CLB Than Quảng Ninh</td>
                  <td>0 - 0</td>
                  <td>FLC Thanh Hóa</td>
                </tr>

                <tr>
                  <td>9</td>
                  <td>12h00 23/11/2021</td>
                  <td>SVĐ Hàng Đẫy</td>
                  <td>Hà Nội T&T</td>
                  <td>0 - 0</td>
                  <td>Sông Lam Nghệ An</td>
              </tr>

              <tr>
                <td>8</td>
                <td>16h00 26/11/2021</td>
                <td>SVĐ Mỹ Đình</td>
                <td>Hoàng Anh Gia Lai</td>
                <td>0 - 0</td>
                <td>CLB TP.HCM</td>
              </tr>

              <tr>
                <td>7</td>
                <td>18h00 20/11/2021</td>
                <td>SVĐ TP.HCM</td>
                <td>CLB Than Quảng Ninh</td>
                <td>0 - 0</td>
                <td>FLC Thanh Hóa</td>
              </tr>
               
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
