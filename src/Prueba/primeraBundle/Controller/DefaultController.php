<?php

namespace Prueba\primeraBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Prueba\primeraBundle\Model\PruebaModel;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
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


        return $this->render('PruebaprimeraBundle:Default:index.html.twig', array('saldo'=>$saldo));
    }

    public function doAbonoAction(Request $request)
    {
        $post = $request->getContent();

        $data=json_decode($post,true);
        $resultClientes=$this->PruebaModel->doAbono($data['cuenta'],$data['deposito']);
        return $this->jsonResponse($resultClientes);

    }
    public function getMovimientosAction(Request $request)
    {

        $post = $request->getContent();
        $cuenta=json_decode($post,true);

        $resultClientes=$this->PruebaModel->getSaldoClient($cuenta['cuenta']);
        $saldo["saldoTotal"]=$resultClientes['data'];
        $resultClientes=$this->PruebaModel->getMovements($cuenta['cuenta']);
        $saldo["movements"]=($resultClientes['data']);
        return $this->jsonResponse($saldo);

    }
    protected function jsonResponse($data)
    {

        $response = new Response(json_encode($data));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }


    public function doRetiroAction(Request $request)
    {
        $post = $request->getContent();
        $data=json_decode($post,true);
        $resultClientes=$this->PruebaModel->doRetiro($data['cuenta'],$data['retiro']);
        return $this->jsonResponse($resultClientes);
    }
}
