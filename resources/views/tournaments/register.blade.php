<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Majestic Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/base/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('css/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('images/favicon.png') }}" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-8 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
              
              <h4>Đăng kí tham gia giải đấu</h4>
              <p class="font-weight-light font-italic">Vui lòng nhập thông tin hợp lệ cho các trường được yêu cầu 
                  <span class="text-danger">*</span></p>
              
              <hr/>
              
              <form class="pt-3">

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Tên đội</label>
                            <div class="input-group">
                              <div class="input-group-prepend bg-transparent">
                                <span class="input-group-text bg-transparent border-right-0">
                                  <i class="mdi mdi-account-outline text-primary"></i>
                                </span>
                              </div>
                              <input type="text" class="form-control form-control-lg border-left-0" placeholder="Tên đội">
                            </div>
                          </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label>Sân nhà</label>
                            <div class="input-group">
                              <div class="input-group-prepend bg-transparent">
                                <span class="input-group-text bg-transparent border-right-0">
                                  <i class="mdi mdi-account-outline text-primary"></i>
                                </span>
                              </div>
                              <input type="text" class="form-control form-control-lg border-left-0" placeholder="Sân nhà">
                            </div>
                          </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Địa chỉ</label>
                            <div class="input-group">
                              <div class="input-group-prepend bg-transparent">
                                <span class="input-group-text bg-transparent border-right-0">
                                  <i class="mdi mdi-account-outline text-primary"></i>
                                </span>
                              </div>
                              <input type="text" class="form-control form-control-lg border-left-0" placeholder="Địa chỉ">
                            </div>
                          </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label>Huấn luyện viên</label>
                            <div class="input-group">
                              <div class="input-group-prepend bg-transparent">
                                <span class="input-group-text bg-transparent border-right-0">
                                  <i class="mdi mdi-account-outline text-primary"></i>
                                </span>
                              </div>
                              <input type="text" class="form-control form-control-lg border-left-0" placeholder="Huấn luyện viên">
                            </div>
                          </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Số điện thoại</label>
                            <div class="input-group">
                              <div class="input-group-prepend bg-transparent">
                                <span class="input-group-text bg-transparent border-right-0">
                                  <i class="mdi mdi-account-outline text-primary"></i>
                                </span>
                              </div>
                              <input type="text" class="form-control form-control-lg border-left-0" placeholder="Số điện thoại">
                            </div>
                          </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label>Email</label>
                            <div class="input-group">
                              <div class="input-group-prepend bg-transparent">
                                <span class="input-group-text bg-transparent border-right-0">
                                  <i class="mdi mdi-email-outline text-primary"></i>
                                </span>
                              </div>
                              <input type="email" class="form-control form-control-lg border-left-0" placeholder="Email">
                            </div>
                          </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="logo-team">Logo đội bóng</label>
                            <input type="file" class="form-control-file" id="logo-team">
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="cloth-team">Đồng phục</label>
                            <input type="file" class="form-control-file" id="cloth-team">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="introduction">Giới thiệu</label>
                    <textarea class="form-control" id="introduction" rows="4"></textarea>
                </div>

                <div class="mb-4">
                  <div class="form-check">
                    <label class="form-check-label text-muted font-italic">
                      <input type="checkbox" class="form-check-input">
                      Đồng ý với các điều khoản của giải đấu.
                    </label>
                  </div>
                </div>

                <div class="mt-3">
                  <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="../../index.html">Xác nhận</a>
                </div>
              </form>
            </div>
          </div>
          
          <div class="col-lg-4 register-half-bg d-flex flex-row">
            <p class="text-white font-weight-medium text-center flex-grow align-self-end"></p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{asset('vendors/base/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{asset('js/off-canvas.js')}}"></script>
  <script src="{{asset('js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('js/template.js')}}"></script>
  <!-- endinject -->
</body>

</html>
