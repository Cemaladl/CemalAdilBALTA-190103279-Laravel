<!DOCTYPE html>
<html>
<head>
	<title>contact</title>
</head>
<body>
<style type='text/css'>

	body{
		margin: 0;
		padding: 0;
		background: url(nature1.jpg);
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
		<img src="foto.jpg"  style="max-width:56%; height: 300px;">
		<p>{{__("profile.yazı1")}}</p>
		<h5> +7 707 567 4115</h5>
		<a href="{{route('main')}}">{{__("profile.button1")}}</a>
		<a href="{{route('about')}}">{{__("profile.button2")}}</a>
		

	</div>


</body>
</html>