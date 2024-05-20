@include('layout.menu')
@include('layout.header')

<div class="container">
    <h1>Ajouter un Mouvement de Stock</h1>
    <form action="{{ route('stock_movements.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" class="form-control" id="date" name="date" required>
        </div>
        <div class="form-group">
            <label for="libelle">Libellé</label>
            <input type="text" class="form-control" id="libelle" name="libelle" required>
        </div>
        <div class="form-group">
            <label for="entree">Entrée</label>
            <input type="number" class="form-control" id="entree" name="entree">
        </div>
        <div class="form-group">
            <label for="sortie">Sortie</label>
            <input type="number" class="form-control" id="sortie" name="sortie">
        </div>
        <div class="form-group">
            <label for="prix_unitaire">Prix Unitaire</label>
            <input type="number" step="0.01" class="form-control" id="prix_unitaire" name="prix_unitaire" required>
        </div>
        <div class="form-group">
            <label for="valeur">Valeur</label>
            <input type="number" step="0.01" class="form-control" id="valeur" name="valeur" required>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>

@include('layout.footer')