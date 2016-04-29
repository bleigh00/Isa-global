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
</div><hr>

    <div class="row">
    <div class="col-sm-3">

    <div class="panel panel-success">
  <div class="panel-heading" align="center"><h4><b>How to Help</b></h4></div>
  <div class="panel-body" align="center">
  	<a href="{{ route ('donate') }}" ><h5><b>Donate</b></h5></a> 	  </div>
  
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
<div class="panel panel-success">
  <div class="panel-heading" align="center"><h4><b>501 c3 IRS</b></h4></div>
  <a href=""><img src="{{ asset('/images/001.jpg')}}"width="250px" height="150px"  alt="">

  </a>
<p><a href="{{ asset('/images/501c3.pdf')}}" target="_blank"><b><small>View PDF</small></b></a></p>
  
</div>



    </div>
    <div class="col-sm-9">
      <div class="row">
        
          
            
              <div class="caption">
                <h4 align="center"><b>Organization Overview</b></h4>
                <p>The Institute for Social Advancement (ISA) is a New York based non-profit 
                  founded in 2011 with the mission to help communities whose access to basic 
                  necessities is limited. We advance human welfare by developing sustainable 
                  education programs that allow the inhabitants to advocate for themselves and 
                  their communities. ISA seeks to establish a world free of poverty by increasing 
                  their standards of living Where citizens are held accountable for their communities 
                  thriving socially and flourishing economically. </p>
                
            </div>
          
        

      </div><hr>
     <div class="row">
        
        <div class="col-xs-18 col-sm-7 col-md-4">
          <div class="thumbnail">
            <img src="{{ asset('/images/mission_image.jpg')}}" alt="">
              <div class="caption">
                <h4><b>Mission</b></h4>
                <p>ISA establishes a world free of poverty by increasing their living standard. Citizens are held accountable for their thriving communities with a flourishing economic institution. We seek for a society 
                  that acquires leadership...</p>
                <p><a href="{{ route ('about') }}" class="btn btn-info btn-md" role="button">Learn More</a> </p>
            </div>
          </div>
        </div>
        <div class="col-xs-18 col-sm-7 col-md-4">
          <div class="thumbnail">
            <img src="{{ asset('/images/projects_image.jpg')}}" alt="">
              <div class="caption">
                <h4><b>Projects</b></h4>
                <p>ISA establishes a world free of poverty by increasing their living standard. Citizens are held accountable for their thriving communities with a flourishing economic institution. We seek for a society 
                  that acquires leadership...</p>
                <p><a href="#" class="btn btn-info btn-md" role="button">Learn More</a> </p>
            </div>
          </div>
        </div>

       <div class="col-xs-18 col-sm-7 col-md-4">
          <div class="thumbnail">
            <img src="{{ asset('/images/joinus_image.jpg')}}" alt="">
              <div class="caption">
                <h4><b>Join ISA</b></h4>
                <p>ISA establishes a world free of poverty by increasing their living standard. Citizens are held accountable for their thriving communities with a flourishing economic institution. We seek for a society 
                  that acquires leadership...</p>
                <p><a href="#" class="btn btn-info btn-md" role="button">Learn More</a> </p>
            </div>
          </div>
        </div>

       

        
      </div>

    </div>
  </div>


     @stop