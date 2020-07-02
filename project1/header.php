<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Skill Market</title>
	<link rel='stylesheet' href='styles.css'>
  <link rel='stylesheet' href='styles_2.css'>
  <link rel='stylesheet' href='styles_4.css'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Alata">
<link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Cabin">          
<link rel="https://cdn.rawgit.com/mfd/f3d96ec7f0e8f034cc22ea73b3797b59/raw/856f1dbb8d807aabceb80b6d4f94b464df461b3e/gotham.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/1d2fd3a785.js" crossorigin="anonymous"></script>
<link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Sail">
</head>
<body style='background: #F9F9F9; height:200vh' class='body' id='body'> 
	<style>
		@media screen and (max-width:450px){
			.upwork{width:20vw;margin-right:20px;}
			.hom_wor{font-size:15px}
		}
		@media screen and (max-width:400px){
			.upwork{width:20vw;margin-right:50px;}
		}
    .speech-bubble {
  position: relative;
  background: #00aabb;
  border-radius: .4em;
}

.speech-bubble:after {
  content: '';
  position: absolute;
  top: 0;
  left: 50%;
  width: 0;
  height: 0;
  border: 20px solid transparent;
  border-bottom-color: #00aabb;
  border-top: 0;
  border-left: 0;
  margin-left: -10px;
  margin-top: -20px;
}
	</style>
 <div class="topnav" >

  <span id='menu_btn' class='menu_btn' style='cursor:pointer;font-size:20px; margin-left:10px; margin-top: 13px; width:15px;font-weight: 	bolder;'>&#9776;</span>
  <div id='menu_div' style='color:black; background: white; text-align: center; height:100vh;position:absolute; margin-top:-30px; z-index: 200;background:;'>
  
  <!-- <form action='login.php'>
  		<button class='upwork' type='submit' style='background: white; border:none;margin-top:-1px; margin-left: 35vh;margin-right: 45vh'><img src ='images/xx.png'class='up' style='scale:1.2'></button><br>
  	</form> -->
  	<ul >
  		<div style='width:100%' class='upwork2'>
  			<div style='width:20vw; text-align:center;margin-left:50vw; margin-top:0px;transform:translateX(-50%);'>
  			<img src ='images/xx.png'class='up' style='scale:0.9'>
  		</div></div>
  		<span id='closer' class='closer' style='font-weight:bolder '>X</span><br>
  		<span style='position:relative'>
  		<form method='get' action='search.php' style='margin-top:-20px;'> 
	   		<span class=' ' style='position:relative;justify-content: center; align-items: center;overflow-y:hidden;'>
	  	
	   		<span style='position:absolute;margin-left:10px; overflow-y:hidden'>
	   		<button type='submit' name='search' style='margin-top:5px;height:0px;background:white; border:none; z-index:-5'><i class='fas fa-search text-secondary'></i></button>
	   		<i class='fas fa-caret-down text-secondary' style='cursor:pointer' id='downs2'></i></span>
			<input id='hom_ser2' type='search' name='find_profs' style='padding-left:50px;border:1px solid lightgray;height:40px; width:70vw' value ="Find Professionals	& Agencies" >

			</span>
		</form>
		<div class='boxs2' id='boxs2'>
		<button id='paa2' class='ad' type='submit' style='background: white; border:none'>Professionals & Agencies</button><br>
		<button id = 'jo2' class='ad' type='submit' style='background: white; border:none'>Jobs</button><br>
	   </div>
  		<div class='row menu_li' style='width:60%; margin-left:20%; text-align: 	left'>
  		<div class='col log_sm'>
  			<hr>
  			
  			<form action='login.php'>
  				<button class='ac' type='submit' style='background: white; border:none'>Log in</button><br>
  			</form>
  			<hr>
  			<form action='login.php'>
  				<button class='ac' type='submit' style='background: white; border:none'>Sign up</button><br>
  			</form>
  			<hr>
  			<div class='sol_sm ac'>solutions</div><div style=';'><i class='fas fa-caret-down text-secondary' style='cursor:pointer; float:right;margin-top: -18px' id='downs3'></i><i class='fas fa-caret-up text-secondary' style='cursor:pointer; float:right;margin-top: -18px' id='ups3'></i></div>
  			<hr class='sol_sm'>
  			<div class="soln_hid">
  				<ul><span class='soln_h'>Business Size</span>
  				<li class='solns'>10-100 Employees</li>
  				<li class='solns'>100-1000 Employees</li>
  				<li class='solns'>1000+ Employees</li>  				
  			</ul>
  			<ul><span class='soln_h'>Department</span>
  				<li class='solns'>Marketing</li>
  				<li class='solns'>Operations</li>
  				<li class='solns'>Engneering</li>  				
  			</ul>
  			</div>
  			<form action='login.php'>
  				<button class='ac' type='submit' style='background: white; border:none'>About us</button><br>
  			</form>
  			<hr>
  			<form action='login.php'>
  				<button class='ac' type='submit' style='background: white; border:none'>Contact us</button><br>
  			</form>
  			<hr>
  			<form action='login.php'>
  				<button class='ac' type='submit' style='background: white; border:none'>Careers</button><br>
  			</form>
  			<hr>
  		</div>
  		<div class='col sol_lg' style=''>
  			<hr>
  			<div class='soln'>Solutions</div>
  			<ul><span class='soln_h'>Business Size</span>
  				<li class='solns'>10-100 Employees</li>
  				<li class='solns'>100-1000 Employees</li>
  				<li class='solns'>1000+ Employees</li>  				
  			</ul>
  			<ul><span class='soln_h'>Department</span>
  				<li class='solns'>Marketing</li>
  				<li class='solns'>Operations</li>
  				<li class='solns'>Engneering</li>  				
  			</ul>
  		</div>
  		</div>
  	</ul>
  </div>
  <div class ='header_main'>
  	<span style='margin-right:2px'>
<a class="navbar-brand non_dis" id='upw' href="index.php">
  	<div class='upwork' style='z-index:3000'><img src ='images/xx.png'class='up'style='scale:1.2; margin-top:5px' alt ='Upwork Logo'></div>
  </a>
  
  <form method='get' action='search.php'> 
   <span class='dis ser' style='position:relative;justify-content: center; align-items: center;overflow-y:hidden'>
  	
   	<span style='position:absolute;margin-left:10px; overflow-y:hidden'>
  
   		<button type='submit' name='search' style='margin-top:5px;height:0px;background:white; border:none; z-index:-5'><i class='fas fa-search text-secondary ser_ic1'></i></button>
   		
   		<i class='fas fa-caret-down text-secondary ser_ic2' style='cursor:pointer;' id='downs'></i>
   	</span>
	<input id='hom_ser' type='search' name='find_profs' style='padding-left:50px;border:1px solid lightgray;height:40px; width:315px;' value ="Find Professionals & Agencies" >

</span>
</form>
<div class='boxs' id='boxs' style=''>
	<button id='paa' class='ad' type='submit' style='background: white; border:none'>Professionals & Agencies</button><br>
	<button id = 'jo' class='ad' type='submit' style='background: white; border:none'>Jobs</button><br>
   </div>
  </span>

  <div class="topnav-right dis" id='htr' style=''>
      <div class='navs'>	
      <span class="sol ">
      <a >SOLUTIONS</a>
      </span>
      
      <a class="" href="#">LOG IN</a>
    
      <a class="" href="#">SIGN UP</a>
    
      <a class="paj" id='paj' href="#" style='border-radius:2px;background: #37A000; color:#F1FFF2; height:14px;width:114px; margin-top:10px;justify-content: center; align-items: center;box-shadow: 0px 1px 2px 0px #AAA;text-decoration: none;'><div class ='paj2' style='width:;font-weight:bold;transform: translateY(-10px);'>Post  a Job</div></a>

</div>
<div class="dr" style='justify-content:center; width:200px;z-index:20; background: white; padding-left: 7px; box-sizing: border-box;padding-top: 5px; padding-bottom: 5px; line-height: 1px; box-shadow: 0px 2px 4px 1px gray'>
    <ul>
      <li class='solns' style='font-weight: bold;font-size:13px;'>Business Size</li>
      <li class='solns'>10-100 Employees</li>
      <li class='solns'>100-1000 Employees</li>
      <li class='solns'>1000+ Employees</li>          
    </ul>
    <hr>
    <ul>
      <li class='solns' style='font-weight: bold;font-size:13px;'>Department</li>
      <li class='solns'>Marketing</li>
      <li class='solns'>Operations</li>
      <li class='solns'>Engneering</li>         
    </ul>    
 </div>
  </div>
</div>
</div>
<!-- <div style='height:70px; color:'#F4F4F4>_</div> -->


</body>
</html>

