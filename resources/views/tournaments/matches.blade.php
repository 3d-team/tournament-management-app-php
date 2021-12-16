@extends('layouts.index')

@section('content')
<div class="row">
    <div class="col-md-12 stretch-card">
      <div class="card">
        <div class="card-body">
            <p class="card-title text-center">Ghi nhận kết quả trận đấu</p>
            <hr/>

            <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th scope="col">Thời gian</th>
                    <th scope="col">Bảng đấu</th>
                    <th scope="col">Đội nhà</th>
                    <th scope="col">Tỉ số</th>
                    <th scope="col">Đội khách</th>
                    <th scope="col">#</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">FT - 04/11</th>
                        <td>Bảng B</td>
                        <td>Hà Nội T&T</td>
                        <td><span class="badge badge-success rounded">1 - 1</span></td>
                        <td>Sông Lam Nghệ An</td>
                        <td>
                            <button type="button" class="btn btn-warning">Sửa</button>
                            <button type="button" class="btn btn-danger">Xóa</button>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">FT - 03/11</th>
                        <td>Bảng D</td>
                        <td>HAGL</td>
                        <td><span class="badge badge-success rounded">1 - 1</span></td>
                        <td>Than Quảng Ninh</td>
                        <td>
                            <button type="button" class="btn btn-warning">Sửa</button>
                            <button type="button" class="btn btn-danger">Xóa</button>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">FT - 02/11</th>
                        <td>Bảng A</td>
                        <td>FLC Thanh Hóa</td>
                        <td><span class="badge badge-success rounded">1 - 1</span></td>
                        <td>Sông Lam Nghệ An</td>
                        <td>
                            <button type="button" class="btn btn-warning">Sửa</button>
                            <button type="button" class="btn btn-danger">Xóa</button>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">FT - 04/11</th>
                        <td>Bảng B</td>
                        <td>Hà Nội T&T</td>
                        <td><span class="badge badge-success rounded">1 - 1</span></td>
                        <td>Sông Lam Nghệ An</td>
                        <td>
                            <button type="button" class="btn btn-warning">Sửa</button>
                            <button type="button" class="btn btn-danger">Xóa</button>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">FT - 03/11</th>
                        <td>Bảng D</td>
                        <td>HAGL</td>
                        <td><span class="badge badge-success rounded">1 - 1</span></td>
                        <td>Than Quảng Ninh</td>
                        <td>
                            <button type="button" class="btn btn-warning">Sửa</button>
                            <button type="button" class="btn btn-danger">Xóa</button>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">FT - 02/11</th>
                        <td>Bảng A</td>
                        <td>FLC Thanh Hóa</td>
                        <td><span class="badge badge-success rounded">1 - 1</span></td>
                        <td>Sông Lam Nghệ An</td>
                        <td>
                            <button type="button" class="btn btn-warning">Sửa</button>
                            <button type="button" class="btn btn-danger">Xóa</button>
                        </td>
                    </tr>
                 
                </tbody>
              </table>
        </div>
      </div>
    </div>
  </div>
@endsection