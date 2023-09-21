<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <title>Blog maken</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    
    <body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">#272627
                <div class="pull-left mb-2">
                    <h2 style="color: whitesmoke; margin-top: 30px; font-weight: bolder;"><span style="color: #17468b; font-weight: bolder;">Project</span> bewerken</h2>
                </div>
                <div class="pull-right">
                    <a class="back" href="{{ route('projecten.index') }}"> Back</a>
                </div>
            </div>
        </div>
        <form action="{{ route('projecten.update', $post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Upload een foto</strong>
                        <input type="file" name="images[]" multiple>
                        <input type="submit" value="Upload">
                        
                        {{-- <input type="file" name="images[]">
                        <button class="btn btn-primary ml-3"><input type="submit" value="{{ __('Upload')}}"></button>
                        @error('title')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror --}}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Titel</strong>
                        <input style="background-color: #272627; border: 1px solid #272627;" type="text" name="title" value="{{ $post->title }}" class="form-control">
                        @error('title')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Beschrijving</strong>
                        <textarea style="background-color: #272627; border: 1px solid #272627;" rows="3", cols="10" name="content" class="form-control"></textarea>
                        @error('content')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="submit">Submit</button>
            </div>
        </form>
    </div>
    </body>
    
    </html>
    </x-app-layout>