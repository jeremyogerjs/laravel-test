@include('./parts/header')
    <h2>Bienvenue sur l'admin voici la liste des rendez vous </h2>
 
    <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">Nom complet du patient</th>
            <th scope="col">contact Patient</th>
            <th scope="col">Date rendez vous</th>
            <th scope="col">Heure du rendez vous</th>
            <th scope="col">Nom complet du médecin</th>
            <th scope="col">contact du médecin</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($reservations as $reservation)
                <tr>
                    <th scope="row">{{ $reservation -> patients -> lastName }} {{ $reservation -> patients -> firstName }}</th>
                    <th scope="row">{{ $reservation -> patients -> email }}</th>
                    <th scope="row">{{ \Carbon\Carbon::parse($reservation -> dateMeeting) -> locale('fr') -> isoFormat('dddd, Do MMMM YYYY') }}</th>
                    <th scope="row">{{ $reservation -> hourMeeting }}</th>
                    <th scope="row">{{ $reservation -> medecins -> lastName }} {{ $reservation -> medecins -> firstName }}</th> 
                    <th scope="row">{{ $reservation -> medecins -> email }}</th>  
                </tr>
            @endforeach
        </tbody>
      </table>

@include('./parts/footer')