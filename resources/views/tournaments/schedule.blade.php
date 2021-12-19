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
                <h3 class="text-dark">{{$currentTournament->name}}</h3>
                <form  method="GET" action="">
                  <select name="tournament" class="form-select" onchange="this.form.submit()" aria-label="Chọn giải đấu">
                    <option value="" disabled selected>Chọn giải đấu</option>
                    @foreach ($tournaments as $tournament)
                    {
                      <option value="<?= $tournament->id ?>">{{$tournament->name}}</option>
                    }
                    @endforeach
                  </select>
                </form>

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
                @foreach ($matches as $index => $match)
                  <tr>
                      <th scope="row">{{$match->time}}</th>
                      <td>{{$fixtures[$index]}}</td>
                      <td>{{$team_1[$index]->name}}</td>
                      <td><span class="badge badge-success rounded">{{$team_1[$index]->score}} - {{$team_2[$index]->score}}</span></td>
                      <td>{{$team_2[$index]->name}}</td>
                      <td><button class="btn btn-xs btn-dark">></button></td>
                  </tr>
                @endforeach
                </tbody>
              </table>
        </div>
      </div>
    </div>
  </div>
@endsection

<?php
  if(isset($_GET["tournament"])){
    $tournament=$_GET["tournament"];
  }
?>