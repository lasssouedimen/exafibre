@include('layout.menu')
@include('layout.header')
<title> stocks | ExaFibre </title>
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
                                    <a href="{{ route('stocks.create') }}" class="btn btn-light px-3"
                                        style="font-size:12px ; background-color:rgb(64, 33, 235) ;color:rgb(243, 243, 245) ; float: right ; margin-top:8px ">
                                        <i class="bi bi-plus-circle-fill"></i><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor"
                                            class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z" />
                                        </svg></a>                             

                                    <a class="btn btn-light px-3"
                                        style="font-size:12px ; background-color:rgb(64, 33, 235) ;color:rgb(243, 243, 245) ; float: right ; margin-top:8px ">

                                        <i class="bi bi-printer"></i><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor" class="bi bi-printer"
                                            viewBox="0 0 16 16">
                                            <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1" />
                                            <path
                                                d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1" />
                                        </svg></a>

                                    <div class="card-header"><strong>Fiche de Stock</strong></div>
                                    <div class="card-body card-block">
                                    </div>
                                    @if ($message = Session::get('success'))
                                        <div class="alert alert-success">
                                            <p>{{ $message }}</p>
                                        </div>
                                    @endif
                                </div>
                                <table id="example" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th colspan="2">MOUVEMENT</th>
                                            <th colspan="3">ENTREES</th>
                                            <th colspan="3">SORTIES</th>
                                            <th colspan="3">STOCK</th>
                                        </tr>
                                        <tr>
                                            <th>Date</th>
                                            <th>Libellé</th>
                                            <th>Qte</th>
                                            <th>Prix unitaire</th>
                                            <th>Valeur</th>
                                            <th>Qte</th>
                                            <th>Prix unitaire</th>
                                            <th>Valeur</th>
                                            <th>Qte</th>
                                            <th>Prix unitaire</th>
                                            <th>Valeur</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($stocks as $stocks)
                                        @if( $stocks->libellé == "Entree" )
                                            <tr>
                                                <td> {{ $stocks->date }}</td>
                                                <td>{{ $stocks->libellé }}</td>
                                                <td>{{ $stocks->qte }}</td>
                                                <td>{{ $stocks->prixunitaire }}€</td>
                                                <td>{{ $stocks->valeur }}</td>
                                               
                                                @elseif($stocks->libellé == "Sortie" )
                                                <td> {{ $stocks->date }}</td>
                                                <td>{{ $stocks->libellé }}</td>
                                                <td>{{ $stocks->qte1 }}</td>
                                                <td>{{ $stocks->prixunitaire1 }}€</td>
                                                <td>{{ $stocks->valeur1 }}€</td>
                                                
                                               @endif
                                               <td>{{ $stocks->qte2 }}</td>
                                               <td>{{ $stocks->prixunitaire2 }}</td>
                                               <td>{{ $stocks->valeur2 }}€</td>
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

<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
