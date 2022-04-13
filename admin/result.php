<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academic</title>

    <style>
      .container .jumbotron, .container-fluid .jumbotron {
    margin-top: 35px;
    transform: translateX(-30px);
    width: 1349px;
    height: 280px;
    border-radius: 5px;
    background-color: #e9eceffa;
    color: inherit;
}

.box, .box:active, .box:visited{
    padding: 20px;
    text-align: center;
    background-color: #fff;
    font-size: 25px;
    width: 220px;
    height: 110px;
    margin: 25px;
    border: 1px #fff;
    border-radius: 10px;
    box-shadow: 8px 10px 25px -6px rgba(0,0,0,0.62); 
    -webkit-box-shadow: 8px 10px 25px -6px rgba(0,0,0,0.62);
    transition: 0.2s;
}

.box a:hover{
    color: #fff;
    transition: 0.2s;
 }

.box:hover{
    background-color: #2887e6;
    transition: 0.2s;
}

.box:hover a{
    display: block;
    height: 100px;
    color: #fff;
    transition: 0.2s;
}

    </style>  
</head>
<body>



<h1 style="margin-top:35px; margin-left:400px;" class="text-primary">
<i class="fas fa-user-graduate"></i> Academic Performance 
</h1>

<div class="jumbotron jumbotron-fluid">

  <div style="transform:translateX(-45px);" class="container">

	 <div style="display: flex; flex-direction: row; justify-content: space-evenly;">

      <div class="box">
	    <a href="class-test.php">
      <i class="fas fa-pencil-alt"></i> <br>
		  <h5 style="font-size: 18px;">Class Test</h5>	
	    </a>
      </div>

      <div class="box">
	    <a href="semester-final.php">
      <i class="fas fa-pencil-ruler"></i> <br>
		  <h5 style="font-size: 18px;">Semester Final</h5>	
	    </a>
      </div>

	  <div class="box">
	    <a href="attendance.php">
      <i class="far fa-address-card"></i> <br>
		  <h5 style="font-size: 18px;">Attendance</h5>	
	    </a>
      </div>
  
     
  </div>

	 

 </div>

</div>
    
</body>
</html>

