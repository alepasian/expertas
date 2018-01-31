<?php
/**
 * @package Hello_Dolly
 * @version 1.6
 */
/*
Plugin Name: Registro personalizado Expertas
Plugin URI: 
Description: Formulario de registro personalizado
Author: Guillermo Obregon
Version: 1.0
Author URI: http://solucionessid.com/
*/

function registration_form( $username, $password, $email, $website, $first_name, $last_name, $nickname, $bio ) {
    echo '<link rel="stylesheet" href="http://expertas.net/wp-content/themes/emple-hadas/css/checkbox_radio_bootstrap.css">
        <style type="text/css">
            .container {
                width: 90%;
                padding: 0 5%;
            }
            .checkbox, .radio {
					    display: block;
					    margin-bottom: 15px;
					}
        </style>
    ';
if($_POST){
	print "<pre>";
   print_r($_POST);
   print "</pre>";
}
    echo '
    <form action="' . $_SERVER['REQUEST_URI'] . '" method="post">
    <div class="form-group">
    <label for="username">Username <strong>*</strong></label>
    <input type="text" class="form-control" name="username" value="' . ( isset( $_POST['username'] ) ? $username : null ) . '">
    </div>
     
    <div class="form-group">
    <label for="password">Password <strong>*</strong></label>
    <input type="password" class="form-control" name="password" value="' . ( isset( $_POST['password'] ) ? $password : null ) . '">
    </div>

    <div class="form-group">
    <label for="email">Fecha de Nacimiento <strong>*</strong></label>
    <input type="text" class="form-control" name="fecha-nacimiento" value="' . ( isset( $_POST['fecha-nacimiento']) ? $fecha_nacimiento : null ) . '">
    </div>
    <div class="form-group">
    <label for="calle">Sexo</label>
        <div class="radio">
				<label>
					<input type="radio" name="opcionSexo" value="M">
					<i class="fa fa-2x icon-radio"></i>
					Masculino
				</label>
		</div>
		<div class="radio">
				<label>
					<input type="radio" name="opcionSexo" value="F">
					<i class="fa fa-2x icon-radio"></i>
					Femenino
				</label>
		</div>
	</div>	
    <div class="form-group">
    <label for="email">Nacionalidad <strong>*</strong></label>
    <input type="text" class="form-control" name="nacionalidad" value="' . ( isset( $_POST['nacionalidad']) ? $nacionalidad : null ) . '">
    </div>
     
    <div class="form-group">
    <label for="email">Estado Civil <strong>*</strong></label>
    <input type="text" class="form-control" name="estado-civil" value="' . ( isset( $_POST['estado-civil']) ? $estado_civil : null ) . '">
    </div>
    
	<div class="form-group">
    <label for="email">Tipo y Numero de Documento <strong>*</strong></label>
    <input type="text" class="form-control" name="dni" value="' . ( isset( $_POST['dni']) ? $dni : null ) . '">
    </div>

    <div class="form-group">
    <label for="cuil">CUIL <strong>*</strong></label>
    <input type="text" class="form-control" name="cuil" value="' . ( isset( $_POST['cuil']) ? $cuil : null ) . '">
    </div>

    <div class="form-group">
    <label for="hijos">Hijos a Cargo <strong>*</strong></label>
    <input type="text" class="form-control" name="hijos" value="' . ( isset( $_POST['hijos']) ? $hijos : null ) . '">
    </div>
	<div class="form-group">
    <label for="calle">Posee alguna discapacidad</label>
        <div class="radio">
				<label>
					<input type="radio" name="optionsDiscapacidad[]" value="si">
					<i class="fa fa-2x icon-radio"></i>
					Si
				</label>
		</div>
		<div class="radio">
				<label>
					<input type="radio" name="optionsDiscapacidad[]" value="no">
					<i class="fa fa-2x icon-radio"></i>
					No
				</label>
		</div>
	</div>	

	<div class="form-group">
    <label for="calle">Indica si tienes</label>
  		<div class="checkbox">
		  	<label class="check-one">
		    <input class="check-one" name="sitiene[]" type="checkbox" value="Cuenta Bacaria">
		    <i class="fa fa-2x icon-checkbox"></i>
		    Cuenta Bacaria
		  	</label>
		</div>
		<div class="checkbox">
		  	<label class="checkbox-label">
		    <input class="checkbox-input" name="sitiene[]" type="checkbox" value="Posibilidad de facturar">
		    <i class="fa fa-2x icon-checkbox"></i>
		    Posibilidad de facturar
		  	</label>
		</div>
		<div class="checkbox">
		  	<label class="checkbox-label">
		    <input class="checkbox-input" name="sitiene[]" type="checkbox" value="Internet en tu casa">
		    <i class="fa fa-2x icon-checkbox"></i>
		    Internet en tu casa
		  	</label>
		</div>
		<div class="checkbox">
		  	<label class="checkbox-label">
		    <input class="checkbox-input" name="sitiene[]" type="checkbox" value="Smartphone">
		    <i class="fa fa-2x icon-checkbox"></i>
		    Smartphone
		  	</label>
		</div>
    </div>

    <div class="form-group">
    <label for="celular">Telefono celular <strong>*</strong></label>
    <input type="text" class="form-control" name="celular" value="' . ( isset( $_POST['celular']) ? $celular : null ) . '">
    </div>

    <div class="form-group">
    <label for="tel-fijo">Telefono fijo <strong>*</strong></label>
    <input type="text" class="form-control" name="tel-fijo" value="' . ( isset( $_POST['tel-fijo']) ? $tel_fijo : null ) . '">
    </div>

    <div class="form-group">
    <label for="email">Email Address<strong>*</strong></label>
    <input type="text" class="form-control" name="email" value="' . ( isset( $_POST['email']) ? $email : null ) . '">
    </div>

    <div class="form-group">
    <label for="pais">Pais</label>
    <input type="text"class="form-control" name="pais" value="' . ( isset( $_POST['pais']) ? $pais : null ) . '">
    </div>
    
	<div class="form-group">
    <label for="provincia">Provincia</label>
    <input type="text"class="form-control" name="provincia" value="' . ( isset( $_POST['provincia']) ? $provincia : null ) . '">
    </div>	

    <div class="form-group">
    <label for="zona">Zona</label>
    <input type="text"class="form-control" name="zona" value="' . ( isset( $_POST['zona']) ? $zona : null ) . '">
    </div>	

	<div class="form-group">
    <label for="barrio">Barrio</label>
    <input type="text"class="form-control" name="barrio" value="' . ( isset( $_POST['barrio']) ? $barrio : null ) . '">
    </div>

	<div class="form-group">
    <label for="calle">Calle</label>
    <input type="text"class="form-control" name="calle" value="' . ( isset( $_POST['calle']) ? $calle : null ) . '">
    </div>

    <div class="form-group">
    <label for="calle">Cuidado de Personals mayores</label>
  		<div class="checkbox">
		  	<label class="check-one">
		    <input class="check-one" name="personas-mayores[]" type="checkbox" value="Acompañamiento Mensual">
		    <i class="fa fa-2x icon-checkbox"></i>
		    Acompañamiento Mensual
		  	</label>
		</div>
		<div class="checkbox">
		  	<label class="checkbox-label">
		    <input class="checkbox-input" name="personas-mayores[]" type="checkbox" value="Cuidados Especiales por dia">
		    <i class="fa fa-2x icon-checkbox"></i>
		    Cuidados Especiales por dia
		  	</label>
		</div>
		<div class="checkbox">
		  	<label class="checkbox-label">
		    <input class="checkbox-input" name="personas-mayores[]" type="checkbox" value="Cuidados con cama">
		    <i class="fa fa-2x icon-checkbox"></i>
		    Cuidados con cama
		  	</label>
		</div>
    </div>
    				
    <div class="form-group">
    <label for="calle">Limpieza</label>
  		<div class="checkbox">
		  	<label class="checkbox-label">
		    <input class="checkbox-input" name="limpieza[]" type="checkbox" value="Limpieza">
		    <i class="fa fa-2x icon-checkbox"></i>
		    	Limpieza
		  	</label>
		</div>
		<div class="checkbox">
		  	<label class="checkbox-label">
		    <input class="checkbox-input" name="limpieza[]" type="checkbox" value="Cama Adentro">
		    <i class="fa fa-2x icon-checkbox"></i>
		    	Cama Adentro
		  	</label>
		</div>
    </div>

    <div class="form-group">
    <label for="calle">Limpiezas especiales</label>
  		<div class="checkbox">
		  	<label class="checkbox-label">
		    <input class="checkbox-input" name="limpieza-especial[]" type="checkbox" value="Alfombras y Tapizados">
		    <i class="fa fa-2x icon-checkbox"></i>
		    	Alfombras y Tapizados
		  	</label>
		</div>
		<div class="checkbox">
		  	<label class="checkbox-label">
		    <input class="checkbox-input" name="limpieza-especial[]" type="checkbox" value="Sillones">
		    <i class="fa fa-2x icon-checkbox"></i>
		    	Sillones
		  	</label>
		</div>
    </div>

     <div class="form-group">
    <label for="calle">Oficios y Mantenimiento</label>
  		<div class="checkbox">
		  	<label class="checkbox-label">
		    <input class="checkbox-input" name="mantenimiento[]" type="checkbox" value="Electricista">
		    <i class="fa fa-2x icon-checkbox"></i>
		    	Electricista
		  	</label>
		</div>
		<div class="checkbox">
		  	<label class="checkbox-label">
		    <input class="checkbox-input" name="mantenimiento[]" type="checkbox" value="Plomero">
		    <i class="fa fa-2x icon-checkbox"></i>
		    	Plomero
		  	</label>
		</div>
		<div class="checkbox">
		  	<label class="checkbox-label">
		    <input class="checkbox-input" name="mantenimiento[]" type="checkbox" value="Instalacion de Aire AC">
		    <i class="fa fa-2x icon-checkbox"></i>
		    	Instalacion de Aire AC
		  	</label>
		</div>
		<div class="checkbox">
		  	<label class="checkbox-label">
		    <input class="checkbox-input" name="mantenimiento[]" type="checkbox" value="Arreglos generales">
		    <i class="fa fa-2x icon-checkbox"></i>
		    	Arreglos generales
		  	</label>
		</div>
		<div class="checkbox">
		  	<label class="checkbox-label">
		    <input class="checkbox-input" name="mantenimiento[]" type="checkbox" value="Gasistas">
		    <i class="fa fa-2x icon-checkbox"></i>
		    	Gasistas
		  	</label>
		</div>
		<div class="checkbox">
		  	<label class="checkbox-label">
		    <input class="checkbox-input" name="mantenimiento[]" type="checkbox" value="Service Aire AC">
		    <i class="fa fa-2x icon-checkbox"></i>
		    	Service Aire AC
		  	</label>
		</div>
    </div>

    <div class="form-group">
    <label for="puesto">Puesto</label>
    <input type="text"class="form-control" name="puesto" value="' . ( isset( $_POST['puesto']) ? $puesto : null ) . '">
    </div>
     
    <div class="form-group">
    <label for="firstname">Nombre/s</label>
    <input type="text" class="form-control" name="fname" value="' . ( isset( $_POST['fname']) ? $first_name : null ) . '">
    </div>
     
    <div class="form-group">
    <label for="website">Apellido/s</label>
    <input type="text" class="form-control" name="lname" value="' . ( isset( $_POST['lname']) ? $last_name : null ) . '">
    </div>
    
     
    <input type="submit" name="submit" value="Registrarse" class="btn-experta active"/>
    <input type="submit" value="Ingresar " class="btn-experta active"/>
    </form>
    ';
}


function registration_validation( $username, $password, $email, $website, $first_name, $last_name )  {

	global $reg_errors;
	$reg_errors = new WP_Error;

	/* valida campos vacios */
	if ( empty( $username ) || empty( $password ) || empty( $email ) ) {
    	$reg_errors->add('field', 'Falta campo de formulario requerido');
	}
	
	/* Valida extension minima del username*/
	if ( 4 > strlen( $username ) ) {
    	$reg_errors->add( 'username_length', 'Nombre de usuario demasiado corto. Se requieren al menos 4 caracteres');
	}
	/* Verifica si el nombre ususario existe */
	if ( username_exists( $username ) ) 
	  $reg_errors->add('user_name', 'Lo sentimos, ese nombre de usuario ya existe!');

	/* Verifica username valido */
	if ( ! validate_username( $username ) ) {
    $reg_errors->add( 'username_invalid', 'Lo sentimos, el nombre de usuario que has ingresado no es válido.' );
	}

    /* valida extension minima del password */
    if ( 5 > strlen( $password ) ) {
        $reg_errors->add( 'password', 'La longitud de la contraseña debe ser mayor que 5' );
    }

    /* Comprueba que sea un mail valido */
    if ( !is_email( $email ) ) {
    	$reg_errors->add( 'email_invalid', 'El correo no es válido' );
	}

	/* Comprueba si el email ya está registrado */
	if ( email_exists( $email ) ) {
    	$reg_errors->add( 'email', 'Correo electrónico ya en uso' );
	}

	/* Si el campo de sitio web está lleno, comprueba si es válido. */
	if ( ! empty( $website ) ) {
	    if ( ! filter_var( $website, FILTER_VALIDATE_URL ) ) {
	        $reg_errors->add( 'website', 'El sitio web no es una URL válida.' );
	    }
	}

	if ( is_wp_error( $reg_errors ) ) {
 
	    foreach ( $reg_errors->get_error_messages() as $error ) {
	     
	        echo '<div>';
	        echo '<strong>ERROR</strong>:';
	        echo $error . '<br/>';
	        echo '</div>';
	         
	    }
	 
	}

}
	function complete_registration() {
	    global $reg_errors, $username, $password, $email, $website, $first_name, $last_name, $nickname, $bio;
	    if ( 1 > count( $reg_errors->get_error_messages() ) ) {
	        $userdata = array(
	        'user_login'    =>   $username,
	        'user_email'    =>   $email,
	        'user_pass'     =>   $password,
	        'user_url'      =>   $website,
	        'first_name'    =>   $first_name,
	        'last_name'     =>   $last_name,
	        );
	        $user = wp_insert_user( $userdata );
	        echo 'Registration complete. Goto <a href="' . get_site_url() . '/wp-login.php">login page</a>.';   

			// Set the global user object
			$current_user = get_user_by( 'id', $user );

			// set the WP login cookie
			$secure_cookie = is_ssl() ? true : false;
			wp_set_auth_cookie( $user_id, true, $secure_cookie );

			wp_safe_redirect( home_url( '/' ) );
			exit;
	    }
	}


	function custom_registration_function() {
	    if ( isset($_POST['submit'] ) ) {
	        registration_validation(
	        $_POST['username'],
	        $_POST['password'],
	        $_POST['email'],
	        $_POST['website'],
	        $_POST['fname'],
	        $_POST['lname']

	        );
	         
	        // sanitize user form input
	        global $username, $password, $email, $website, $first_name, $last_name;
	        $username   =   sanitize_user( $_POST['username'] );
	        $password   =   esc_attr( $_POST['password'] );
	        $email      =   sanitize_email( $_POST['email'] );
	        $website    =   esc_url( $_POST['website'] );
	        $first_name =   sanitize_text_field( $_POST['fname'] );
	        $last_name  =   sanitize_text_field( $_POST['lname'] );
	     
	 
	        // call @function complete_registration to create the user
	        // only when no WP_error is found
	        complete_registration(
	        $username,
	        $password,
	        $email,
	        $website,
	        $first_name,
	        $last_name,
	        $nickname,
	        $bio
	        );
	    }
	 
	    registration_form(
	        $username,
	        $password,
	        $email,
	        $website,
	        $first_name,
	        $last_name,
	        $nickname,
	        $bio
	        );
	}

// Register a new shortcode: [cr_custom_registration]
add_shortcode( 'cr_custom_registration', 'custom_registration_shortcode' );
 
// The callback function that will replace [book]
function custom_registration_shortcode() {
    ob_start();
    custom_registration_function();
    return ob_get_clean();
}