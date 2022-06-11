<!doctype html>
<html>
<head>
  
  
  <title>Meu primeiro site em PHP</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
        
        <style type="text/css">
            .linha {
                font-weight: bold;
                color: green;
                padding-left: 10px;
                line-height: 30px;
            }
            
            
        </style>
        <style type="text/css">
            .titulo {
                font: Impact;
                font-style: normal;
                font-weight: 200;
                padding-left: 10px
                line-height: 30px;
                color: green;

                
            }
</style>
  <script>
  $( function() {
    $( "#accordion" ).accordion();
  } );
  </script>

<script>
  $( function() {
    $( ".widget input[type=submit], .widget a, .widget button" ).button();
    $( "button, input, a" ).click( function( event ) {
      event.preventDefault();
    } );
  } );
  </script>

<script>
  $( function() {
    var availableTags = [
      "ActionScript",
      "AppleScript",
      "Asp",
      "BASIC",
      "C",
      "C++",
      "Clojure",
      "COBOL",
      "ColdFusion",
      "Erlang",
      "Fortran",
      "Groovy",
      "Haskell",
      "Java",
      "JavaScript",
      "Lisp",
      "Perl",
      "PHP",
      "Python",
      "Ruby",
      "Scala",
      "Scheme"
    ];
    $( "#tags" ).autocomplete({
      source: availableTags
    });
  } );
  </script>
</head>
<body>

<span class=titulo><h1> PRIMEIROS PASSOS PARA DESENVOLVIMENTO WEB</h1></span>
      
 
<div id="accordion">
  <h3>Section 1</h3>
  <div>
    <p>
    <?php
            for ( $i = 0 ; $i < 10 ; $i++) {
                print( "<span class=\"linha\">Linha número " . $i . "</span><br/>");
            }
        ?>
    </p>
  </div>
  <h3>Section 2</h3>
  <div>
    <p>
    <?php
            for ( $i = 0 ; $i < 5 ; $i++) {
                print( "<span class=\"linha\">Linha número " . $i . "</span><br/>");
            }
        ?>
    </p>
  </div>
  <h3>Section 3</h3>
  <div>
    <p>
    <div class="widget">
  <h1>Botões</h1>
  <button>A button element</button>
 
  <input type="submit" value="A submit button">
 
  <a href="#">An anchor</a>
</div>
<h1>CSS Buttons</h1>
<button class="ui-button ui-widget ui-corner-all">A button element</button>
 
<input class="ui-button ui-widget ui-corner-all" type="submit" value="A submit button">
 
<a class="ui-button ui-widget ui-corner-all" href="#">An anchor</a>
 
  </div>
  <h3>Section 4</h3>
  <div>
    <p>
    <div class="ui-widget">
  <label for="tags">Tags: </label>
  <input id="tags">
</div>
    </p>
  </div>
</div>
 
 
</body>
</html>