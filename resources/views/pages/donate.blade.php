@extends('templates.default')

@section('content')

<div class="row">
  <div class="col-sm-12">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>
 
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="{{ asset('/images/logo.jpg')}} " alt="...">
      
    </div>
    <div class="item">
      <img src="{{ asset('/images/picture2.jpg')}}" alt="...">
      <div class="carousel-caption">
        <h3>Caption Text</h3>
      </div>
    </div>
    <div class="item">
      <img src="{{ asset('/images/picture1.jpg')}} " alt="...">
      <div class="carousel-caption">
        <h3>Caption Text</h3>
      </div>
    </div>
  </div>
 
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div> <!-- Carousel -->
  </div>
</div><br><hr>

    <div class="row">
    <div class="col-sm-3">

     <div class="panel panel-success">
  <div class="panel-heading" align="center"><h4><b>How to Help</b></h4></div>
  <div class="panel-body" align="center">
    <a href="{{ route ('donate') }}" ><h5><b>Donate</b></h5></a>    </div>
  
</div>
<div class="panel panel-success">
  <div class="panel-heading" align="center"><h4><b>Our Sponsors</b></h4></div>
  <div class="panel-body" align="center">
  <a href=""><img src="{{ asset('/images/projects_image.jpg')}}"width="150px" height="60px" alt="">

  </a>
<p><a href=""><b>Visit us</b></a></p>
  

    <a href=""><h6 style="color:#2C3539;">Become a Sponsor</h6></a>

  </div>
  
</div>
<!-----------------------------------------------------second colum header-------------------------->




    </div>
    <div class="col-sm-9">
      <div class="row">
        
          
            
              <div class="caption">
                <h4 align="center" class="alert alert-warning" role="alert"><b>Donate</b></h4>
                <p><h5>The Institute for Social Advancement (ISA) is a New York based non-profit 
                  founded in 2011 with the mission to help communities whose access to basic 
                  necessities is limited. We advance human welfare by developing sustainable 
                  education programs that allow the inhabitants to advocate for themselves and 
                  their communities. ISA seeks to establish a world free of poverty by increasing 
                  their standards of living Where citizens are held accountable for their communities 
                  thriving socially and flourishing economically.The Institue for social Advancement 
                  relies on the generous contributions from individuals like yourself to support our 
                  drive for training these young minds and fostering an understanding for the betterment 
                  of our society to create a culture for the advancement of our youth. When you give to ISA,
                   you become an integral part of the ISAteam working to develop these young minds and create 
                   a culture for a brighter tommorrow. We hope that we can count on your support to make our project happen.
                    Together we can build a new generation of vibrant, skilled, and self-motivated young learners. </h5></p>
                
            </div>
          
        

      </div><hr>
     <div class="row">
        
      <div class="panel panel-default">
  <div class="panel-heading" align="center"><h4><b>Paypal</b></h4></div>
  <div class="panel-body" align="center">
    <p>To make a donation by paypal, click on the buttong below</p>
<form action="https://www.paypal.com/cgi-bin/webscr" target="_blank" method="post" target="_top">
<input type="hidden" name="cmd" value="_donations">
<input type="hidden" name="business" value="isa.ny.global@gmail.com">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="item_name" value="Institute for Social Advancement">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG.gif:NonHostedGuest">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>


  </div>
  
</div>

       

        
      </div>

    </div>
  </div>


     @stop