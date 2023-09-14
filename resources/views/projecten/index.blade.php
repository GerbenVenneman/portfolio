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
        <div class="background">
            <div class="container mt-2">
                <div class="row">
                    <div class="col-lg-12 margin-tb">   
                        <div class="header">                            
                            {{-- <div class="pull-right mb-2">
                                <a class="projectButton" href="{{ route('projecten.create') }}">Project toevoegen</a>
                            </div>
                            <div class="popup" id="popup-1">
                                <div class="overlay"></div>
                                <div class="content">
                                    <div class="close" onclick="togglePopup()">&times;</div>
                                    <h1>Test</h1>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea rem fuga dolores aliquam nam molestias, suscipit, quas tempora ex possimus dignissimos animi deleniti omnis saepe neque magnam. Quisquam, qui veritatis.</p>
                                </div>
                            </div>
                            <button class="showPopup" onclick="togglePopup()">Show popup</button>
                            <script>
                                function togglePopup(){
                                    document.getElementById("popup-1").classList.toggle("active")
                                }
                            </script> --}}
                        </div>       
                    </div>
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
        </div>
        
    </body>
    </html>
    </x-app-layout>