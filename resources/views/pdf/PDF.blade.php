<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <title>Example 1</title>
    <link rel="stylesheet" href="style.css" media="all" />
    <style>
        .clearfix:after {
  content: "";
  display: table;
  clear: both;
}

a {
  color: #5D6975;
  text-decoration: underline;
}

body {
  position: relative;
  width: 19cm;  
  height: 29.7cm; 
  margin: 0 auto; 
  color: #001028;
  background: #FFFFFF; 
  font-family: Arial, sans-serif; 
  font-size: 12px; 
  font-family: Arial;
}

header {
  padding: 10px 0;
  margin-bottom: 30px;
}

#logo {
  text-align: center;
  margin-bottom: 10px;
}

#logo img {
  width: 120px;
  height:100px; 
}

h1 {
  border-top: 1px solid  #5D6975;
  border-bottom: 1px solid  #5D6975;
  color: #5D6975;
  font-size: 2.4em;
  line-height: 1.4em;
  font-weight: normal;
  text-align: center;
  margin: 0 0 20px 0;
  background: url(dimension.png);
}

#project {
  float: left;
}

#project span {
  color: #5D6975;
  text-align: right;
  width: 52px;
  margin-right: 10px;
  display: inline-block;
  font-size: 0.8em;
}

#company {
  float: right;
  text-align: right;
}

#project div,
#company div {
  white-space: nowrap;        
}

table {
  width: 100%;
  border-collapse: collapse;
  border-spacing: 0;
  margin-bottom: 20px;
}

table tr:nth-child(2n-1) td {
  background: #F5F5F5;
}

table th,
table td {
  text-align: center;
}

table th {
  padding: 5px 20px;
  color: #5D6975;
  border-bottom: 1px solid #C1CED9;
  white-space: nowrap;        
  font-weight: normal;
}

table .service,
table .desc {
  text-align: left;
}

table td {
  padding: 20px;
  text-align: right;
}

table td.service,
table td.desc {
  vertical-align: top;
}

table td.unit,
table td.qty,
table td.total {
  font-size: 1.2em;
}

table td.grand {
  border-top: 1px solid #5D6975;;
}

#notices .notice {
  color: #5D6975;
  font-size: 1.2em;
}

footer {
  color: #5D6975;
  width: 100%;
  height: 30px;
  position: absolute;
  bottom: 0;
  border-top: 1px solid #C1CED9;
  padding: 8px 0;
  text-align: center;
}
</style>

  </head>
  <body>
    <header class="clearfix">
      <h1>Facture N°</h1>
      <div id="company" class="clearfix">
        <div id="logo">
           {{--  @foreach($parameters as $parameter)
                <img src="{{asset('images')}}/{{ $parameter->logo }}" alt="Girl in a jacket" >
            @endforeach --}}
          </div>
      </div>
      <div id="project">
        @foreach($parameters as $parameter)
        {{ $parameter->nom }}    
    @endforeach
</div>
<div>
@foreach($parameters as $parameter)
    {{ $parameter->rib }}    
@endforeach<br /> 
@foreach($parameters as $parameter)
        {{ $parameter->mf }}    
@endforeach</div>
<div>
    @foreach($parameters as $parameter)
        {{ $parameter->tel }}    
    @endforeach
</div>
<div>
    @foreach($parameters as $parameter)
        {{ $parameter->email }}    
    @endforeach
</a>
        <div><span>CLIENT</span> 
        @foreach($clients as $client)
            @if($client->id==$facturevente->clientID)
                {{ $client->nom }}
            @endif
            
        @endforeach</div>
        <div><span>ADDRESS</span>
          @foreach($clients as $client)
              @if($client->id==$facturevente->clientID)
                  {{ $client->adresse }}
              @endif
              
          @endforeach
        </div>
        <div><span>EMAIL</span>
            @foreach($clients as $client)
              @if($client->id==$facturevente->clientID)
                  {{ $client->email }}
              @endif
            
            @endforeach
      </div>
        <div><span>DATE</span> {{$stock->created_at->format('m/d/Y')}}</div>
      </div>
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th>Type </th>
            <th>Nom</th>
            <th>Quantité </th>
            <th>PU </th>
            <th>TVA </th>
            <th>PTHT </th>
            <th>PTTTC </th>
          </tr>
        </thead>
        <tbody>
            @foreach($lignfactvents as $lignfactvent)
          <tr>
           
                <td class="service">
                    @if ($lignfactvent->type=== 0)
                        Lait
                    @elseif ($lignfactvent->type=== 1)
                        Oeuf
                    @elseif ($lignfactvent->type=== 2)
                        Vache
                    @else
                        Poulet
                    @endif
                </td>  
                <td class="service">
                    @if ($lignfactvent->type=== 0)
                                Lait
                            @elseif ($lignfactvent->type=== 1)
                                Oeuf
                            @elseif ($lignfactvent->type=== 2)
                                @foreach($vaches as $vache)
                                    @if ($vache->id=== $lignfactvent->vacheID)
                                        N°  {{$vache->num}}
                                    @endif
                                @endforeach
                            @else
                                @foreach($poulets as $poulet)
                                    @if ($poulet->id=== $lignfactvent->pouletID)
                                         {{$poulet->created_at->format('m/d/Y')}}
                                    @endif
                                @endforeach
                            @endif
                </td>   
                <td class="qty">
                  @if($lignfactvent->type=== 2)
                    1
                  @elseif ($lignfactvent->type=== 3)
                      @foreach($poulets as $poulet)
                          @if ($poulet->id=== $lignfactvent->pouletID)
                              {{$poulet->nb}}
                          @endif
                      @endforeach
                  @else
                    {{ $lignfactvent->quantite }}
                  @endif
                </td>  
                <td class="unit">{{$lignfactvent->prixU}}</td>  
                <td class="unit">{{$lignfactvent->TVA}}%</td> 
                <td class="unit">{{$lignfactvent->THT}}</td>   
                <td class="unit">{{$lignfactvent->PTTTC}}</td>  
        </tr>
        @endforeach
          <tr>
          <tr>
            <td colspan="6">Prix Totale THT</td>
            <td class="total">{{$facturevente->MTHT}}DT</td>
          </tr>
          <tr>
            <td colspan="6">Totale TVA</td>
            <td class="total">{{$facturevente->totTVA}}DT</td>
          </tr>
          <tr>
            <td colspan="6" class="grand total">Mentant Totale</td>
            <td class="grand total">{{ $facturevente->MT }}DT</td>
          </tr>
        </tbody>
      </table>
      
    </main>
    <footer>
      Invoice was created on a computer and is valid without the signature and seal.
    </footer>
    <a class="btn " type="button" style="margin-left: 1000px; padding-left: 15px; background-color: #000000;" href="{{route('generate-pdf',$facturevente->id)}}" >
  </body>
</html>