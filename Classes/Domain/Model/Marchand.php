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
 * Marchand
 */
class Marchand extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * nom
     *
     * @var string
     * @validate NotEmpty
     */
    protected $nom = '';
    
    /**
     * site
     *
     * @var string
     */
    protected $site = '';
    
    /**
     * email
     *
     * @var string
     * @validate NotEmpty
     */
    protected $email = '';
    
    /**
     * tel
     *
     * @var string
     * @validate NotEmpty
     */
    protected $tel = '';
    
    /**
     * image
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    protected $image = null;
    
    /**
     * adresse
     *
     * @var string
     * @validate NotEmpty
     */
    protected $adresse = '';
    
    /**
     * cp
     *
     * @var string
     * @validate NotEmpty
     */
    protected $cp = '';
    
    /**
     * ville
     *
     * @var string
     * @validate NotEmpty
     */
    protected $ville = '';
    
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
     * Returns the site
     *
     * @return string $site
     */
    public function getSite()
    {
        return $this->site;
    }
    
    /**
     * Sets the site
     *
     * @param string $site
     * @return void
     */
    public function setSite($site)
    {
        $this->site = $site;
    }
    
    /**
     * Returns the email
     *
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }
    
    /**
     * Sets the email
     *
     * @param string $email
     * @return void
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
    
    /**
     * Returns the tel
     *
     * @return string $tel
     */
    public function getTel()
    {
        return $this->tel;
    }
    
    /**
     * Sets the tel
     *
     * @param string $tel
     * @return void
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
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
     * Returns the adresse
     *
     * @return string $adresse
     */
    public function getAdresse()
    {
        return $this->adresse;
    }
    
    /**
     * Sets the adresse
     *
     * @param string $adresse
     * @return void
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }
    
    /**
     * Returns the cp
     *
     * @return string $cp
     */
    public function getCp()
    {
        return $this->cp;
    }
    
    /**
     * Sets the cp
     *
     * @param string $cp
     * @return void
     */
    public function setCp($cp)
    {
        $this->cp = $cp;
    }
    
    /**
     * Returns the ville
     *
     * @return string $ville
     */
    public function getVille()
    {
        return $this->ville;
    }
    
    /**
     * Sets the ville
     *
     * @param string $ville
     * @return void
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    }

}