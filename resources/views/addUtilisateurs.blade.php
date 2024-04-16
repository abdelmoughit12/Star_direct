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
    <form class="form-inline">
        <div class="row mb-2">
            <div class="col">
                <label for="inlineFormInputName2" class="pr-2">Nom :</label>
                <input type="text" class="form-control" id="inlineFormInputName2" placeholder="Nom du utilisateur">
            </div>
            <div class="col">
                <label for="inlineFormInputGroupUsername2" class="pr-2">Prénom :</label>
                <input type="text" class="form-control" placeholder="Prénom du utilisateur" id="inlineFormInputGroupUsername2">
            </div>
            <div class="col">
                <label for="inlineFormInputGroupUsername2" class="pr-2">Email :</label>
                <input type="text" class="form-control" placeholder="Email du utilisateur" id="inlineFormInputGroupUsername2">
            </div>
        </div>
    
        <div class="row mb-2">
           
            <div class="col">
                <label for="inlineFormInputGroupUsername2" class="pr-2">Téléphone :</label>
                <input type="text" class="form-control" placeholder="Téléphone du utilisateur" id="inlineFormInputGroupUsername2">
            </div>
           <div class="col">
                <label for="inputTypeSelect" class="pr-2">Type :</label>
                <select class="form-control" id="inputTypeSelect">
                    <option value="">Sélectionner un type</option>
                    <option value="responsable">Responsable</option>
                    <option value="vendeur">Vendeur</option>
                    <option value="client">Client</option>
                    <option value="fournisseur">Fournisseur</option>
                </select>
            </div>
            <div class="row mb-6">           
                 <button type="submit" class="btn btn-primary mt-2">Ajouter</button>
            </div>

     </div>
    
           
    </form>
    
      
    


    
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
