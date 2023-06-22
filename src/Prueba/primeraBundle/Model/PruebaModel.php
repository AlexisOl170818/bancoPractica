<?php
namespace Prueba\primeraBundle\Model;
use Utilerias\SQLBundle\Model\SQLModel;

class PruebaModel{
    protected $SQLModel;

    public function __construct()
    {
        $this->SQLModel=new SQLModel();
        $this->SQLModel->setSchema("public");
    }
    public function getClientes()
    {
        $qry='SELECT ';
        $qry.='idcliente,rfc,nombrecliente,apellidoscliente,direccion,b.nombreciudad ';
        $qry.='FROM ';
        $qry.='cliente a inner join ciudad b on a.idciudad=b.idciudad';
        
       $result=$this->SQLModel->executeQuery($qry);
       return $result;

    }
    public function getMovements($nocuenta)
    {


        $qry='SELECT ';
        $qry.='idmovimiento, nocuenta, importe, fecha, tipomovimiento ';
        $qry.='FROM ';
        $qry.='movimiento ';
        $qry.='WHERE ';
        $qry.="nocuenta=$nocuenta";
        $result=$this->SQLModel->executeQuery($qry);
        return $result;

    }
    public function doAbono($nocuenta,$importe)
    {


        $qry='INSERT INTO ';
        $qry.='movimiento';
        $qry.='(nocuenta,importe,fecha,tipomovimiento) ';
        $qry.='values';
        $qry.="('$nocuenta',$importe,current_timestamp,'Abono') returning *";

        $result=$this->SQLModel->executeQuery($qry);
        return $result;

    }

    public function doRetiro($nocuenta,$importe)
    {


            $qry='INSERT INTO ';
            $qry.='movimiento';
            $qry.='(nocuenta,importe,fecha,tipomovimiento) ';
            $qry.='values';
            $qry.="('$nocuenta',$importe,current_timestamp,'Retiro')returning *";


        $result=$this->SQLModel->executeQuery($qry);
        return $result;

    }
    public function getSaldoClient($nocuenta)
    {

        $qry='SELECT ';
        $qry.='nocuenta, "SaldoTotal" ';
        $qry.='FROM ';
        $qry.='"vw_banco_SaldoTotal"';
        $qry.='WHERE ';
        $qry.="nocuenta='$nocuenta'";
        $result=$this->SQLModel->executeQuery($qry);
        return $result;

    }


}