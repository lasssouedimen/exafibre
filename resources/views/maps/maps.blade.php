@include('layout.menu')
@include('layout.header')
    <title>Carte de travaille en cours</title>
   
    <main class="content">
        <div id="wrapper">
            <div class="mb-3">
            </div>
            <div class="clearfix"></div>
            <div class="content-wrapper">
                <div class="container-fluid">
                    <div class="row mt-2">
                        <div class="col-lg-12">
                            <div class="card" style="background-color: rgba(255, 255, 255, 0.488);">
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="card-header"><strong>Carte de travaille</strong></div>
                                        <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
                                        <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
                                        <style>
                                            #map { height: 500px; width: 100%; }
                                        </style>
                                                                          

<div id="map"></div>

</div>
</div>

</div>

</div>

</div>

</main>
<script>
    // Centrer la carte sur la France avec un niveau de zoom approprié
    var map = L.map('map').setView([46.603354, 1.888334], 6);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    // Récupérer les demandes filtrées pour la France
    var demandes = @json($demandes);

    demandes.forEach(function(demande) {
        if (demande.latitude && demande.longitude) {
            L.marker([demande.latitude, demande.longitude])
                .addTo(map)
                .bindPopup(`<b>${demande.pays}</b><br>${demande.ville}<br>${demande.adresse}`);
        }
    });
</script>

@include('layout.footer')
