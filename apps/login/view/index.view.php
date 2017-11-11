<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<div class="row">
	<?php if($UserLogin->_loaded){ ?>
		<div class='col-md-10 offset-md-1 box-login'> 
			<h2>Hola raza<?php echo $UserLogin->nick_name;?></h2> 
			<a href="?logout=true">Salir</a>
		<div id="registers"></div>	
			<button id="getRegisters">Mostrar registros</button>
		</div>
	<?php } else { ?>
		<div class="col-md-4 box-login offset-md-4">
			<div class="col-md-12 text-center">
				<span class="title">Ingresa a tu cuenta de Asesorias</span>
			</div>

			<div id="response"></div>
			
			<div class="col-md-12">
				<label for="email">Ingresa tu correo</label>
				<input type="email" id="email" name="email" placeholder="ejemplo@hotmail.com">
			</div>

			<div class="col-md-12">
				<label for="password">Ingresa tu password</label>
				<input type="password" id="password" name="password">
			</div>

			<div class="col-md-12">
				<label for="remember_me">Recuerdame</label>
				<input type="checkbox" id="remember_me" name="remember_me" checked="true">
			</div>

			<div class="col-md-12 text-center">
				<button id="login">Ingresar</button>
				<button id="register">Registrarme</button>
			</div>
		</div>


	<?php } ?>
	
</div>