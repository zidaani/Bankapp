
<?php include 'header.php'; ?>




<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img  class="slideimg1">
    </div>
    <div class="carousel-item">
      <img  class="slideimg2">
    </div>
    <div class="carousel-item">
      <img  class="slideimg3">
    </div>
  </div>
 
  <!-- Left and right controls ----
   <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a> -->

  <div class="container" style="margin-top:-400px;position: absolute;">
<div class="row justify-content-center align-content-center" style="margin-left: 10%;">
  <div class=" col-md-9 bgmd">
    <h4 style="font-weight: lighter;color: #bcbebb;font-size: 17px;text-transform: uppercase;">The Best place to fine your date</h4>

    <h1 style="font-weight: bold;color: #eef1ec;font-size: 43px;text-transform: uppercase;margin: 55px 0px 40px 0px;">
      THIS IS OUR PLANET
    </h1>

    <button class="bg-btn">
      LEARN MORE
    </button>

  </div>

  <div class="col-md-3 vanmobile" style="margin: -144px -166px 30px 0px;color: #fff !important;padding: 22px;background: linear-gradient(to bottom, rgba(67, 84, 89, 0.39), rgba(0, 0, 0, 0.98));box-shadow: -1px 0px 7px 3px inset #fff;border-radius: 10px;">
    <div class="form-group">
      <form action="include/login.php" method="post">
        <h5 style="text-align: center;letter-spacing: 2px;"><i class="fa fa-desktop " aria-hidden="true"></i> &nbsp;USER LOGIN</h5> <hr style="background: #fff;"> <br>

        <label > username</label>
        <div class="">
          <input type="text" name="username" style="border: none;background: transparent;border-bottom: 1px solid #fff;color: #fff;border-right: 1px solid #fff; border-radius: 7px;">
        </div> <br>

        <label > password</label>
        <div class="">
          <input type="password" name="password" style="border: none;background: transparent;border-bottom: 1px solid #fff;color: #fff;border-left: 1px solid #fff;border-radius: 7px;">

        <div class=""><br>
<?php 
if (!empty($_SESSION['username'])) {
	?>
	 <a href="users/logout.php" class="homeloginsubmit" style="background: #e41;text-decoration: none;color: #fff;padding: 10px;">Logout</a> 

<?php } else{ ?>
	  <input type="submit" name="submit" value="login" class="homeloginsubmit">

<?php } ?>
   
        </div>
        </div>
      </form>
    </div>
  </div>


  
</div>
</div>



</div>


</div>



<div  class="section bg-skew-primary" style="padding-top: 45px;">
  <div class="container">
      <h2 class="align-center large-margin" style="text-align: center;letter-spacing: 3px;font-weight: lighter;">We’re more than Susu Bank. More than you Expect.</h2>
   <img src="img/brb.png" class="imgbr">
    <div class="row">
      <div class="col-md-6">
       <h4 style="font-size: 40px;font-weight: lighter;padding-bottom: 21px;text-align: center;">We Are Everywhere</h4> 
       <p style="color: #000000b3;letter-spacing: 0.5px;font-size: 16px;margin-bottom: 31px;margin-right: 41px;text-align: center;">This is the mane that i wa stalking about he is very skilfull and very patience. this is the mane that i wa stalking about he is very skilfull and very patience. this is the mane that i wa stalking about he is very skilfull and very patience. this is the mane that i wa stalking about he is very skilfull and very patience. this is the mane that i wa stalking about he is very skilfull and very patience.</p>

      <span style="font-size: 34px;margin: 10px 10px 10px 21%;padding: 11px;border-radius: 15px;box-shadow: 2px 2px 1px 2px #000000b3;background: #1896adc2;color: #ffffffe6;cursor: pointer;">Our Branches</span>
      </div>

       <div class="col-md-6">
      <img src="img/map.png" alt="" class="imgshadow" style="width: 100%;margin-top: 20px;">  
      </div>
    </div>
  </div>
</div>



<div  class="section sec1">
<div class="container">
  <h2 class="align-center large-margin" style="text-align: center;margin-top: 53px;font-weight:lighter;letter-spacing: 3px;color: #000;">We’re more than Susu Bank. More than you Expect.</h2>
  <img src="img/brb.png" class="imgbr">
  <div class="row bg-light" style="background: none !important;">

    <div class="col-sm-12 col-md-4 text-center ">
    <div class="confa">
    <div class="col-md-3"><i class="fa fa-university faicon" aria-hidden="true" ></i>
</div>
    <h4 class="col-md-9 col4h4">Receive free $20 every month</h4>
    </div>

    <p style="text-align: left;">this is the mane that i wa stalking about he is very skilfull and very patience</p>
    </div>

    <div class="col-sm-12 col-md-4 text-center ">
    <div class="confa">
    <div class="col-md-3"><i class="fa fa-server faicon" aria-hidden="true" style="background: #ee4411db;"></i></div>
    <h4 class="col-md-9 col4h4">Receive free $20 every month</h4>
    </div>
  <p style="text-align: left;">this is the mane that i wa stalking about he is very skilfull and very patience</p>
    </div>

   <div class="col-sm-12 col-md-4 text-center ">
    <div class="confa">
    <div class="col-md-3"><i class="fa fa-desktop faicon" aria-hidden="true" style="background: #080835;"></i></div>
    <h4 class="col-md-9 col4h4">Receive free $20 every month</h4>
    </div>
  <p style="text-align: left;">this is the mane that i wa stalking about he is very skilfull and very patience</p>
    </div>

    <div class="col-sm-12 col-md-4 text-center ">
    <div class="confa">
    <div class="col-md-3"><i class="fa fa-credit-card faicon" aria-hidden="true" style="background: #ce23ba;"></i></div>
    <h4 class="col-md-9 col4h4">Receive free $20 every month</h4>
    </div>
  <p style="text-align: left;">this is the mane that i wa stalking about he is very skilfull and very patience</p>
    </div>

    <div class="col-sm-12 col-md-4 text-center ">
    <div class="confa">
    <div class="col-md-3"><i class="fa fa-globe faicon" aria-hidden="true" style="background: #3d1eb9;"></i></div>
    <h4 class="col-md-9 col4h4">Receive free $20 every month</h4>
    </div>
  <p style="text-align: left;">this is the mane that i wa stalking about he is very skilfull and very patience</p>
    </div>
    <div class="col-sm-12 col-md-4 text-center ">
    <div class="confa">
    <div class="col-md-3"><i class="fa fa-comment faicon" aria-hidden="true" style="background: #0bc2ae;"></i></div>
    <h4 class="col-md-9 col4h4">Receive free $20 every month</h4>
    </div>
  <p style="text-align: left;">this is the mane that i wa stalking about he is very skilfull and very patience</p>
    </div>
  </div>
</div>
</div>



<!-- <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/img1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/img1.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/img1.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> -->



<div class="container">
                <div><h2 class="my-5 text-center">Questions</h2>
                     <img src="img/brb.png" class="imgbr" style="margin-top: -48px;">
                </div>
                <div class="row justify-content-lg-center pb-5">
                    <div class="col-lg-9">
                        <div class="accordion" id="accordionQuestions" style="border: 15px #dddada80 solid;border-radius: 30px;box-shadow: 1px 1px 32px 1px #0009;">
                            <div class="card shadow mb-2" style="box-shadow: 0 .5rem 1rem rgba(0,0,0,.15) !important;">
                                <div class="card-header" id="headingOne">
                                    <h3 class="card-title">
                                        <a class="collapsed" role="button" href="#collapseOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" style="color: #2b2929;text-align: left;text-decoration: none;">
                                            What methods of payments are supported? <i class="fas fa-angle-down float-right rotate-icon"></i>
                                        </a>
                                    </h3>
                                </div> 
                                <div id="collapseOne" class="collapse show
                                " aria-labelledby="headingOne" data-parent="#accordionQuestions" style="">
                                    <div class="card-body">
                                        <p>You can purchase the theme on Bootstrap Themes via any major credit/debit card (via Stripe) or with your Paypal account. We don't support cryptocurrencies or invoicing at this time.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card shadow mb-2" style="box-shadow: 0 .5rem 1rem rgba(0,0,0,.15) !important;">
                                <div class="card-header" id="headingTwo">
                                    <h3 class="card-title">
                                        <a class="collapsed" role="button" href="#collapseTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="color: #2b2929;text-align: left;text-decoration: none;">
                                            What version are the theme built on? <i class="fas fa-angle-down float-right rotate-icon"></i>
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionQuestions" style="">
                                    <div class="card-body">
                                        <p>The theme are built on versions of Bootstrap v4. As more Bootstrap updates are launched the theme will be update as needed and as new features and bug fixes come out.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card shadow mb-2" style="box-shadow: 0 .5rem 1rem rgba(0,0,0,.15) !important;">
                                <div class="card-header" id="headingThree">
                                    <h3 class="card-title">
                                        <a class="collapsed" role="button" href="#collapseThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="color: #2b2929;text-align: left;text-decoration: none;">
                                            How do I get help with the theme? <i class="fas fa-angle-down float-right rotate-icon"></i>
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionQuestions" style="">
                                    <div class="card-body">
                                        <p>Support for the theme is given for 6 months after you purchase the theme and is specific to questions around functionality, bugs, and basic implementation.</p>
                                    </div>
                                </div>
                            </div>



                            <div class="card shadow mb-2" style="box-shadow: 0 .5rem 1rem rgba(0,0,0,.15) !important;">
                                <div class="card-header" id="headingfour">
                                    <h3 class="card-title">
                                        <a class="collapsed" role="button" href="#collapsefour" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour" style="color: #2b2929;text-align: left;text-decoration: none;">
                                            How are you? <i class="fas fa-angle-down float-right rotate-icon"></i>
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionQuestions" style="">
                                    <div class="card-body">
                                        <p>Support your brothers projuect thisnka ka k ka sW C  OW Q SCOQ C S  WNQ  J DK   QJ J XI   IJCIJ.</p>
                                    </div>
                                </div>
                            </div>
              

                        </div>
                    </div>
                </div>
            </div>



<div class="section" style="margin: 31px 0px 65px 0px;">
  <div class="container">
    <div class="row">
<div class="col-md-4 hov">
  <img src="img/img1.jpg" alt="" style="width: 100%;border: 8px solid #cac2c24d;border-radius: 10px;box-shadow: 1px 4px 5px 1px #959191;">
   <!-- <span class="btnflow">Shop Now</span> -->
</div>

<div class="col-md-4 hov">
  <img src="img/img2.jpg" alt="" style="width: 100%;border: 8px solid #cac2c24d;border-radius: 10px;box-shadow: 1px 4px 5px 1px #959191;">
  <!-- <span class="btnflow">Shop Now</span> -->
</div>


<div class="col-md-4 hov">
<img src="img/img3.jpg" alt="" style="width: 100%;height: 95%; border: 8px solid #cac2c24d;border-radius: 10px;box-shadow: 1px 4px 5px 1px #959191;">
<!-- <span class="btnflow">Shop Now</span> -->
 </div>


</div>
</div>
</div>
<?php include 'footer.php'; ?>