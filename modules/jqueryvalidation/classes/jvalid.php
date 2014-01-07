<?php

defined('SYSPATH') or die('No direct script access.');

/**
 * Auth module
 *
 * @author     Martijn van de Sande
 * @copyright  hm... nothing at all
 * thanks to the kohana framework! What would we do without it...
 * Some advertising for my website(it's dutch only) ^^
 * www.promadesign.nl
 * 
 * thanks to remorse.nl
 */
class jvalid  {

    private $config;
    // Session library
    protected $session;
    protected static $_instance;

    public static function instance($config = array()) {
        // Database::instance('auth');
       // Database::$default = 'auth';
        if (!isset(jvalid::$_instance)) {
            jvalid::$_instance = new jvalid($config);
        }
        return jvalid::$_instance;
    }

    public function __construct($config = array()) {
    
    }

    public function validation($rules) {
        
        print_r($rules);
        
//         $("form").validate({
//            rules: {
//                descripcion: {
//                    required: true
//                },
//                montoContrato: {
//                    required: true,
//                    number: true
//                }
//            },
//            highlight: function(element) {
//                $(element).closest('.control-group').removeClass('success').addClass('error');
//            },
//            success: function(element) {
//                element
//                        .addClass('valid')
//                        .closest('.control-group').removeClass('error').addClass('success');
//            }
//        });

    }

   
}

