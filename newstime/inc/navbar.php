<nav class="navbar navbar-expand-lg navbar-light bg-light mt-2">
  <a class="navbar-brand" href="./"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="./">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./">Business</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="./">Technology</a>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Pages
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <ul class="col-4">
            <a class="dropdown-item" href="">All Posts</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="">Recent Posts</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="">Popular Posts</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="">Breaking News</a>
          </ul>
          <ul class="col-4">
            <a class="dropdown-item" href="">All Posts</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="">Recent Posts</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="">Popular Posts</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="">Breaking News</a>
          </ul>
           <ul class=" col-4">
            <a class="dropdown-item" href="">All Posts</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="">Recent Posts</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="">Popular Posts</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="">Breaking News</a>
          </ul>

        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Politics</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Health</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Sports</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Tour</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Breaking News</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>


    </ul>
  </div>
  <div class=" col-md-2 col-sm-12">
    <a href="signup.php" class="btn btn-success btn-sm">Sign up</a>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
      Sign In
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Login here</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="" method="post">
              <div class="form-group">
                <input type="email" name="email" class="form-control form-control-sm" placeholder="Enter Your Email Here">
              </div>

               <div class="form-group">
                <input type="password" name="password" class="form-control form-control-sm" id="exampleInputPassword1" placeholder="Password">
              </div>

              <button type="submit" name="login_btn" class="btn btn-success btn-block">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>