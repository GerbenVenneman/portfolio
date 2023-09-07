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
                        <h2>Portfolio Gerben Venneman</h2>
                        <div class="pull-right mb-2">
                            {{-- <a class="btn btn-primary ml-3" href="{{ route('blogs.create') }}">Blog toevoegen</a> --}}
                        </div>
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