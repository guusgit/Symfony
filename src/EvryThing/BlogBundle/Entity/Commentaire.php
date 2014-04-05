<?php

namespace EvryThing\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="EvryThing\BlogBundle\Entity\CommentaireRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Commentaire
{
	/**
	* @ORM\ManyToOne(targetEntity="EvryThing\BlogBundle\Entity\Article")
	* @ORM\JoinColumn(nullable=false)
	*/
	private $article;
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="auteur", type="string", length=255)
     */
    private $auteur;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="string", length=1000)
     */
    private $contenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

	public function __construct()
	{
		$this->date = new \Datetime();
	}
	/**
     * Get id
     *
     * @return EvryThing\BlogBundle\Entity\Article $article 
     */
	public function getArticle(){
		return $this->article;
	}
	/**
	 * Set article
	 *
	 * @param EvryThing\BlogBundle\Entity\Article $article
	 */
	public function setArticle($article){
		$this->article = $article;
	}
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set auteur
     *
     * @param string $auteur
     * @return Commentaire
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get auteur
     *
     * @return string 
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     * @return Commentaire
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string 
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Commentaire
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }
	
	/**
	* +1 automatique de l'attribut 'nbCommentaire' de l'entité Article lors de l'ajout en base d'un nouveau commentaire.
	* @ORM\prePersist
	*/
	public function AddCommentaireArticle()
	{
		$article = $this->getArticle();
		$article->setNbCommentaire($article->getNbCommentaire()+1);
	}
	/**
	* -1 automatique de l'attribut 'nbCommentaire' de l'entité Article lors de la suppression en base d'un commentaire.
	* @ORM\preRemove
	*/
	public function RemoveCommentaireArticle()
	{
		$article = $this->getArticle();
		$article->setNbCommentaire($article->getNbCommentaire()-1);
	}
}
