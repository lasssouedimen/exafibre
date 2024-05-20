@include('layout.menu')
@include('layout.header')
<title> Parking | ExaFibre </title>
<main class="content">
    <div class="clearfix"></div>
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row mt-3">
                <div class="col-lg-12">
                    <div class="card" style="background-color: rgba(255, 255, 255, 0.488);">
                        <div class="card-body">

                            <div class="form-group">
                                <a href="{{ route('parking.create') }}" class="btn btn-light px-2"
                                    style="font-size:12px ; background-color:rgb(64, 33, 235) ;color:rgb(243, 243, 245) ; float: right ; margin-top:8px ">
                                    <i class="bi bi-plus-circle-fill"></i><svg xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z" />
                                    </svg>Ajouter</a>
                                <div class="card-header"><strong>Parking</strong></div>
                                <div class="card-body card-block">
                                </div>
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <p>{{ $message }}</p>
                                    </div>
                                @endif
                            </div>

                            <div class="row" style=" color: black;">
                                <table id="example" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Marque </th>
                                            <th>codegps </th>
                                            <th>Matricule</th>
                                            <th> kilométrage</th>
                                            <th>Disponibilité</th>
                                            <th> Action</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($parking as $parking)
                                            <tr>
                                                <td style="font-size:14px"> {{ $parking->Marque }} </td>
                                                <td style="font-size:14px">{{ $parking->codegps }}</td>
                                                <td style="font-size:14px"> {{ $parking->Matricule }}</td>
                                                <td style="font-size:14px">{{ $parking->kilométrage }}</td>


                                                @if ($parking->dispo == 0)
                                                    <td style="font-size:9"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="16" height="16" fill="currentColor"
                                                            class="bi bi-truck-front" viewBox="0 0 16 16">
                                                            <path
                                                                d="M5 11a1 1 0 1 1-2 0 1 1 0 0 1 2 0m8 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m-6-1a1 1 0 1 0 0 2h2a1 1 0 1 0 0-2zM4 2a1 1 0 0 0-1 1v3.9c0 .625.562 1.092 1.17.994C5.075 7.747 6.792 7.5 8 7.5s2.925.247 3.83.394A1.008 1.008 0 0 0 13 6.9V3a1 1 0 0 0-1-1zm0 1h8v3.9q0 .002 0 0l-.002.004-.005.002h-.004C11.088 6.761 9.299 6.5 8 6.5s-3.088.26-3.99.406h-.003l-.005-.002L4 6.9q0 .002 0 0z" />
                                                            <path
                                                                d="M1 2.5A2.5 2.5 0 0 1 3.5 0h9A2.5 2.5 0 0 1 15 2.5v9c0 .818-.393 1.544-1 2v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5V14H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2a2.5 2.5 0 0 1-1-2zM3.5 1A1.5 1.5 0 0 0 2 2.5v9A1.5 1.5 0 0 0 3.5 13h9a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 12.5 1z" />
                                                        </svg><i class="bi bi-truck-front"></i> Disponible</td>
                                                @elseif($parking->dispo == 1)
                                                    <td style="font-size:12px"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="16" height="16" fill="currentColor"
                                                            class="bi bi-ev-front-fill" viewBox="0 0 16 16">
                                                            <path
                                                                d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679q.05.242.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.8.8 0 0 0 .381-.404l.792-1.848Zm6.75.51a.186.186 0 0 0-.23.034L6.05 7.246a.188.188 0 0 0 .137.316h1.241l-.673 2.195a.19.19 0 0 0 .085.218c.075.043.17.03.23-.034l2.88-3.187a.188.188 0 0 0-.137-.316H8.572l.782-2.195a.19.19 0 0 0-.085-.218Z" />
                                                        </svg><i class="bi bi-ev-front-fill"></i> En Déplacement</td>
                                                @endif
                                                </td>

                                                <td>
                                                    @if ($parking->arch == 0)
                                                        <a class="btn btn-light px-3"
                                                            style="background-color: rgb(64, 33, 235) ; color :rgb(249, 249, 252); font-size:11px"
                                                            href="{{ route('parking.archive', ['id' => $parking->id, 'etat' => 1]) }}"><i
                                                                class="fa-solid fa-box-archive"></i><i class="bi bi-x-lg"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                                                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
                                                                  </svg> Archivée</a>
                                                    @else
                                                        <a class="btn btn-light px-3"
                                                            style="background-color: rgb(64, 33, 235) ; color :rgb(249, 249, 252); font-size:11px"
                                                            href="{{ route('parking.archive', ['id' => $parking->id, 'etat' => 0]) }}"><i
                                                                class="fa-solid fa-box-archive"></i>déasarchive</a>
                                                    @endif
                                                    <a class="btn btn-light px-3"
                                                    style="font-size:10px  ; background-color:rgb(64, 33, 235) ;color:rgb(243, 243, 245) ;"href="{{ route('parking.show', $parking->id) }}"><i class="bi bi-arrow-left-right"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-right" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M1 11.5a.5.5 0 0 0 .5.5h11.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 11H1.5a.5.5 0 0 0-.5.5m14-7a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H14.5a.5.5 0 0 1 .5.5"/>
                                                      </svg> Historique</a>
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
    </div>

    

</main>

@include('layout.footer')
<style>
    td {
        color: black;
    }
</style>
