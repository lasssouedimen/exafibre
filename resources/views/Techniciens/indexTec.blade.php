@include('layout.menu')
@include('layout.header')
<title> Techniciens | ExaFibre  </title>
<main class="content">
<div id="wrapper">
    <div class="mb-3">
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
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">                                <thead>
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
                                                   
                                                        <a class="btn btn-light px-3" style="font-size:10px"href="{{ route('Techniciens.edit', $technicien->id) }}">MODIFIER</a>
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
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/init/datatables-init.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
      } );
  </script>

