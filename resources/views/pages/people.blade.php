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
      <img src="{{ asset('/images/logo.jpg')}}" alt="...">
      <div class="carousel-caption">
        <h3>Caption Text</h3>
      </div>
    </div>
    <div class="item">
      <img src="{{ asset('/images/picture1.jpg')}}" alt="...">
      <div class="carousel-caption">
        <h3>Caption Text</h3>
      </div>
    </div>
    <div class="item">
      <img src="{{ asset('/images/picture2.jpg')}}" alt="...">
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
     
</div>
 <div class="col-sm-9">
      <div class="row">
        
          
            
              <div class="caption">
                <h2 align="center"><small><b>Our People</b></small></h2>             
                
            </div>
          
        

      </div><hr>

</div>


    <div class="row">
      
                <div class="col-sm-8"> 

                    <!-- Begin Listing: 609 W GRAVERS LN-->
                    <div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing">
                        <div class="media">
                            <a class="pull-left" href="#" target="_parent">
                            <img alt="image" class="img-responsive" src="{{ asset('/images/abdullah.jpg')}}" width="200px" height="200px"></a>

                            <div class="clearfix visible-sm"></div>

                            <div class="media-body fnt-smaller">
                                <a href="#" target="_parent"></a>

                                <h4 class="media-heading">
                                  <a href="#" target="_parent"><small>Founder/CEO  </small> <b align="center">    Abdullah Arif</b>  </a></h4>

                                <p class="hidden-xs">Abdullah Arif brings wealth of experience as a researcher in international
                                 education development. He is a believer of an empowering education infrastructure that is one of 
                                 the components of breaking the vicious cycle of poverty. He has directed several training programs
                                  in the region of Southern Africa. Abdullah advocates improving the access to technology across 
                                  the developing world. Abdullah received his B.A in Economics from City College of New York and his
                                   currently working on his Master’s degree in Economics. </p>
                            </div>
                        </div>
                    <!-- End Listing-->
  

       

        
      </div><br><hr>



    
  </div>
  <div class="col-sm-8"> 

                    <!-- Begin Listing: 609 W GRAVERS LN-->
                    <div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing">
                        <div class="media">
                            <a class="pull-left" href="#" target="_parent">
                            <img alt="image" class="img-responsive" src="{{ asset('/images/biche.jpg')}}" width="200px" height="200px"></a>

                            <div class="clearfix visible-sm"></div>

                            <div class="media-body fnt-smaller">
                                <a href="#" target="_parent"></a>

                                <h4 class="media-heading">
                                  <a href="#" target="_parent"><small>Chairman of ISA   </small> <b align="center">  Tesfaye Biche </b>  </a></h4>

                                <p class="hidden-xs">Tesfaye Tekele Biche is the Chairman of Institute for Social Advancement (ISA). Tesfaye 
                                  is the first yudansh (Aikido black belt) in East Africa and founder of Aikido Ethiopia (AE) 
                                  and co-founder of Action for Youth and Community (AYC) in Ethiopia. Tesfaye served as director for 
                                  AYC and head instructor for AE for six year prior to moving to the US and is still actively engaged as
                                   a board member and fundraising committee for both AE and AYC. He was a circus and theater leader and 
                                   Finance head at the Hawassa Children Center in Hawassa, Ethiopia from 2002 until 2005. There he organized,
                                    preformed and lead the circus and theater group touring throughout the country and refugee comps teaching 
                                    HIV/ADS Awareness, gender equality, non-violent communication and other social issues.</p>
                            </div>
                        </div>
                    <!-- End Listing-->
  

       

        
      </div>

      

    
  </div>


     @stop