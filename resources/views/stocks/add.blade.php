@include('layout.menu')
@include('layout.header')
<title> stocks | ExaFibre </title>
<main class="content">
    <div id="wrapper">
        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">TECHNICIENS</h1><a class="badge bg-primary ms-2"></a>
        </div>
        <div class="clearfix"></div>
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row mt-3">
                    <div class="col-lg-10 ">
                        <div class="card" style="background-color: rgba(255, 255, 255, 0.488);">

                            <div class="card-body">
                                <div class="form-group">
                                    <a href="{{ route('stocks.index') }}" type="submit" class="btn btn-light px-2"
                                        style="font-size:12px; background-color:rgb(64, 33, 235) ;color:rgb(243, 243, 245) ; float: right;margin-top:8px"><i
                                            class="bi bi-arrow-right-circle"></i>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
                                        </svg></a>
                                    <div class="card-header"><strong>stock</strong><small> </small></div>
                                    <div class="card-body card-block">
                                    </div>
                                    <hr>
                                    @if ($message = Session::get('success'))
                                        <div class="alert alert-success">
                                            <p>{{ $message }}</p>
                                        </div>
                                    @endif

                                    <form action="{{ route('stocks.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <select id="choix">
                                                <option value="0">choisir</option>
                                                <option value="1">Entree</option>
                                                <option value="2">Sortie</option>
                                            </select>

                                            <div id="champsChoix1" style="display: none;">

                                                <label for="qte">Qte :</label>
                                                <input type="number"  name="qte" id="qte">
                                                <label for="prixunitaire">prix unitaire :</label>
                                                <input type="number" name="prixunitaire" id="prixunitaire">
                                                <label for="valeur">valeur:</label>
                                                <input type="number"  name="valeur" id="valeur">
                                                <button type="submit" class="btn btn-light px-5 offset-9"
                                                    style="  width: 20%;
                                                background-color: rgb(64, 33, 235);
                                                color: rgb(243, 243, 245);
                                                float: left;
                                                font-weight: bold;">Terminer</button>
                                            </div>

                                            <div id="champsChoix2" style="display: none;">
                                                <!-- Champs pour le choix 2 -->
                                                <label for="champ2">Qte:</label>
                                                <input type="text" id="champ2">
                                                <label for="champ2">prix unitaire :</label>
                                                <input type="text" id="champ2">
                                                <label for="champ2">valeur:</label>
                                                <input type="text" id="champ2">
                                                <button type="submit" class="btn btn-light px-5 offset-9"
                                                    style="  width: 20%;
                                                background-color: rgb(64, 33, 235);
                                                color: rgb(243, 243, 245);
                                                float: left;
                                                font-weight: bold;">Terminer</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>
</main>

@include('layout.footer')
<script>
    const choix = document.getElementById('choix');
    const champsChoix1 = document.getElementById('champsChoix1');
    const champsChoix2 = document.getElementById('champsChoix2');


    choix.addEventListener('change', function(event) {
        const selectedOption = event.target.value;


        champsChoix1.style.display = 'none';
        champsChoix2.style.display = 'none';


        if (selectedOption === '1') {
            champsChoix1.style.display = 'block';
        } else if (selectedOption === '2') {
            champsChoix2.style.display = 'block';
        }
    });
</script>