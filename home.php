<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
<script type="text/javascript" src="Scripts/jquery-1.5.2.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){  
   $('#ajuda').hide();
      $('a#abreAjuda').click(function(){
	    $('#ajuda').show(); 
     });

      $('a#fechar').click(function(){
    		  $('#ajuda').hide();
     }); 
});
</script>
</head>
<body>
    <style type="text/css">

#ajuda{

position: fixed;
    width: 200px;
    height: 200px;
    left: 50%;
    top: 50%;
    margin: -100px -100px 0 0;

}

</style>
    
    
<p><a id="abreAjuda" href="#">Ajuda</a></p>
<div id="ajuda">
     <a id="fechar" href="#">Fechar [x]</a> 
      <?php include 'ajuda.php'; ?>
</div>
<p> </p>
<p> </p>
<p> </p>
<p> </p>
<p>Página principal</p>
</body>