<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Personal Cite For CV</title>
	<link rel="stylesheet" type="text/css" >
	<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
</head>
<body>

<style type='text/css'>

	body{
		margin: 0;
		padding: 0;
		background: url(nature.jpg);
		background-size: cover; 
	}

	.kutu{
		width: 450px;
		background: #6b9858;
		padding: 40px;
		text-align: center;
		margin: auto;
		margin-top: 5%;
		color: #fff;
		font-family: Cursive;	
	}
    .kutu img{
    	border-radius: 40%;
    	width: 200px;
    	height: 200px;
    	cursor: pointer;
    }
    ul{
    	margin: 0;
    	padding: 0;
    }
    .kutu li{
    	display: inline-block;
    	margin: 6px;
    }
    .kutu li a{
    	color: white;
    	font-size: 50px;
    }



</style>

<div class="kutu">
	<img src="foto1.jpg"  style="max-width:65%; height: auto;">
	<h1>{{__("profile.comp_eng")}}</h1>
	<h5>{{__("profile.web_desinger")}}</h5>
	<p>{{__("profile.from")}}</p>
	<ul>
		<li><a href="https://www.youtube.com/channel/UCyN4G4yt7aj2lMHPzWzSoLQ"><i class="fab fa-youtube"></i></a></li>
		<li><a href="https://www.instagram.com/cemaladl/"><i class="fab fa-instagram"></i></a></li>
		<li><a href="{{route('contact')}}"><i class="fab fa-whatsapp"></i></a></li>
		<li><a href="#"><i class="fab fa-github"></i></a></li>

	</ul>
	
</div>


<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{ Config::get('languages')[App::getLocale()] }}
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
    @foreach (Config::get('languages') as $lang => $language)
        @if ($lang != App::getLocale())
                <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"> {{$language}}</a>
        @endif
    @endforeach
    </div>
</li>




</body>
</html>