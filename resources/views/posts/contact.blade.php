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
                    <h1 class="contactTitle">Neem contact op met <span style="color: #17468b; font-weight: bolder;">mij</span></h1>
                    @if (session('succes'))
                        <div class="succes">
                            <img style="width: 70px; margin-left: 10px;" src="{{asset('img/succes.png')}}" alt="">
                            <p style="margin-top: 17px; margin-left: 10px; margin-right: 10px;">{{ session('succes') }}</p>
                        </div>
                        
                    @endif
                    <form class="contactForm" action="{{ route('contact.submit') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form">
                            <div class="contactForm-group">
                                <strong>Naam</strong>
                                <input style="background-color: #272627; border: 1px solid #272627;"  type="text" name="name" id="name" class="form-control">
                                @error('name')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="contactForm-group">
                                <strong>Email adres</strong>
                                <input style="background-color: #272627; border: 1px solid #272627;" type="text" name="email" id="email" class="form-control">
                                @error('email')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="message">
                            <div class="form-group">
                                <strong>Bericht</strong>
                                <textarea style="background-color: #272627; border: 1px solid #272627;" rows="4", cols="10" name="message" id="message" class="form-control"></textarea>
                                @error('contactContent')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <button style="margin-left: 205px; margin-bottom: 40px; margin-top: 30px; padding-left: 278px; padding-right: 278px; font-weight: bolder;" type="submit" class="submit">Versturen</button>
                    </form>
                </div>              
            </div>
        </div>
    </body>
</html>
</x-app-layout>