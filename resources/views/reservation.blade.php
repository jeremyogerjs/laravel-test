@include('./parts/header')

<div class="col-6 border-2 m-3 mx-auto">
<h2 class="text-center my-2">Réservation</h2>
    <form method="POST">
        @csrf
        <div class="my-2 d-flex align-items-end justify-content-between">
            <div class="">
              <label for="patientFirstName" class="form-label">Votre nom</label>
              <input type="text" class="form-control" name="name" id="patientFirstName" placeholder="Nom de famille" aria-describedby="patientFirstNameHelp">
            </div>
            <div class="">
                <label for="patientLastName" class="form-label">Votre prenom</label>
                <input type="text" class="form-control" name="name" id="patientLastName" placeholder="prenom" aria-describedby="patientLastNameHelp">
            </div>
        </div>
        <div class="mb-3">
            <label for="patientMail" class="form-label">Votre email</label>
            <input type="text" class="form-control" id="patientMail" name="mail" placeholder="example@example.com" aria-describedby="patientmailHelp">
        </div>
        <div class="mb-3">
            <select class="form-select" aria-label="Default select example">
                <option selected>Choississez votre medecin</option>
                @foreach ($medecins as $medecin)
                    <option value="{{ $medecin->id }}">{{ $medecin->lastName }} {{ $medecin->firstName }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="dateMeeting" class="form-label">Date du rendez vous</label>
            <input type="date" class="form-control" id="dateMeeting" name="date" aria-describedby="dateMeetingHelp">
        </div>
        <div class="mb-3">
            <label for="timeMetting" class="form-label">Heure du rendez vous</label>
            <input type="time" class="form-control" id="timeMetting" name="timeMeeting" aria-describedby="timeMettingHelp">
        </div>
        <button type="submit" class="btn btn-primary">Réserver</button>
    </form>
</div>

@include('./parts/footer')