@extends('layouts.index')

@section('content')
<div class="row">
    <div class="col-md-12 stretch-card">
      <div class="card">
        <div class="card-body">
            <p class="card-title text-center">Ghi nhận kết quả trận đấu</p>
            
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
                <a href="/matches/create?tournament_id=<?= $currentTournament->id ?>" type="button" class="btn btn-success">Thêm trận đấu</a>
            </div>

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
                @foreach ($matches as $index => $match)
                  <tr>
                      <th scope="row">{{$match->time}}</th>
                      <td>{{$fixtures[$index]}}</td>
                      <td>{{$team_1[$index]->name}}</td>
                      <td><span class="badge badge-success rounded">{{$team_1[$index]->score}} - {{$team_2[$index]->score}}</span></td>
                      <td>{{$team_2[$index]->name}}</td>
                      <td>
                        <a href="/matches/edit/<?= $match->id ?>" type="button" class="btn btn-warning mr-2">Sửa</a>
                        <button type="button" class="btn btn-danger" data-id="<?= $match->id ?>"
                        data-toggle="modal" data-target="#delete-match-modal">Xóa</button>
                      </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
        </div>
      </div>
    </div>
  </div>

  <!-- Delete match hidden form -->
<form name="delete-match-form" method="POST">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
</form>

  <!---- Confirm delete match -->
<div id="delete-match-modal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Xóa trận đấu?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Bạn chắc chắn muốn xóa trận đấu này?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" id="btn-delete-match">Xóa bỏ</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
      </div>
    </div>
  </div>
</div>
@endsection

<?php
  if(isset($_GET["tournament"])){
    $tournament=$_GET["tournament"];
  }

  echo '<script type="text/javascript"> 
  document.addEventListener("DOMContentLoaded", function () {
    var matchId;
    var btnDeleteMatch = document.getElementById("btn-delete-match");
    var deleteMatchForm = document.forms["delete-match-form"];

    $("#delete-match-modal").on("show.bs.modal", function (event) {
      var button = $(event.relatedTarget);
      matchId = button.data("id");
    })

    btnDeleteMatch.onclick = function () {
      deleteMatchForm.action = `/matches/${matchId}`;
      deleteMatchForm.submit();
    }
  })
  </script>';
?>