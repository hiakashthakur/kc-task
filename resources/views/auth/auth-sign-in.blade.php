<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Order Dash </title>
      
      <!-- Favicon -->
      <link rel="shortcut icon" href="https://templates.iqonic.design/posdash/html/assets/images/favicon.ico" />
      <link rel="stylesheet" href="../assets/css/backend-plugin.min.css">
      <link rel="stylesheet" href="../assets/css/backende209.css?v=1.0.0">
      <link rel="stylesheet" href="../assets/vendor/%40fortawesome/fontawesome-free/css/all.min.css">
      <link rel="stylesheet" href="../assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
      <link rel="stylesheet" href="../assets/vendor/remixicon/fonts/remixicon.css">
      <meta name="_token" content="{{csrf_token()}}">   
   </head>
  <body class=" ">
    <!-- loader Start -->
    <div id="loading">
          <div id="loading-center">
          </div>
    </div>
    <!-- loader END -->
    
      <div class="wrapper">
      <section class="login-content">
         <div class="container">
            <div class="row align-items-center justify-content-center height-self-center">
               <div class="col-lg-8">
                  <div class="card auth-card">
                     <div class="card-body p-0">
                        <div class="d-flex align-items-center auth-content">
                           <div class="col-lg-7 align-self-center">
                              <div class="p-3">
                                 @if(session()->has('success'))
                                     <div class="alert alert-success">
                                         {{ session()->get('success') }}
                                     </div>
                                 @endif
                                 <h2 class="mb-2">Sign In</h2>
                                 <p>Login to stay connected.</p>
                                 <form method="POST" action="{{ url('login') }}" class="form">
                                    @csrf
                                    <div class="row">
                                       <div class="col-lg-12">
                                          <div class="floating-label form-group">
                                             <input class="floating-input form-control" type="email" id="email"placeholder=" " name="email">
                                             @error('email')
                                                 <div class="alert alert-danger">{{ $message }}</div>
                                             @enderror
                                             <label>Email</label>
                                          </div>
                                       </div>
                                       <div class="col-lg-12">
                                          <div class="floating-label form-group">
                                             <input class="floating-input form-control" type="password" placeholder=" " name="password" id="password">
                                             @error('password')
                                                 <div class="alert alert-danger">{{ $message }}</div>
                                             @enderror
                                             <label>Password</label>
                                          </div>
                                       </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Sign In</button>
                                    <p class="mt-3">
                                       Create an Account <a href="{{ route('register')}}" class="text-primary">Sign Up</a>
                                    </p>
                                 </form>
                              </div>
                           </div>
                           <div class="col-lg-5 content-right">
                              <img src="../assets/images/login/01.png" class="img-fluid image-right" alt="">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      </div>
    
    <!-- Backend Bundle JavaScript -->
    <script src="../assets/js/backend-bundle.min.js"></script>
    
    <!-- Table Treeview JavaScript -->
    <script src="../assets/js/table-treeview.js"></script>
    
    <!-- Chart Custom JavaScript -->
    <script src="../assets/js/customizer.js"></script>
    
    <!-- Chart Custom JavaScript -->
    <script async src="../assets/js/chart-custom.js"></script>
    
    <!-- app JavaScript -->
    <script src="../assets/js/app.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript">
      $.ajaxSetup({
      headers:{
         'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
      }
   }); 
       $("body").on("submit", ".form", function (event) {
                    event.preventDefault();
                    $("span.text-danger").remove();
                    $("span.text-success").remove();
                    // var formData = new FormData(this);
        
                    // var url = $("base").attr("href");
                    var this_ = $(this);
                    $.ajax({
                        url: $(this).attr('action'),
                        type: "POST",
                        dataType: "json",
                        data: $(this).serialize(),
                    })
                        .done(function (data) {
                            console.log(data);
                            if (data.email) {
                                $('<span class="text-danger">' + data.email + "</span>").insertAfter($('input[name="email"]', this_));
                            }
                            if (data.password) {
                                $('<span class="text-danger">' + data.password + "</span>").insertAfter($('input[name="password"]', this_));
                            }
                            if (data.err) {
                                $('<span class="text-danger mt-1">' + data.err + "</span>").insertAfter(this_);
                                return;
                            }
                            if (data.msg) {
                                 window.location.href = data.url;
                                // $('<span class="text-success mt-1">' + data.msg + "</span>").insertAfter(this_);
                                // // myFunction(data.message);
                                // this_[0].reset();
                                // return;
                            }
                            return;
                        })
                        .fail(function (error) {
                            console.log(error);
                        })
                        .always(function () {});
                });
    </script>
  </body>
</html>