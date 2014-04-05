<?php
// src/EvryThing/BlogBundle/Controller/BlogController.php

namespace EvryThing\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Httpfoundation\Response;
use EvryThing\BlogBundle\Entity\Article;

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

    // Ici, on récupére la liste des articles, puis on le passe au template
  $articles = array(
    array(
      'titre'   => 'actualités',
      'id'      => 1,
	  'taille'	=> 'grand',
	  'image'	=> 'bundles/evrythingblog/images/wei2013.jpg',
      'auteur'  => 'winzou',
      'contenu' => 'Ce weekend était trop bien. Blabla…',
      'date'    => new \Datetime()),
    array(
      'titre'   => 'évènements',
      'id'      => 2,
	  'taille'	=> 'petitG',
      'image'	=> 'bundles/evrythingblog/images/wei2013.jpg',
	  'auteur' 	=> 'winzou',
      'contenu' => 'Bientôt prêt pour le jour J. Blabla…',
      'date'    => new \Datetime()),
    array(
      'titre'   => 'à propos',
      'id'      => 3, 
	  'taille'	=> 'petitD',
	  'image'	=> 'bundles/evrythingblog/images/test.jpg',
      'auteur' 	=> 'M@teo21',
      'contenu' => '+500% sur 1 an, fabuleux. Blabla…',
      'date'    => new \Datetime()),
	array(
      'titre'   => 'avantages',
      'id'      => 4, 
	  'taille'	=> 'grand',
	  'image'	=> 'bundles/evrythingblog/images/test.jpg',
      'auteur' 	=> 'Damien',
      'contenu' => 'test testtest  testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest testtest test',
      'date'    => new \Datetime())
  );

    // Mais pour l'instant, on ne fait qu'appeler le template
    return $this->render('EvryThingBlogBundle:Blog:accueil.html.twig', array('articles' => $articles));
  }
  
  
  public function voirAction($id)
  {
    // Ici, on récupérera l'article correspondant à l'id $id
    
    return $this->render('EvryThingBlogBundle:Blog:voir.html.twig', array(
      'id' => $id
    ));
  }
  
  public function ajouterAction()
  {
    // Création de l'entité
    $article = new Article();
    $article->setTitre('actualités');
    $article->setTaille('grand');
	$article->setImage('bundles/evrythingblog/images/wei2013.jpg');
	$article->setAuteur('Bibi');
    $article->setContenu('C\'était vraiment super et on s\'est bien amusé.');
	
    // On peut ne pas définir ni la date ni la publication,
    // car ces attributs sont définis automatiquement dans le constructeur

    // On récupère l'EntityManager
    $em = $this->getDoctrine()->getManager();

    // Étape 1 : On « persiste » l'entité
    $em->persist($article);

    // Étape 2 : On « flush » tout ce qui a été persisté avant
    $em->flush();
    
    if ($this->getRequest()->getMethod() == 'POST') {
      $this->get('session')->getFlashBag()->add('info', 'Article bien enregistré');
      return $this->redirect( $this->generateUrl('sdzblog_voir', array('id' => $article->getId())) );
    }

    return $this->render('EvryThingBlogBundle:Blog:ajouter.html.twig');


  }
  
  public function modifierAction($id)
  {
    // Ici, on récupérera l'article correspondant à $id

    // Ici, on s'occupera de la création et de la gestion du formulaire

    return $this->render('EvryThingBlogBundle:Blog:modifier.html.twig');
  }

  public function supprimerAction($id)
  {
    // Ici, on récupérera l'article correspondant à $id

    // Ici, on gérera la suppression de l'article en question

    return $this->render('EvryThingBlogBundle:Blog:supprimer.html.twig');
  }
}