
@include('layout.menu')
@include('layout.header')
<title> Profile | ExaFibre </title>

<div class="content">
    <div class="animated fadeIn">

        <div class="badges">
            <div class="row">
                <div class="col-lg-5">

                    <div class="card" >
                        <div class="card-header" style="background-color:rgba(102, 148, 242, 0.459)">
                            <strong>{{ $chef->nom }} </strong>
                            <small>profile 
                            </small>
                        </div>
                        <div class="card-body">
                            nom: {{ $chef->nom }}
                            <br>
                            prenom: {{ $chef->prenom }}
                            <br>
                            email: {{ $chef->mail }}
                            <br>
                            Adresse: {{ $chef->Adresse }}
                            <br>
                            Tel: {{ $chef->Tel }}
                            
                        
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-header" style="background-color:rgba(102, 148, 242, 0.459)">
                            <strong>Modifier </strong><small>profile</small>
                        </div>
                        <div class="card-body">
                                <div class="row">
                          
                                <div class="row form-group">
                                    <div class="col col-md-2"><label for="Adresse"
                                            class=" form-control-label" style="font-size:15px">Adresse: </label></div>
                                    <div class="col-12 col-md-3"><input type="text" id="Adresse"
                                            name="Adresse" class="form-control" value="{{ $chef->Adresse }}" required>
                                    </div>
                                    <div class="col col-md-2"><label for="Tel"
                                            class=" form-control-label" style="font-size:15px">Téléphone:</label>
                                    </div>
                                    <div class="col-12 col-md-3"><input type="number" id="Tel" value="{{ $chef->Tel }}"
                                            name="Tel" class="form-control" required>
                                    </div>

                                </div>
                                <div class="row form-group">
                                   
                                    <div class="col col-md-2"><label for="mail"
                                            class=" form-control-label" style="font-size:15px">Email:</label>
                                    </div>
                                    <div class="col-12 col-md-4"><input type="mail" id="mail" value="{{ $chef->mail }}"
                                            name="mail" class="form-control" required>
                                    </div>
                                   
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
    @include('layout.footer')
