<?php

namespace Prueba\primeraBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Prueba\primeraBundle\Model\PruebaModel;
class DefaultController extends Controller
{
  
  protected $PruebaModel;
  public function __construct()
  {
    $this->PruebaModel=new PruebaModel();
  }

    public function indexAction()
    {
      $resultClientes=$this->PruebaModel->getClientes();
    //  $content["clientes"]=$resultClientes['data'];

        $resultClientes=$this->PruebaModel->getSaldoClient(1);
        $content["saldoTotal"]=$resultClientes['data'];
        $saldo['movements']=null;



        $json = json_decode('[
            {
                "nombre": "alexis",
                "apellido": "olalde",
                "edad": "22",
                "estado": "guanajuato"
              },
              {
                "nombre": "carolina",
                "apellido": "rivera",
                "edad": "23",
                "estado": "queretaro"
              },
              {
                "nombre": "juan",
                "apellido": "perez",
                "edad": "30",
                "estado": "jalisco"
              },
              {
                "nombre": "maría",
                "apellido": "gonzález",
                "edad": "28",
                "estado": "ciudad de méxico"
              },
              {
                "nombre": "pedro",
                "apellido": "sánchez",
                "edad": "25",
                "estado": "nuevo león"
              }
        ]');


        return $this->render('PruebaprimeraBundle:Default:index.html.twig', array('content' => $content,'saldo'=>$saldo));
    }

    public function doAbonoAction()
    {
        $resultClientes=$this->PruebaModel->doAbono(1,100);
        return $resultClientes;

    }
    public function getMovimientosAction()
    {
        $resultClientes=$this->PruebaModel->getMovements(1);

        $saldo["movements"]=($resultClientes['data']);
        return $this->jsonResponse($saldo);

    }
    protected function jsonResponse($data)
    {
        $response = new Response(json_encode($data));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }


    public function doRetiroAction()
    {
        $resultClientes=$this->PruebaModel->doRetiro(1,100);
        return $resultClientes;

    }
}
