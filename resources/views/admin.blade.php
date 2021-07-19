@include('./parts/header')
    <h2>Bienvenue sur l'admin</h2>

    @foreach ($reservations as $reservation)
        <?php var_dump($reservation) ?>

    @endforeach

@include('./parts/footer')