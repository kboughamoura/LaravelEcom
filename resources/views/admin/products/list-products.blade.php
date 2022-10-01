<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Phoenix</title>
        <link rel="apple-touch-icon" sizes="180x180" href="../../assets/img/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../../assets/img/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../../assets/img/favicons/favicon-16x16.png">
        <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicons/favicon.ico">
        <link rel="manifest" href="../../assets/img/favicons/manifest.json">
        <meta name="msapplication-TileImage" content="../../assets/img/favicons/mstile-150x150.png">
        <meta name="theme-color" content="#ffffff">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
        <link href="{{asset('dashassests/css/phoenix.min.css')}}" rel="stylesheet" id="style-default">
        <link href="{{ asset('dashassests/css/user.min.css') }}" rel="stylesheet" id="user-style-default">
        <style>
          body {
            opacity: 0;
          }
        </style>
      </head>

      <script src="{{asset('dashassests/js/phoenix.js')}}"></script>
      <body>

        
       @include('inc.admin.sidebar')
       @include('inc.admin.nav')

        


        <main class="main" id="top">
            <div class="container-fluid px-0">
                <div class="content">
                    
                    <h2 class="text-bold text-1100 mb-5">Products</h2>
                    <div id="members" data-list='{"valueNames":["customer","email","mobile_number","city","last_active","joined"],"page":10,"pagination":true}'>
                      <div class="row align-items-center justify-content-between g-3 mb-3">
                        <div class="col col-xl-4">
                          <!-- Search -->
                          <div class="search-box w-100" style="width:35rem;">
                            <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control form-control-sm search-input search" type="search" placeholder="Search products" aria-label="Search"> <span class="fas fa-search search-box-icon"></span></form>
                          </div>

                          <!-- End Search -->
                        </div>
                        <div class="d-flex align-items-center"><a data-bs-toggle="modal" data-bs-target="#verticallyCentered" ><button class="btn" style="margin-left: 830px"><span class="fas fa-plus me-2"></span>Add Product</button></a></div>
                        </div>
                      </div>
                      <div class="mx-n4 mx-lg-n6 px-4 px-lg-6 bg-white border-y border-300 mt-2 position-relative top-1">
                        <div class="table-responsive scrollbar mx-n1 px-1">
                          <table class="table table-sm fs--1 mb-0">
                            <thead>
                              <tr>
                                <th class="white-space-nowrap fs--1 align-middle ps-0">
                                  <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox"></div>
                                </th>
                                <th class="sort align-middle" scope="col" data-sort="customer" style="width:15%;">Name</th>
                                <th class="sort align-middle" scope="col" data-sort="email" style="width:15%;">Description</th>
                                <th class="sort align-middle pe-3" scope="col" data-sort="mobile_number" style="width:20%">Price</th>
                                <th class="sort align-middle" scope="col" data-sort="city" style="width:25%;">Quantity</th>
                                <th class="sort align-middle text-end pe-0" scope="col" data-sort="joined" style="width:10%;">Created At</th>
                                <th class="sort text-end align-middle pe-0" scope="col">ACTION</th>
                              </tr>
                            </thead>
                            @foreach ($products as $product)
                                
                            
                            <tbody class="list" id="table-latest-review-body">
                              <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                
                                <td class="customer align-middle white-space-nowrap"><a class="d-flex align-items-center" href="#!">
                                    <div class="avatar avatar-m"><img class="rounded-circle" src="{{$product->photo}}" ></div>
                                    
                                  </a>
                                </td>
                                <td class="email align-middle white-space-nowrap"><a class="fw-semi-bold text-1100" href="mailto:+912346578">{{$product->name}}</a></td>
                                <td class="mobile_number align-middle white-space-nowrap"><a class="fw-bold text-1100" href="tel:+912346578">{{$product->description}}</a></td>
                                <td class="city align-middle white-space-nowrap text-900">{{$product->price}}</td>
                                <td class="last_active align-middle white-space-nowrap text-700">{{$product->qte}}</td>
                                <td class="joined align-middle white-space-nowrap text-700 text-end">{{$product->created_at}}</td>
                               <td class="align-middle white-space-nowrap text-end pe-0">
                                  <div class="font-sans-serif btn-reveal-trigger"><button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="editModal">Actions</a>
                                      <div class="dropdown-divider"></div><a onclick="return confirm('voulez-vous supprimer le product {{$product->name}}')" class="dropdown-item text-danger" href="/product/delete/{{$product->id}}">Remove</a>
                                      <div class="dropdown-divider"></div><a  class="btn" data-bs-toggle="modal" data-bs-target="#editProduct{{$product->id}}">Update</a>                                   
                                    </div>
                                  </div>
                                </td>
                              </tr>
                            </tbody>
                            @endforeach
                        </table>
                      </div>
                      <div class="row align-items-center justify-content-between py-2 pe-0 fs--1">
                        <div class="col-auto d-flex">
                          <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900" data-list-info></p><a class="fw-semi-bold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semi-bold d-none" href="#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                        </div>
                        <div class="col-auto d-flex"><button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                          <ul class="mb-0 pagination"></ul><button class="page-link" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                        </div>
                      </div>
                    </div>
                  </div>
          </main>

          <!-- add modal -->
          <div class="modal fade" id="verticallyCentered" tabindex="-1" aria-labelledby="verticallyCenteredModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="verticallyCenteredModalLabel">Add Product</h5><button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><span class="fas fa-times fs--1"></span></button>
                </div>
                <div class="modal-body">
          
                  <form action="/admin/product/add" method="POST" enctype="multipart/form-data">
          
                    @csrf
              
                  <div class="input-group mb-3" >
                    <span class="input-group-text" id="basic-addon1">Product name</span>
                    <input class="form-control" type="text" placeholder="Name" aria-label="Name" name="name" aria-describedby="basic-addon1">
                  </div>

                  
    
                  <div class="input-group mb-3" >
                    <span class="input-group-text" id="basic-addon1">Product Category</span>
                   
                    <select name="category" class="form-control" >
                      @foreach ($categories as $category)
                      <option value="{{$category->id}}">{{$category->name}}</option> 
                      @endforeach
                    </select>  
                    
                  </div>

                 

              
                  <div class="input-group mb-3" >
                    <span class="input-group-text">Description</span>
                    <textarea class="form-control" name="description" aria-label="With textarea"></textarea>.
                  </div>
                  <div class="input-group mb-3" >
                    <span class="input-group-text">Price</span>
                    <input type="number" class="form-control" name="price" >
                  </div>
                  <div class="input-group mb-3" >
                    <span class="input-group-text">Quantity</span>
                    <input type="number" class="form-control" name="qte" >
                  </div>

                  <div class="input-group mb-3" >
                    
                    <input type="file" class="form-control" name="photo" aria-label="With textarea">
                  </div>
              
                  </div>
                <div class="modal-footer"><button class="btn btn-primary" type="submit">Okay</button><button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Cancel</button></div>
              </form>
              </div>
            </div>
          </div>

        <!-- Edit Modal-->
        @foreach ($products as $product)
     
          <div class="modal fade" id="editProduct{{$product->id}}" tabindex="-1" aria-labelledby="verticallyCenteredModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editModal">Edit product {{$product->name}}</h5><button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><span class="fas fa-times fs--1"></span></button>
          </div>
          <div class="modal-body">
    
            <form action="/admin/product/update" method="POST">
    
              @csrf
        
            <div class="input-group mb-3" >
              <span class="input-group-text" id="basic-addon1">product name</span>
              <input class="form-control" type="text" value="{{$product->name}}" aria-label="Name" name="name" aria-describedby="basic-addon1">
            </div>

            <div class="input-group" >
    
              <span class="input-group-text">Description</span>
              <textarea class="form-control" name="description" value="{{$product->description}}"aria-label="With textarea"></textarea>.
            </div>
            <div class="input-group mb-3" >
              <span class="input-group-text">Price</span>
              <input type="number" class="form-control" name="price" value="{{$product->price}}">
            </div>
            <div class="input-group mb-3" >
              <span class="input-group-text">Quantity</span>
              <input type="number" class="form-control" name="qte" value="{{$product->qte}}">
            </div>

            <div class="input-group mb-3" >
              <span class="input-group-text">Photo</span>
              <textarea class="form-control" name="photo" aria-label="With textarea" value="{{$product->photo}}"></textarea>.
            </div>

            <input type="hidden" value="{{$product->id}}" name="id_product">


        
            
    
            </div>
            <div class="modal-footer"><button class="btn btn-primary" type="submit">Okay</button><button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Cancel</button></div>
            </form>
            </div>
          </div>
          </div>
    
        @endforeach
        <!-- -->
</body>
<script src="{{asset('dashassests/js/phoenix.js')}}"></script>
</html>