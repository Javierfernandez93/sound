<div class = "boxmenu">
	<?php if($UserLogin->_loaded)
	{ ?>
<a href= "../../apps/backoffice">Ir a backoffice</a>
<a href= "?logout=true">Salir de sesión</a>
	<?php } else {
		?>
<a href= "../../apps/login">Ingresar a mi cuenta</a>
<a href= "../../apps/signup">Registrarme</a>
	<?php } ?>
</div>