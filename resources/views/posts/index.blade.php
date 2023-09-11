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
            <div class="intro">
                <div class="title">
                    <p>Web developer</p>
                    <h1>Hey, ik ben <span style="color: #17468b">Gerben</span> Venneman</h1>
                    <a class="projectsButton" href="{{ route('projecten.index')}}">Bekijk mijn projecten</a>
                </div>
                <img src="{{asset('img/myself.png')}}" alt="">
                
            </div>
            {{-- <div class="aboutMeParent">
                <div class="aboutMe">
                    <div class="aboutMeText">
                        <p>Hallo ik ben Gerben Venneman en ik heet u welkom op mijn portfolio website. Op deze website kunt u diversen projecten vinden die ik heb gemaakt tijdens mijn opleiding.</p>
                    </div>
                    
                    <img style="width: 200px;" src="{{asset('img/my.jpg')}}" alt="">
                </div>
            </div>
            <div class="winWebParent">
                <div class="test">
                    <a href="{{ route('web.index')}}">
                        <div class="webParent">
                            <div class="web">
                                <img style="width: 200px;" src="{{asset('img/web.png')}}" alt="">
                                <h6>Web-projecten bekijken</h6>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('win.index')}}">
                        <div class="winParent">
                            <div class="win">
                                <img style="width: 200px;" src="{{asset('img/win.png')}}" alt="">
                                <h6>Win-projecten bekijken</h6>
                            </div>
                        </div>
                    </a>
                </div>
                
            </div> --}}
                
            
            
        </div>
        {{-- @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif --}}
        <div class="blogs">
            {{-- @foreach($blogs as $blog)
                
                    <div class="blog">
                        <div class="title">                       
                            <h5><strong>Titel</strong></h5>
                            {{ $blog->title }}                   
                        </div>
                        <div class="content">
                            <h5><strong>Beschrijving</strong></h5>
                            {{ $blog->content }}
                        </div>
                        <div class="comment">
                            
                        </div>
                    </div>
                
            @endforeach --}}
        </div>  
        {{-- <td><a class="btn btn-primary" href="{{ route('studenten.edit', $student->id)}}">Aanpassen</a></td>
        <td>
            <form action="{{ route('studenten.destroy',$student->id) }}" method="Post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Verwijder</button>
            </form>
        </td> --}}
    </div>
    
</body>
</html>
</x-app-layout>