<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>INSCRIPTION</title>
  <style>
    body {
      background-color: #041937;
    }

    .modal-body {
      background-color: #041937;
      color: #EC6834;
    }

    .modal-content {
      background-color: #041937;
      color: #EC6834;
      justify-content: center;
    }

    h1 {
      color: #EC6834;
    }

    #button1 {
      background-color: #EC6834;
      color: #041937;
      position: relative;
      left: 70%;
    }

    #button2 {
      background-color: #EC6834;
      color: #041937;
    }

    .text-center {
      color: #EC6834;
    }
  </style>
</head>
<body>
  <section class="vh-100" style="background-color: #041937">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                  <a href="../index.php">
                    <button type="button" class="btn btn-outline-danger my-3">Retour</button>
                  </a>
                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">INSCRIPTION</p>
                  <form method="POST" action="../../src/Controller/Inscription/inscription_target.php" class="mx-1 mx-md-4">
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example1c">Nom d'utilisateur</label>
                        <input type="text" name="login" id="form3Example1c" class="form-control" required />
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example4c">Mot de passe</label>
                        <input type="password" name="mdp1" id="form3Example4c" class="form-control" required />
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example4cd">Confirmer mot de passe</label>
                        <input type="password" name="mdp" id="form3Example4cd" class="form-control" required />
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example1c">Pseudo</label>
                        <input type="text" id="form3Example1c" name="pseudo" class="form-control" required />
                      </div>
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example1c">Nom</label>
                        <input type="text" id="form3Example1c" name="surname" class="form-control" required />
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example1c">Prénom</label>
                        <input type="text" name="name" id="form3Example1c" class="form-control" required />
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3c">Date de naissance</label>
                        <input type="date" name="Date_naissance" id="form3Example3c" class="form-control" required />
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3c">Numéro de téléphone</label>
                        <input type="tel" name="telephone" id="form3Example3c" class="form-control" required />
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3c">Langue</label>
                        <input type="text" name="langue" id="form3Example3c" class="form-control" required />
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3c">Ville de résidence</label>
                        <input type="text" name="ville" id="form3Example3c" class="form-control" required />
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3c">Code Postal</label>
                        <input type="text" name="codePostal" id="form3Example3c" class="form-control" required />
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3c">Adresse de résidence</label>
                        <input type="text" name="adresse" id="form3Example3c" class="form-control" required />
                      </div>
                    </div>
                    <div class="form-check d-flex justify-content-center mb-5">
                      <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                      <label class="form-check-label" for="form2Example3">
                        J'accepte toutes les déclarations dans les conditions d'utilisation </a>
                      </label>
                    </div>
                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                      <button type="submit" value="submit" class="btn btn-primary btn-lg">Valider</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>