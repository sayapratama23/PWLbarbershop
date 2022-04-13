<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <title>Our Staff</title>
  </head>
    <style>
		body{
      height: 90vh;
			background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.3)), url('admin/galeri/image/full/g.jpg');
      background-position: center top;
      background-size: cover;
		}
 
		.our-team{
			padding: 30px 0 40px;
			background: #fff;
			text-align: center;
			overflow: hidden;
			position: relative;
      border: solid;
      color: white;
		}
 
		.our-team .pic{
			display: inline-block;
			width: 130px;
			height: 130px;
			margin-bottom: 50px;
			/*background:#ff00ac;*/
			position: relative;
			z-index: 1;
		}
 
		.our-team .pic:before
		{
			content: "";
			width: 100%;
			background: #1B1A17;
			position: absolute;
			bottom: 135%;
			right: 0;
			left: 0; 
			transform: scale(3);
			transition: all 0.3s linear 0s;
		}
 
		.our-team:hover .pic:before
		{
			height: 100%;
		}
 
		.our-team .pic:after
		{
			content: "";
			width: 100%;
			height: 100%;
			border-radius: 50%;
			background: #1B1A17;
			position: absolute;
			top: 0;
			left: 0; 
			z-index: -1;
		}
 
		.our-team .pic img{
			width: 100%;
			height: 100%;
			border-radius: 50%;
			transform: scale(1);
			transition: all 0.9s ease 0s;
      left: 0;
      
		}
 
		.our-team:hover .pic img
		{
			box-shadow: 0 0 0 14px #1B1A17;
			transform: scale(0.7);
		}
 
		.our-team .team-content
		{
			margin-bottom: 30px;
		}
		
		.our-team .title{
			font-size: 22px;
			font-weight: 700;
			color:#4e5052;
			letter-spacing: 1px;
			text-transform: capitalize;
			margin-bottom: 5px;
		}
 
		.our-team .post{
			display: block;
			font-size: 15px;
			color:#4e5052;
			text-transform: capitalize;
		}
 
		.our-team .social{
			width: 100%;
			padding:0;
			margin:0;
			background: #1B1A17;
			position: absolute;
			bottom: -100px;
			left:0;
			transition: all 0.5 ease 0s;
		}
 
		.our-team:hover .social{
			bottom:0;
		}
 
		.our-team .social li{
			display: inline-block;
		}
 
		.our-team .social li a{
			display: block;
			padding:10px;
			font-size: 17px;
			color:#fff;
			transition: all 0.3s ease 0s;
		}
 
		.our-team .social li a:hover{
			color:#f20004;
			background: #1B1A17;
			text-decoration: none;
			
		}

		nav ul {
			right: 0;
			
		}

    .clear {
      clear: both;
    }
    </style>


  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.php">
        <img src="image/logo.png" width="48">  MOZALUCKY BARBERSHOP
    </a>
        
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item mx-3">
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link" href="service.php">Service</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link active" href="staff.php">Staff</a>
        </li>
          </a>
        </li>
      </ul>
      <form class="d-flex">     
        <a class="btn btn-outline-warning" href="login.php" role="button">Login</a>
      </form>
    </div>
  </div>
</nav> 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
 

          <div class="container mt-5">
              <div class="row">
                <div class="col-md-3 col-sm-6">
                  <div class="our-team">
                    <div class="pic">
                      <img src="admin/galeri/image/thumb/2a.jpg" alt="">
                    </div>
                    <div class="team-content">
                      <h3 class="title">Chen</h3>
                      <span class="post">Staff</span>
                    </div>
                    <ul class="social">         
                      <li><a href="" class="fab fa-facebook-f"></a></li>
                      <li><a href="" class="fab fa-instagram"></a></li>
                      <li><a href="" class="fab fa-linkedin-in"></a></li>
                      <li><a href="" class="fab fa-twitter"></a></li>      
                    </ul>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6">
                  <div class="our-team">
                    <div class="pic">
                      <img src="admin/galeri/image/thumb/2b.jpg" alt="">
                    </div>
                    <div class="team-content">
                      <h3 class="title">Pian</h3>
                      <span class="post">Staff</span>
                    </div>
                    <ul class="social">
                      <li><a href="" class="fab fa-facebook-f"></a></li>
                      <li><a href="" class="fab fa-instagram"></a></li>
                      <li><a href="" class="fab fa-linkedin-in"></a></li>
                      <li><a href="" class="fab fa-twitter"></a></li>   
                      <div class="clear"></div>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            
        
</body>
</html>