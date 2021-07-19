@include('./parts/header')

<div class="col-4 border-2 m-3 mx-auto">
<h2 class="text-center my-2">Réservation</h2>
    <form>
        <div class="mb-3">
          <label for="patientName" class="form-label">Nom du patient</label>
          <input type="text" class="form-control" name="name" id="patientName" aria-describedby="patientNameHelp">
          <div id="patientName" class="form-text">Indiquer votre nom</div>
        </div>
        <div class="mb-3">
            <label for="patientMail" class="form-label">Nom du patient</label>
            <input type="text" class="form-control" id="patientMail" name="mail" aria-describedby="patientmailHelp">
            <div id="patientmailHelp" class="form-text">Indiquer votre email</div>
        </div>
        <div class="mb-3">
            <label for="dateMeeting" class="form-label">Date du rendez vous</label>
            <input type="date" class="form-control" id="dateMeeting" name="date" aria-describedby="dateMeetingHelp">
            <div id="dateMeetingHelp" class="form-text">Indiquer le jour du rendez vous.</div>
        </div>
        <div class="mb-3">
            <label for="timeMetting" class="form-label">Heure du rendez vous</label>
            <input type="text" class="form-control" id="timeMetting" name="timeMeeting" aria-describedby="timeMettingHelp">
            <div id="timeMettingHelp" class="form-text">Indiquer l'heure de rendez vous.</div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@include('./parts/footer')