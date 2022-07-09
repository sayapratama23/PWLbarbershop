<html> 
<head> 
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Service and Price</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/bootstrap.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">  
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">  
    <link rel="stylesheet" href="footer.css">    
</head>
    <style>
        body {
          height: 90vh;
          /*background-image: url("admin/galeri/image/full/e.jpg");*/
          background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.4)), url('admin/galeri/image/full/f.jpg');  
          background-position: center top;
          background-size: cover;      
        }
        h4{
            font: 18px/36px 'BebasNeue', 'Arial Narrow', arial, sans-serif;
            font-size: 50px;
            text-align: center;
            text-shadow: 1px 1px 1px;
            margin-top: 20px;
            margin-bottom: 20px;
            margin-right: 15px;
           
             
        }

        .kotak {
        border: solid;
        color: black;
        background-color: white;  
        margin-top: 30px;
        width: 100%;        
        }

        .table {
            font: 18px/36px 'BebasNeue', 'Arial Narrow', arial, sans-serif;
            color: black;
            background-color: white; 
            /* margin-left: 50px;
            padding-left: 50px; */
        }

        /* body {
        margin: 0;
        display: grid;
        } */
header p {
padding: 50px;
text-align: center;
color: #bebebe;
text-transform: uppercase;
font-size: 65px;
font-weight: 700;
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
                <a class="nav-link active" href="service.php">Service</a>
                </li>
                <li class="nav-item mx-3">
                <a class="nav-link" href="produk.php">Produk</a>
                </li>
                <li class="nav-item mx-3">
                <a class="nav-link" href="faq.php">FAQ</a>
                </li>
                </a>
                </li>
            </ul>
            <form class="d-flex pt-2"> 
                <a class="btn btn-outline-warning" href="login.php" role="button">Login</a>
            </form>
            </div>
        </div>
        </nav> 
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<body> 
 
        <div class="container">
			<h4 class="text-white mt-4"><strong>SERVICE  &  PRICE</strong> </h4>
            <hr>
		<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Style</th>
			<th>Harga</th>
            <th>Servis</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>1.</td>
			<td>PREMIUM CUT</td>
			<td>25 K</td>
			<td>
                <li>Free Hot Towel</li>
                <li>Wash</li>
                <li>Hair Tonic</li>
                <li>Pomade & Styling</li>
            </td>
		</tr>
		<tr>
        <td>2.</td>
			<td>GENTLEMAN CUT</td>
			<td>20 K</td>
			<td>
                <li>Haircut Only</li>
            </td>
		</tr>
		<tr>
        <td>3.</td>
			<td>HAIR DESIGN</td>
			<td>10 K</td>
			<td>
                <li>Free Hair Tonic</li>
                <li>Pomade & Styling</li>
            </td>
		</tr>
		<tr>
        <td>4.</td>
			<td>SHAVING</td>
			<td>10 K</td>
			<td>
                <li>Free Hot Towel</li>
                <li>After Shave Product</li>
            </td>
		</tr>
	</tbody>
</table>
</div>
<br>



<table class="table table-bordered">
<table class="table table-bordered">




<table class="table table-borderless">
<table class="table table-borderless">




<table class="table table-striped">
<table class="table table-striped">

<table class="table table-bordered table-striped">
<table class="table table-bordered table-striped">
 
	

	<script src="assets/js/jquery.js"></script> 
	<script src="assets/js/popper.js"></script> 
	<script src="assets/js/bootstrap.js"></script>

    <footer class="section bg-footer">  
     <div class="container">  
       <div class="row">  
         <div class="col-lg-3">  
           <div class="">  
             <h5 class="footer-heading text-uppercase text-white">Information</h5>  
             <ul class="list-unstyled footer-link mt-4">  
               <li><a href="">Pages</a></li>  
               <li><a href="">Our Team</a></li>  
               <li><a href="">Feuchers</a></li>  
               <li><a href="">Pricing</a></li>  
             </ul>  
           </div>  
         </div>  
         <div class="col-lg-3">  
           <div class="">  
             <h5 class="footer-heading text-uppercase text-white">Ressources</h5>  
             <ul class="list-unstyled footer-link mt-4">  
               <li><a href="">Monitoring Grader </a></li>  
               <li><a href="">Video Tutorial</a></li>  
               <li><a href="">Term &amp; Service</a></li>  
               <li><a href="">Zeeko API</a></li>  
             </ul>  
           </div>  
         </div>  
         <div class="col-lg-2">  
           <div class="">  
             <h5 class="footer-heading text-uppercase text-white">Help</h5>  
             <ul class="list-unstyled footer-link mt-4">  
               <li><a href="">Sign Up </a></li>  
               <li><a href="">Login</a></li>  
               <li><a href="">Terms of Services</a></li>  
               <li><a href="">Privacy Policy</a></li>  
             </ul>  
           </div>  
         </div>  
         <div class="col-lg-4">  
           <div class="">  
             <h5 class="footer-heading text-uppercase text-white">Contact Us</h5>  
             <p class="contact-info mt-4">Contact us if need help withanything</p>  
             <p class="contact-info">+01 123-456-7890</p>  
             <div class="mt-5">  
               <ul class="list-inline">  
                 <li class="list-inline-item"><a href="#"><i class="fab facebook footer-social-icon fa-facebook-f"></i></i></a></li>  
                 <li class="list-inline-item"><a href="#"><i class="fab twitter footer-social-icon fa-twitter"></i></i></a></li>  

 

                 <li class="list-inline-item"><a href="#"><i class="fab google footer-social-icon fa-google"></i></i></a></li>  
                 <li class="list-inline-item"><a href="#"><i class="fab apple footer-social-icon fa-apple"></i></i></a></li>  
               </ul>  
             </div>  
           </div>  
         </div>  
       </div>  
     </div>  
     <div class="text-center mt-5">  
       <p class="footer-alt mb-0 f-14">2022 © Mozalucky Barbershop, All Rights Reserved</p>  
     </div>  
   </footer>
</body> 
</html>