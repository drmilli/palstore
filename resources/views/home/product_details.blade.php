<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <base href="/public">
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>PAL STORE</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header')






      <div class="col-sm-6 col-md-4 col-lg-4" style="margin: auto; width: 70%; padding:25px ">


           <div class="img-box">
              <img src="product/{{ $product->image }}" alt="">
           </div>
           <div class="detail-box">
              <h5>
                {{ $product->title}}
              </h5 style="color:red">

              @if ($product->discount_price=null)
              <h6>
               Discount Price
               <br>
               ${{ $product->discount_price}}
              </h6>

              <h6 style="text-decoration: line-through; color:blue">
               price
               <br>
               ${{ $product->price}}
              </h6>
              @else
              <h6 style="color:blue">
               price
               <br>
               ${{ $product->price}}
              </h6>
              @endif

              <h6>
                catagory: {{ $product->catagory}}
              </h6>
              <h6>
                Description: {{ $product->description}}
              </h6>
              <h6>
               Available Quantity: {{ $product->quantity}}
              </h6>
              <form action="{{ url('add_cart',$product->id) }}" method="Post" >
                @csrf
                  <div class="row">
                      <div class="col-md-4">
                  <input type="number" name="quantity" value="1" min="1" style="width: 100px">
                </div>
                <div class="col-md-4">
                    <input type="submit" value="Add to Cart">
                </div>
                </div>
              </form>
           </div>

     </div>



      @include('home.footer')
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2022 All Rights Reserved By <a href="#">ADVANZTEK</a><br>

            Distributed By <a href="#" target="_blank">EFITEK</a>

         </p>
      </div>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>
