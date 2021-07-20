@include('./parts/header')
    <h2>Bienvenue sur l'admin</h2>
    <h3>Reservation-------------------------------------</h3>
    @foreach ($reservations as $reservation)
    
        <?php dd($reservation -> date) ?>

    @endforeach

    <h3>PAtient-------------------------------------</h3>
    @foreach ($patient as $patient)
    <?php var_dump($patient) ?>

@endforeach

@include('./parts/footer')