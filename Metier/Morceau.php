<?php
/**
 * Created by PhpStorm.
 * User: antho
 * Date: 13/12/2016
 * Time: 11:30
 */

namespace Metier;

/**
 * Class Morceau
 * @package Metier
 * Cette classe correspond au morcau de musique.
 */
class Morceau
{
    /**
     * @var titre du morceau
     */
    private $titre;

    /**
     * Morceau constructor.
     * @param titre $titre
     * @param auteur $auteur
     * @param chemin $chemin
     * @param nombre $nbAvisFav
     * @param nombre $nbAvisDeFav
     * @param nombre $nbAvisindif
     * @param details $details
     * @param durée $dureeEcoute
     * @param année $anneParution
     * @param $periodeMiseEnLigne
     */


    public function getTitre(){return $this->titre;}
    public function setTitre($titre){$this->titre = $titre;}

    /**
     * @var auteur du morceau
     */
    private $auteur;
    public function getAuteur(){return $this->auteur;}
    public function setAuteur($auteur){$this->auteur = $auteur;}

    /**
     * @var chemin de la photo du morceau
     */
    private $chemin;
    public function getChemin(){return $this->chemin;}
    public function setChemin($chemin){$this->chemin = $chemin;}

    /**
     * @var nombre d'avis favorable du morceau
     */
    private $nbAvisFav;
    public function getNbAvisFav(){return $this->nbAvisFav;}
    public function setNbAvisFav($nbAvisFav){$this->nbAvisFav = $nbAvisFav;}

    /**
     * @var nombre d'avis défavorable du morceau
     */
    private $nbAvisDeFav;
    public function getNbAvisDeFav(){return $this->nbAvisDeFav;}
    public function setNbAvisDeFav($nbAvisDeFav){$this->nbAvisDeFav = $nbAvisDeFav;}

    /**
     * @var nombre d'avis indifférent du morceau
     */
    private $nbAvisindif;
    public function getNbAvisindif(){return $this->nbAvisindif;}
    public function setNbAvisindif($nbAvisindif) {$this->nbAvisindif = $nbAvisindif;}

    /**
     * @var details concernant le morceau
     */
    private $details;
    public function getDetails(){return $this->details;}
    public function setDetails($details){$this->details = $details;}

    /**
     * @var durée d'écoute du morceau
     */
    private $dureeEcoute;
    public function getDureeEcoute(){return $this->dureeEcoute;}
    public function setDureeEcoute($dureeEcoute){$this->dureeEcoute = $dureeEcoute;}

    /**
     * @var année de parution du morceau
     */
    private $anneParution;
    public function getAnneParution(){return $this->anneParution;}
    public function setAnneParution($anneParution){$this->anneParution = $anneParution;}

    /**
     * @var periode de mise en ligne du morceau
     */
    private $periodeMiseEnLigne;
    public function getPeriodeMiseEnLigne(){return $this->periodeMiseEnLigne;}
    public function setPeriodeMiseEnLigne($periodeMiseEnLigne){$this->periodeMiseEnLigne = $periodeMiseEnLigne;}

    /**
     * Morceau constructor.
     * @param $titre
     * @param $auteur
     * @param $chemin
     * @param $nbAvisFav
     * @param $nbAvisDeFav
     * @param $nbAvisindif
     * @param $details
     * @param $dureeEcoute
     * @param $anneParution
     * @param $periodeMiseEnLigne
     */
    public function __construct($titre,$auteur,$chemin,$nbAvisFav,$nbAvisDeFav,$nbAvisindif,$details,$dureeEcoute,$anneParution, $periodeMiseEnLigne)
    {
        $this->setTitre($titre);
        $this->setAuteur($auteur);
        $this->setChemin($chemin);
        $this->setNbAvisFav($nbAvisFav);
        $this->setNbAvisDeFav($nbAvisDeFav);
        $this->setNbAvisindif($nbAvisindif);
        $this->setDetails($details);
        $this->setDureeEcoute($dureeEcoute);
        $this->setAnneParution($anneParution);
        $this->setPeriodeMiseEnLigne($periodeMiseEnLigne);
    }



}