<h1>Gestion des réservation </h1>
<button nonclick="redirectToDestinations()">Destinations</button>
<button onclick="redirectToReservations()">Réservations</button>
<button onclick="redirectToPaiements()">Paiements</button>
<button onclick="redirectToClients()">Clients</button>

<script type="text/javascript">

    // Function pour rediriger vers le fichier DestinationsController
    function redirectToDestinations() {
        // window.location est une function JS déjà crée qui nous permet avec le replace d'être rediriger vers un autre URL
        window.location.replace('./Controllers/DestinationsController.php');
    }

    function redirectToDestinations() {
        window.location.replace('./Controllers/ReservationsController.php');
    }

    function redirectToPaiements() {
        window.location.replace('./Controllers/PaiementsController.php');
    }
    function redirectToClients() {
        window.location.replace('./Controllers/ClientsController.php');
    }

</script>