<?php
namespace Mris\MrisCatalogue\Domain\Model;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2016 Richard Morgane
 *           Inthavixay Stéphane
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Produit
 */
class Produit extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * nom
     *
     * @var string
     * @validate NotEmpty
     */
    protected $nom = '';
    
    /**
     * dateSortie
     *
     * @var \DateTime
     * @validate NotEmpty
     */
    protected $dateSortie = null;
    
    /**
     * description
     *
     * @var string
     */
    protected $description = '';
    
    /**
     * prix
     *
     * @var int
     * @validate NotEmpty
     */
    protected $prix = 0;
    
    /**
     * image
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @validate NotEmpty
     */
    protected $image = null;
    
    /**
     * categorie
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Mris\MrisCatalogue\Domain\Model\Categorie>
     * @cascade remove
     */
    protected $categorie = null;
    
    /**
     * pointsdevente
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Mris\MrisCatalogue\Domain\Model\Marchand>
     */
    protected $pointsdevente = null;
    
    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }
    
    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->categorie = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->pointsdevente = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }
    
    /**
     * Returns the nom
     *
     * @return string $nom
     */
    public function getNom()
    {
        return $this->nom;
    }
    
    /**
     * Sets the nom
     *
     * @param string $nom
     * @return void
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    
    /**
     * Returns the dateSortie
     *
     * @return \DateTime $dateSortie
     */
    public function getDateSortie()
    {
        return $this->dateSortie;
    }
    
    /**
     * Sets the dateSortie
     *
     * @param \DateTime $dateSortie
     * @return void
     */
    public function setDateSortie(\DateTime $dateSortie)
    {
        $this->dateSortie = $dateSortie;
    }
    
    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
    
    /**
     * Returns the prix
     *
     * @return int $prix
     */
    public function getPrix()
    {
        return $this->prix;
    }
    
    /**
     * Sets the prix
     *
     * @param int $prix
     * @return void
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }
    
    /**
     * Returns the image
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     */
    public function getImage()
    {
        return $this->image;
    }
    
    /**
     * Sets the image
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     * @return void
     */
    public function setImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image)
    {
        $this->image = $image;
    }
    
    /**
     * Adds a Categorie
     *
     * @param \Mris\MrisCatalogue\Domain\Model\Categorie $categorie
     * @return void
     */
    public function addCategorie(\Mris\MrisCatalogue\Domain\Model\Categorie $categorie)
    {
        $this->categorie->attach($categorie);
    }
    
    /**
     * Removes a Categorie
     *
     * @param \Mris\MrisCatalogue\Domain\Model\Categorie $categorieToRemove The Categorie to be removed
     * @return void
     */
    public function removeCategorie(\Mris\MrisCatalogue\Domain\Model\Categorie $categorieToRemove)
    {
        $this->categorie->detach($categorieToRemove);
    }
    
    /**
     * Returns the categorie
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Mris\MrisCatalogue\Domain\Model\Categorie> $categorie
     */
    public function getCategorie()
    {
        return $this->categorie;
    }
    
    /**
     * Sets the categorie
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Mris\MrisCatalogue\Domain\Model\Categorie> $categorie
     * @return void
     */
    public function setCategorie(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $categorie)
    {
        $this->categorie = $categorie;
    }
    
    /**
     * Adds a Marchand
     *
     * @param \Mris\MrisCatalogue\Domain\Model\Marchand $pointsdevente
     * @return void
     */
    public function addPointsdevente(\Mris\MrisCatalogue\Domain\Model\Marchand $pointsdevente)
    {
        $this->pointsdevente->attach($pointsdevente);
    }
    
    /**
     * Removes a Marchand
     *
     * @param \Mris\MrisCatalogue\Domain\Model\Marchand $pointsdeventeToRemove The Marchand to be removed
     * @return void
     */
    public function removePointsdevente(\Mris\MrisCatalogue\Domain\Model\Marchand $pointsdeventeToRemove)
    {
        $this->pointsdevente->detach($pointsdeventeToRemove);
    }
    
    /**
     * Returns the pointsdevente
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Mris\MrisCatalogue\Domain\Model\Marchand> $pointsdevente
     */
    public function getPointsdevente()
    {
        return $this->pointsdevente;
    }
    
    /**
     * Sets the pointsdevente
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Mris\MrisCatalogue\Domain\Model\Marchand> $pointsdevente
     * @return void
     */
    public function setPointsdevente(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $pointsdevente)
    {
        $this->pointsdevente = $pointsdevente;
    }

}