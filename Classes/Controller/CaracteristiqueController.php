<?php
namespace Mris\MrisCatalogue\Controller;

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
 * CaracteristiqueController
 */
class CaracteristiqueController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * caracteristiqueRepository
     *
     * @var \Mris\MrisCatalogue\Domain\Repository\CaracteristiqueRepository
     * @inject
     */
    protected $caracteristiqueRepository = NULL;
    
    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $caracteristiques = $this->caracteristiqueRepository->findAll();
        $this->view->assign('caracteristiques', $caracteristiques);
    }
    
    /**
     * action show
     *
     * @param \Mris\MrisCatalogue\Domain\Model\Caracteristique $caracteristique
     * @return void
     */
    public function showAction(\Mris\MrisCatalogue\Domain\Model\Caracteristique $caracteristique)
    {
        $this->view->assign('caracteristique', $caracteristique);
    }

}