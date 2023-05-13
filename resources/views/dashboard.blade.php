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
  <body class="  ">
    <!-- loader Start -->
    <div id="loading">
          <div id="loading-center">
          </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">
      
      <div class="iq-sidebar  sidebar-default ">
          <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
              <a href="index.html" class="header-logo">
                  <img src="../assets/images/logo.png" class="img-fluid rounded-normal light-logo" alt="logo"><h5 class="logo-title light-logo ml-3">Order Dash</h5>
              </a>
          </div>
          <div class="data-scrollbar" data-scroll="1">
              <nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="iq-menu">
                      <li class="active">
                          <a href="{{ route('dashboard') }}" class="svg-icon">                        
                              <svg  class="svg-icon" id="p-dash1" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                  <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line>
                              </svg>
                              <span class="ml-4">Dashboards</span>
                          </a>
                      </li>
                  </ul>
              </nav>
              <div class="p-3"></div>
          </div>
          </div>      <div class="iq-top-navbar">
          <div class="iq-navbar-custom">
              <nav class="navbar navbar-expand-lg navbar-light p-0">
                  <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                      <i class="ri-menu-line wrapper-menu"></i>
                      <a href="index.html" class="header-logo">
                          <img src="../assets/images/logo.png" class="img-fluid rounded-normal" alt="logo">
                          <h5 class="logo-title ml-3">POSDash</h5>
      
                      </a>
                  </div>
                  <div class="iq-search-bar device-search">
                  </div>
                  <div class="d-flex align-items-center">
                      <!--<div class="change-mode">
                          <div class="custom-control custom-switch custom-switch-icon custom-control-inline">
                              <div class="custom-switch-inner">
                                  <p class="mb-0"> </p>
                                  <input type="checkbox" class="custom-control-input" id="dark-mode" data-active="true">
                                  <label class="custom-control-label" for="dark-mode" data-mode="toggle">
                                      <span class="switch-icon-left"><i class="a-left ri-moon-clear-line"></i></span>
                                      <span class="switch-icon-right"><i class="a-right ri-sun-line"></i></span>
                                  </label>
                              </div>
                          </div>
                      </div>-->
                      <button class="navbar-toggler" type="button" data-toggle="collapse"
                          data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                          aria-label="Toggle navigation">
                          <i class="ri-menu-3-line"></i>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav ml-auto navbar-list align-items-center">
                              <li>
                                  <a href="#" class="btn border add-btn shadow-none mx-2 d-none d-md-block"
                                      data-toggle="modal" data-target="#new-order">New
                                      Order</a>
                              </li>
                              <li class="nav-item nav-icon dropdown caption-content">
                                  <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton4"
                                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <img src="../assets/images/user/1.png" class="img-fluid rounded" alt="user">
                                  </a>
                                  <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton">
                                      <div class="card shadow-none m-0">
                                          <div class="card-body p-0 text-center">
                                              <div class="media-body profile-detail text-center">
                                                  <img src="../assets/images/page-img/profile-bg.jpg" alt="profile-bg"
                                                      class="rounded-top img-fluid mb-4">
                                                  <img src="../assets/images/user/1.png" alt="profile-img"
                                                      class="rounded profile-img img-fluid avatar-70">
                                              </div>
                                              <div class="p-3">
                                                  <h5 class="mb-1">{{ Auth::user()->name }}</h5>
                                                  {{-- <p class="mb-0">Since 10 march, 2020</p> --}}
                                                  <div class="d-flex align-items-center justify-content-center mt-3">
                                                      <a href="{{ route('logout') }}" class="btn border">Sign Out</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </li>
                          </ul>
                      </div>
                  </div>
              </nav>
          </div>
      </div>
      
      <div class="modal fade" id="new-order" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                  <div class="modal-body">
                      <div class="popup text-left">
                          <h4 class="mb-3">New Order</h4>
                          <form method="POST" action="{{ url('create-order') }}" class="form">
                         @csrf
                         <input type="hidden" name="order_number" value="{{ date("Ymdhis"); }}">
                         <input type="hidden" name="customer_name" value="{{ Auth::user()->name }}">
                          <div class="content create-workform bg-body">
                              <div class="pb-3">
                                  <label class="mb-2">Product</label>
                                  <input type="text" class="form-control" name ="product" id="product" placeholder="Enter Product">
                              </div>
                              <div class="pb-3">
                                  <label class="mb-2">Category</label>
                                  <input type="text" class="form-control" name ="category" placeholder="Enter Category">
                              </div>
                              <div class="pb-3">
                                  <label class="mb-2">Status Type</label>
                                  <select class="form-control" name ="status_type">
                                    <option value="pending">Pending</option>
                                    <option value="shipped">Shipped</option>
                                    <option value="complete">Complete</option>
                                    <option value="cancel">Cancel</option>
                                  </select>
                              </div>
                              <div class="pb-3">
                                  <label class="mb-2">Price</label>
                                  <input type="number" class="form-control" name ="price" placeholder="Enter Price">
                              </div>
                              <div class="pb-3">
                                  <label class="mb-2">Quantity</label>
                                  <input type="number" class="form-control" name ="quantity" placeholder="Enter Quantity">
                              </div>
                              <div class="col-lg-12 mt-4">
                                  <div class="d-flex flex-wrap align-items-ceter justify-content-center">
                                      <div class="btn btn-primary mr-4" data-dismiss="modal">Cancel</div>
                                      <button class="btn btn-outline-primary" type="submit">Create</button>
                                      {{-- <div class="btn btn-outline-primary" data-dismiss="modal">Create</div> --}}
                                  </div>
                              </div>
                          </div>
                      </div>
                    </form>
                  </div>
              </div>
          </div>
      </div>

      <div class="content-page">
     <div class="container-fluid table-responsive">
        <div class="row">
            <div class="col-lg-4">
                <div class="card card-transparent card-block card-stretch card-height border-none">
                    <div class="card-body p-0 mt-lg-2 mt-0">
                        <h3 class="mb-3">Hi {{ Auth::user()->name }}</h3>
                        <p class="mb-0 mr-4">Your dashboard gives you views of key performance or business process.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="card card-block card-stretch card-height">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4 card-total-sale">
                                    <div class="icon iq-icon-box-2 bg-info-light">
                                        <img src="../assets/images/product/1.png" class="img-fluid" alt="image">
                                    </div>
                                    <div>
                                        <p class="mb-2">Total Order</p>
                                        <h4>{{ $total_order }}</h4>
                                    </div>
                                </div>                                
                                <div class="iq-progress-bar mt-2">
                                    <span class="bg-info iq-progress progress-1" data-percent="85">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="card card-block card-stretch card-height">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4 card-total-sale">
                                    <div class="icon iq-icon-box-2 bg-danger-light">
                                        <img src="../assets/images/product/2.png" class="img-fluid" alt="image">
                                    </div>
                                    <div>
                                        <p class="mb-2">pending Order</p>
                                        <h4>{{ $pending_order }}</h4>
                                    </div>
                                </div>
                                <div class="iq-progress-bar mt-2">
                                    <span class="bg-danger iq-progress progress-1" data-percent="70">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="card card-block card-stretch card-height">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4 card-total-sale">
                                    <div class="icon iq-icon-box-2 bg-success-light">
                                        <img src="../assets/images/product/3.png" class="img-fluid" alt="image">
                                    </div>
                                    <div>
                                        <p class="mb-2">Shipped Order</p>
                                        <h4>{{ $shipped_order }}</h4>
                                    </div>
                                </div>
                                <div class="iq-progress-bar mt-2">
                                    <span class="bg-success iq-progress progress-1" data-percent="75">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsivess rounded mb-3">
                <table class="data-table table mb-0 tbl-server-info">
                    <thead class="bg-white text-uppercase">
                        <tr class="ligth ligth-data">
                          <th>SR. No.</th>
                            <th>Order Number</th>
                            <th>Customer Name</th>                          
                            <th>Product</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Order Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody class="ligth-body">
                       @foreach($get_order as $key=> $order)
                        <tr>
                          <td>{{ ++$key }}</td>
                            <td>{{ $order->order_number }}</td>
                            <td>{{ $order->customer_name }}</td>
                            <td>{{ $order->product }}</td>
                            <td>{{ $order->category }}</td>
                            <td>{{ $order->status_type }}</td>
                            <td>{{ $order->price }}</td>
                            <td>{{ $order->quantity }}</td>
                            <td>{{ $order->created_at }}</td>
                            <td>
                                <div class="d-flex align-items-center list-action">
                                    <a class="badge bg-success mr-2 editProduct" data-url="{{ url('edit-order',$order->id) }}" data-id="<?=$order->id?>"><i class="ri-pencil-line mr-0"></i></a>
                                    <form method="post" action="{{url('delete-order',$order->id)}}">
                                      @method('delete')
                                      @csrf
                                        <button type="submit" class="badge bg-warning mr-2 show_confirm" data-toggle="tooltip" title='Delete'><i class="ri-delete-bin-line mr-0"></i></button>
                                      </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>
        </div>
        <!-- Page end  -->
    </div>
      </div>
    </div>



    <div class="modal fade" id="edit-order" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                  <div class="modal-body">
                      <div class="popup text-left">
                          <h4 class="mb-3">Edit Order</h4>
                          <div class="appendform">
                          </div>
                  </div>
              </div>
          </div>
      </div>
    <!-- Wrapper End-->
    <!-- Backend Bundle JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../assets/js/backend-bundle.min.js"></script>
    
    <!-- Table Treeview JavaScript -->
    <script src="../assets/js/table-treeview.js"></script>
    
    <!-- Chart Custom JavaScript -->
    <script src="../assets/js/customizer.js"></script>
    
    <!-- Chart Custom JavaScript -->
    <script async src="../assets/js/chart-custom.js"></script>
    
    <!-- app JavaScript -->
    <script src="../assets/js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script type="text/javascript">
      $.ajaxSetup({
      headers:{
         'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
      }
   }); 



          var toastMixin = Swal.mixin({
          toast: true,
          icon: 'success',
          title: 'General Title',
          animation: false,
          position: 'top-right',
          showConfirmButton: false,
          timer: 6000,
          timerProgressBar: true,
        });

          $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: `Are you sure you want to delete this record?`,
              text: "If you delete this, it will be gone forever.",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });

          $('body').on('click','.editProduct',function(e){
            e.preventDefault();
            let id = $(this).attr('data-id');
            let url = $(this).attr('data-url');
            $.ajax({
                        url: url,
                        type: "get",
                        dataType: "json",
                        data:{id:id},
                    })
            .done(function(data){
              console.log(data);
              $('.appendform').html(' ');
              $('.appendform').html(data.html);
              $('#edit-order').modal('show');
            })
          })

       $("body").on("submit", ".form", function (event) {
                    event.preventDefault();
                    $("span.text-danger").remove();
                    $("span.text-success").remove();
                    var this_ = $(this);
                    $.ajax({
                        url: $(this).attr('action'),
                        type: "POST",
                        dataType: "json",
                        data: $(this).serialize(),
                    })
                        .done(function (data) {
                            console.log(data);
                            if (data.product) {
                                $('<span class="text-danger">' + data.product + "</span>").insertAfter($('input[name="product"]', this_));
                            }
                            if (data.category) {
                                $('<span class="text-danger">' + data.category + "</span>").insertAfter($('input[name="category"]', this_));
                            }
                            if (data.status_type) {
                                $('<span class="text-danger">' + data.status_type + "</span>").insertAfter($('input[name="status_type"]', this_));
                            }
                            if (data.price) {
                                $('<span class="text-danger">' + data.price + "</span>").insertAfter($('input[name="price"]', this_));
                            }
                            if (data.quantity) {
                                $('<span class="text-danger">' + data.quantity + "</span>").insertAfter($('input[name="quantity"]', this_));
                            }
                            if (data.err) {
                                $('<span class="text-danger mt-1">' + data.err + "</span>").insertAfter(this_);
                                return;
                            }
                            if (data.msg) {
                              toastMixin.fire({
                                animation: true,
                                title:data.msg
                              });
                              $('.table-responsive').html(' ');
                              $('.table-responsive').html(data.html);
                              $('#new-order').modal('hide');
                              this_[0].reset();
                                // window.location.href = data.url;
                                    // $('<span class="text-success mt-1">' + data.msg + "</span>").insertAfter(this_);
                                // myFunction(data.message);
                                // return;
                            }
                            return;
                        })
                        .fail(function (error) {
                            console.log(error);
                        })
                        .always(function () {});
                });
        $("body").on("submit", ".form-edit", function (event) {
                    event.preventDefault();
                    $("span.text-danger").remove();
                    $("span.text-success").remove();
                    var this_ = $(this);
                    $.ajax({
                        url: $(this).attr('action'),
                        type: "POST",
                        dataType: "json",
                        data: $(this).serialize(),
                    })
                        .done(function (data) {
                            console.log(data);
                            if (data.product) {
                                $('<span class="text-danger">' + data.product + "</span>").insertAfter($('input[name="product"]', this_));
                            }
                            if (data.category) {
                                $('<span class="text-danger">' + data.category + "</span>").insertAfter($('input[name="category"]', this_));
                            }
                            if (data.status_type) {
                                $('<span class="text-danger">' + data.status_type + "</span>").insertAfter($('input[name="status_type"]', this_));
                            }
                            if (data.price) {
                                $('<span class="text-danger">' + data.price + "</span>").insertAfter($('input[name="price"]', this_));
                            }
                            if (data.quantity) {
                                $('<span class="text-danger">' + data.quantity + "</span>").insertAfter($('input[name="quantity"]', this_));
                            }
                            if (data.err) {
                                $('<span class="text-danger mt-1">' + data.err + "</span>").insertAfter(this_);
                                return;
                            }
                            if (data.msg) {
                              toastMixin.fire({
                                animation: true,
                                title:data.msg
                              });
                              $('.table-responsive').html(' ');
                              $('.table-responsive').html(data.html);
                              $('#edit-order').modal('hide');
                              
                                // window.location.href = data.url;
                                    // $('<span class="text-success mt-1">' + data.msg + "</span>").insertAfter(this_);
                                // myFunction(data.message);
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