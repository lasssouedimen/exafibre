@include('layout.menu')
@include('layout.header')
<title> Profile | ExaFibre </title>

<div class="content">
    <div class="animated fadeIn">

        <div class="badges">
            <div class="row">
              
                <div class="col-lg-9">
                    <div class="card">
                        <div class="card-header" style="background-color:rgba(102, 148, 242, 0.459)">
                            
                            <h4>profile
                            </h4>
                        </div>
                        <div class="card-body">
                            <div class="custom-tab">

                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                     
                                        <a class="nav-item nav-link" id="custom-nav-profile-tab" data-toggle="tab"
                                            href="#custom-nav-profile" role="tab" aria-controls="custom-nav-profile"
                                            aria-selected="false">Profile</a>
                                        <a class="nav-item nav-link" id="custom-nav-contact-tab" data-toggle="tab"
                                            href="#custom-nav-contact" role="tab" aria-controls="custom-nav-contact"
                                            aria-selected="false">Contact</a>
                                            <a class="nav-item nav-link active" id="custom-nav-home-tab" data-toggle="tab"
                                            href="#custom-nav-home" role="tab" aria-controls="custom-nav-home"
                                            aria-selected="true">modifier</a>
                                    </div>
                                </nav>
                                <div class="tab-content pl-3 pt-2" id="nav-tabContent">

                                    <div class="tab-pane fade" id="custom-nav-profile" role="tabpanel"
                                        aria-labelledby="custom-nav-profile-tab">
                                        <div class="card-body">
                                            nom: {{ $chef->nom }}
                                            <br>
                                            prenom: {{ $chef->prenom }}
                                            <br>

                                            Adresse: {{ $chef->Adresse }}
                                            <br>



                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="custom-nav-contact" role="tabpanel"
                                        aria-labelledby="custom-nav-contact-tab">
                                        <div class="card-body">
                                            email: {{ $chef->mail }}
                                            <br>
                                            Tel: {{ $chef->Tel }}
                                        </div>
                                    </div>
                                    <div class="tab-pane fade show active" id="custom-nav-home" role="tabpanel"
                                        aria-labelledby="custom-nav-home-tab">
                                        <div class="row form-group">
                                            <div class="col col-md-2"><label for="Adresse" class=" form-control-label"
                                                    style="font-size:15px">Adresse: </label></div>
                                            <div class="col-12 col-md-3"><input type="text" id="Adresse" name="Adresse"
                                                    class="form-control" value="{{ $chef->Adresse }}" required>
                                            </div>
                                            <div class="col col-md-2"><label for="Tel" class=" form-control-label"
                                                    style="font-size:15px">Téléphone:</label>
                                            </div>
                                            <div class="col-12 col-md-3"><input type="number" id="Tel"
                                                    value="{{ $chef->Tel }}" name="Tel" class="form-control" required>
                                            </div>
        
                                            <button type="submit" class="btn btn-light px-4 offset-9"
                                            style="  width: 13%;
                                            background-color: rgb(64, 33, 235);
                                            color: rgb(243, 243, 245);
                                            float: left;
                                            font-weight: bold;">Ajouter</button>
        
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

              

            </div>
        </div>
    </div>
</div>
@include('layout.footer')
