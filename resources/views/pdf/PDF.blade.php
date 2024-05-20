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
            height: 100px;
        }

        h1 {
            border-top: 1px solid #5D6975;
            border-bottom: 1px solid #5D6975;
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
            border-top: 1px solid #5D6975;
            ;
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

<img src="{{asset('assets/img/icons/Sans titr.jpg')}}" alt="Logo">
    <div class="card-header"><strong>Fiche de Stock   </strong></div>
    <br>
    <br>
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
                @if ($stocks->libellé == 'Entree')
                    <tr>
                        <td> {{ $stocks->date }}</td>
                        <td>{{ $stocks->libellé }}</td>
                        <td>{{ $stocks->qte }}</td>
                        <td>{{ $stocks->prixunitaire }}€</td>
                        <td>{{ $stocks->valeur }}</td>
                    @elseif($stocks->libellé == 'Sortie')
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
    
    <a class="btn " type="button" style="margin-left: 352px; padding-left: 200px; background-color: #000000;" href="{{route('generate-pdf')}}" >
</body>



    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
