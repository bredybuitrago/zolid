<?php

//Configuración mensajes
class EMessages {

    const CORRECT = 1;
    const SUCCESS = 1;
    const INSERT = 2;
    const UPDATE = 3;
    const DELETE = 4;
    const ERROR = -1;
    const ERROR_CONNECTION = -6;
    const ERROR_QUERY = 5;
    const ERROR_INSERT = 6;
    const ERROR_UPDATE = 7;
    const ERROR_DELETE = 8;
    const ERROR_ACTION = 9;
    const ERROR_FATAL = 10;

    public static function getResponse($code) {
        switch ($code) {
            case EMessages::CORRECT:
            case EMessages::SUCCESS:
                return new Response(1, "Se ha consultado con éxito.");
            case EMessages::INSERT:
                return new Response(1, "Se ha insertado el registro con éxito.");
            case EMessages::UPDATE:
                return new Response(1, "Se ha actualizado el registro con éxito.");
            case EMessages::DELETE:
                return new Response(1, "Se ha eliminado el registro con éxito.");
            case EMessages::ERROR:
                return new Response(-1, "Se ha producido un error inesperado.");
            case EMessages::ERROR_CONNECTION:
                return new Response(-6, "Error de conexión con la base de datos.");
            case EMessages::ERROR_QUERY:
                return new Response(-1, "Error al consultar.");
            case EMessages::ERROR_INSERT:
                return new Response(-1, "Error al insertar.");
            case EMessages::ERROR_UPDATE:
                return new Response(-1, "Error al actualizar.");
            case EMessages::ERROR_DELETE:
                return new Response(-1, "Error al eliminar.");
            case EMessages::ERROR_ACTION:
                return new Response(-1, "Error al ejecutar la acción solicitada.");
            case EMessages::ERROR_FATAL:
                return new Response(-99, "Error fatal.");
        }
    }

}
