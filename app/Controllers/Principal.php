<?php
/**
 * Clase controladora para cargar la vista de inicio de la aplicación Web.
 * @name Principal
 * @author Lawdee Narváez B.
 * @version 1.0.0
 *@since PHP 7.4
 */
 
 namespace App\Controllers;
 
 class Principal extends BaseController 
 {
 	
 	public function index () 
 	{
		 return view('pagina_inicio');
 	}//Fin del Método
 	
 }//Fin de la clase
 