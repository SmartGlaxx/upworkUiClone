<style>
	.ch_opt_h{
		margin-top:50px;
		font-weight: 700px;
		text-align: center;
		font-size: 39px;
		font-weight: 680;
	}
	.ch_opt_sub_h{
		font-size: 14px;
		text-align: center;
		font-weight: 600;
		color:gray;
	}
	@media screen and (max-width:1199px){
		.ch_opt_h{font-size: 26.5px}
	}
	@media screen and (max-width:767px){
		.ch_opt_h{font-size:20px;}
	}
	.long_boxs{
		width: 97vw;
		padding-top: 14px;
		display: flex;
		align-items: center;
		justify-content: center;
		margin-left:auto;
		margin-right: auto
	}
	.long_boxs2{
		width: 400px;
		padding-top: 14px;
		display: block;
		margin-left: auto;
		margin-right: auto;
		align-items: center;
		justify-content: center;
		background: white;
		margin-top: 30px
	}
	.long_box{
		width:260px;
		height:522px;
		background: white;
		padding:5px;
		margin:15px;
		position: relative;	
		box-shadow: 0px 4px 5px 1px #AAA;
	}
	.astr{
		text-align: left;
		font-size: 14px;
		margin-bottom: 2px;
	}
	.astr_cont{
		width:1140px;
		margin-top: 20px;
		margin-left: auto;
		margin-right: auto;
	}
	.long_box_head{
		text-align: center;
		font-weight: 700;
		margin: 30px;
		margin-top: 20px;
		font-size: 18px;
	}
	.long_box_head_btn{
		border-radius:2px;
		background: #37A000; 
		color:#F1FFF2; 
		height:14px;
		width:114px; 
		margin-top:10px;
		justify-content: center; 
		box-shadow: 0px 1px 2px 0px #AAA;
		align-items: center;
		padding: 10px 30px;
		transition:0.5s;
	}
	.long_box_head_btn2{
		color:#F1FFF2; 
		font-weight: 600;	
	}
	.long_box_head_btn:hover{
		box-shadow: 0px 3px 4px 0px #AAA;
		color:#F1FFF2; 
		text-decoration: none;
	}
	.long_box_head_btn2:hover{
		color:#F1FFF2; 
		text-decoration: none;
		background: #008329;
	}
	.long_box_head2{
		display: none;
		height:14px;
		border-radius:2px;
		background: #37A000; 
		color:#F1FFF2; 
		height:40px;
		width:80vw; 
		margin-top:10px;
		margin-right: auto;	
		margin-left: auto;
		box-shadow: 0px 1px 2px 0px #AAA;
		text-align: center;
		transition:0.5s;
		padding-top: 6px;
	}
	.long_box_head2:hover{
		color:#F1FFF2; 
		text-decoration: none;
		background: #008329;
	}
	.gr{
		color:#37A000
	}
	.fs{
		background: white;
		color:green;
		border: none;
		font-size: 15px;
	}
	.fs2{
		background: #F9F9F9;
		color:green;
		border: none;
		font-size: 15px;
	}
	.fa-li{
		font-size: 	12px;
		line-height: 30px
	}
	.fa-ul{
		font-size: 13px;
		padding-right: 15px;		
	}
	.fa-ul li{
		font-size: 14px;
		font-weight: 500;
		margin-top: 10px;
		margin-bottom: 10px
	}
	.long_box_subhead{
		font-weight: 600;
		font-size:16px;
		text-align:center;
	}
	.addition{
		color:gray;
		font-size:14px;
		text-align: center;
		font-weight: 600;
		margin-bottom: 15px
	}
	.long_box_a{
		color:#37A000;
		margin-left:35px;
		font-weight: 600;
		font-size: 14px;
		bottom: 30px;
		position: absolute;
	}
	.long_box_a:hover{
		color:#478629;
	}
	.hid_btn{
		display: none;
	}
	.ch_desc{
		text-align: center;
		margin: 10%;
	}
	.hiden_items{
		display: none;
		background: #F9F9F9;
		width: 	auto;
	}
	.hiden_items li{
		/*margin:20px;*/
	}
	.see_btn{
		text-align: center;
		cursor:pointer;
		border-top:1px solid lightgray;
		height: 60px;
		padding-top: 15px;
	}
	.hid_btn{
		text-align: center;
		cursor:pointer;
		border-top:1px solid lightgray;
		height: 60px;
		padding-top: 15px;
	}
	.hiden{
		background:  #F9F9F9;	
		height:auto;
		padding-top:20px;
		padding-bottom:20px;
		display: 	none;
		margin-left: 1px
	}
	.long_boxs2{
		display: none;
		box-shadow: 0px 4px 5px 1px #AAA;
	}
	.ch_boxx2{
		
	}
	@media screen and (max-width:1199px){
		.long_box{width:290px;}
		.long_boxs{display: grid; grid-template-columns:auto auto}
		.astr_cont{width:610px;}
	}
	@media screen and (max-width:767px){
		.long_boxs{display: none}
		.long_boxs2{display: block;}
		.long_box_subhead{margin-bottom: 20px}
		.fs{background: white}
		.ch_opt_sub_h{width:400px;margin-bottom: 30px;}
		.long_box_head2{display: block; width:90%;}
		.astr_cont{width:400px;}
	}
	@media screen and (max-width:430px){
		/*.ch_opt_h{margin-top: 100px; }*/
	}
	@media screen and (max-width:430px){
		.long_boxs2{width:90vw;}
		.long_box_head_btn2{width:40px;}
		.astr_cont{width:90vw;}
		.ch_opt_sub_h{width:90vw;}
	}
/*	@media screen and (max-width:400px){
		.ch_opt_h{margin-top: 170px;}
	}
	@media screen and (max-width:255px){
		.ch_opt_h{margin-top: 200px;}	
	}
	@media screen and (max-width:219px){
		.ch_opt_h{margin-top: 250px;
	}*/
</style>
<div class='b8' style=''>
	<div class='ch_opt_h'>Choose the offering that works best for you
		<div class='ch_opt_sub_h'>All options include access to Upwork’s talent pool of quality talent and agencies.</div>
	</div>
	
	<div class='long_boxs'>
		
		<div class='long_box'>
			<div class='long_box_head'>Basic</div>
			<div class='long_box_head'><a href='#' class='long_box_head_btn long_box_subhead'>Select Basic</a></div>
			<div class='long_box_head long_box_subhead'>Free*</div>
			<hr>
			<ul class="fa-ul">
  <li style='margin-bottom:20px'><span class="fa-li"><i class="fas fa-check fs"></i></span>Verified work history and reviews</li>
  <li style='margin-bottom:20px'><span class="fa-li"><i class="fas fa-check fs"></i></span>Unlimited proposals </li>
  <li style='margin-bottom:20px'><span class="fa-li"><i class="fas fa-check fs"></i></span>Built-in collaboration tools and easy payments </li>
			</ul>
		</div>
		<div class='long_box'>
			<div class='long_box_head '>Plus</div>
			<div class='long_box_head'><a href='#' class='long_box_head_btn long_box_subhead'>Select Plus</a></div>
			<div class='long_box_subhead long_box_head'>$49.99<span style='color:gray; font-size: 14px'>/month*</span></div>
			<hr>
			<div class='addition'>Everything in <span style = 'color:black; font-weight: 700'>Basic</span>, and:</div>
			<ul class="fa-ul">
  <li style='margin-bottom:20px'><span class="fa-li"><i class="fas fa-check fs"></i></span>Dedicated account managers to help you find and hire quality talent fast </li>
  <li style='margin-bottom:20px'><span class="fa-li"><i class="fas fa-check fs"></i></span>Project tracking and collaboration tools for teams</li>
  <li style='margin-bottom:20px'><span class="fa-li"><i class="fas fa-check fs"></i></span>Tailored search results featuring Top Rated and Rising Talent</li>
			</ul>
			<a href='#' class='long_box_a'>Learn more</a>
		</div>
		<div class='long_box'>
		<div class='long_box_head '>Business</div>
		<div class='long_box_head'><a href='#' class='long_box_head_btn long_box_subhead'>Contact Us</a></div>
			<div class='long_box_subhead long_box_head'>$849<span style='color:gray; font-size: 14px'>/month*</span></div>
			<hr>
			<div class='addition'>Everything in <span style = 'color:black; font-weight: 700'>Plus</span>, and:</div>
			<ul class="fa-ul">
  <li style='margin-bottom:20px'><span class="fa-li"><i class="fas fa-check fs"></i></span >Consolidated billing and invoicing with net 30 pay </li>
  <li style='margin-bottom:20px'><span class="fa-li"><i class="fas fa-check fs"></i></span>Dedicated team of advisors to get you hiring faster and more successfully </li>
  <li style='margin-bottom:20px'><span class="fa-li"><i class="fas fa-check fs"></i></span>Detailed reporting with company insights and trends</li>
			</ul>
			<a href='#' class='long_box_a'>Learn more</a>
		</div>
		<div class='long_box'>
			<div class='long_box_head '>Enterprise</div>
			<div class='long_box_head'><a href='#' class='long_box_head_btn long_box_subhead'>Contact Us</a></div>
			<div class='long_box_subhead long_box_head' style='width: 90%;margin-left: 5%;margin-right: 5%'><span style='color:gray; font-size: 14px;'>Price varies - contact us for a demo</span></div>
			<hr>
			<div class='addition'>Everything in <span style = 'color:black; font-weight: 700'>Business</span>, and:</div>
			<ul class="fa-ul">
  <li style='margin-bottom:20px'><span class="fa-li"><i class="fas fa-check fs"></i></span>Custom configurable contracting and onboarding process</li>
  <li style='margin-bottom:20px'><span class="fa-li"><i class="fas fa-check fs"></i></span>Worker classification compliance services</li>
  <li style='margin-bottom:20px'><span class="fa-li"><i class="fas fa-check fs"></i></span>Project-based or managed solutions, and dedicated account executive</li>
			</ul>
			<a href='#' class='long_box_a'>Learn more</a>
		</div>
	</div>
	<div class='long_boxs2'>
		<div class='ch_boxx'>
			<div class='long_box_head'>Basic</div>
			<hr>
			<div class='ch_desc'>Free to post and sign up. Find and hire talent quickly, collaborate easily, and make hassle-free payments.</div>
			<div class='long_box_head2'><a href='#' class='long_box_head_btn2'>Select Basic</a></div>
			<div class='long_box_subhead'>Free*</div>
			<div class='hiden' id='hiden1'>
				<ul class='hiden_items fa-ul' id='hiden_items1'>
					<li style='margin-bottom:20px'><span class="fa-li"><i class="fas fa-check fs2"></i></span>Verified work history and reviews</li>
					<li style='margin-bottom:20px'><span class="fa-li"><i class="fas fa-check fs2"></i></span>Unlimited proposals</li>
					<li style='margin-bottom:20px'><span class="fa-li" ><i class="fas fa-check fs2"></i></span>Built-in collaboration tools and easy payments </li>
			</div>
			<div class='hid_btn' id='hid_btn1'>
			<i class='fas fa-caret-up text-secondary' style='cursor:pointer;'></i>
			Hide features</div>
			<div class='see_btn' id='see_btn1'>
			<i class='fas fa-caret-down text-secondary' style='cursor:pointer;'></i>
			See features</div>
		</div>
		</div>
		<div class='long_boxs2'> 
		<div class='ch_boxx2'>
			<div class='long_box_head'>Plus</div>
			<hr>
			<div class='ch_desc'>Work with on-demand account managers to attract the specific talent that’s right for your business.</div>
			<div class='long_box_head2'><a href='#' class='long_box_head_btn2'>Select Basic</a></div>
			<div class='long_box_subhead'>$49.99<span style='color:gray; font-size: 14px'>/month*</span></div>
			<div class='hiden' id='hiden2'>
				<div class='addition'>Everything in <span style = 'color:black; font-weight: 700'>Basic</span>, and:</div>
				<ul class='hiden_items fa-ul' id='hiden_items2'>
					<li style='margin-bottom:20px'><span class="fa-li"><i class="fas fa-check fs2"></i></span>Dedicated account managers to help you find and hire quality talent fast </li>
					<li style='margin-bottom:20px'><span class="fa-li"><i class="fas fa-check fs2"></i></span>Project tracking and collaboration tools for teams </li>
					<li style='margin-bottom:20px'><span class="fa-li" ><i class="fas fa-check fs2"></i></span>Tailored search results featuring Top Rated and Rising Talentts </li>
			</div>
			<div class='hid_btn' id='hid_btn2'>
			<i class='fas fa-caret-up text-secondary' style='cursor:pointer;'></i>
			Hide features</div>
			<div class='see_btn' id='see_btn2'>
			<i class='fas fa-caret-down text-secondary' style='cursor:pointer;'></i>
			See features</div>
		</div>
		</div>
		<div class='long_boxs2'> 
		<div class='ch_boxx'>
			<div class='long_box_head'>Business</div>
			<hr>
			<div class='ch_desc'>Access a wide range of capabilities and services businesses need, including white glove talent sourcing, and more.s.</div>
			<div class='long_box_head2'><a href='#' class='long_box_head_btn2'>Select Basic</a></div>
			<div class='long_box_subhead long_box_head'>$849<span style='color:gray; font-size: 14px'>/month*</span></div>
			<div class='hiden' id='hiden3'>
				<div class='addition'>Everything in <span style = 'color:black; font-weight: 700'>Plus</span>, and:</div>
				<ul class='hiden_items fa-ul' id='hiden_items3'>
					<li style='margin-bottom:20px'><span class="fa-li"><i class="fas fa-check fs2"></i></span>Consolidated billing and invoicing with net 30 pay</li>
					<li style='margin-bottom:20px'><span class="fa-li"><i class="fas fa-check fs2"></i></span>Detailed reporting with company insights and trends</li>
					<li style='margin-bottom:20px'><span class="fa-li" ><i class="fas fa-check fs2"></i></span>Built-in collaboration tools and easy payments </li>
			</div>
			<div class='hid_btn' id='hid_btn3'>
			<i class='fas fa-caret-up text-secondary' style='cursor:pointer;'></i>
			Hide features</div>
			<div class='see_btn' id='see_btn3'>
			<i class='fas fa-caret-down text-secondary' style='cursor:pointer;'></i>
			See features</div>
		</div>
		</div>
		<div class='long_boxs2'>  
		<div class='ch_boxx'>
			<div class='long_box_head'>Enterprise</div>
			<hr>
			<div class='ch_desc'>Configure the solution to your organization’s needs and reduce risk through compliance services.</div>
			<div class='long_box_head2'><a href='#' class='long_box_head_btn2'>Select Basic</a></div>
			<div class='long_box_subhead long_box_head' style='width: 90%;margin-left: 5%;margin-right: 5%'><span style='color:gray; font-size: 14px;'>Price varies - contact us for a demo</span></div>
			<div class='hiden' id='hiden4'>
				<div class='addition'>Everything in <span style = 'color:black; font-weight: 700'>Business</span>, and:</div>
				<ul class='hiden_items fa-ul' id='hiden_items4'>
					<li style='margin-bottom:20px'><span class="fa-li"><i class="fas fa-check fs2"></i></span>Custom configurable contracting and onboarding process </li>
					<li style='margin-bottom:20px'><span class="fa-li"><i class="fas fa-check fs2"></i></span>Worker classification compliance services </li>
					<li style='margin-bottom:20px'><span class="fa-li" ><i class="fas fa-check fs2"></i></span>Project-based or managed solutions, and dedicated account executive</li>
			</div>
			<div class='hid_btn' id='hid_btn4'>
			<i class='fas fa-caret-up text-secondary' style='cursor:pointer;'></i>
			Hide features</div>
			<div class='see_btn' id='see_btn4'>
			<i class='fas fa-caret-down text-secondary' style='cursor:pointer;'></i>
			See features</div>
		</div>
		</div>
	<div class='astr_cont'>
		<div class='astr'>*3% payment processing and administration fee on all payments to freelancers and agencies.</div>

		<div class='astr'>**10% service fee on all payments. Includes payment processing and administration fees.</div>
	</div>
	</div>
<!-- </div> -->
