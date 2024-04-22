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
                                 <a href="{{ route('parking.create') }}"  class="btn btn-light px-5" style="font-size:13px ; background-color:rgb(57, 177, 97) ;color:rgb(243, 243, 245) ; float: right "> Ajouter Véhicule</a>
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



    