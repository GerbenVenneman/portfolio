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
                            <div class="pull-right mb-2">
                                @if(Auth::user() != null)
                                    <a class="projectButton" href="{{ route('projecten.create') }}">Project toevoegen</a>
                                @endif
                            </div>
                            @php
                                $posts = $posts ?? [];
                            @endphp 
                            <div class="project">
                                @foreach($posts as $post)
                                    <div class="project-group">
                                        <div class="edit-delete">
                                            @if(Auth::user() != null)
                                                <a href="{{ route('projecten.edit', $post->id) }}"><img style="width: 35px; margin-left: 350px" src="{{asset('img/edit.png')}}" alt=""></a>
                                                <button class="delete-project" data-project-id="{{ $post->id }}" data-toggle="modal" data-target="#deleteModal">
                                                    <img style="width: 56px; " src="{{asset('img/delete.png')}}" alt="">
                                                </button>
                                            @endif
                                        </div>
                            
                                        @if(count($post->images) > 1)
                                            <div id="slideshow_{{ $post->id }}" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner">
                                                    @foreach($post->images as $key => $image)
                                                        <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                                                            <img style="width: 400px;
                                                            height: 400px;
                                                            object-fit: cover;
                                                            object-position: center;" class="d-block w-100" src="{{ asset('images/' . $image->fileName) }}" alt="{{ $post->title }}">
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <a class="carousel-control-prev" href="#slideshow_{{ $post->id }}" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Vorige</span>
                                                </a>
                                                <a class="carousel-control-next" href="#slideshow_{{ $post->id }}" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Volgende</span>
                                                </a>
                                            </div>
                                        @else
                                            @foreach($post->images as $image)
                                                <img class="d-block w-100" src="{{ asset('images/' . $image->fileName) }}" alt="{{ $post->title }}">
                                            @endforeach
                                        @endif
                            
                                        <span style="font-size: 25px; font-weight: bolder; color: #17468b;">{{ $post->title }}</span>
                                        <span style="color: whitesmoke;">{{ $post->content }}</span>
                                    </div>
                                @endforeach
                            </div>
                            {{-- Popup --}}
                            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel">Bevestig verwijdering</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Weet je zeker dat je dit project wilt verwijderen?
                                            <input type="text" id="projectName" class="form-control" placeholder="Voer de projectnaam in">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuleren</button>
                                            <button type="button" class="btn btn-danger" id="confirmDelete">Verwijderen</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>       
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function () {
                // Bij klikken op de verwijderknop, project-ID opslaan en de modal openen
                $('.delete-project').click(function () {
                    var postId = $(this).data('project-id');
                    $('#deleteModal').data('post-id', postId);
                    $('#projectName').val(''); // Leeg het invoerveld
                    $('#deleteModal').modal('show');
                });

                // Bij klikken op de knop "Verwijderen" in de modal
                $('#confirmDelete').click(function () {
                    var postId = $('#deleteModal').data('post-id');
                    var projectName = $('#projectName').val();

                    // Voer een AJAX-verzoek uit om de post (project) te verwijderen
                    $.ajax({
                        url: '/projecten/' + postId, // Pas de route aan voor je toepassing
                        type: 'POST',
                        data: {
                            _token: '{{ csrf_token() }}', // CSRF-token
                            "_method": 'DELETE',
                            project_name: projectName
                        },
                        success: function (response) {
                            $('#projectItem_' + postId).remove();
                            $('#deleteModal').modal('hide');
                            alert(response.message); // Toon een succesbericht (kan verbeterd worden)
                        },
                        error: function (xhr, a, b,c ) {
                            console.log(xhr);
                            console.log(a);
                            console.log(b);
                            console.log(xhr.responseJSON);
                            // Toon een foutmelding aan de gebruiker (kan verbeterd worden)
                            alert('Er is een fout opgetreden bij het verwijderen van het project.');
                        }
                    });
                });
            });
        </script>
    </body>
    </html>
</x-app-layout>