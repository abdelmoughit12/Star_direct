<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <!-- Inclure Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <x-navbr />

    <form class="form-inline d-flex align-items-center">
        <label for="inlineFormInputName2" class="pr-2">Nom du Magasin: </label> &nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" class="form-control mb-2" id="inlineFormInputName2" style="width: 160px "placeholder="Nom du Magasin" style="margin-right: 10px;">&nbsp;&nbsp;
    
        <label for="inlineFormInputGroupUsername2" class="pr-2">Adresse du Magasin: </label>&nbsp;&nbsp;&nbsp;
        <div class="input-group mb-2" style="width: 180px" style="margin-right: 10px;">
            <input type="text" class="form-control"placeholder="Adresse du Magasin" id="inlineFormInputGroupUsername2">
        </div>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <label for="inputTypeSelect" class="pr-2">Type: </label>&nbsp;&nbsp;&nbsp;&nbsp;
        <div class="form-group mb-2" >
            &nbsp;&nbsp; &nbsp;&nbsp; 
            <select class="form-control mb-4 pr-4" id="inputTypeSelect">
                <option value="">Select Type</option>
                <option value="option1">Principale</option>
                <option value="option2">Secondaire</option>
            </select>
        </div>
        &nbsp;&nbsp;        &nbsp;&nbsp;
        <button type="submit" class="btn btn-primary mb-2">Ajouter</button>
    </form>
    
      
      
    {{-- <ul>
        @foreach($magazinesPrincipaux as $magazinePrincipal)
            <li>{{ $magazinePrincipal->nom }}</li>
            <ul>
                @foreach($magazinesSecondaires->where('principal_id', $magazinePrincipal->id) as $magazineSecondaire)
                    <li>{{ $magazineSecondaire->nom }}</li>
                @endforeach
            </ul>
        @endforeach
    </ul>
     --}}
   
      <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
