<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('css/material/material.min.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('css/colors-global.css')}}">
</head>
<body>

<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer
            mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <div class="mdl-layout-spacer"></div>
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                  mdl-textfield--floating-label mdl-textfield--align-right">
        <label class="mdl-button mdl-js-button mdl-button--icon"
               for="fixed-header-drawer-exp">
          <i class="material-icons">search</i>
        </label>
        <div class="mdl-textfield__expandable-holder">
          <input class="mdl-textfield__input" type="text" name="sample"
                 id="fixed-header-drawer-exp">
        </div>
      </div>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Title</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" id="login">Login</a>
      <a class="mdl-navigation__link" id="sign-up">Sign-up</a>
      <a class="mdl-navigation__link" href="">Link</a>
      <a class="mdl-navigation__link" href="">Link</a>
    </nav>
  </div>
  <main class="mdl-layout__content">
    <div class="page-content" id="content">xd</div>
  </main>
</div>

 	<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>

	<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>

	<script type="text/javascript" src="{{asset('js/material/material.min.js')}}"></script>
	
	<script type="text/javascript" src="{{asset('js/dashboard.js')}}"></script>

</body>
</html>