<style>
*{margin:0; padding:0;box-sizing: border-box;font-family: 'Muli', sans-serif;}
.main-div{
	width: 100%; height: 100vh;
	display: flex;
	flex-direction: column;
	align-items: center;

}
.container{
	border: 15px green;

  box-shadow: 30px 10px #888888;
}

.container-flud{
margin-top: 10px;
}
.center-div{
	width: 90%;
	height: 80vh;
	background: -webkit-linear-gradient(left,#5DADE2,#00C6FF);
	padding: 5px 0 0 0;
	box-shadow: 0 20px 20px 0 rgba(0,0,0,0.3);
	border-radius: 10px;

  
}
h3{

color:#000;
text-align: center;
margin-top: 2px;
margin-bottom: 20px;
font-weight: bolder;
}
table{
	border-collapse: collapse;
}

.register-left p {
  font-weight: bold;
  
  padding: 1%;
  color: white;
text-align: center;
	
}



.register-left{

margin-top: 2%;


}
.register-left a{
	text-decoration: none;
	border: none;
	border-radius: 1.5rem;
	padding: 1% 20px;
	width: 60%;
	background: #f8f9fa;
	font-weight: bold;
	color: #383d41;
	margin: auto;
	cursor: pointer;
	text-align: center;
	margin-left: 38%;
}
.register-right{
	
	background: #f8f9fa;
	border-top-left-radius: 10% 50%;
	border-bottom-left-radius: 10% 50% ;
	box-shadow: 0 20px 30px 0 rgba(0,0,0,0.3); 
}
.register-left img{
margin-top: 1%;
margin-bottom: 5%;
width: 55%;
-webkit-animation: mover 2s infinite alternate;
animation: mover 1s infinite alternate;

}
@-webkit-keyframes mover{
	0%{
		transform: translateY(0);
		100%{transform: translateY(-20px);}
	}
}

.register .register-form{
	padding: 15% 0px;
	margin-top: 10%;
	
	
}
.btnRegister{
font-size: 20px;
float:right;
margin-top: 10%;
border: none;border-radius: 1.5rem;
padding: 1% 20px;
background: #0062cc;
color: #fff;
font-weight: bolder;
cursor: pointer;

}

.register .nav-tabs .nav-link.active{
	width: 100px;
	color: #0062cc;
	border: 2px solid #0062cc;
	border-top-left-radius: 1.5rem;
	border-bottom-left-radius: 1.5rem;
}
.register-heading{
	font-size: 20px;
	text-align: center;
	margin-top: 8%;
	margin-bottom: -15%;
	color:  #FFA500;
	font-weight: bolder;
}
::placehoder{
	font-size: 14px;
}
.tabcontent {
  display: none;
  padding: 6px 10px;
  border: 1px solid #ccc;
  border-top: none;
}

</style>
