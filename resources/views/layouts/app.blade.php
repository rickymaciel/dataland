<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="no-js">
   <head>
      <title>Dataland</title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="{{ asset('assets/css/style.css', App::environment() == 'production' ) . '?v='. md5(microtime()) }}">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.9/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
      <!-- Modernizr runs quickly on page load to detect features -->
      <script src="{{ asset('assets/js/modernizr.custom.js', App::environment() == 'production' ) . '?v='. md5(microtime()) }}"></script>
   </head>
   <body>
      <div class="outer-home">
         <section id="home">
            <div id="vegas-background"></div>
            <!-- Overlay -->
            <div class="global-overlay">
               <canvas id="constellationel"></canvas>
            </div>
            <img src="assets/img/logo/logo.png" alt="" class="brand-logo text-intro" />
            <div class="content">
            	
            	<div class="d-flex justify-content-center align-items-center align-self-center">
				  <div class="p-2 flex-fill"></div>
				  <div class="p-2 flex-fill">
				  	<h2 class="text-intro opacity-0">
                  		@include('flash::message')
               		</h2>
				  </div>
				  <div class="p-2 flex-fill"></div>
				</div>
               
               <h1 class="text-intro opacity-0">
                  In hac habitasse platea dictumst. Vivamus adipiscing  fermentum quam volutpat.
               </h1>
               <p class="text-intro opacity-0">
                  In hac habitasse platea dictumst. Vivamus adipiscing  fermentum quam volutpat.
               </p>
               <nav>
                  <ul>
                     <li>
                        <a href="#" id="" class="light-btn text-intro opacity-0">Learn More</a>
                     </li>
                     <li>
                        <a href="#" id="open-more-info" data-target="right-side" class="action-btn trigger text-intro opacity-0">Contact us</a>
                     </li>
                  </ul>
               </nav>
            </div>
            <div class="bottom-home"></div>
         </section>
      </div>
      <div class="close-right-part layer-left hide-layer-left"></div>
      <div class="border-right-side hide-border"></div>
      <content id="app">
         @yield('content')
      </content>
      <button id="close-more-info" class="close-right-part hide-close">
      <i class="icon ion-android-close"></i>
      </button>
      <!-- * Libraries jQuery, Easing and Bootstrap * -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <!-- Slideshow/Image plugin -->
      <script src="{{ asset('assets/js/vegas.js', App::environment() == 'production' ) . '?v='. md5(microtime()) }}"></script>
      <!-- Custom Scrollbar plugin -->
      <script src="{{ asset('assets/js/jquery.mCustomScrollbar.js', App::environment() == 'production' ) . '?v='. md5(microtime()) }}"></script>
      <!-- Main JS File -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.9/js/plugins/piexif.min.js" type="text/javascript"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.9/js/fileinput.min.js"></script>
      <!-- Constellation effect -->
      <script src="{{ asset('assets/js/constellation.js', App::environment() == 'production' ) . '?v='. md5(microtime()) }}"></script>
      <script src="{{ asset('assets/js/main.js', App::environment() == 'production' ) . '?v='. md5(microtime()) }}"></script>
      <script type="text/javascript">
         $("#file_video").fileinput({
                browseClass: "",
                showCaption: false,
                showRemove: false,
                showUpload: false,
                allowedFileExtensions: ["avi", "mpg", "mkv", "mov", "mp4", "3gp", "webm", "wmv"],
                maxFilePreviewSize: 2048,
                maxFileSize: 50000,
                resizeImage: true,
                resizeIfSizeMoreThan: 5000,
                maxFileCount: 1,
            });
            $("#file_img").fileinput({
                browseClass: "",
                showCaption: false,
                showRemove: false,
                showUpload: false,
                allowedFileExtensions: ["jpg", "png", "gif"],
                maxImageWidth: 2048,
                resizeImage: true,
                maxFileSize: 10000,
                autoReplace: true,
                maxFileCount: 1,
                resizeIfSizeMoreThan: 2000,
             validateInitialCount: true,
             overwriteInitial: false,
            });
      </script>
   </body>
</html>