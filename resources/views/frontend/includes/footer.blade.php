  <?php
  $terms ;
  $privacy ; 
    if(app()->getLocale() == 'en') {
        $data = DB::table('app_settings')->get('name_en');
        $terms = $data[0]->name_en;
        $privacy = $data[1]->name_en;
    }else {
        $data = DB::table('app_settings')->get('name_ar');
        $terms = $data[0]->name_ar;
        $privacy = $data[1]->name_ar;
    }
  ?>
<div class="container bottomBorder mt-3">
    <div class="row">
      <div class="col-md-2 text-center">
        <img src="{{asset("images/ohlogo.png")}}" width="80px">
      </div>
      <div class="col-md-6">
        <ul class="bottomMenu">
          
          <li class="nav-item ">
            <a class="nav-link" href="{{url('/terms')}}"><?php echo $terms; ?></a>
          </li>
           <li class="nav-item mt-2">
            |
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{url('/privacy')}}"><?php echo $privacy;?></a>
          </li>
  
        
      </ul>
      </div>
      <div class="col-md-4 socialMediaIcon">
        <ul class="form-inline my-lg-0 socialMedia">
          <li class="nav-item ">
            <a class="nav-link facebook" target="_blank" href="https://www.facebook.com/OhMessage/"><i class="fab fa-facebook"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link twitter" target="_blank" href="https://twitter.com/OhMessage/"><i class="fab fa-twitter"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link instagram" target="_blank" href="https://www.instagram.com/oh.message/"><i class="fab fa-instagram"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link linkedin" target="_blank" href="https://www.linkedin.com/company/ohmessage"><i class="fab fa-linkedin-in"></i></a>
          </li>
      </ul>    
      </div>
    </div>
  </div>
  <footer>
      <div class="text-center p-4" >
       Copyright © 2021 www.Ohmessage.com - All Rights Reserved.
  
  
         
    </div>
    <!-- Copyright -->
  </footer>
  
  
      <style>
      .google-logo{
          position: absolute;
          left: 74%;
          top: 85%;
          width: 10%;
        }
        .apple-logo{
          position: absolute;
          left: 62%;
          top: 85%;
          width: 10%;
        }
        @media(max-width: 900px) { 
          .apple-logo {
            top: 85%;
          }
          .google-logo {
            top: 85%;
          }
        }
      .responsiveImage{
          width: 100%;
          height: 75%;
          display: inline-block;
      }
      body{margin:0px;}
      .languageButton{background-color: #2DBDFF!important;
      border-color: #2DBDFF!important;
      padding: 10px 28px;}
      .menuSection{margin:0 auto!important;}
      .bottomBorder{
          border-bottom:2px solid #D6E8F2;
          padding: 1% 0;
      }
      .bottomMenu{font-weight:bold; 
      padding: 10px 0 0 35%; }
      .bottomMenu li{display:inline-block;}
      .bottomMenu li a{color:#000;}
      .socialMedia{list-style: none;
      font-size: 25px; float:right;}
      .socialMedia li a{color: #fff;
      border-radius: 55%;
      margin: 0 6px;}
      .socialMedia .facebook{background-color:#1877F2;}
      .socialMedia .twitter{background-color:#1DA1F2;}
      .socialMedia .instagram{background-color:#E1306C;}
      .socialMedia .linkedin{background-color:#4078BB;}
      @media screen and (max-width: 800px) {
        .bottomMenu {
          padding: 10px 0 0 0;
          text-align: center;
        }
        .navbar-toggler{display:none;}
        .socialMedia{padding: 0;
      float: none;
      display: inline-block;}
      .socialMedia li{display:inline-block;}
      .socialMediaIcon{text-align:center;}    
      }
      .mainContent{min-height:55vh;padding: 0 2%;}
.mainContent p, .mainContent h2{direction:rtl;text-align:right;}
      </style>
  
         <!-- Optional JavaScript; choose one of the two! -->
  
      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        
     @stack('custom-scripts')
    </body>
  </html>