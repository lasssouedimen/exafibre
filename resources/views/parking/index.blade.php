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
                                 <a href="{{ route('parking.create') }}" class="btn btn-light px-2" style="font-size:12px ; background-color:rgb(64, 33, 235) ;color:rgb(243, 243, 245) ; float: right ; margin-top:8px ">  <i class="bi bi-plus-circle-fill"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"/>
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
        @foreach ($parking as $parking)
        <div class="col-lg-2">
            <section class="card">
                <div class="card-body text-secondary">
                  <tr>
                    <td><i class="fa ti-car" style="color:black"></i> {{ $parking->Marque }} </td> <br>
                    <td><i class="fa ti-pin" style="color:black"></i> {{ $parking->codegps }}</td> <br>
                    <td><i class="fa ti-layout-cta-right" style="color:black"></i> {{ $parking->Matricule }}</td> <br>
                    <td><i class="fa ti-dashboard" style="color:black"></i> {{ $parking->kilométrage }} </td> <br>
                   <td>etat:</td>
                    <td>
                        <form action="{{ route('parking.destroy', $parking->id) }}"
                            method="Post">
                          @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="btn btn-light px-3"style="font-size:10px"
                                class="btn btn-danger">SUPPRIMER</button></form></td>
                  </tr>
              
                   <!-- <td>
                        if ($parking->etat == 0)
                        <td>En deplacement</td>
                        elseif($parking->etat == 1)
                         <td>dispo</td>
                    </td>
                -->
                  </tr>
         </div>
            </section>
        </div>
        @endforeach 
       
    </div>

</main>

@include('layout.footer')
<style>
    td {
        color: black;
    }
    </style>



    