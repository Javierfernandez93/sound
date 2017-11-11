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
				<span class="title">Ingresa tus datos para registrarte</span>
			</div>

			<div id="response"></div>
			
			<div class="col-md-12">
				<label for="nickname">Ingresa tu nombre de usuario</label>
				<input type="text" id="nickname" name="nickname">
			</div>

			<div cplass="col-md-12">
				<label for="email">Ingresa tu correo</label>
				<input type="email" id="email" name="email">
			</div>

			<div class="col-md-12">
				<label for="password">Ingresa tu password</label>
				<input type="password" id="password" name="password">
			</div>

			<div class="col-md-12">
				<label for="password">Vuelve a ingresar tu password</label>
				<input type="password" id="repassword" name="repassword">
			</div>

			<div class="col-md-12">
				<label for="remember_me">Acepto los términos y condiciones</label>
				<input type="checkbox" id="remember_me" name="remember_me" checked="false">
			</div>

			<div class="col-md-12 text-center">
				<button id="signup" onClick="signup()">Registrarme</button>
			</div>
		</div>


	<?php } ?>
	
</div>