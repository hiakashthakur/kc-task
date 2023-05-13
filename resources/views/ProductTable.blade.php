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
                                    {{-- <button class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"
                                        href="#"><i class="ri-delete-bin-line mr-0"></i></button> --}}
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