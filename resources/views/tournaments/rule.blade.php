@extends('layouts.index')

@section('content')
<div class="row">
    <div class="col-md-12 stretch-card">
      <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-center align-items-center flex-wrap">
                <h1 class="card-title text-center">Qui tắc xếp hạng</h1>    
            </div>

            <div class="card">

                <div class="card-body">

                    <div class="row  mb-4">
                        <div class="col-md-8 bg-light border border-dark rounded">
                            <div class="form-check pl-5">
                                <input class="form-check-input" type="checkbox" value="" id="">
                                <label class="form-check-label" for="">
                                  Hiệu số bàn thắng, thua của một đội trong tất cả các trận đấu.
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-8 bg-light border border-dark rounded">
                            <div class="form-check pl-5">
                                <input class="form-check-input" type="checkbox" value="" id="">
                                <label class="form-check-label" for="">
                                  Số bàn thắng của mỗi đội trong tất cả các trận đấu.
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-8 bg-light border border-dark rounded">
                            <div class="form-check pl-5">
                                <input class="form-check-input" type="checkbox" value="" id="">
                                <label class="form-check-label" for="">
                                  Tổng số điểm mà mỗi đội đạt được trong các trận đối đầu trực tiếp với nhau.
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-8 bg-light border border-dark rounded">
                            <div class="form-check pl-5">
                                <input class="form-check-input" type="checkbox" value="" id="">
                                <label class="form-check-label" for="">
                                  Hiệu số bàn thắng, thua của một đội trong các trận đối đầu trực tiếp với nhau.
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-8 bg-light border border-dark rounded">
                            <div class="form-check pl-5">
                                <input class="form-check-input" type="checkbox" value="" id="">
                                <label class="form-check-label" for="">
                                    Số bàn thắng của mỗi đội trong các trận đối đầu trực tiếp với nhau.
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-8 bg-light border border-dark rounded">
                            <div class="form-check pl-5">
                                <input class="form-check-input" type="checkbox" value="" id="">
                                <label class="form-check-label" for="">
                                  Xếp hạng fair play của mỗi đội (Dựa trên số thẻ phạt).
                                </label>
                            </div>
                        </div>
                    </div>

                    <hr/>

                    <button type="button" class="btn btn-success">Lưu</button>
                    
                </div>
            </div>
            
        </div>
      </div>
    </div>
  </div>
@endsection