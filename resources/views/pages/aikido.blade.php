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

    <div class="panel panel-default">
  <div class="panel-heading" align="center"><h4><b>How to Help</b></h4></div>
  <div class="panel-body" align="center">
    <a href=""><h5><b>Donate</b></h5></a><hr>
    <a href=""><h6>Join Us</h6></a><br>

  </div>
  
</div>
<div class="panel panel-default">
  <div class="panel-heading" align="center"><h4><b>Our Sponsors</b></h4></div>
  <div class="panel-body" align="center">
    <a href=""><h5><b>Donate</b></h5></a><hr>
    <a href=""><h6>Become a Sponsor</h6></a><br>

  </div>
  
</div>
<!-----------------------------------------------------second colum header-------------------------->
<div class="panel panel-default">
  <div class="panel-heading" align="center"><h4><b>Share Us</b></h4></div>
  <div class="panel-body" align="center">
     <ul class="">
                <li>
                  <a data-original-title="Twitter" rel="tooltip"  href="#" class="btn btn-twitter" data-placement="left">
                <i class="fa fa-twitter"></i>
              </a>
              </li>
              <li>
                <a data-original-title="Facebook" rel="tooltip"  href="#" class="btn btn-facebook" data-placement="left">
                <i class="fa fa-facebook"></i>
              </a>
              </li>         
              <li>
                <a data-original-title="Google+" rel="tooltip"  href="#" class="btn btn-google" data-placement="left">
                <i class="fa fa-google-plus"></i>
              </a>
              </li>
                <li>
                <a data-original-title="LinkedIn" rel="tooltip"  href="#" class="btn btn-linkedin" data-placement="left">
                <i class="fa fa-linkedin"></i>
              </a>
              </li>
              <li>
                <a data-original-title="Pinterest" rel="tooltip"  class="btn btn-pinterest" data-placement="left">
                <i class="fa fa-pinterest"></i>
              </a>
              </li>
                        <li>
                <a  data-original-title="Email" rel="tooltip" class="btn btn-mail" data-placement="left">
                <i class="fa fa-envelope"></i>
              </a>
              </li>
                    </ul>
          

  </div>
  
</div>



    </div>
    <div class="col-sm-9">
      <div class="row">
        
          
            
              <div class="caption">
                <h2 align="center"><b>Project Aikido Ethiopia</b></h2>             
                
            </div>
          
        

      </div><hr>

</div>


    <div class="row">
      
        <div class="col-sm-8">
            <div class="panel with-nav-tabs panel-default">
                <div  class="panel-heading" align="center">
                        <ul class="nav nav-tabs" >
                            <li class="active"><a href="#tab1danger" data-toggle="tab">Long Live the Girls</a></li>
                            <li><a href="#tab2danger" data-toggle="tab">Youth Entrepreneurship</a></li>
                            
                           
                        </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1danger"><p>bitants to advocate for themselves
                               and their communities. ISA seeks to establish a world free of poverty by increasing their standards 
                               of living Where citizens are held accountable for their communities thriving socially and flourishing 
                               economically. We seek a society where individuals strive to develop leadership, independence and self 
                               governance. ISA works to provide the people and tools necessary to foster such communities.
                                Our mission is to help communities whose access to basic necessities is limited. We advance human welfare
                                 by developing sustainable programs that allow the inhabitants of the targeted regions to become self – 
                                 sufficient and to be able to advocate for themselves and their communities. </p></div>
                        <div class="tab-pane fade" id="tab2danger"><p>A society for better humanity by creating awareness in scientific literacy and social issues.

A society of understanding and tolerance to the different value systems and ideas, so that we can live in a certain peace and harmony.</p></div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
  

       

        
      </div>

    
  </div>


     @stop