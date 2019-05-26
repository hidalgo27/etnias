<?php
namespace EtniasPeru\Helpers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class MensajesVisa{
    
    protected $denegaciones_comercio = "";
    
    protected $denegaciones_cliente = "";
    public function __construct() {
    }
    public function denegaciones_comercio()
    {
        return $this->denegaciones_comercio;
    }
    public function denegaciones_cliente()
    {
        return $this->denegaciones_cliente;
    }
    public function denegaciones($code)
    {
        switch ($code) {
                case '101':{
                    $this->denegaciones_comercio="Operación Denegada. Tarjeta Vencida";                
                    $this->denegaciones_cliente="Operación Denegada. Tarjeta Vencida. Verifique los datos en su tarjeta e ingréselos correctamente.";
                    break;
                }
                case '102':{
                    $this->denegaciones_comercio="Operación Denegada. Contactar con la entidad emisora.";                
                    $this->denegaciones_cliente="Operación Denegada. Contactar con entidad emisora de su tarjeta";
                    break;
                }
                case '104':{
                    $this->denegaciones_comercio="Operación Denegada. Operación no permitida para esta tarjeta.";                
                    $this->denegaciones_cliente="Operación Denegada. Operación no permitida para esta tarjeta. Contactar con la entidad emisora de su tarjeta.";
                    break;
                }
                case '106':{
                    $this->denegaciones_comercio="Operación Denegada. Exceso de intentos de ingreso de clave secreta.";                
                    $this->denegaciones_cliente="Operación Denegada. Intentos de clave secreta excedidos. Contactar con la entidad emisora de su tarjeta";
                    break;
                }
                case '107':{
                    $this->denegaciones_comercio="Operación Denegada. Contactar con la entidad emisora.";                
                    $this->denegaciones_cliente="Operación Denegada. Contactar con la entidad emisora de su tarjeta";
                    break;
                }
                case '108':{
                    $this->denegaciones_comercio="Operación Denegada. Exceso de actividad.";                
                    $this->denegaciones_cliente="Operación Denegada. Contactar con la entidad emisora de su tarjeta.";
                    break;
                }
                case '109':{
                    $this->denegaciones_comercio="Operación Denegada. Identificación inválida de establecimiento.";                
                    $this->denegaciones_cliente="Operación Denegada. Contactar con el comercio.";
                    break;
                }
                case '110':{
                    $this->denegaciones_comercio="Operación Denegada. Operación no permitida para esta tarjeta.";                
                    $this->denegaciones_cliente="Operación Denegada. Operación no permitida para esta tarjeta. Contactar con la entidad emisora de su tarjeta.";
                    break;
                }
                case '111':{
                    $this->denegaciones_comercio="Operación Denegada. El monto de la transacción supera el valor máximo permitido para operaciones virtuales";                
                    $this->denegaciones_cliente="Operación Denegada. Contactar con el comercio.";
                    break;
                }
                case '112':{
                    $this->denegaciones_comercio="Operación Denegada. Se requiere clave secreta.";                
                    $this->denegaciones_cliente="Operación Denegada. Se requiere clave secreta.";
                    break;
                }
                case '116':{
                    $this->denegaciones_comercio="Operación Denegada. Fondos insuficientes.";                
                    $this->denegaciones_cliente="Operación Denegada. Fondos insuficientes. Contactar con entidad emisora de su tarjeta.";
                    break;
                }
                case '117':{
                    $this->denegaciones_comercio="Operación Denegada. Clave secreta incorrecta.";                
                    $this->denegaciones_cliente="Operación Denegada. Clave secreta incorrecta.";
                    break;
                }
                case '118':{
                    $this->denegaciones_comercio="Operación Denegada. Tarjeta inválida.";                
                    $this->denegaciones_cliente="Operación Denegada. Tarjeta Inválida. Contactar con entidad emisora de su tarjeta";
                    break;
                }
                case '119':{
                    $this->denegaciones_comercio="Operación Denegada. Exceso de intentos de ingreso de clave secreta";                
                    $this->denegaciones_cliente="Operación Denegada. Intentos de clave secreta excedidos. Contactar con entidad emisora de su tarjeta.";
                    break;
                }
                case '121':{
                    $this->denegaciones_comercio="Operación Denegada.";                
                    $this->denegaciones_cliente="Operación Denegada.";
                    break;
                }
                case '129':{
                    $this->denegaciones_comercio="Operación Denegada. Tarjeta no operativa.";                
                    $this->denegaciones_cliente="Operación Denegada. Código de seguridad invalido. Contactar con entidad emisora de su tarjeta.";
                    break;
                }
                case '180':{
                    $this->denegaciones_comercio="Operación Denegada. Tarjeta inválida.";                
                    $this->denegaciones_cliente="Operación Denegada. Tarjeta Inválida. Contactar con entidad emisora de su tarjeta.";
                    break;
                }
                case '181':{
                    $this->denegaciones_comercio="Operación Denegada. Tarjeta con restricciones de Débito.";                
                    $this->denegaciones_cliente="Operación Denegada. Tarjeta con restricciones de débito. Contactar con entidad emisora de su tarjeta.";
                    break;
                }
                case '182':{
                    $this->denegaciones_comercio="Operación Denegada. Tarjeta con restricciones de Crédito";                
                    $this->denegaciones_cliente="Operación Denegada. Tarjeta con restricciones de crédito. Contactar con entidad emisora de su tarjeta.";
                    break;
                }
                case '183':{
                    $this->denegaciones_comercio="Operación Denegada. Error de sistema.";                
                    $this->denegaciones_cliente="Operación Denegada. Problemas de comunicación. Intente más tarde.";
                    break;
                }
                case '190':{
                    $this->denegaciones_comercio="Operación Denegada. Contactar con entidad emisora";                
                    $this->denegaciones_cliente="Operación Denegada. Contactar con entidad emisora de su tarjeta.";
                    break;
                }
                case '191':{
                    $this->denegaciones_comercio="Operación Denegada. Contactar con entidad emisora.";                
                    $this->denegaciones_cliente="Operación Denegada. Contactar con entidad emisora de su tarjeta.";
                    break;
                }
                case '192':{
                    $this->denegaciones_comercio="Operación Denegada. Contactar con entidad emisora.";                
                    $this->denegaciones_cliente="Operación Denegada. Contactar con entidad emisora de su tarjeta.";
                    break;
                }
                case '199':{
                    $this->denegaciones_comercio="Operación Denegada.";                
                    $this->denegaciones_cliente="Operación Denegada.";
                    break;
                }
                case '201':{
                    $this->denegaciones_comercio="Operación Denegada. Tarjeta vencida.";                
                    $this->denegaciones_cliente="Operación Denegada. Tarjeta vencida. Contactar con entidad emisora de su tarjeta.";
                    break;
                }
                case '202':{
                    $this->denegaciones_comercio="Operación Denegada. Contactar con entidad emisora.";                
                    $this->denegaciones_cliente="Operación Denegada. Contactar con entidad emisora de su tarjeta.";
                    break;
                }
                case '204':{
                    $this->denegaciones_comercio="Operación Denegada. Operación no permitida para esta tarjeta.";                
                    $this->denegaciones_cliente="Operación Denegada. Operación no permitida para esta tarjeta. Contactar con entidad emisora de su tarjeta.";
                    break;
                }
                case '206':{
                    $this->denegaciones_comercio="Operación Denegada. Exceso de intentos de ingreso de clave secreta";                
                    $this->denegaciones_cliente="Operación Denegada. Intentos de clave secreta excedidos. Contactar con la entidad emisora de su tarjeta.";
                    break;
                }
                case '207':{
                    $this->denegaciones_comercio="Operación Denegada. Contactar con entidad emisora";                
                    $this->denegaciones_cliente="Operación Denegada. Contactar con entidad emisora de su tarjeta.";
                    break;
                }
                case '208':{
                    $this->denegaciones_comercio="Operación Denegada. Tarjeta perdida.";                
                    $this->denegaciones_cliente="Operación Denegada. Contactar con entidad emisora de su tarjeta.";
                    break;
                }
                case '209':{
                    $this->denegaciones_comercio="Operación Denegada. Tarjeta robada.";                
                    $this->denegaciones_cliente="Operación Denegada. Contactar con entidad emisora de su tarjeta";
                    break;
                }
                case '263':{
                    $this->denegaciones_comercio="Operación Denegada. Error en el envío de parámetros";                
                    $this->denegaciones_cliente="Operación Denegada. Contactar con el comercio.";
                    break;
                }
                case '264':{
                    $this->denegaciones_comercio="Operación Denegada. Entidad emisora no está disponible para realizar la autenticación.";                
                    $this->denegaciones_cliente="Operación Denegada. Entidad emisora de la tarjeta no está disponible para realizar la autenticación.";
                    break;
                }
                case '265':{
                    $this->denegaciones_comercio="Operación Denegada. Clave secreta del tarjetahabiente incorrecta";                
                    $this->denegaciones_cliente="Operación Denegada. Clave secreta del tarjetahabiente incorrecta. Contactar con entidad emisora de su tarjeta.";
                    break;
                }
                case '266':{
                    $this->denegaciones_comercio="Operación Denegada. Tarjeta vencida.";                
                    $this->denegaciones_cliente="Operación Denegada. Tarjeta Vencida. Contactar con entidad emisora de su tarjeta.";
                    break;
                }
                case '280':{
                    $this->denegaciones_comercio="Operación Denegada. Clave errónea.";                
                    $this->denegaciones_cliente="Operación Denegada. Clave secreta errónea. Contactar con entidad emisora de su tarjeta.";
                    break;
                }
                case '300':{
                    $this->denegaciones_comercio="Operación Denegada. Número de pedido del comercio duplicado. Favor no atender";                
                    $this->denegaciones_cliente="Operación Denegada. Número de pedido del comercio duplicado. Favor no atender";
                    break;
                }
                case '306':{
                    $this->denegaciones_comercio="Operación Denegada. Contactar con entidad emisora.";                
                    $this->denegaciones_cliente="Operación Denegada. Contactar con entidad emisora de su tarjeta";
                    break;
                }
                case '401':{
                    $this->denegaciones_comercio="Operación Denegada. Tienda inhabilitada.";                
                    $this->denegaciones_cliente="Operación Denegada. Contactar con el comercio.";
                    break;
                }
                case '402':{
                    $this->denegaciones_comercio="Operación Denegada.";                
                    $this->denegaciones_cliente="Operación Denegada.";
                    break;
                }
                case '403':{
                    $this->denegaciones_comercio="Operación Denegada. Tarjeta no autenticada.";                
                    $this->denegaciones_cliente="Operación Denegada. Tarjeta no autenticada.";
                    break;
                }
                case '404':{
                    $this->denegaciones_comercio="Operación Denegada. El monto de la transacción supera el valor máximo permitido.";                
                    $this->denegaciones_cliente="Operación Denegada. Contactar con el comercio.";
                    break;
                }
                case '405':{
                    $this->denegaciones_comercio="Operación Denegada. La tarjeta ha superado la cantidad máxima de transacciones en el día.";                
                    $this->denegaciones_cliente="Operación Denegada. Contactar con el comercio.";
                    break;
                }
                case '406':{
                    $this->denegaciones_comercio="Operación Denegada. La tienda ha superado la cantidad máxima de transacciones en el día.";                
                    $this->denegaciones_cliente="Operación Denegada. Contactar con el comercio.";
                    break;
                }
                case '407':{
                    $this->denegaciones_comercio="Operación Denegada. El monto de la transacción no llega al mínimo permitido.";                
                    $this->denegaciones_cliente="Operación Denegada. Contactar con el comercio.";
                    break;
                }
                case '408':{
                    $this->denegaciones_comercio="Operación Denegada. CVV2 no coincide.";                
                    $this->denegaciones_cliente="Operación Denegada. Código de seguridad no coincide. Contactar con entidad emisora de su tarjeta";
                    break;
                }
                case '409':{
                    $this->denegaciones_comercio="Operación Denegada. CVV2 no procesado por entidad emisora.";                
                    $this->denegaciones_cliente="Operación Denegada. Código de seguridad no procesado por la entidad emisora de la tarjeta";
                    break;
                }
                case '410':{
                    $this->denegaciones_comercio="Operación Denegada. CVV2 no procesado por no ingresado.";                
                    $this->denegaciones_cliente="Operación Denegada. Código de seguridad no ingresado.";
                    break;
                }
                case '411':{
                    $this->denegaciones_comercio="Operación Denegada. CVV2 no procesado por entidad emisora.";                
                    $this->denegaciones_cliente="Operación Denegada. Código de seguridad no procesado por la entidad emisora de la tarjeta.";
                    break;
                }
                case '412':{
                    $this->denegaciones_comercio="Operación Denegada. CVV2 no reconocido por entidad emisora";                
                    $this->denegaciones_cliente="Operación Denegada. Código de seguridad no reconocido por la entidad emisora de la tarjeta.";
                    break;
                }
                case '413':{
                    $this->denegaciones_comercio="Operación Denegada. Contactar con entidad emisora";                
                    $this->denegaciones_cliente="Operación Denegada. Contactar con entidad emisora de su tarjeta.";
                    break;
                }
                case '414'||'415'||'416'||'417'||'418'||'419':{
                    $this->denegaciones_comercio="Operación Denegada.";                
                    $this->denegaciones_cliente="Operación Denegada.";
                    break;
                }
                case '420':{
                    $this->denegaciones_comercio="Operación Denegada. Tarjeta no es VISA.";                
                    $this->denegaciones_cliente="Operación Denegada. Tarjeta no es VISA.";
                    break;
                }
                case '422':{
                    $this->denegaciones_comercio="Operación Denegada. El comercio no está configurado para usar este medio de pago.";                
                    $this->denegaciones_cliente="Operación Denegada. El comercio no está configurado para usar este medio de pago. Contactar con el comercio";
                    break;
                }
                case '423':{
                    $this->denegaciones_comercio="Operación Denegada. Se canceló el proceso de pago.";                
                    $this->denegaciones_cliente="Operación Denegada. Se canceló el proceso de pago.";
                    break;
                }
                case '424':{
                    $this->denegaciones_comercio="Operación Denegada. Contactar con entidad emisora. ";                
                    $this->denegaciones_cliente="Operación Denegada.";
                    break;
                }
                case '666':{
                    $this->denegaciones_comercio="Operación Denegada. Problemas de comunicación. Intente más tarde.";                
                    $this->denegaciones_cliente="Operación Denegada. Problemas de comunicación. Intente más tarde";
                    break;
                }
                case '667':{
                    $this->denegaciones_comercio="Operación Denegada. Transacción sin autenticación. Inicio del Proceso de Pago.";                
                    $this->denegaciones_cliente="Operación Denegada. Transacción sin respuesta de Verified by Visa.";
                    break;
                }
                case '668'|'669':{
                    $this->denegaciones_comercio="Operación Denegada.";                
                    $this->denegaciones_cliente="Operación Denegada. Contactar con el comercio.";
                    break;
                }
                case '670':{
                    $this->denegaciones_comercio="Operación Denegada. Módulo antifraude.";                
                    $this->denegaciones_cliente="Operación Denegada. Contactar con el comercio.";
                    break;
                }
                case '672':{
                    $this->denegaciones_comercio="Operación Denegada. Transacción sin respuesta de Antifraude.";                
                    $this->denegaciones_cliente="Operación Denegada. Módulo antifraude.";
                    break;
                }
                case '673':{
                    $this->denegaciones_comercio="Operación Denegada. Transacción sin respuesta del Autorizador.";                
                    $this->denegaciones_cliente="Operación Denegada. Contactar con el comercio.";
                    break;
                }
                case '674':{
                    $this->denegaciones_comercio="Operación Denegada. Sesión no válida.";                
                    $this->denegaciones_cliente="Operación Denegada. Contactar con el comercio.";
                    break;
                }
                case '675':{
                    $this->denegaciones_comercio="Inicialización de transacción.";                
                    $this->denegaciones_cliente="Inicialización de transacción.";
                    break;
                } 
                case '676':{
                    $this->denegaciones_comercio="Operación Denegada. No activa la opción. Revisar Enviar al Autorizador";                
                    $this->denegaciones_cliente="Operación Denegada. Contactar con el comercio";
                    break;
                }
                case '677':{
                    $this->denegaciones_comercio="Operación Denegada. Respuesta Antifraude con parámetros nos válidos.";                
                    $this->denegaciones_cliente="Operación Denegada. Contactar con el comercio.";
                    break;
                }
                case '678':{
                    $this->denegaciones_comercio="Operación Denegada. Valor ECI no válido.";                
                    $this->denegaciones_cliente="Operación Denegada. Contactar con el comercio.";
                    break;
                }
                case '682':{
                    $this->denegaciones_comercio="Operación Denegada. Intento de Pago fuera del tiempo permitido.";                
                    $this->denegaciones_cliente="Operación Denegada. Operación Denegada.";
                    break;
                }
                case '683':{
                    $this->denegaciones_comercio="Operación Denegada. Registro incorrecto de sesión";                
                    $this->denegaciones_cliente="Operación Denegada. Registro incorrecto de sesión.";
                    break;
                }
                case '684':{
                    $this->denegaciones_comercio="Operación Denegada Registro Incorrecto Antifraude.";                
                    $this->denegaciones_cliente="Operación Denegada Registro Incorrecto Antifraude.";
                    break;
                }
                case '685':{
                    $this->denegaciones_comercio="Operación Denegada Registro Incorrecto Autorizador.";                
                    $this->denegaciones_cliente="Operación Denegada Registro Incorrecto Autorizador.";
                    break;
                }
                case '904':{
                    $this->denegaciones_comercio="Operación Denegada. Formato de mensaje erróneo.";                
                    $this->denegaciones_cliente="Operación Denegada.";
                    break;
                }
                case '909':{
                    $this->denegaciones_comercio="Operación Denegada. Error de sistema.";                
                    $this->denegaciones_cliente="Operación Denegada. Problemas de comunicación. Intente más tarde.";
                    break;
                }
                case '910':{
                    $this->denegaciones_comercio="Operación Denegada. Error de sistema.";                
                    $this->denegaciones_cliente="Operación Denegada.";
                    break;
                }
                case '912':{
                    $this->denegaciones_comercio="Operación Denegada. Entidad emisora no disponible.";                
                    $this->denegaciones_cliente="Operación Denegada. Entidad emisora de la tarjeta no disponible.";
                    break;
                }
                case '913':{
                    $this->denegaciones_comercio="Operación Denegada. Transmisión duplicada.";                
                    $this->denegaciones_cliente="Operación Denegada.";
                    break;
                }
                case '916':{
                    $this->denegaciones_comercio="Operación Denegada. Contactar con entidad emisora.";                
                    $this->denegaciones_cliente="Operación Denegada.";
                    break;
                }
                case '928':{
                    $this->denegaciones_comercio="Operación Denegada. Contactar con entidad emisora.";                
                    $this->denegaciones_cliente="Operación Denegada.";
                    break;
                }
                case '940':{
                    $this->denegaciones_comercio="Operación Denegada. Transacción anulada previamente.";                
                    $this->denegaciones_cliente="Operación Denegada.";
                    break;
                }
                case '941':{
                    $this->denegaciones_comercio="Operación Denegada. Transacción ya anulada previamente.";                
                    $this->denegaciones_cliente="Operación Denegada.";
                    break;
                }
                case '942':{
                    $this->denegaciones_comercio="Operación Denegada.";                
                    $this->denegaciones_cliente="Operación Denegada.";
                    break;
                }
                case '943':{
                    $this->denegaciones_comercio="Operación Denegada. Datos originales distintos.";                
                    $this->denegaciones_cliente="Operación Denegada.";
                    break;
                }
                case '945':{
                    $this->denegaciones_comercio="Operación Denegada. Referencia repetida.";                
                    $this->denegaciones_cliente="Operación Denegada.";
                    break;
                }
                case '946':{
                    $this->denegaciones_comercio="Operación Denegada. Operación de anulación en proceso";                
                    $this->denegaciones_cliente="Operación Denegada. Operación de anulación en proceso.";
                    break;
                }
                case '947':{
                    $this->denegaciones_comercio="Operación Denegada. Comunicación duplicada.";                
                    $this->denegaciones_cliente="Operación Denegada. Problemas de comunicación. Intente más tarde.";
                    break;
                }
                case '948':{
                    $this->denegaciones_comercio="Operación Denegada. Contactar con entidad emisora.";                
                    $this->denegaciones_cliente="Operación Denegada.";
                    break;
                }
                case '949':{
                    $this->denegaciones_comercio="Operación Denegada. Contactar con entidad emisora.";                
                    $this->denegaciones_cliente="Operación Denegada.";
                    break;
                }
                case '965':{
                    $this->denegaciones_comercio="Operación Denegada. Contactar con entidad emisora.";                
                    $this->denegaciones_cliente="Operación Denegada.";
                    break;
                }
        }
        
    }
    
   

    
}
