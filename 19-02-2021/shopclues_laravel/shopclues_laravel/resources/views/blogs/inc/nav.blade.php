<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="{{ asset('blog/user')}}/images/logo.png" style="width:45%"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link active" href="{{'/'}}"> Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{'/AboutUs'}}">About</a>
          </li>
          
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> Provide Services
        <span class="caret"></span></a>
        <ul class="dropdown-menu" style="width:250px">
          <li><a class="nav-link" href="#" style="color:black"><span class="fa fa-book"></span> Laravel Technical</a></li>
          <li><a  class="nav-link" href="#" style="color:black"><span class="fa fa-book"></span> Codegniter Technical</a></li>

          <li><a  class="nav-link" href="#" style="color:black"><span class="fa fa-book"></span> Wordpress</a></li>
          <li><a  class="nav-link" href="#" style="color:black"><span class="fa fa-book"></span> Python</a></li>

          <li><a  class="nav-link" href="#" style="color:black"><span class="fa fa-book"></span> Angular7 and 9</a></li>
          <li><a  class="nav-link" href="#" style="color:black"><span class="fa fa-book"></span> PHP</a></li>
        </ul>
      </li>


        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"><span class="fa fa-users"></span> MyAccount
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{'/Login_Auth'}}" style="color:black"><span class="fa fa-user"></span> Login</a></li>
          <li><a  class="nav-link" href="{{'/Register'}}" style="color:black"><span class="fa fa-user"></span> Register</a></li>
          
        </ul>
      </li>


          <li class="nav-item">
            <a class="nav-link" href="{{'/Contact'}}">Contact</a>
          </li>


          
      <li class="nav-item">
            <a class="nav-link" href="{{'/Feedback'}}"><span class="fa fa-comments-o"></span>Feedback</a>
         
          </li>

        </ul>
      </div>
    </div>
  </nav>

  