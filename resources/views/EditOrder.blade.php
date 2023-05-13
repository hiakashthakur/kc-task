<form method="POST" action="{{ route('update.order',$html->id) }}" class="form-edit">
                         @csrf
                          <div class="content create-workform bg-body">
                              <div class="pb-3">
                                  <label class="mb-2">Product</label>
                                  <input type="text" class="form-control" value="{{ $html->product ?? '' }}"  name ="product" id="product" placeholder="Enter Product">
                              </div>
                              <div class="pb-3">
                                  <label class="mb-2">Category</label>
                                  <input type="text" class="form-control" name ="category" value="{{ $html->category ?? '' }}" placeholder="Enter Category">
                              </div>
                              <div class="pb-3">
                                  <label class="mb-2">Status Type</label>
                                  <select class="form-control" name ="status_type" value="{{ $html->status_type ?? '' }}">
                                    <option value="pending">Pending</option>
                                    <option value="shipped">Shipped</option>
                                    <option value="complete">Complete</option>
                                    <option value="cancel">Cancel</option>
                                  </select>
                              </div>
                              <div class="pb-3">
                                  <label class="mb-2">Price</label>
                                  <input type="number" class="form-control" name ="price" value="{{ $html->price ?? '' }}" placeholder="Enter Price">
                              </div>
                              <div class="pb-3">
                                  <label class="mb-2">Quantity</label>
                                  <input type="number" class="form-control" name ="quantity" value="{{ $html->quantity ?? '' }}" placeholder="Enter Quantity">
                              </div>
                              <div class="col-lg-12 mt-4">
                                  <div class="d-flex flex-wrap align-items-ceter justify-content-center">
                                      <div class="btn btn-primary mr-4" data-dismiss="modal">Cancel</div>
                                      <button class="btn btn-outline-primary" type="submit">Update</button>
                                      {{-- <div class="btn btn-outline-primary" data-dismiss="modal">Create</div> --}}
                                  </div>
                              </div>
                          </div>
                      </div>
                    </form>