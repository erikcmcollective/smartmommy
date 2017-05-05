<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * CMC is powered by Meneerik
 * 
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')):
    throw new NotFoundException('Please replace src/Template/Pages/home.ctp with your own version.');
endif;

$cakeDescription = 'CakePHP: the rapid development PHP framework';
?>
<!DOCTYPE html>
<html>
<head>
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="http://dev.smartmommy.nl/css/materialize.min.css"  media="screen,projection"/>
        <!--Import Fontawesome fonts-->
        <link rel="stylesheet" href="http://dev.smartmommy.nl/css/font-awesome.min.css">
        <!--Import smartmommy.css-->
        <link type="text/css" rel="stylesheet" href="http://dev.smartmommy.nl/css/smartmommy.css"  media="screen,projection"/>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
    <body>
    <div class="container">
        <header>
            <div class="row" style="padding-top: 10px;">
                <div class="col s12 m4">
                    <img class="responsive-img" src="../../../webroot/img/logo-klein2.png">
                </div>
                <div class="col s12 m8">
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js">
                        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- SM2 top banner -->
                        <ins class="adsbygoogle"
                             style="display:block"
                             data-ad-client="ca-pub-9427996168948323"
                             data-ad-slot="4161807427"
                             data-ad-format="auto"></ins>
                        <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                </div>
            </div>
            <nav>
                <div class="nav-wrapper">
                    <ul class="right hide-on-med-and-down">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Categorieen</a></li>
                        <li><a href=#">Contact</a></li>
                    </ul>
                    <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
                </div>
            </nav>  
        </header>

<!--begin artikel-->
<main>
    <div class="row">
        <h4 class="center-align">Title</h4>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
    </div> 
    <div class="row center-align">
        <img class="responsive-img" src="../../../webroot/img/articles/2017/04/tandenfee (1).jpg" alt=""/>
    </div>
    <div class="row">
        <div class="col s4"><a class="waves-effect waves-light btn pink accent-2"><i class="material-icons left">chevron_left</i>vorige</a></div>
        <div class="col s2 red center-align">1 van 3</div>
        <div class="col s4"><a class=" aves-effect waves-light btn pink accent-2 right"><i class="material-icons right">chevron_right</i>volgende</a></div>
    </div>
</main>
<!--einde artikel-->
    </div>
<!--begin footer-->
<footer class="page-footer">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h5 class="white-text">Footer Content</h5>
        <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
      </div>
      <div class="col l4 offset-l2 s12">
        <h5 class="white-text">Links</h5>
        <ul>
          <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
          <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
          <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
          <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
    Made with <i class="white-text  fa fa-heart" aria-hidden="true"></i> by Trivada
    <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
    </div>
  </div>
</footer>
<!--einde footer-->

        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="http://dev.smartmommy.nl/js/materialize.min.js"></script>

        <div id="fb-root"></div>
        <script>(function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v2.8&appId=698097693641586";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
    </body>
</html>
