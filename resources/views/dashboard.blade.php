@extends('layouts.master')

@section('title')

Inicio

@endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('css/dashboard.css')}}">
@endsection

@section('content')

    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer
                mdl-layout--fixed-header nav-dashboard">

        <header class="mdl-layout__header header-nav-dashboard">

            <div class="mdl-layout__header-row  row-nav-dashboard">
            
                <div class="mdl-layout-spacer" id="separator-nav"></div>

                <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right" id="div-button-search">

                    <label class="mdl-button mdl-js-button mdl-button--icon"
                       for="fixed-header-drawer-exp" id="label-input-search">
                        <i class="material-icons" id="icon-search">search</i>
                    </label>

                    <div class="mdl-textfield__expandable-holder">
                        <input class="mdl-textfield__input" type="text" name="search" id="fixed-header-drawer-exp">
                    </div>

                </div>

            </div>

        </header>


        <div class="mdl-layout__drawer vertical-nav">

            <span class="mdl-layout-title title-vertical-nav">
                <img src="{{asset('/images/photo-user-default/user-default.png')}}" class="photo-user">
                Nombre usuario
            </span>

            <nav class="mdl-navigation option-vertical-nav">

                <span class="mdl-textfield mdl-js-textfield div-users"> 
                    Usuarios   
                </span>

                    <a class="mdl-navigation__link mdl-button mdl-js-button mdl-js-ripple-effect active" id="link-create-users">
                        <img src="{{asset('/images/icons/count-user.png')}}" class="icon-vertical-nav">
                        Crear usuarios  
                    </a>

                    <a class="mdl-navigation__link mdl-button mdl-js-button mdl-js-ripple-effect" id="link-list-users">
                        <img src="{{asset('/images/icons/list-user.png')}}" class="icon-vertical-nav">
                        Listar usuarios 
                    </a>

                <span class="mdl-textfield mdl-js-textfield div-users"> 
                    Inventario   
                </span>

                    <a class="mdl-navigation__link mdl-button mdl-js-button mdl-js-ripple-effect" id="link-movements">
                        <img src="{{asset('/images/icons/movements.png')}}" class="icon-vertical-nav">
                        Movimientos
                    </a>

                    <a class="mdl-navigation__link mdl-button mdl-js-button mdl-js-ripple-effect" id="link-see-movements">
                        <img src="{{asset('/images/icons/see-movements.png')}}" class="icon-vertical-nav">
                        Ver inventario
                    </a>

                <hr>

                    <a class="mdl-navigation__link mdl-button mdl-js-button mdl-js-ripple-effect" id="link-configurations">
                        
                        Configuraciones
                    </a>

                    <a class="mdl-navigation__link mdl-button mdl-js-button mdl-js-ripple-effect" id="link-sign-off">
                        
                        Cerrar sesión
                    </a>



                
                
                

            </nav>

        </div>

        <main class="mdl-layout__content">
            <div class="page-content" id="content-links-dashboard"></div>
        </main>

    </div>
  

@endsection

@section('js')
    <script type="text/javascript" src="{{asset('js/dashboard.js')}}"></script>
@endsection


  
  
