<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{asset('css/style-contact.css')}}">

    <title>Quảng cáo</title>
  </head>
  <body>
  

  <div class="content">
    
    <div class="container">
      <div class="row align-items-stretch no-gutters contact-wrap ">
        <div class="col-md-8">
          <div class="form h-100 border-dark rounded">
            <h3>Yêu cầu quảng cáo</h3>
            <p class="text-dark font-italic">Để lại yêu cầu thông tin quảng cáo.</p>
            <form class="mb-5" method="post" id="contactForm" name="contactForm">
              <div class="row">
                <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">Tên đơn vị <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Tên đơn vị ...">
                </div>
                <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">Email *</label>
                  <input type="text" class="form-control" name="email" id="email"  placeholder="Email">
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">Số điện thoại <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="phone" id="phone"  placeholder="Số điện thoại">
                </div>
                <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">Thời gian <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="company" id="company"  placeholder="Thời gian quảng cáo ...">
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 form-group mb-5">
                  <label for="message" class="col-form-label">Lời nhắn<span class="text-danger">*</span></label>
                  <textarea class="form-control" name="message" id="message" cols="30" rows="4"  placeholder="Để lại lời nhắn ..."></textarea>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 form-group">
                  <div class="input-group mb-3">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile02">
                        <label class="custom-file-label" for="inputGroupFile02">File đính kèm ...</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Tải lên</span>
                      </div>
                    </div>
                </div>
            </div>

              <div class="row">
                <div class="col-md-12 form-group">
                  <input type="submit" value="Gửi" class="btn btn-dark rounded-0 py-2 px-4">
                  <span class="submitting"></span>
                </div>
              </div>

              
            </form>

            <div id="form-message-warning mt-4"></div> 
            <div id="form-message-success">
                Thông tin quảng cáo đã được gửi, cảm ơn đã quan tâm!
            </div>

          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-info h-100">
            <h3>Giải đấu bóng đá ABC</h3>
            <hr/>
            
            <ul class="list-unstyled">
              <li class="d-flex">
                <span class="wrap-icon icon-room mr-3"></span>
                <span class="text">Linh Trung, Thủ Đức, TP.HCM</span>
              </li>
              <li class="d-flex">
                <span class="wrap-icon icon-phone mr-3"></span>
                <span class="text">+84 (291) 939 9321</span>
              </li>
              <li class="d-flex">
                <span class="wrap-icon icon-envelope mr-3"></span>
                <span class="text">3d1m-team@gmail.com</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </div>

    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>

  </body>
</html>