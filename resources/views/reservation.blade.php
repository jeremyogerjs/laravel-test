@include('./parts/header')

<div class="col-6 border-2 m-3 mx-auto">
<h2 class="text-center my-2">Réservation</h2>
    <form method="POST" action="/reservation">
        @csrf
        <div class="my-2 d-flex align-items-end justify-content-between">
            <div class="">
              <label for="patientFirstName" class="form-label">Votre nom</label>
              <input type="text" class="form-control" name="patientFirstName" id="patientFirstName" placeholder="Nom de famille" aria-describedby="patientFirstNameHelp">
              <div id="patientFirstNameHelp" class="text-danger">
                @error('patientFirstName')
                    {{ $message }} 
                @enderror
            </div>
            </div>
            <div class="">
                <label for="patientLastName" class="form-label">Votre prenom</label>
                <input type="text" class="form-control" name="patientLastName" id="patientLastName" placeholder="prenom" aria-describedby="patientLastNameHelp">
                <div id="patientLastNameHelp" class="text-danger">
                    @error('patientLastName')
                        {{ $message }} 
                    @enderror
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="patientMail" class="form-label">Votre email</label>
            <input type="text" class="form-control" id="patientMail" name="patientMail" placeholder="example@example.com" aria-describedby="patientmailHelp">
            <div id="patientmailHelp" class="text-danger">
                @error('patientMail')
                    {{ $message }} 
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <select class="form-select" aria-label="Default select example" name="idMedecin" aria-describedby="idMedecinHelp">
                <option value="" selected>Choississez votre medecin</option>
                @foreach ($medecins as $medecin)
                    <option value="{{ $medecin->id }}">{{ $medecin->lastName }} {{ $medecin->firstName }}</option>
                @endforeach
            </select>
            <div id="idMedecinHelp" class="text-danger">
                @error('idMedecin')
                    {{ $message }} 
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="dateMeeting" class="form-label">Date du rendez vous</label>
            <input type="date" class="form-control" id="dateMeeting" value=" {{ old('dateMeeting') }} " name="dateMeeting" aria-describedby="dateMeetingHelp">
            <div id="dateMeetingHelp" class="text-danger">
                @error('dateMeeting')
                    {{ $message }} 
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="hourMeeting" class="form-label">Heure du rendez vous</label>
            <input type="time" class="form-control" id="hourMeeting" name="hourMeeting" aria-describedby="timeMettingHelp">
            <div id="timeMettingHelp" class="text-danger">
                @error('hourMeeting')
                    {{ $message }} 
                @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Réserver</button>
    </form>
</div>

@include('./parts/footer')