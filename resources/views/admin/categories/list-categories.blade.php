<!doctype html>
<html lang="en-US" dir="ltr">

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

  <body>
    <main class="main" id="top">
      <div class="container-fluid px-0">

       @include('inc.admin.sidebar')
       @include('inc.admin.nav')

        


        <div class="content">
          <div class="row align-items-center justify-content-between g-3 mb-4">
            <div class="col-auto">
              <h2 class="mb-0">Categories</h2>
            </div>
            <div class="col-auto">
              <div class="d-flex align-items-center"><a data-bs-toggle="modal" data-bs-target="#verticallyCentered" ><button class="btn" ><span class="fas fa-plus me-2"></span>Add Category</button></a></div>
            </div>
          </div>
          
          <div>
            
            <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-white border-y position-relative top-1">
              <div class="table-responsive scrollbar mx-n1 px-1">
                <table class="table fs--1 mb-0">
                  <thead>
                    <tr>
                      <th class="sort white-space-nowrap align-middle fs--2" scope="col"></th>
                      <th class="sort white-space-nowrap align-middle" scope="col" style="min-width:350px;" >CATEGORY NAME</th>
                      <th class="sort white-space-nowrap align-middle" scope="col" style="min-width:350px;" >CATEGORY DESCRIPTION</th>
                   
                      <th class="sort text-end align-middle pe-0" scope="col">ACTION</th>
                    </tr>
                  </thead>
                  <tbody class="list" id="table-latest-review-body">
                    <!--  card -->

                    @foreach ($categories as $category)
                        
                    
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      
                      <td class="align-middle"><a class="fw-semi-bold mb-0" > {{$category->name}}</a></td>
                      <td class="align-middle"><a class="fw-semi-bold mb-0" > {{$category->description}}</a></td>
                   
                      <td class="align-middle white-space-nowrap text-end pe-0">
                        
                        <div class="font-sans-serif btn-reveal-trigger"><button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="editModal">Actions</a>
                            <div class="dropdown-divider"></div><a onclick="return confirm('voulez-vous supprimer la Category {{$category->name}}')" class="dropdown-item text-danger" href="/category/delete/{{$category->id}}">Remove</a>
                            <div class="dropdown-divider"></div><a  class="btn" data-bs-toggle="modal" data-bs-target="#editCategory{{$category->id}}">Update</a>
                          
                          </div>
                        </div>
                      </td>
                    </tr>

                    @endforeach
                   
                  </tbody>
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
          <footer class="footer">
            <div class="row g-0 justify-content-between align-items-center h-100 mb-3">
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-900">Thank you for creating with phoenix<span class="d-none d-sm-inline-block"></span><span class="mx-1">|</span><br class="d-sm-none">2022 &copy; <a href="https://themewagon.com">Themewagon</a></p>
              </div>
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">v1.1.0</p>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </main>


<!-- Modal add-->
<div class="modal fade" id="verticallyCentered" tabindex="-1" aria-labelledby="verticallyCenteredModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="verticallyCenteredModalLabel">Add Category</h5><button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><span class="fas fa-times fs--1"></span></button>
      </div>
      <div class="modal-body">

        <form action="/admin/category/add" method="POST">

          @csrf
    
        <div class="input-group mb-3" >
          <span class="input-group-text" id="basic-addon1">Category name</span>
          <input class="form-control" type="text" placeholder="Name" aria-label="Name" name="name" aria-describedby="basic-addon1">
        </div>
    
        <div class="input-group" >
    
          <span class="input-group-text">Description</span>
          <textarea class="form-control" name="description" aria-label="With textarea"></textarea>.
        </div>
    
       
    
      

        </div>
      <div class="modal-footer"><button class="btn btn-primary" type="submit">Okay</button><button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Cancel</button></div>
    </form>
    </div>
  </div>
</div>
<!-- -->


@foreach ($categories as $category)
    <!-- Modal edit-->  
    <div class="modal fade" id="editCategory{{$category->id}}" tabindex="-1" aria-labelledby="verticallyCenteredModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editModal">Edit Category {{$category->name}}</h5><button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><span class="fas fa-times fs--1"></span></button>
          </div>
          <div class="modal-body">
    
            <form action="/admin/category/update" method="POST">
    
              @csrf
        
            <div class="input-group mb-3" >
              <span class="input-group-text" id="basic-addon1">Category name</span>
              <input class="form-control" type="text" value="{{$category->name}}" aria-label="Name" name="name" aria-describedby="basic-addon1">
            </div>

            <div class="input-group" >
    
              <span class="input-group-text">Description</span>
              <textarea class="form-control" name="description" value="{{$category->description}}"aria-label="With textarea"></textarea>.
            </div>

            <input type="hidden" value="{{$category->id}}" name="id_category">


        
            
    
            </div>
          <div class="modal-footer"><button class="btn btn-primary" type="submit">Okay</button><button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Cancel</button></div>
        </form>
        </div>
      </div>
    </div>
    <!-- -->
@endforeach

    <script src="{{asset('dashassests/js/phoenix.js')}}"></script>
  </body>

</html>