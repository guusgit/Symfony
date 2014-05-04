<?php

namespace EvryThing\GalerieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GalerieController extends Controller
{
    public function albumsAction()
    {
		$pointeur=opendir('./bundles/evrythinggalerie/images/');
		while ($entree = readdir($pointeur)) {
		 /* on n'affiche que les entrees voulues */
			if ($entree != "." && $entree != "..") {
				$albums[] = "$entree";
			}
		}
		closedir($pointeur);
        return $this->render('EvryThingGalerieBundle:Galerie:albums.html.twig', array('albums' => $albums));
    }
	
	public function carrouselAction($album)
    {
		$pointeur=opendir('./bundles/evrythinggalerie/images/'.$album);
		while ($entree = readdir($pointeur)) {
		 /* on n'affiche que les entrees voulues */
			if ($entree != "." && $entree != "..") {
				$photos[] = "$entree";
			}
		}
		closedir($pointeur);
        return $this->render('EvryThingGalerieBundle:Galerie:carrousel.html.twig', array('photos' => $photos, 'album' => $album));
    }
}
