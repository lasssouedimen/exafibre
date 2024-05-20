@include('layout.menu')
@include('layout.header')
<div class="container">
    <h1>Fiche de Stock - Matière Première X</h1>
    <div class="form-group">
        <a href="{{ route('stock_movements.create') }}" class="btn btn-light px-3"
                        style="font-size:12px ; background-color:rgb(64, 33, 235) ;color:rgb(243, 243, 245) ; float: right ; margin-top:8px ">
                        <i class="bi bi-plus-circle-fill"></i><svg xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" fill="currentColor"
                            class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z" />
                        </svg></a>    
    <table class="table">
        <thead>
            <tr>
                <th>Date</th>
                <th>Libellé</th>
                <th>Entrées</th>
                <th>Prix Unitaire</th>
                <th>Valeur</th>
                <th>Sorties</th>
                <th>Prix Unitaire</th>
                <th>Valeur</th>
                <th>Stock</th>
                <th>Prix Unitaire</th>
                <th>Valeur</th>
               
            </tr>
        </thead>
        <tbody>
            @php
                $stock = 0;
                $stock_value = 0;
            @endphp
            @foreach($movements as $movement)
                @php
                    if ($movement->entree) {
                        $stock += $movement->entree;
                        $stock_value += $movement->valeur;
                    } elseif ($movement->sortie) {
                        $stock -= $movement->sortie;
                        $stock_value -= $movement->valeur;
                    }
                @endphp
                <tr>
                    <td>{{ $movement->date }}</td>
                    <td>{{ $movement->libelle }}</td>
                    <td>{{ $movement->entree }}</td>
                    <td>{{ $movement->prix_unitaire }}</td>
                    <td>{{ $movement->valeur }}</td>
                    <td>{{ $movement->sortie }}</td>
                    <td>{{ $movement->prix_unitaire }}</td>
                    <td>{{ $movement->valeur }}</td>
                    <td>{{ $stock }}</td>
                    <td>{{ $movement->prix_unitaire }}</td>
                    <td>{{ $stock_value }}</td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@include('layout.footer')
