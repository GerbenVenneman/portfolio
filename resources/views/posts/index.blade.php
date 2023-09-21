<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Portfolio</title>
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">   
                
                
                <div class="pull-right mb-2">
                    {{-- <a class="btn btn-primary ml-3" href="{{ route('blogs.create') }}">Blog toevoegen</a> --}}
                </div>
            </div>
            <div class="quote">
                <p style="color: whitesmoke; margin-top: 30px; font-size: 20px; display: flex; justify-content: center; margin-left: 280px">"Push harder then yesterday if you want a different tomorrow"</p>
            </div>
                    
            <div class="intro">
                <div class="title">
                    <p>Web developer</p>
                    <h1>Hey, ik ben <span style="color: #17468b">Gerben</span> Venneman</h1>
                    
                    <a class="projectsButton" href="{{ route('projecten.index')}}">Bekijk mijn projecten</a>
                </div>
                <img src="{{asset('img/myself3.png')}}" alt="">
            </div>
            <div class="aboutMe">
                <img class="aboutMeImg" src="{{asset('img/aboutme.png')}}" alt="">
                <div class="aboutMeText">
                    <a class="aboutMeLink" href="{{ route('posts.overmij')}}">Over mij</a>
                    <p>Ik ben Gerben Venneman, 19 jaar en ik volg de opleiding Software Developer op het Curio in Breda. Ik ben een echte Web Developer! Op 22 November 2003 ben ik geboren in Ulvenhout. Wil je meer van mij weten? Klik dan op Over mij!</p>
                </div>
            </div>    
            {{-- <div class="footer">
                <div class="footerLinks">
                    <a style="color: white;" href="{{route('posts.index')}}"><span style="color: #17468b">H</span>ome</a>
                    <a style="color: whitesmoke;" href="{{route('projecten.index')}}">Projecten</a>
                    <a style="color: whitesmoke;" href="{{route('posts.overmij')}}">Over mij</a>
                </div>
            </div> --}}
        </div>
    </div>
</body>
</html>
</x-app-layout>