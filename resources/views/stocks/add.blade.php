@include('layout.menu')
@include('layout.header')
<title> stocks | ExaFibre </title>
<main class="content">
    <div id="wrapper">
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
                                  
                                    <form action="{{ route('stocks.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                          
                                            <div class="row form-group">
                                                <div class="col col-md-2"><label for="libellé"
                                                        class=" form-control-label">choisir</label></div>
                                                <div class="col-12 col-md-9">
                                                    <select name="libellé" id="libellé" class="form-control" required>
                                                        <option value="0">s'il vous plait </option>
                                                        <option value="Entree">Entree</option>
                                                        <option value="Sortie">Sortie</option>
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                            

                                            <div id="champsChoix1" style="display: none;">

                                                <label for="qte" class=" form-control-label">Qte :</label>
                                                <div class="col-12 col-md-4"><input type="number"  class="form-control" name="qte" id="qte"></div>
                                                <label for="prixunitaire" class=" form-control-label">prix unitaire :</label>
                                                <div class="col-12 col-md-4"> <input type="number" class="form-control" name="prixunitaire" id="prixunitaire" ></div>   
                                                
                                                <button type="submit" class="btn btn-light px-5 offset-9"
                                                    style="  width: 20%;
                                                background-color: rgb(64, 33, 235);
                                                color: rgb(243, 243, 245);
                                                float: left;
                                                font-weight: bold;">Terminer</button>
                                            </div>

                                            <div id="champsChoix2" style="display: none;">
                                                <!-- Champs pour le choix 2 -->
                                                <label for="qte1" class=" form-control-label">Qte:</label>
                                                <div class="col-12 col-md-4"> <input type="number"   class="form-control"   name="qte1" id="qte1"></div>
                                                <label for="prixunitaire1" class=" form-control-label">prix unitaire :</label>
                                                <div class="col-12 col-md-4"> <input type="number"  class="form-control"   name="prixunitaire1" id="prixunitaire1"></div>
                                               
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
    document.addEventListener('DOMContentLoaded', function() {
        const libelleSelect = document.getElementById('libellé');
        const champsChoix1 = document.getElementById('champsChoix1');
        const champsChoix2 = document.getElementById('champsChoix2');

        libelleSelect.addEventListener('change', function() {
            if (libelleSelect.value === 'Entree') {
                champsChoix1.style.display = 'block';
                champsChoix2.style.display = 'none';
            } else if (libelleSelect.value === 'Sortie') {
                champsChoix1.style.display = 'none';
                champsChoix2.style.display = 'block';
            } else {
                champsChoix1.style.display = 'none';
                champsChoix2.style.display = 'none';
            }
        });
    });
</script>