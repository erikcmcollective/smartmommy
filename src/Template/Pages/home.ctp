<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
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
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <!--Import Fontawesome fonts-->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!--Import smartmommy.css-->
        <link type="text/css" rel="stylesheet" href="css/smartmommy.css"  media="screen,projection"/>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
    <body>
        <div class="container">
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
            <div class="row">
                <div class="col s12 m4">
                    <div class="card small">
                        <div class="card-image">
                            <a href="#"><img src="img/featured1.jpg"/></a>
                        </div>
                        <div class="card-content">
                            <p>Een paar super schattige IKEA hacks voor je kinderen</p>
                        </div>
                        <div class="card-action">
                            <i class="red-text material-icons">favorite_border</i>
                            <i class="blue-text material-icons">share</i>
                            <button onclick="fbshare()">Click me</button>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card small">
                        <div class="card-image">
                            <img src="img/featured2.jpg"/>
                        </div>
                        <div class="card-content">
                            <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action">
                            <i class="red-text material-icons">favorite</i>
                            <a href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href),'facebook-share-dialog','width=626,height=436');return false;"><i class="right blue-text fa fa-facebook-square fa-2x"></i></a>
                        </div>
                    </div>
                    <script>
                    function fbshare(ccount) {

        nametxt = sprintf('I just scored %s out of 10', ccount);

        if (ccount === 0) {
            nametxt = 'Smart Mommy';
        }

        FB.ui({
            method: 'feed',
            name: nametxt,
            link: "http://smartmommy.nl",
            picture: "http://dev.smartmommy.nl/img/featured1.jpg",
            caption: "Een paar super schattige IKEA hacks voor je kinderen",
            description: 'Smart Mommy'

        });
    }
    </script>
                </div>
                <div class="col s12 m4">
                    <div class="card small">
                        <div class="card-image">
                            <img src="img/featured3.jpg"/>
                        </div>
                        <div class="card-content">
                            <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action">
                            <i class="red-text material-icons">favorite_border</i>
                            <i class="blue-text material-icons">share</i>
                        </div>
                    </div></div>
            </div>
            <div class="row">
                <div class="col s12 m4">
                    <div class="card small">
                        <div class="card-image">
                            <img src="img/featured4.jpg"/>
                        </div>
                        <div class="card-content">
                            <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action">
                            <i class="blue-text text-darken-3 fa fa-thumbs-up fa-2x" aria-hidden="true"></i>
                            <i class="right blue-text text-darken-3 fa fa-share fa-2x" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card small">
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- SM test -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-9427996168948323"
     data-ad-slot="6057343021"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div></div>
                <div class="col s12 m4"><div class="card small">
                        <div class="card-image">
                            <img src="img/featured6.jpg"/>
                        </div>
                        <div class="card-content">
                            <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action">
                            <i class="blue-text text-darken-3 fa fa-thumbs-up fa-2x" aria-hidden="true"></i>
                            <i class="right blue-text text-darken-3 fa fa-share fa-2x" aria-hidden="true"></i>
                        </div>
                    </div></div>
            </div>
            <div class="row">
                <div class="col s12 m4">
                    <div class="card small">
                        <div class="card-image">
                            <img src="img/featured7.png"/>
                        </div>
                        <div class="card-content">
                            <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action">
                            <i class="blue-text text-darken-3 fa fa-thumbs-up fa-2x" aria-hidden="true"></i>
                            <i class="right blue-text text-darken-3 fa fa-share fa-2x" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4"><div class="card small">
                        <div class="card-image">
                            <img src="img/featured8.png"/>
                        </div>
                        <div class="card-content">
                            <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action">
                            <i class="blue-text text-darken-3 fa fa-thumbs-up fa-2x" aria-hidden="true"></i>
                            <i class="right blue-text text-darken-3 fa fa-share fa-2x" aria-hidden="true"></i>
                        </div>
                    </div></div>
                <div class="col s12 m4"><div class="card small">
                        <div class="card-image">
                            <img src="img/featured9.png"/>
                        </div>
                        <div class="card-content">
                            <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action">
                            <i class="blue-text text-darken-3 fa fa-thumbs-up fa-2x" aria-hidden="true"></i>
                            <i class="right blue-text text-darken-3 fa fa-share fa-2x" aria-hidden="true"></i>
                        </div>
                    </div></div>
            </div>
        </div>
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
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>

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
