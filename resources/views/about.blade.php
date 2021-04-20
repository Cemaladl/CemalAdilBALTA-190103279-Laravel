<!DOCTYPE html>
<html>
<head>
	<title>about</title>
</head>
<body>
	<style type='text/css'>
	body{
		margin: 0;
		padding: 0;
		background: url(nature2.jpg);
		background-size: cover; 
	}

	.kutu1{
		width: 450px;
		background: #6b9858;
		padding: 40px;
		text-align: center;
		margin: auto;
		margin-top: 5%;
		color: #fff;
		font-family: Cursive;	
	}
	.kutu1 img{
    	border-radius: 50%;
    	cursor: pointer;
    }
    .kutu a{
    	cursor: pointer;

    }
    a:hover {
  background-color: yellow;
}
</style>
	<div class="kutu1">
		
		<h3>{{__("profile.curriculum")}}</h3>
		<h5>{{__("profile.yazı2")}}</h5>
		<p>{{__("profile.exp")}}</p>
		<h5>{{__("profile.yazı3")}}</h5>
		<a href="{{route('contact')}}">{{__("profile.button1")}}</a>

	</div>

</body>
</html>