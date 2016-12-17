<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Kycu</title>
  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


      <link rel="stylesheet" href="css/style.css">


</head>

<body>
  <div class="form">

      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Regjistrohu</a></li>
        <li class="tab"><a href="#login">Kyçu</a></li>
      </ul>

      <div class="tab-content">
        <div id="signup">
          <h1>Regjistrohu k&euml;tu</h1>

          <form action="regjistrimi.php" method="GET">

          <div class="top-row">
            <div class="field-wrap">
              <label>
                Emri<span class="req">*</span>
              </label>
              <input type="text" name="emri" required autocomplete="off" />
            </div>

            <div class="field-wrap">
              <label>
                Mbiemri<span class="req">*</span>
              </label>
              <input type="text" name="mbiemri" required autocomplete="off"/>
            </div>
          </div>

           <div class="field-wrap">
            <label>
              Pseudonimi<span class="req">*</span>
            </label>
            <input type="text" name="pseudonimi" required autocomplete="off"/>
          </div>


          <div class="field-wrap">
            <label>
              E-mail<span class="req">*</span>
            </label>
            <input type="email" name="email" required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
              Fjal&euml;kalimi<span class="req">*</span>
            </label>
            <input type="password" name="fjalekalimi" required autocomplete="off"/>
          </div>
            <div class="field-wrap">
            <label>
              Qyteti<span class="req">*</span>
            </label>
            <input type="text" name="qyteti" required autocomplete="off"/>
          </div>

          <button type="submit" class="button button-block"/>Regjistrohu</button>

          </form>

        </div>
        <form action="login.php" method="GET">
         <div id="login">
          <h1>Mir&euml; se erdh&euml;t</h1>
            <div class="field-wrap">
            <label>
              E-mail<span class="req">*</span>
            </label>
            <input type="email" name="email" required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
              Fjal&euml;kalimi<span class="req">*</span>
            </label>
            <input type="password" name="fjalekalimi" required autocomplete="off"/>
          </div>

          <p class="forgot"><a href="#">Keni harruar fjal&euml;kalimin?</a></p>

          <button class="button button-block"/>Kyçu</button>

          </form>

        </div>

      </div><!-- tab-content -->

</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
