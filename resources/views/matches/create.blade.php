@extends('layouts.index')

@section('content')
<div class="row">
  <div class="col-md-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <h1 class="card-title text-left font-weight-bold">Thêm trận đấu</h1>
        <hr />
        <div class="row bg-light border border-dark rounded p-3">
          <div class="col-md-4"></div>
          <div class="col-md-4 mr-2">
            <form method="post" action="/matches/add">
              @csrf
              <div class="form-group">
                <label for="match-team1">ID đội 1<span class="text-danger"> *</span></label>
                <input type="text" name="team_1" class="form-control" id="match-team1" 
                aria-describedby="emailHelp" placeholder="...1..." required="">
              </div>

              <div class="form-group">
                <label for="match-team2">ID đội 2<span class="text-danger"> *</span></label>
                <input type="text" name="team_2" class="form-control" id="match-team2" 
                placeholder="...2..." required="">
              </div>

              <div class="form-group">
                <label for="match-fixture">Bảng đấu<span class="text-danger"> *</span></label>
                <input type="number" name="fixture" class="form-control" id="match-fixture" 
                placeholder="1" required="">
              </div>

              <div class="form-group">
                <label for="match-time">Thời gian<span class="text-danger"> *</span></label>
                <input type="text" name="time" class="form-control" id="match-time" placeholder="... 16:00 - 22/12/2021 ...">
              </div>

              <div class="form-group ">
                <label for="match-address">Địa điểm<span class="text-danger"> *</span></label>
                <input type="text" name="address" class="form-control" id="match-address" aria-describedby="emailHelp" placeholder="... Linh Trung ....">
              </div>

              <input type="hidden" name="tournament_id" value="<?= $tournament_id ?>">

              <button type="submit" class="btn btn-primary">Tạo trận đấu</button>
            </form>
          </div>

          <div class="col-md-4">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection