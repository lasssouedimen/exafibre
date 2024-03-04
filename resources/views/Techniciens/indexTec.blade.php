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
                <div class="col-lg-12">
                    <div class="card" style="background-color: rgba(255, 255, 255, 0.488);">
                        <div class="card-body">
                                 
                            <div class="form-group">
                                 <a href="{{ route('Techniciens.create') }}"  class="btn btn-light px-5" style="font-size:13px ; background-color:rgb(57, 177, 97) ;color:rgb(243, 243, 245) ; float: right "> Ajouter</a>
                                 <div class="card-header"><strong>Techniciens</strong></div>
                                 <div class="card-body card-block">
                                                     </div>
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
                                        <th> action</th>
                                    
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($techniciens as $technicien)
                                            <tr>
                                                <td>{{ $technicien->nom }}</td>
                                                <td>{{ $technicien->adresse }}</td>
                                                <td>{{ $technicien->tel }}</td>
                                                <td>{{ $technicien->Age }} </td>
                                                <td>{{ $technicien->Datedébut }} </td>
                                                <td>{{ $technicien->mail }} </td> 
                                                <td>
                                                    <form action="{{ route('Techniciens.destroy',$technicien->id) }}" method="Post">
                                                   
                                                        <a class="btn btn-light px-3"style="font-size:10px"href="{{ route('Techniciens.edit', $technicien->id) }}">MODIFIER</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="btn btn-light px-3"style="font-size:10px"
                                                            class="btn btn-danger">SUPPRIMER</button>
                                                    </form>
                                                
                                
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
