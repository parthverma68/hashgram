# hashgram
<html>
 
 
<head>
<script type="text/javascript" src="jquery-2.2.3.js"></script>
 
<script> 
$(document).ready(function(){

	$('#btn').on('click',function name(){
	var reg1=$('#rtb');
	reg1.toggle(500,function(){
 	reg1.css({"top":"140","left":"180","transition":"top 1s ease-in-out"});
	var signup=$('#stb');
	signup.hide();

 	});});

$('#btn2').on('click',function name(){
 	var reg2=$('#rtb');
 	var signup=$('#stb');
    signup.toggle(100,function(){
 	reg2.css({"top":"-350","transition":"top 1s ease-in-out"});

 });
 });
});
</script>
	<style>

	table{
color:white;
border:none;
border-radius: 10px;
background:rgb(177,177,187);
opacity:0.8;
}
input[type=text]{
height:40px;
width:180px;
border:none;
color:yellow;
border-radius: 10px;
background: rgb(106,106,255);
}
input[type=password]{
height:40px;
width:180px;
border:none;
color:yellow;
border-radius: 10px;
background: rgb(106,106,255);
}
	input[type=number]{
		color:yellow;
height:40px;
width:180px;
border:none;
border-radius: 10px;
background: rgb(106,106,255);
}

input[type=textarea]{
height:40px;
width:180px;
color:yellow;
border:none;
border-radius: 10px;
background: rgb(106,106,255);
}
img[id=hash]
    {  
    position:relative;	
    height:140px;
    width:200px;
    top:2px;
    opacity:0.9;
    }

	#stb
	{
		position: fixed;
		top :200px;
        left: 300px;
	}
	
	
	 #rtb
    {
		position:fixed;
		top:-400px;
		opacity:0.9;
		left:140px;
 		color:yellow;
	}
     img[id="mainimg"]
	{
		z-index: -100;
		position:fixed;
		width:100%;
		height:100%;
		top:0px;
		left:0px;
	}

	#sp1
	{

		opacity:1;

	}
	#stb
	{

		height:200px;
		width: 400px; 
	}
	.btn
    {
    	position: fixed;
    	bottom: 5px;
    	left:80px;
    	height:60px;
    	width:60px;
    	opacity:1;
    	border:none;
    	box-shadow:  6px 6px  10px  rgb(147,147,147);
    	border-radius:8px;

    }
    .btn1
    {
    	position: fixed;
    	bottom: 10px;
    	left:10px;
    	height:55px;
    	width:55px;
    	border-radius:15px;
    	box-shadow:  6px 6px  10px  rgb(147,147,147);
    	opacity:1;
    }
    input[type=image]
    {
    	border:none;


    }
    #at{

    font-size: 30px;
    font-family:arial;	
    color:red;
    }
    #sbtn
    {
    	cursor:hand;
    	height:30px;
    	width:140px;
    	border-radius: 20px;
    	color:red;
    	background:yellow;
    }
    #regbtn
    {
 
 	border-radius: 20px;
 	height: 30px;
 	width:100px;
 	background:yellow;

    }
	</style>
</head>
 
<body>
<img src="image/signup.jpg" id="mainimg"/>
<center><img src="image/hash.png" style="z-index:1" id="hash"></center>
	<center>
	
		
			<form>
			<table border="0" cellspacing="0" id="stb" >
				<th colspan="2"><span style="color:blue;font-weight:bold">#GRAM</span> YOURSELF</th>
			</tr>
			<tr>
				<td id="at" style="cursor:default"><center>@</center>
				</td>
				<td><center><input type="text" id="ui"/><center>
				</td>
			</tr>
			<tr>
				<td id="at" style="cursor:default"><center>o--j</center>
				</td>
				<td><center><input type="password" id="pass"/></center>
				</td>
			</tr>
			<tr>
				<td colspan="2"><center><input type="button" id="sbtn" value="LOGIN!"/><center></td>
			</tr>
			<table>
			</form>
		</table>
 

</center>

	<form action="<?php $_PHP_SELF ?>" method="POST">
<center>
<table border="0" cellspacing="0" id="rtb">
	<tr>
		<center><th id='th' colspan="4"><span id="sp1">register yourself</span></center>
		</tH>
	</tr>
	<tr>
		 <td><center> FIRST NAME:</center>
		</td>
		<td>
		<center>	<input type="text" name="fn"/></center>
		</td>
		<td><center>LAST NAME:</td></center>
		<td><center> <input type="text" name="ln"/>
		</center> </td>
	</tr>
	<tr>
		<td><center>DATE OF BIRTH:
		</center></td>
		<td><center>
			<input type="date" name="dob"/>
		</center></td>
		<td><center>AGE:</center></td>
		<td><center><input type="text" name="age"/>
		</center></td>
	</tr>
	<tr>
		<td><center>ADDRESS
	</center>	</td>
		<td><center>
			<textarea rows="5" cols="20" name="add"></textarea>
		</center></td>
		<td><center>PINCODE</center></td>
		<td><center><input type="text" name="pc"/>
		</center></td>
	</tr>
	<tr>
		<center><td>CONTACT NUMBER</center>
		</td>
		<td colspan="1"><center>
			<input type="number" name="cn"/>
		</center></td>
	</tr>
    <tr id="tb2">
        	<td><center>USER ID</center>
        	</td>
        	<td><center><input type="text" name="ui" class="pi"/></center>
        	</td>
        	<td><center>PASSSWORD</center>
       		 </td>
       		 <td><center><input type="password" name="pass1" class="pi"/></center>
        	</td>		
        	
    </tr>
    <tr id="tb2">
    	<td colspan="1"><center>RE-ENTER PASSWORD</center>
        	</td>
       	 	<td><center><input type="password" name="pass2"/ class="pi">
        	</center></td>
        	<td colspan="2">
        	<center>	<input type="range" name="rng"/></center>
        	<center>	
        		<lable for="pricemax" >
 
    </tr>
    <tr><td colspan="4"><center><input type="submit" id="regbtn"value="REGISTER"/></center></td>
    </tr>
   </table>
  </center>
</form>


<input type="image"  src="image/reg2.jpg" id="btn" class="btn"/>
<input type="image"  src="image/login.jpg" id="btn2"  class="btn1"/>      

</body>
 
</html>

