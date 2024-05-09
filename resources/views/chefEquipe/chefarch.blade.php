@include('layout.menu')
@include('layout.header')
<title> Techniciens | ExaFibre </title>
<main class="content">
    <div id="wrapper">
        <div class="mb-3">
        </div>
        <div class="clearfix"></div>
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row mt-2">
                    <div class="col-lg-12">
                        <div class="card" style="background-color: rgba(255, 255, 255, 0.488);">
                            <div class="card-body">
                                <div class="form-group">
                                    
                                    <div class="card-header"><strong>Chef D'equipe Archivée</strong></div>
                                    <div class="card-body card-block">
                                    </div>
                                 
                                </div>
                                <table id="example" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th >Nom </th>
                                            <th>Prénom </th>
                                            <th>Adresse</th>
                                            <th> Téléphone</th>
                                            <th>Âge</th>
                                            <th>Date de début</th>
                                            <th> Email</th>
                                            <th> Action</th>
                                          

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($chefequipe as $chefequipe)
                                            <tr>
                                                <td style="font-size:14px">{{ $chefequipe->nom }}</td>
                                                <td style="font-size:14px">{{ $chefequipe->prenom }}</td>
                                                <td style="font-size:14px">{{ $chefequipe->Adresse }}</td>
                                                <td style="font-size:14px">{{ $chefequipe->Tel }}</td>
                                                <td style="font-size:14px">{{ $chefequipe->Age }} </td>
                                                <td style="font-size:14px">{{ $chefequipe->Datedébut }} </td>
                                                <td style="font-size:14px">{{ $chefequipe->mail }} </td>
                                              
                                               
                                                
    
                                                    <td>
                                                        
                                                        @if ($chefequipe->arch == 0)
                                                            <a class="btn btn-light px-3" style="font-size:12px  ; background-color:rgb(64, 33, 235) ;color:rgb(243, 243, 245) ;"
                                                                href="{{ route('chefEquipe.archive', ['id' => $chefequipe->id, 'etat' => 1]) }}"><i
                                                                    class="fa-solid fa-box-archive"></i><i class="bi bi-x-lg"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                                                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
                                                                      </svg> Archivée</a>
                                                        @else
                                                            <a class="btn btn-light px-3" style="font-size:12px  ; background-color:rgb(64, 33, 235) ;color:rgb(243, 243, 245) ;"
                                                                href="{{ route('chefEquipe.archive', ['id' => $chefequipe->id, 'etat' => 0]) }}"><i
                                                                    class="fa-solid fa-box-archive"></i><i class="bi bi-x-lg"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                                                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
                                                                      </svg>déasarchive</a>
                                                        @endif
                                                       
                                                    </td>
    
                                                

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

</main>
@include('layout.footer')
<!-- Scripts -->

