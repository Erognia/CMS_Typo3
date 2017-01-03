<?php

namespace Mris\MrisCatalogue\Tests\Unit\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2017 Richard Morgane
 *           Inthavixay Stéphane
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
 * Test case for class \Mris\MrisCatalogue\Domain\Model\Produit.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Richard Morgane 
 * @author Inthavixay Stéphane 
 */
class ProduitTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
	/**
	 * @var \Mris\MrisCatalogue\Domain\Model\Produit
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = new \Mris\MrisCatalogue\Domain\Model\Produit();
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getNomReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getNom()
		);
	}

	/**
	 * @test
	 */
	public function setNomForStringSetsNom()
	{
		$this->subject->setNom('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'nom',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDateSortieReturnsInitialValueForDateTime()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getDateSortie()
		);
	}

	/**
	 * @test
	 */
	public function setDateSortieForDateTimeSetsDateSortie()
	{
		$dateTimeFixture = new \DateTime();
		$this->subject->setDateSortie($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'dateSortie',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDescriptionReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getDescription()
		);
	}

	/**
	 * @test
	 */
	public function setDescriptionForStringSetsDescription()
	{
		$this->subject->setDescription('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'description',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPrixReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setPrixForIntSetsPrix()
	{	}

	/**
	 * @test
	 */
	public function getImageReturnsInitialValueForFileReference()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getImage()
		);
	}

	/**
	 * @test
	 */
	public function setImageForFileReferenceSetsImage()
	{
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setImage($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'image',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCategorieReturnsInitialValueForCategorie()
	{
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getCategorie()
		);
	}

	/**
	 * @test
	 */
	public function setCategorieForObjectStorageContainingCategorieSetsCategorie()
	{
		$categorie = new \Mris\MrisCatalogue\Domain\Model\Categorie();
		$objectStorageHoldingExactlyOneCategorie = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneCategorie->attach($categorie);
		$this->subject->setCategorie($objectStorageHoldingExactlyOneCategorie);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneCategorie,
			'categorie',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addCategorieToObjectStorageHoldingCategorie()
	{
		$categorie = new \Mris\MrisCatalogue\Domain\Model\Categorie();
		$categorieObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$categorieObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($categorie));
		$this->inject($this->subject, 'categorie', $categorieObjectStorageMock);

		$this->subject->addCategorie($categorie);
	}

	/**
	 * @test
	 */
	public function removeCategorieFromObjectStorageHoldingCategorie()
	{
		$categorie = new \Mris\MrisCatalogue\Domain\Model\Categorie();
		$categorieObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$categorieObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($categorie));
		$this->inject($this->subject, 'categorie', $categorieObjectStorageMock);

		$this->subject->removeCategorie($categorie);

	}

	/**
	 * @test
	 */
	public function getPointsdeventeReturnsInitialValueForMarchand()
	{
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getPointsdevente()
		);
	}

	/**
	 * @test
	 */
	public function setPointsdeventeForObjectStorageContainingMarchandSetsPointsdevente()
	{
		$pointsdevente = new \Mris\MrisCatalogue\Domain\Model\Marchand();
		$objectStorageHoldingExactlyOnePointsdevente = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOnePointsdevente->attach($pointsdevente);
		$this->subject->setPointsdevente($objectStorageHoldingExactlyOnePointsdevente);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOnePointsdevente,
			'pointsdevente',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addPointsdeventeToObjectStorageHoldingPointsdevente()
	{
		$pointsdevente = new \Mris\MrisCatalogue\Domain\Model\Marchand();
		$pointsdeventeObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$pointsdeventeObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($pointsdevente));
		$this->inject($this->subject, 'pointsdevente', $pointsdeventeObjectStorageMock);

		$this->subject->addPointsdevente($pointsdevente);
	}

	/**
	 * @test
	 */
	public function removePointsdeventeFromObjectStorageHoldingPointsdevente()
	{
		$pointsdevente = new \Mris\MrisCatalogue\Domain\Model\Marchand();
		$pointsdeventeObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$pointsdeventeObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($pointsdevente));
		$this->inject($this->subject, 'pointsdevente', $pointsdeventeObjectStorageMock);

		$this->subject->removePointsdevente($pointsdevente);

	}
}
