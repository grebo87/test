<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth
{
    
    protected $ci;
    
    public function __construct()
    {

        $this->ci =& get_instance();

        
    }
    
    //función para comprobar si el usuario está logueado
    public function is_logged()
    {
        
        return $this->ci->session->userdata('login') !== false ? true : false;
            
    }
    
    //función para crear sesiones
    public function set_session($resultado)
    {
        
        $datos_session=array(
                       'cedula'   => $resultado->cedula,
                       'nombre'   => $resultado->nombre,
                       'apellido' => $resultado->apellido,
                       'email'    => $resultado->email,
                       'login'    => $resultado->login,
                       'password' => $resultado->password,
                       'status'   => $resultado->status,
                       'tipo'     => $resultado->tipo,
                       'id'       => $resultado->id,
                       'logged_in' => TRUE,
                     );
               
        
       return $this->ci->session->set_userdata($datos_session);
        
    }
    
    //función para cerrar sesión
    public function logout()
    {
                
        $sess_array = array(
                    'login' => '',
                    );

        $this->ci->session->unset_userdata('logged_in',$sess_array);
        $this->ci->session->sess_destroy();    
        $this->ci->session->sess_regenerate(); 
                    
        
    } 
    
        
}