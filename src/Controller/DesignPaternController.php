<?php

namespace App\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Manager\DesignPaternManager;

class DesignPaternController extends AbstractController
{


    //**********************************************************************************************//
    /**
     * @param DesignPaternManager $designpaternmanager
     * @Route("/walid", name="walid")
     */
    public function index(
        Request $request,
        DesignPaternManager $designpaternmanager
        )
        {
            $blogs = $designpaternmanager->getBlog(); // notre requette dans la class 'designpaternmanager' dans la fonction 'getSeparateurs' en utilise le nom du colonne ID pour la selection

            return $this->render('blog/index.html.twig', [
                'b'=>$blogs
            ]);
        }

         /**
     * @param DesignPaternManager $designpaternmanager
     * @Route("/walidadd", name="walidadd")
     */
    public function add(
        Request $request,
        DesignPaternManager $designpaternmanager
        )
        {
            //$values = $request->request->get('blog[titre]'); // recuperer le valeur de champ 'separateurs'
            // Récupérez toutes les variables du formulaire sous forme de tableau associatif
            
            $donneesFormulaire = $request->request->all();
            
            

            if ($request->isMethod('POST') === true) {
                
            $blogs = $designpaternmanager->addBlog($donneesFormulaire);
            
            
            }
              
            
            return $this->render('blog/add.html.twig'); // boot sur cette vue 


        }





}
