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
    <body class="backgroundImage">
        <div class="container mt-2">
            <div class="row">
                <div class="col-lg-12 margin-tb">  
                    <h1 style="margin-top: 60px;" class="aboutMeTitle">Dingen die ik graag doe</h1> 
                    <div class="aboutMeSection">
                        <div class="gym">
                            <img class="gymImg" src="{{ asset('img/gym.png')}}" alt="">
                            <div class="gymtext">
                                <h2>Gym</h2>
                                <p>In mijn vrije tijd ga ik graag naar de sportschool ofwel de gym. Ik ben hier nu een jaar mee bezig en ik doe dit 4x per week. Dit doe ik omdat ik het echt leuk vind en gespierder wil worden. Meestal doe ik dit alleen, maar af en toe ook met vrienden of mijn vriendin.</p>
                            </div>
                        </div>
                        <div class="makingVideos">
                            <object class="video" data="{{ asset('img/sport.mp4')}}" type="video/mp4" width="400" height="279" controls display: none;>
                                <embed src="{{ asset('img/sport.mp4')}}" type="video/mp4" width="560" height="315" controls />
                            </object>
                            
                            <div class="makingVideosText">
                                <h2>Video's maken</h2>
                                <p>Wat ik ook graag doe is het maken van video's. Meestal zijn dit sport video's, maar in het verleden heb ik ook Inazuma Eleven video's gemaakt. Hierboven een mooi voorbeeld!</p>
                            </div>
                        </div>
                    </div>
                    <h1 class="aboutMeTitle">Werkervaring</h1> 
                    <div class="aboutMeSection">
                        <div class="work">
                            <div class="workimg2">
                                <img class="workImg" src="{{ asset('img/work.png')}}" alt="">
                            </div>
                            <div class="worktext">
                                <h2>Jumbo</h2>
                                <p>Op dit moment werk ik naast school bij de Jumbo. Hier werk ik al 3 jaar. Eerst als medewerker en nu al een jaar als Teamleider.</p>
                            </div>
                        </div>
                        <div class="work2">
                            <div class="aldiImg1">
                                <img class="aldiImg" src="{{ asset('img/aldi.png')}}" alt="">
                            </div>
                            <div class="alditext">
                                <h2>Aldi</h2>
                                <p>Van mijn 15e tot 16e heb ik bij de Aldi gewerkt als medewerker.</p>
                            </div>
                        </div>
                    </div>
                </div>              
            </div>
        </div>
    </body>
</html>
</x-app-layout>