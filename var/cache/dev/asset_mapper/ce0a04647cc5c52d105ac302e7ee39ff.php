O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:41:"C:\xampp\htdocs\TFG\assets\styles\app.css";s:10:"publicPath";s:55:"/assets/styles/app-4a2a3cd51a21c05901e17b9d695cb130.css";s:23:"publicPathWithoutDigest";s:22:"/assets/styles/app.css";s:15:"publicExtension";s:3:"css";s:7:"content";s:8279:"
@import url("../icofont/icofont.min-4744795acc58a7efe0adcbe5589a6a87.css");
@font-face {
    font-family: fuente1;
    src: url("../Fuentes/AlteHaasGroteskRegular-0b631a811e41c664679da924c6bfe676.ttf");
  }


*{
    margin: 0px;
    padding: 0px;
    text-decoration:none !important;
    box-sizing: border-box;
    font-family: fuente1;
}

body{
    margin:0;
    padding:0;
    max-width: 100%;
}

header{
    height: 3em;

    display: flex;
    justify-content: center;

    position: sticky;
    top:0px;
    background-color: rgb(209, 33, 33);
}
header .menu li{
    color: white;
}
.menu li{
    display: inline;
    width: 30%;
    padding: 5px;
    margin: auto;
    border: 0px;
    padding-left: 15px;
    padding-right: 15px;
    font-size: 22px;
}

.menu li:hover{
    background-color:yellowgreen;
}

.grid-clase{
    
    display:grid;
    grid-template-areas:"V1 I V2"
                        "V1 N V2"
                        "P espacio S"
                        "R espacio E"
                        "H espacio C";


    grid-template-columns:0.375fr 0.25fr 0.375fr;
    grid-template-rows: 0.5fr 0.1fr repeat(3,0.25fr);
    
}

.grid-ficha{
    
    display:grid;
    grid-template-areas:"Nombre Nivel"
                        "Clase Raza"
                        "espacio Trasfondo"
                        "Estadisticas Habilidades"
                        "Competencias";

    grid-template-columns:auto;
    grid-template-rows: auto;
    
}
.Nombre{
    grid-area:Nombre;
}
.Nivel{
    grid-area:Nivel;
}
.Clase{
    grid-area:Clase;
}
.Raza{
    grid-area:Raza;
}
.Trasfondo{
    grid-area:Trasfondo;
}
.Estadisticas{
    grid-area:Estadisticas;
}
.Habilidades{
    grid-area:Habilidades;
}
.Competencias{
    grid-area:Competencias;
}

.grid-subclase{
    
    display:grid;
    grid-template-areas:"V1 I V2"
                        "V1 N V2"
                        "V1 R V2";


    grid-template-columns:0.375fr 0.25fr 0.375fr;
    grid-template-rows: 0.5fr 0.1fr 0.25fr;
    
}

.grid-clase .N, .grid-subclase .N{
    margin-top: 20px;
    margin-bottom: 20px;
}

.grid-rasgos{
    
    display:grid;
    grid-template-areas:"N V1 L"
                        "D D D";
                       
    grid-template-columns:0.5fr 0.3fr 0.2fr;
    grid-template-rows: 25px auto;
    padding:20px;
}
.grid-rasgos:hover{
    background-color: lightgray;
}

.Progreso{
    padding:20px;
    width:100%;
}

.Progreso td{
    text-align: center;
    padding-top: 2.5px;
    padding-bottom: 2.5px;
}

.Progreso tr:hover{
    background-color: lightgray;
}

/*  GRID AREAS */
.N{
    grid-area:N;
}

.espacio{
    grid-area:espacio;
}

.D{
    grid-area:D;
}

.I{
    grid-area:I;
}

.I img{
    width:100%;
    height:100%;
    border-radius: 100%;
    padding:2.5px;
    box-shadow: 0px 0px 10px black;
}
.R{
    grid-area:R;
}

.P{
    grid-area:P;
}

.E{
    grid-area:E;
}

.V1{
    grid-area:V1;
}

.V2{
    grid-area:V2;
}

.C{
    grid-area:C;
}

.S{
    grid-area:S;
}

.L{
    grid-area:L;
}

.A{
    grid-area:A;
}

h1{
    text-align:center;
}


.listado{
    margin-left:6%;
    margin-right:6%;
    margin-top:2em;
    margin-bottom:5em;
    
}

.elemento img{
    width:55px;
    height:55px;
    border-radius: 100%;
    padding:2.5px;
    box-shadow: 0px 0px 10px black;
    margin-right:0.15em;
}

.elemento{
    display:grid;
    grid-template-areas:"I N E S"
                        "I A E C";
                       
    grid-template-columns:0.05fr 0.25fr 0.1fr 0.6fr;
    grid-template-rows: auto;
    padding:20px;
    border-radius:5px;
    border-bottom: 1px solid gray;
    background-color:white;
}

.SU .listado .elemento{
    margin-top:0.25em;
    box-shadow: 0px 0px 3px black;
}

body{
    background-color:rgb(187, 210, 218);
}

.elemento:hover{
    background-color: lightgray;
}

a:link {
    color: black;
  }
  
  a:visited {
    color: black;
  }
  
  a:hover {
    color: black;
  }
  
  a:active {
    color: black;
  }

  .titulo{
    margin-top: 10px;
    text-align:left;
    padding:10px;

  }

  .row{
    display:grid;
    grid-template-areas:"C E A";
                       
    grid-template-columns:0.45fr 0.1fr 0.45fr;
    grid-template-rows: auto;
    padding:10px;
  }

  .formulario{
    display:flex;
    width:100%;
  }

  .formulario2{
    border-radius:5px;
    background-color:white;
    margin-left:150px;
    margin-right:150px;
    margin-top:50px;
    margin-bottom:50px;
    width:40%;
    box-shadow: 0px 0px 10px gray;
  }

  .center-h {
    justify-content: center;
  }
  .center-v {
    align-items: center;
  }

  

  input, select,button{
    width:90%;
    border-radius:5px;
    height:2.5rem;
    padding:0.5rem;
    font-size:medium;
    border-color:lightgray;
    box-shadow: 0px 0px 0px black;
  }

  label{
    font-size:large;
  }

.flex{
    display:flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 0.5rem;
    margin-top: 0.5rem;
    
}

button{
    background-color: rgb(209, 33, 33);
    color:white;
    cursor:pointer;
}

.indices{
    display:flex;
    
    margin-top: 1rem;
   border: 1px solid black;
   width:600px;
    margin:auto;
    padding:10px;
    border-radius:5px;
    margin-top: 1rem;
    flex-direction:column;
    background-color: white;

}

.indices a{
    
    margin-right: 0.5rem;
    color: rgb(209, 33, 33);
    border-bottom: 1px solid gray;
    padding:10px;
    text-align: left;
}

.indices a:hover{
    background-color: lightgray;
    transition:all 0.5s;
}

.indices a:active{
    background-color: green;
}

.indices h1{
    text-align:left;
    margin-bottom: 1rem;
    margin-left:0.5rem;
}

.login{
    display:flex;
    justify-content: center;
    align-items: center;
    margin-top: 1rem;
    border: 1px solid black;
    width:600px;
    margin:auto;
    padding:10px;
    border-radius:5px;
    margin-top: 1rem;
    flex-direction:column;
    background-color: white;    
}

.loginUser{
    margin-bottom:1rem;
}

.loginPass{
    margin-bottom:1rem;
}

.login h1{
    margin-bottom: 1rem;
}

.rowHabilidades{
    display:grid;
    grid-template-areas:"C E A I N";                    
    grid-template-columns:0.3fr 0.05fr 0.4fr 0.05fr 0.15fr;
    grid-template-rows: auto;
    padding:10px;
    
  }

  .loginButton{
    width:150px;
    
  }

  .divLoginButton{
    display:flex;
    justify-content: center;
    align-items: center;
  }

  .menu_login *, .menu_logout *{
    margin-top: 0.7em;
    right: 1em;
    display: inline-block;
    color: white;
    transform: scale(2);
    position: absolute;
  }

  

  .lista_revisiones {
    width: 750px;
    margin: auto;
    padding: 10px;
    border-radius: 5px;
    background-color: white;
    margin-top:2rem;
}

.elemento_revisiones {
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid gray;
    padding: 10px 0;
}

.lista_revisiones h1{
    margin-bottom: 1rem;
}


.elemento_revisiones button {
    display: inline-block;
    padding: 5px 10px;
    margin: 0 10px;
    
    color: white;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
    border: none;
    cursor: pointer;
    width: auto;
    overflow: hidden;
    white-space: nowrap;
}

.elemento_revisiones img{
    width:55px;
    height:55px;
    border-radius: 100%;
    padding:2.5px;
    box-shadow: 0px 0px 10px black;
    margin-right: 1rem;
}

footer {
    background-color: rgb(198, 197, 197);
    text-align: center;
    padding: 0.5em;
    left: 0;
    bottom: 0;
    width: 100%;
    font-size: small;
    position: fixed;
}
footer h4{
    font-size: medium;
    margin: 0.1em;
    font-weight: bold;
}

.tituloApp{
    padding:2rem;
    font-size: 100px;
}



";s:6:"digest";s:32:"4a2a3cd51a21c05901e17b9d695cb130";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:2:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:50:"C:\xampp\htdocs\TFG\assets\icofont\icofont.min.css";s:10:"publicPath";s:64:"/assets/icofont/icofont.min-4744795acc58a7efe0adcbe5589a6a87.css";s:23:"publicPathWithoutDigest";s:31:"/assets/icofont/icofont.min.css";s:15:"publicExtension";s:3:"css";s:7:"content";s:3675:"/*! 
* @package IcoFont 
* @version 1.0.1 
* @author   
* @copyright 2024 
* @license - https://icofont.com/license/
*/@font-face{font-family:IcoFont;font-weight:400;font-style:Regular;src:url("fonts/icofont-398df979ac48eff79f5829d504fbd46a.woff2") format("woff2"),url("fonts/icofont-0d7ee2ca2607c4f9d4451caba85149d9.woff") format("woff")}[class*=" icofont-"],[class^=icofont-]{font-family:IcoFont!important;speak:none;font-style:normal;font-weight:400;font-variant:normal;text-transform:none;white-space:nowrap;word-wrap:normal;direction:ltr;line-height:1;-webkit-font-feature-settings:"liga";-webkit-font-smoothing:antialiased}.icofont-users-alt-3:before{content:"\ed08"}.icofont-shield:before{content:"\efe6"}.icofont-listine-dots:before{content:"\ef74"}.icofont-duotone.icofont-wand:before{content:"\13be0"}.icofont-duotone.icofont-wand:after{content:"\13bdf"}.icofont-paper:before{content:"\eae5"}.icofont-user:before{content:"\ed05"}.icofont-duotone.icofont-shield:before{content:"\13baf"}.icofont-duotone.icofont-shield:after{content:"\13bae"}.icofont-login:before{content:"\ef7b"}.icofont-logout:before{content:"\ef7c"}.icofont-instagram:before{content:"\ed46"}.icofont-facebook:before{content:"\ed37"}.icofont-twitter:before{content:"\ed7a"}.icofont-github:before{content:"\ed3e"}[class*=" icofont-"].icofont-duotone,[class^=icofont-].icofont-duotone{position:relative}[class*=" icofont-"].icofont-duotone:before,[class^=icofont-].icofont-duotone:before{position:absolute;left:0;top:0}[class*=" icofont-"].icofont-duotone:after,[class^=icofont-].icofont-duotone:after{opacity:.4}.icofont-xs{font-size:.5em}.icofont-sm{font-size:.75em}.icofont-md{font-size:1.25em}.icofont-lg{font-size:1.5em}.icofont-1x{font-size:1em}.icofont-2x{font-size:2em}.icofont-3x{font-size:3em}.icofont-4x{font-size:4em}.icofont-5x{font-size:5em}.icofont-6x{font-size:6em}.icofont-7x{font-size:7em}.icofont-8x{font-size:8em}.icofont-9x{font-size:9em}.icofont-10x{font-size:10em}.icofont-fw{text-align:center;width:1.25em}.icofont-ul{list-style-type:none;padding-left:0;margin-left:0}.icofont-ul>li{position:relative;line-height:2em}.icofont-ul>li .icofont{display:inline-block;vertical-align:middle}.icofont-border{border:solid .08em #f1f1f1;border-radius:.1em;padding:.2em .25em .15em}.icofont-pull-left{float:left}.icofont-pull-right{float:right}.icofont.icofont-pull-left{margin-right:.3em}.icofont.icofont-pull-right{margin-left:.3em}.icofont-spin{-webkit-animation:icofont-spin 2s infinite linear;animation:icofont-spin 2s infinite linear;display:inline-block}.icofont-pulse{-webkit-animation:icofont-spin 1s infinite steps(8);animation:icofont-spin 1s infinite steps(8);display:inline-block}@-webkit-keyframes icofont-spin{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes icofont-spin{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}.icofont-rotate-90{-webkit-transform:rotate(90deg);transform:rotate(90deg)}.icofont-rotate-180{-webkit-transform:rotate(180deg);transform:rotate(180deg)}.icofont-rotate-270{-webkit-transform:rotate(270deg);transform:rotate(270deg)}.icofont-flip-horizontal{-webkit-transform:scale(-1,1);transform:scale(-1,1)}.icofont-flip-vertical{-webkit-transform:scale(1,-1);transform:scale(1,-1)}.icofont-flip-horizontal.icofont-flip-vertical{-webkit-transform:scale(-1,-1);transform:scale(-1,-1)}:root .icofont-flip-horizontal,:root .icofont-flip-vertical,:root .icofont-rotate-180,:root .icofont-rotate-270,:root .icofont-rotate-90{-webkit-filter:none;filter:none;display:inline-block}.icofont-inverse{color:#fff}";s:6:"digest";s:32:"4744795acc58a7efe0adcbe5589a6a87";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:2:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:54:"C:\xampp\htdocs\TFG\assets\icofont\fonts\icofont.woff2";s:10:"publicPath";s:68:"/assets/icofont/fonts/icofont-398df979ac48eff79f5829d504fbd46a.woff2";s:23:"publicPathWithoutDigest";s:35:"/assets/icofont/fonts/icofont.woff2";s:15:"publicExtension";s:5:"woff2";s:7:"content";N;s:6:"digest";s:32:"398df979ac48eff79f5829d504fbd46a";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:27:"icofont/fonts/icofont.woff2";}i:1;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:53:"C:\xampp\htdocs\TFG\assets\icofont\fonts\icofont.woff";s:10:"publicPath";s:67:"/assets/icofont/fonts/icofont-0d7ee2ca2607c4f9d4451caba85149d9.woff";s:23:"publicPathWithoutDigest";s:34:"/assets/icofont/fonts/icofont.woff";s:15:"publicExtension";s:4:"woff";s:7:"content";N;s:6:"digest";s:32:"0d7ee2ca2607c4f9d4451caba85149d9";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:26:"icofont/fonts/icofont.woff";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:23:"icofont/icofont.min.css";}i:1;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:61:"C:\xampp\htdocs\TFG\assets\Fuentes\AlteHaasGroteskRegular.ttf";s:10:"publicPath";s:75:"/assets/Fuentes/AlteHaasGroteskRegular-0b631a811e41c664679da924c6bfe676.ttf";s:23:"publicPathWithoutDigest";s:42:"/assets/Fuentes/AlteHaasGroteskRegular.ttf";s:15:"publicExtension";s:3:"ttf";s:7:"content";N;s:6:"digest";s:32:"0b631a811e41c664679da924c6bfe676";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:34:"Fuentes/AlteHaasGroteskRegular.ttf";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:14:"styles/app.css";}