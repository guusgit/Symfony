<?php
// src/EvryThing/BlogBundle/Controller/BlogController.php

namespace EvryThing\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Httpfoundation\Response;
use EvryThing\BlogBundle\Entity\Article;
use EvryThing\BlogBundle\Entity\Commentaire;

class BlogController extends Controller
{
  public function accueilAction($page)
	{
		// On ne sait pas combien de pages il y a
		// Mais on sait qu'une page doit être supérieure ou égale à 1
		if( $page < 1 )
		{
		  // On déclenche une exception NotFoundHttpException
		  // Cela va afficher la page d'erreur 404 (on pourra personnaliser cette page plus tard d'ailleurs)
		  throw $this->createNotFoundException('Page inexistante (page = '.$page.')');
		}

		// On récupère le repository
	  $repository = $this->getDoctrine()
						 ->getManager()
						 ->getRepository('EvryThingBlogBundle:Article');

	  // On récupère tout les champs de l'entité 
	  $articles = $repository->findAll();

	  // $article est donc une instance de EvryThing\BlogBundle\Entity\Article
		return $this->render('EvryThingBlogBundle:Blog:accueil.html.twig', array('articles' => $articles));
	}
  
  
  public function voirArticleAction($id)
  {
    // Ici, on récupérera l'article correspondant à l'id $id
    
    return $this->render('EvryThingBlogBundle:Blog:voir.html.twig');
  }
  
  public function ajouterArticleAction()
  {
    // Création de l'entité
    $article = new Article();
    $article->setTitre('actualités');
    $article->setTaille('petitD');
	$article->setImage('bundles/evrythingblog/images/wei2013.jpg');
	$article->setAuteur('Bibi');
    $article->setContenu('swaaaaaaaaaaaggggggggggg!!!!!!');
	
    // Création d'un premier commentaire
    $commentaire1 = new Commentaire();
    $commentaire1->setAuteur('Bobo');
    $commentaire1->setContenu('On veut les photos !');

    // Création d'un deuxième commentaire, par exemple
    $commentaire2 = new Commentaire();
    $commentaire2->setAuteur('Daminou');
    $commentaire2->setContenu('Les photos arrivent !');

    // On lie les commentaires à l'article
    $commentaire1->setArticle($article);
    $commentaire2->setArticle($article);

    // On récupère l'EntityManager
    $em = $this->getDoctrine()->getManager();

    // Étape 1 : On persiste les entités
    $em->persist($article);
    // Pour cette relation pas de cascade, car elle est définie dans l'entité Commentaire et non Article
    // On doit donc tout persister à la main ici
    $em->persist($commentaire1);
    $em->persist($commentaire2);

    // Étape 2 : On déclenche l'enregistrement
    $em->flush();
    
    if ($this->getRequest()->getMethod() == 'POST') {
      $this->get('session')->getFlashBag()->add('info', 'Article bien enregistré');
      return $this->redirect( $this->generateUrl('evrythingblog_voir', array('id' => $article->getId())) );
    }

    return $this->render('EvryThingBlogBundle:Blog:ajouter.html.twig');


  }
  
  public function modifierArticleAction($id)
  {
	$em = $this->getDoctrine()->getManager();
    // Ici, on récupérera l'article correspondant à $id
	$article = $em->getRepository('EvryThingBlogBundle:Article')->find($id);
	echo $article->getTitre();
	
    // Ici, on s'occupera de la création et de la gestion du formulaire
	// pour l'instant en dur
	$article->setTitre('Coucou les enfants!!!!');
	
	
	
	$commentaire2 = new Commentaire();
    $commentaire2->setAuteur('Damien');
    $commentaire2->setContenu('Hello Gentleman 3!!!!!');

    // On lie les commentaires à l'article
    $commentaire2->setArticle($article);

    // On récupère l'EntityManager
    $em = $this->getDoctrine()->getManager();

    $em->persist($commentaire2);
	
	
	
	
	$em->flush();
	
    return $this->render('EvryThingBlogBundle:Blog:modifier.html.twig');
  }

  public function supprimerAction($id)
  {
    // Ici, on récupérera l'article correspondant à $id

    // Ici, on gérera la suppression de l'article en question

    return $this->render('EvryThingBlogBundle:Blog:supprimer.html.twig');
  }
    public function ajouterAction()
  {
	
    /*// Création de l'entité
    $article = new Article();
    $article->setTitre('actualités');
    $article->setTaille('petitD');
	$article->setImage('bundles/evrythingblog/images/wei2013.jpg');
	$article->setAuteur('Bibi');
    $article->setContenu('swaaaaaaaaaaaggggggggggg!!!!!!');
	
    // Création d'un premier commentaire
    $commentaire1 = new Commentaire();
    $commentaire1->setAuteur('Bobo');
    $commentaire1->setContenu('On veut les photos !');

    // Création d'un deuxième commentaire, par exemple
    $commentaire2 = new Commentaire();
    $commentaire2->setAuteur('Daminou');
    $commentaire2->setContenu('Les photos arrivent !');

    // On lie les commentaires à l'article
    $commentaire1->setArticle($article);
    $commentaire2->setArticle($article);

    // On récupère l'EntityManager
    $em = $this->getDoctrine()->getManager();

    // Étape 1 : On persiste les entités
    $em->persist($article);
    // Pour cette relation pas de cascade, car elle est définie dans l'entité Commentaire et non Article
    // On doit donc tout persister à la main ici
    $em->persist($commentaire1);
    $em->persist($commentaire2);

    // Étape 2 : On déclenche l'enregistrement
    $em->flush();
    
    if ($this->getRequest()->getMethod() == 'POST') {
      $this->get('session')->getFlashBag()->add('info', 'Article bien enregistré');
      return $this->redirect( $this->generateUrl('evrythingblog_voir', array('id' => $article->getId())) );
    }*/

    return $this->render('EvryThingBlogBundle:Blog:accueil.html.twig');
  }
}