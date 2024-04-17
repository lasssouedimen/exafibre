@include('layout.menu')
@include('layout.header')
<title> Demandes | ExaFibre </title>
<main class="content"  class="active">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Table De Travaille </strong>
                    </div>
                    <div class="table-stats order-table ov-h">
         
                         <table id="myTable" class="table ">
                            <thead>
                                <tr>
                                    <th scope="col">prenom </th>
                                    <th scope="col"> telephone</th>
                                    <th scope="col"> ville</th>
                                    <th>technicien</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clientdemandes as $clientdemande)
                                    @if ($clientdemande->etat == 2)
                                        <tr>
                                        </tr>
                                    @endif

                                    <td>{{ $clientdemande->prenom }}</td>
                                    <td>{{ $clientdemande->telephone }}</td>
                                    <td>{{ $clientdemande->ville }}</td>
                                    <td></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@include('layout.footer')

<!-- Inclusion incorrecte de la bibliothèque DataTables -->
<script src="{{ asset('js/dataTables.min.js') }}"></script>
<!-- Inclusion incorrecte de la bibliothèque jQuery DataTables -->
<script src="{{ asset('https://code.jquery.com/jquery-3.7.0.js') }}"></script>
<script src="{{ asset('https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js') }}"></script>
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
