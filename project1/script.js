
	document.getElementById('menu_btn').addEventListener('click', opens);
	document.getElementById('closer').addEventListener('click', closes);
	document.querySelector('.sol').addEventListener('mouseover', sho);
	document.querySelector('.dr').addEventListener('mouseover', sho);
	document.querySelector('.dr').addEventListener('mouseleave', sho2);
	document.querySelector('.sol').addEventListener('mouseleave', sho2);
	document.querySelector('#downs').addEventListener('click', sho3);
	document.querySelector('#downs2').addEventListener('click', sho4);
	document.querySelector('#downs3').addEventListener('click', sho5);
	document.querySelector('#ups3').addEventListener('click', sho5);

	document.querySelector('#see_btn1').addEventListener('click', sho6);
	document.querySelector('#hid_btn1').addEventListener('click', sho7);

	document.querySelector('#see_btn2').addEventListener('click', sho8);
	document.querySelector('#hid_btn2').addEventListener('click', sho9);

	document.querySelector('#see_btn3').addEventListener('click', sho10);
	document.querySelector('#hid_btn3').addEventListener('click', sho11);

	document.querySelector('#see_btn4').addEventListener('click', sho12);
	document.querySelector('#hid_btn4').addEventListener('click', sho13);


	document.querySelector('#paa').addEventListener('click', sett1);
	document.querySelector('#jo').addEventListener('click', sett2);
	document.querySelector('#paa2').addEventListener('click', sett3);
	document.querySelector('#jo2').addEventListener('click', sett4);
	document.querySelector('#htr').addEventListener('click', sety);
	document.querySelector('#upw').addEventListener('click', sety);
	document.querySelector('.upwork2').addEventListener('click', sety);
	document.querySelector('.menu_li').addEventListener('click', sety);
	document.querySelector('#sh').addEventListener('click', sety);
	document.querySelector('.paj').addEventListener('mouseover', hov);
	document.querySelector('.paj').addEventListener('mouseleave', hov2);
	document.querySelector('.gs').addEventListener('mouseover', hov3);
	document.querySelector('.gs').addEventListener('mouseleave', hov4);
	document.querySelector('.nav_dis_c').addEventListener('mouseleave', scroll_mov);
	// document.querySelector('.b1').addEventListener('click',sho3b);
	document.querySelector('.b2').addEventListener('click',sho3b);
	document.querySelector('.b3').addEventListener('click',sho3b);
	document.querySelector('.b4').addEventListener('click',sho3b);
	document.querySelector('.b5').addEventListener('click',sho3b);
	document.querySelector('.b6').addEventListener('click',sho3b);
	document.querySelector('.b7').addEventListener('click',sho3b);

	function opens(){
		document.getElementById('menu_div').style.width='100vw';
	}
	function closes(){
		document.getElementById('menu_div').style.width='0';
	}
	function sho(){
		document.querySelector('.dr').style.display='block';	
	}
	function sho2(){
		document.querySelector('.dr').style.display='none';		
	}
	let c = 0;
	function sho3(){
		if(c==0){
		document.querySelector('#boxs').style.display='block';
		c = 1}
		else if(c==1){
		document.querySelector('#boxs').style.display='none';
		c = 0}
	}
	function sho3b(){
		if(c==1){
		document.querySelector('#boxs').style.display='none';
		c = 0}
	}
	if(c==1){
		 $("body:not(.boxs)").click(function(){
		  $("body:not(.boxs)").css("display", "none");
		});	
	}
	let d = 0;
	function sho4(){
		if(d==0){
		document.querySelector('#boxs2').style.display='block';
		d = 1}
		else if(d==1){
		document.querySelector('#boxs2').style.display='none';
		d = 0}
	}
	if(d==1){
		 $("#menu_div").click(function(){
		  $('#boxs2').css("background", "red");
		});	
	}
	let f = 0;
	function sho5(){
		if(f==0){
		document.querySelector('.soln_hid').style.display='block';
		document.querySelector('#ups3').style.display='block';
		document.querySelector('#downs3').style.display='none';
		console.log(f);
		f = 1}
		else if(f==1){
		document.querySelector('.soln_hid').style.display='none';
		document.querySelector('#ups3').style.display='none';
		document.querySelector('#downs3').style.display='block';
		console.log(f);
		f = 0}
		console.log('sdf');
	}
	function sho6(){
		document.querySelector('#hiden_items1').style.display='block';	
		document.querySelector('#see_btn1').style.display='none';
		document.querySelector('#hid_btn1').style.display='block';		
		document.querySelector('#hiden1').style.display='block';
	}
	function sho7(){
		document.querySelector('#hiden_items1').style.display='none';	
		document.querySelector('#see_btn1').style.display='block';
		document.querySelector('#hid_btn1').style.display='none';
		document.querySelector('#hiden1').style.display='none';	
	}

	function sho8(){
		document.querySelector('#hiden_items2').style.display='block';	
		document.querySelector('#see_btn2').style.display='none';
		document.querySelector('#hid_btn2').style.display='block';		
		document.querySelector('#hiden2').style.display='block';
	}
	function sho9(){
		document.querySelector('#hiden_items2').style.display='none';	
		document.querySelector('#see_btn2').style.display='block';
		document.querySelector('#hid_btn2').style.display='none';
		document.querySelector('#hiden2').style.display='none';	
	}

	function sho10(){
		document.querySelector('#hiden_items3').style.display='block';	
		document.querySelector('#see_btn3').style.display='none';
		document.querySelector('#hid_btn3').style.display='block';		
		document.querySelector('#hiden3').style.display='block';
	}
	function sho11(){
		document.querySelector('#hiden_items3').style.display='none';	
		document.querySelector('#see_btn3').style.display='block';
		document.querySelector('#hid_btn3').style.display='none';
		document.querySelector('#hiden3').style.display='none';	
	}

	function sho12(){
		document.querySelector('#hiden_items4').style.display='block';	
		document.querySelector('#see_btn4').style.display='none';
		document.querySelector('#hid_btn4').style.display='block';		
		document.querySelector('#hiden4').style.display='block';
	}
	function sho13(){
		document.querySelector('#hiden_items4').style.display='none';	
		document.querySelector('#see_btn4').style.display='block';
		document.querySelector('#hid_btn4').style.display='none';
		document.querySelector('#hiden4').style.display='none';	
	}

	function sett1(){
		document.getElementById('hom_ser').value='Find Professionals & Agencies';
		document.getElementById('boxs').style.display='none';
	}
	function sett2(){
		document.getElementById('hom_ser').value='Find Jobs';
		document.getElementById('boxs').style.display='none';
	}
	function sett3(){
		document.getElementById('hom_ser2').value='Find Professionals & Agencies';
		document.getElementById('boxs2').style.display='none';
	}
	function sett4(){
		document.getElementById('hom_ser2').value='Find Jobs';
		document.getElementById('boxs2').style.display='none';
	}
	function sety(){
		document.getElementById('boxs').style.display='none';
		document.getElementById('boxs2').style.display='none';
	}
	function hov(){
		document.getElementById('paj').style.boxShadow	='0px 2px 3px 1px #AAA';
		document.getElementById('paj').style.background='#008329';
	}
	function hov2(){
		document.getElementById('paj').style.boxShadow	='0px 1px 2px 0px #AAA';
		document.getElementById('paj').style.background='#37A000';
	}
	function hov3(){
		document.getElementById('gs').style.background='#008329';
	}
	function hov4(){
		document.getElementById('gs').style.background='#37A000';
	}
	function scroll_mov(){
		document.getElementById('nav_dis_c').style.transition='5S';
	}
	
