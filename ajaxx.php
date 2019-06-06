<html>
<head>
    <title>Esto es de prueba</title>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script> 
    <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript">
// jQuery
$(document).ready(function(){ 
  
    $('#alternar-respuesta-ej5').toggle( 
  
        // Primer click
        function(e){ 
            $('#respuesta-ej5').slideDown();
            $(this).text('Ocultar respuesta');
            e.preventDefault();
        }, // Separamos las dos funciones con una coma
      
        // Segundo click
        function(e){ 
            $('#respuesta-ej5').slideUp();
            $(this).text('Ver respuesta');
            e.preventDefault();
        }
  
    );
  
});
</script>
</head>
<body>
    <div id="respuesta-ej5" style="display:none;">
        <h1>Hola mundo</h1>
      </div>
      <a href="#" id="alternar-respuesta-ej5" style="display:inline-block;background-color:#45505B;color:#fff;text-decoration:none;padding:10px 30px;margin:0 0 30px;font-size:1.3em;">Ver respuesta</a>
</body>
    
</html>