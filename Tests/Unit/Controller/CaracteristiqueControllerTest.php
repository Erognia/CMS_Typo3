<?php
namespace Mris\MrisCatalogue\Tests\Unit\Controller;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2017 Richard Morgane 
 *  			Inthavixay Stéphane 
 *  			
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class Mris\MrisCatalogue\Controller\CaracteristiqueController.
 *
 * @author Richard Morgane 
 * @author Inthavixay Stéphane 
 */
class CaracteristiqueControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{

	/**
	 * @var \Mris\MrisCatalogue\Controller\CaracteristiqueController
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = $this->getMock('Mris\\MrisCatalogue\\Controller\\CaracteristiqueController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllCaracteristiquesFromRepositoryAndAssignsThemToView()
	{

		$allCaracteristiques = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$caracteristiqueRepository = $this->getMock('Mris\\MrisCatalogue\\Domain\\Repository\\CaracteristiqueRepository', array('findAll'), array(), '', FALSE);
		$caracteristiqueRepository->expects($this->once())->method('findAll')->will($this->returnValue($allCaracteristiques));
		$this->inject($this->subject, 'caracteristiqueRepository', $caracteristiqueRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('caracteristiques', $allCaracteristiques);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenCaracteristiqueToView()
	{
		$caracteristique = new \Mris\MrisCatalogue\Domain\Model\Caracteristique();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('caracteristique', $caracteristique);

		$this->subject->showAction($caracteristique);
	}
}
