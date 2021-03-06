<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Omnes Santé</title>
    <link rel="icon" sizes="16x16" href="www/OmnesSante/image/logo.jpg">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">


    <script src="https://www.google.com/recaptcha/enterprise.js?render=6LfRWRwgAAAAAABtIEu3fLrQMOljEfb5LN0YNr9q"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>

    <script>
   function onSubmit(token) {
     document.getElementById("demo-form").submit();
   }

       function recaptchaCallback() {
        var btnSubmit = document.getElementById("submitBtn");

        if ( btnSubmit.classList.contains("disabled") ) {
            btnSubmit.classList.remove("disabled");
        }
    }
</script>

    

<link href="../login/assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      .captcha{
        padding: 0;
        color: white;
        font-size: 300%;
      }


    </style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin w-100 m-auto">
  <form method="post" action="check_log.php">
    <a href="../index.php"><img class="img-fluid" src="omnes_sante.png" alt="" width="400" height="400"></a>
    <p style="color: white;font-size:200%;">Connexion</p>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingEmail" name="email" placeholder="name@example.com">
      <label for="floatingInput">Adresse e-mail</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword"  name="password"placeholder="Password">
      <label for="floatingPassword">Mot de passe</label>
    </div>

  

<div class="g-recaptcha" data-sitekey="6LfRWRwgAAAAAABtIEu3fLrQMOljEfb5LN0YNr9q" data-callback="recaptchaCallback"></div>

    
    <button id="submitBtn" class="w-100 btn btn-lg btn-primary disabled" type="submit">Se connecter</button>
    <p>Pas de compte ? <a href="../formulaireregister.php" id="no_account">Inscrivez-vous !</a></p>
    <p class="mt-5 mb-3 text-muted">&copy; Omnes Santé | 2022</p>
  </form>
</main>

<script src="script.js"></script>
  </body>
</html>

<!--
<div class="center">
      <div id="captchaBackground">
        <canvas id="captcha">captcha text</canvas>
      <span id="output"></span>
      </div>
      </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="textBox" placeholder="Captcha">
  <label for="textBox">Captcha</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Se souvenir de moi
      </label>
    </div>-->