<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ route ('home') }}">ISA</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
      <ul class="nav navbar-nav">
        <li ><a href="{{ route ('home') }}">Home </a></li>
        <li><a href="{{ route ('about') }}">About</a></li>
        <li><a href="{{ route ('people') }}">Our People</a></li>
       
      </ul>
     <ul class="nav navbar-nav ">
      
        <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Program<b class="caret"></b></a>
                <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
              <li class="dropdown-submenu">
                <a tabindex="-1" href="{{ route ('lesotho') }}">Project Lesotho</a>
                
              </li>
               <li class="dropdown-submenu">
                <a tabindex="-1" href="{{ route ('aikido') }}">Aikido Ethiopia</a>
                
              </li>
              <li class="dropdown">
                <a tabindex="-1" href="{{ route ('enterprise') }} ">Social Enterprise</a>
                </li>
            </ul>

            </li>

      </ul>
  

      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ route ('contactus') }}"><button class="btn btn-success btn-sm">Contact</button></a></li>
        <li><a href="{{ route ('donate') }}"><button class="btn btn-danger btn-sm">Donate</button></a></li>
        
                </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<script type="text/javascript">
$('.dropdown-toggle').dropdown()
</script>