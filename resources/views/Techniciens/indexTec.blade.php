@include('layout.menu')
@include('layout.header')
<title> Techniciens | ExaFibre  </title>
<main class="content">
<div id="wrapper">
    <div class="mb-3">
        <h1 class="h3 d-inline align-middle">TECHNICIENS</h1><a class="badge bg-primary ms-2" ></a>
    </div>  
    <div class="clearfix"></div>
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row mt-3">
                <div class="col-lg- ">
                    <div class="card" style="background-color: rgba(255, 255, 255, 0.488);">
                        <div class="card-body">
                                    <h5 class="card-title">Techniciens</h5>
                            <div class="form-group">
                                 <a href="{{ route('Techniciens.create') }}"  class="btn btn-light px-5" style="font-size:13px ; background-color:rgb(57, 177, 97) ;color:rgb(243, 243, 245) ; float: right "> Ajouter</a>
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <p>{{ $message }}</p>
                                    </div>
                                @endif
                            </div>
                            <table id="myTable" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Nom </th>
                                        <th scope="col">Adresse</th>
                                        <th scope="col"> Tel</th>
                                        <th scope="col">Age</th>
                                        <th scope="col"> Date de début</th>
                                        <th scope="col"> Email</th>
                                    
                                    </tr>
                                </thead>
                                <tbody>
                                  <!--  oreah (abonnements aabonnement)
                                    <tr>
                                        <td>{ { $abonnement->nom_abonnement }}</td>
                                        <td>{ { $abonnement->par_1_MOIS }}</td>
                                        <td>{ { $abonnement->par_3_MOIS }}</td>
                                        <td>{ { $abonnement->par_6_MOIS }} </td>
                                        <td>{ { $abonnement->par_1_ANS }} </td>
                                        <td>endforeach-->
                                        <!--    <a class="btn btn-light px-3"style="font-size:10px"href="{ { route('abonnements.edit',$abonnement->id) }}">MODIFIER</a>
                                            <a   class="btn btn-light px-3" style="font-size:10px" href="{ { route('abonnements.archive', ['id' => $abonnement->id,'val' => 1]) }}"><i class="fa-solid fa-box-archive"></i>archivées</a>
                                        -->
                                        </td>
                                    </tr>
                                

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

<!-- Inclusion incorrecte de la bibliothèque DataTables -->
<script src="{{asset('js/dataTables.min.js')}}"></script>
<!-- Inclusion incorrecte de la bibliothèque jQuery DataTables -->
<script src="{{asset('https://code.jquery.com/jquery-3.7.0.js')}}"></script>
<script src="{{asset('https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js')}}"></script>

<script>
$(document).ready(function() {
    $('#myTable').DataTable();
});;
</script>
<script>
  $('.sub-menu ul').hide();
  $(".sub-menu a").click(function() {
      $(this).parent(".sub-menu").children("ul").slideToggle("100");
      $(this).find(".right").toggleClass("fa-caret-up fa-caret-down");
  });
</script>
