
@include('layout.menu')
@include('layout.header')
    <title>Carte des Demandes en France</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <style>
        #map { height: 600px; width: 100%; }
    </style>

    <h1>Carte des Demandes en France</h1>
    <div id="map"></div>

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
                    .bindPopup(`<b>${demande.pays_demande}</b><br>${demande.ville_demande}`);
            }
        });
    </script>
@include('layout.footer')
