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
      <div class="row">
        
          
            
              <div class="caption">
                <h3 align="center" class="alert alert-warning" role="alert"><b>Project Lesotho</b></h3>             
                
            </div>
          
        

      </div><hr>

</div>


    <div class="row">
      
        <div class="col-sm-8">
            <div class="panel with-nav-tabs panel-default">
                <div  class="panel-heading" align="center">
                        <ul class="nav nav-tabs" >
                            <li class="active"><a href="#tab1danger" data-toggle="tab">Teacher Training Workshop</a></li>
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
                                 sufficient and to be able to advocate for themselves and their communities.
                                 bitants to advocate for themselves
                               and their communities. ISA seeks to establish a world free of poverty by increasing their standards 
                               of living Where citizens are held accountable for their communities thriving socially and flourishing 
                               economically. We seek a society where individuals strive to develop leadership, independence and self 
                               governance. ISA works to provide the people and tools necessary to foster such communities.
                                Our mission is to help communities whose access to basic necessities is limited. We advance human welfare
                                 by developing sustainable programs that allow the inhabitants of the targeted regions to become self – 
                                 sufficient and to be able to advocate for themselves and their communities. 


                               </p></div>
                        <div class="tab-pane fade" id="tab2danger"><p>A society for better humanity by creating awareness in scientific literacy and social issues.

A society of understanding and tolerance to the different value systems and ideas, so that we can live in a certain peace and harmony.
bitants to advocate for themselves
                               and their communities. ISA seeks to establish a world free of poverty by increasing their standards 
                               of living Where citizens are held accountable for their communities thriving socially and flourishing 
                               economically. We seek a society where individuals strive to develop leadership, independence and self 
                               governance. ISA works to provide the people and tools necessary to foster such communities.
                                Our mission is to help communities whose access to basic necessities is limited. We advance human welfare
                                 by developing sustainable programs that allow the inhabitants of the targeted regions to become self – 
                                 sufficient and to be able to advocate for themselves and their communities.</p></div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
  

       

        
      </div>

    
  </div>


     @stop