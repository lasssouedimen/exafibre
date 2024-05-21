@include('layout.menu')
@include('layout.header')
<title> Parking | ExaFibre </title>
<main class="content">
    <div class="clearfix"></div>
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row mt-3">
                <div class="col-lg-12">
                    <div class="card" style="background-color: rgba(255, 255, 255, 0.488);">
                        <div class="card-body">

                            <div class="form-group">
                                @if ($find == 0)
                                    <a id="add" type="button"
                                        onclick="openModalParam('','','','','','','Ajouter')" class="btn btn-light px-2"
                                        style="font-size:12px ; background-color:rgb(64, 33, 235) ;color:rgb(243, 243, 245) ; float: right ; margin-top:8px ">
                                        <i class="bi bi-plus-circle-fill"></i><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor"
                                            class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z" />
                                        </svg>Ajouter</a>
                                @endif
                                <div class="card-header"><strong>Parameters</strong></div>
                                <div class="card-body card-block">
                                </div>

                            </div>
                            {{-- <button id="add" type="button" class="btn btn-primary icon-btn"  onclick="openModalParam('','','','','','','','Ajouter')" style="margin-left: 1150px;">
        <i class="fa fa-plus"></i>Ajouter
    </button>  --}}
                            <div class="row" style=" color: black;">
                                <table class="table" id="myTable">
                                    <thead>
                                        <tr>
                                            <th>Nom </th>
                                            <th>Logo</th>
                                            <th>E-mail</th>
                                            <th>Téléphone </th>
                                            <th>Adresse</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($parameters as $parameter)
                                            <tr>
                                                <td>{{ $parameter->nom }}</td>
                                                <td scope="row">
                                                    <img src="{{ asset('images') }}/{{ $parameter->logo }}"
                                                        alt="Pas de photo" style=" object-fit: cover;width:23%;height: 44%;">
                                                </td>
                                                <td>{{ $parameter->email }}</td>
                                                <td>{{ $parameter->tel }}</td>
                                                <td>{{ $parameter->Adresse }}</td>
                                                <td>
                                                    <button class="btn btn-warning" type="submit"
                                                        style="margin-left: 3px;padding-left: 20px;"
                                                        onclick="openModalParam('{{ $parameter->nom }}','{{ $parameter->logo }}','{{ $parameter->email }}','{{ $parameter->tel }}','{{ $parameter->Adresse }}','{{ $parameter->id }}','Modifier')"
                                                        style="margin: 0 auto; "><i class="fa fa-pencil-square-o"
                                                            aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>


                        <!-- Modal -->
                        <div class="modal fade" id="addparam" tabindex="-1" role="dialog"
                            aria-labelledby="addparamLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addparamLabel">Ajouter une catégorie
                                            d'animale</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form id="formParam" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('POST')
                                        <div class="modal-body">
                                            <p class="alert alert-danger" style="display:none" id="msgerr">
                                            </p>
                                            <div class="form-group row">
                                                <label for="name" class="col-sm-2 col-form-label">Nom</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control form-control-user"
                                                        id="nom" name="nom">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="name" class="col-sm-2 col-form-label">Logo</label>
                                                <div class="col-sm-10">
                                                    <img src="" alt="Pas de photo" width="50" height="60"
                                                        id="imgrest">
                                                    <input type="file" class="form-control-file" id="logo"
                                                        name="logo"
                                                        accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="name" class="col-sm-2 col-form-label">E-mail</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control " id="email"
                                                        name="email" pattern=".+@globex\.com" size="30" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="name" class="col-sm-2 col-form-label">Téléphone</label>
                                                <div class="col-sm-10">
                                                    <input type="number" class="form-control form-control-user"
                                                        id="tel" name="tel">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="name" class="col-sm-2 col-form-label">Adresse</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control form-control-user"
                                                        id="Adresse" name="Adresse">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" onclick="verifparam()"
                                                id='myButton'>Enregistrer</button>
                                            <button type="button" data-dismiss="modal"
                                                class="btn btn-secondary">Annuler</button>
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
    //calculer le nombre de chiffre dans une chaine
    function countNumbers(ch) {
        count = 0;
        for (let i = 0; i < ch.length; i++) {
            if (!isNaN(parseInt(ch[i]))) {
                count++;
            }
        }
        return count;
    }
     function openModalParam(nom, logo, email, tel, Adresse, id, action) {
        if (action == "Modifier") {
            $("#imgrest").show();
            $("#nom").val(nom);
            $("#email").val(email);
            $("#tel").val(tel);
            $("#Adresse").val(Adresse);
       
            $("#imgrest").attr('src', "{{ asset('images') }}/" + logo);
            $("#formParam").attr('action', "parameter/" + id);
            $("input[name='_method']").val('put');
        } else {
            $("#nom").val("");
            $("#email").val("");
            $("#tel").val("");
            $("#Adresse").val("");
          
            $("#imgrest").hide();
            $("#formParam").attr('action', "{{ route('parameters.store') }}");
            $("input[name='_method']").val('post');
        }
        $("#addparamLabel").html(action + " les informations du MRT ENERGIE")
        $('#addparam').modal("show");
    }
    function verifparam(){
        msg='';
        find=0;
        msgerr=document.getElementById("msgerr");
        var nom =$("#nom").val().trim();
        var email =$("#email").val().trim();
        var tel =$("#tel").val().trim();
        var Adresse =$("#Adresse").val().trim();
   
        if(nom.length==0){
            msg=msg+"- Vous devez choisir le nom !</br>";
            find=1;
        }else if(nom.length<4){
            msg=msg+"- Vous devez choisir un nom avec un longeur >=4!</br>";
            find=1;
        }else if (!isNaN(nom)){
            msg=msg+"- Le nom ne doit étre pas numérique!</br>";
            find=1;
        }else{
            nb = countNumbers(nom);
            if(nb>2){
                find=1;
                msg=msg+"- Le nom doit contenire au maximaume 2 chiffre!";
            }
        }
        if(email.length==0){
            msg=msg+"- Vous devez choisir l'adresse e-mail !</br>";
            find=1;
        }else if(email.indexOf('@')==-1){
            msg=msg+"- L'e-mail doit conterir @ !</br>";
            find=1;
        }
        if(tel.length==0){
            msg=msg+"- Vous devez choisir le numéro de telephone !</br>";
            find=1;
        }else if(tel.length <8){
            msg=msg+"- Le numéro doit contenir au moins 8 chiffre !</br>";
            find=1;
        }
        if(Adresse.length ==0){
            msg=msg+"- Vous devez choisir l'adresse !</br>";
            find=1;
        }
        
        if(find==0){
            const myButton = document.querySelector('#myButton');
            myButton.disabled = true;
           $("#formParam").submit();
           console.log('tsagal');
        }else{
            msgerr.style.display = "block";
            msgerr.innerHTML =msg;
        }
    }
</script>