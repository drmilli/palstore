<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>palstore Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />

    <style type="text/css">
     .wrapper {
          min-height: 100%;
      }
    .div_center
    {
        text-align: center;
        padding-top: 40px;
        color: whitesmoke;

    }
    .font_size
    {
        font-size: 40px;
        padding-bottom: 40px;
        color: whitesmoke;

    }
    .input_color
    {
        color: black;
    }
    .center{
        margin: auto;
        width: 50%;
        text-align: center;
        color: white;
        border: 3px solid;
        margin-top: 30px
    }

    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      @include('admin.other_header')
      <!-- partial -->

      <div class="main-panel">
        <div class="content-wrapper">
            @if(session()->has('message'))
                     <div class="alert alert-success">
                         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                         {{ session()->get('message') }}
                     </div>
               @endif
            <div class="div_center">
                 <h1>Add product</h1>
                 <form action="{{ url('/add_product') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                 <div>
                 <label for=""> Product Title</label>
                 <input class="form-control" type="text" name="title" placeholder="input title">
                </div>

                <div>
                    <label for=""> Product Description</label>
                    <input class="form-control" type="text" name="description" placeholder="input Description" required>
                   </div>

                   <div>
                    <label for=""> Product Price</label>
                    <input class="form-control" type="number"  name="price" placeholder="input price" required>
                   </div>

                   <div>
                    <label for=""> Product Discount Price</label>
                    <input class="form-control" type="number"  name="dis_price" placeholder="discount if applied">
                   </div>

                   <div>
                    <label for=""> Product Quantity</label>
                    <input class="form-control" type="number" min="0"  name="quantity" placeholder="input Quantity" required>
                   </div>

                   <div>
                    <label for=""> Product Catagory</label>
                    <select class="form-control" name="catagory" id="" required>
                        <option value="" selected> Add a Catagory here</option>

                        @foreach($catagory as $catagory)
                        <option value="{{ $catagory->catagory_name }}">{{ $catagory->catagory_name }}</option>
                        @endforeach

                    </select>
                   </div>

                   <div>
                    <label for=""> Product Image</label>
                    <input class="form-control" type="file" name="image" placeholder="input image" required>
                   </div>

                   <div>

                    <input class="btn btn-primary" type="submit" value="Add Product" >
                   </div>
                </form>



            </div>

      </div>
    </div>


    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="admin/assets/js/off-canvas.js"></script>
    <script src="admin/assets/js/hoverable-collapse.js"></script>
    <script src="admin/assets/js/misc.js"></script>
    <script src="admin/assets/js/settings.js"></script>
    <script src="admin/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="admin/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>
