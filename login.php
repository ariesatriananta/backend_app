<!DOCTYPE html><head>
  <meta charset="utf-8" />
  <title>Pendataran Siswa - Login</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="description" />
  <meta content="" name="author" />
  <!-- BEGIN GLOBAL MANDATORY STYLES -->
  <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
  <link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="assets/css/style.css" rel="stylesheet" />
  <link href="assets/css/style-responsive.css" rel="stylesheet" />
  <link href="assets/css/themes/default.css" rel="stylesheet" id="style_color" />
  <link href="assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
  <link href="#" rel="stylesheet" id="style_metro" />
  <!-- END GLOBAL MANDATORY STYLES -->
  <!-- BEGIN PAGE LEVEL STYLES -->  
  <link href="assets/css/pages/login.css" rel="stylesheet" type="text/css" />
  <!-- END PAGE LEVEL STYLES -->
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body>
  <!-- BEGIN LOGO -->
  <div id="logo" class="center">
    <img src="assets/img/logo.png" alt="logo" class="center" /> 
  </div>
  <!-- END LOGO -->
  <!-- BEGIN LOGIN -->
  <div id="login">
    <!-- BEGIN LOGIN FORM -->
    <form id="loginform" class="form-vertical no-padding no-margin" action="lib/ceklogin.php" method="post">
      <p class="center">Masukkan Username dan Password</p>
      <div class="control-group">
        <div class="controls">
          <div class="input-prepend">
            <span class="add-on"><i class="icon-user"></i></span><input name="user" id="input-username" type="text" placeholder="Username" />
          </div>
        </div>
      </div>
      <div class="control-group">
        <div class="controls">
          <div class="input-prepend">
            <span class="add-on"><i class="icon-lock"></i></span><input name="pass" id="input-password" type="password" placeholder="Password" />
          </div>
        </div>
      </div>
      <div class="control-group remember-me">
        <div class="controls">
          <label class="checkbox">
          
          </label>
        </div>
      </div>
      <input type="submit" id="login-btn" class="btn btn-block btn-inverse" value="Login" />
    </form>
    <!-- END LOGIN FORM -->        
    <!-- BEGIN FORGOT PASSWORD FORM -->
    <form id="forgotform" class="form-vertical no-padding no-margin hide" action="php/mail.php" method="post">
      <p class="center">Masukkan email anda untuk reset Password.</p>
      <div class="control-group">
        <div class="controls">
          <div class="input-prepend">
            <span class="add-on"><i class="icon-envelope"></i></span><input id="input-email" type="text" placeholder="Email" />
          </div>
        </div>
        <div class="space10"></div>
      </div>
      <input type="submit" id="forget-btn" class="btn btn-block btn-inverse" value="Submit" />
    </form>
    <!-- END FORGOT PASSWORD FORM -->
  </div>
  <!-- END LOGIN -->
  <!-- BEGIN COPYRIGHT -->
  <div id="login-copyright">
    Test Aplikasi Pendaftaran Siswa (PHP native)<br> Arie Satriananta
  </div>
  <!-- END COPYRIGHT -->
  <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
  <!-- BEGIN CORE PLUGINS -->
  <script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script> 
  <!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->  
  <script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>    
  <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <!--[if lt IE 9]>
  <script src="assets/plugins/excanvas.js"></script>
  <script src="assets/plugins/respond.js"></script> 
  <![endif]-->  
  <script src="assets/plugins/breakpoints/breakpoints.js" type="text/javascript"></script>  
  <script src="assets/plugins/jquery.blockui.js" type="text/javascript"></script> 
  <script src="assets/plugins/jquery.cookie.js" type="text/javascript"></script>
  <script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>  
  <!-- END CORE PLUGINS -->
  <!-- BEGIN PAGE LEVEL SCRIPTS -->
  <script src="assets/scripts/app.js"></script>
  <script src="assets/scripts/login.js"></script> 
  <!-- END PAGE LEVEL SCRIPTS --> 
  <script>
    jQuery(document).ready(function() {     
      // initiate layout and plugins
      App.init();
      Login.init();
    });
  </script>
  <!-- END JAVASCRIPTS -->
  <script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-37564768-1']);
  _gaq.push(['_setDomainName', 'keenthemes.com']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
    
  })();
</script>
</body>
<!-- END BODY -->


<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
</html>