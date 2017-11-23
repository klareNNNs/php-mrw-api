<?php

namespace MRW\Entity;

class AuthHeader
{
    var $CodigoFranquicia;//string
    var $CodigoAbonado;//string
    var $CodigoDepartamento;//string
    var $UserName;//string
    var $Password;//string

    function __construct($LoginResponse)
    {
        $this->CodigoFranquicia = $LoginResponse['CodigoFranquicia'];
        $this->CodigoAbonado = $LoginResponse['CodigoAbonado'];
        $this->CodigoDepartamento = $LoginResponse['CodigoDepartamento'];
        $this->UserName = $LoginResponse['UserName'];
        $this->Password = $LoginResponse['Password'];

    }
}
