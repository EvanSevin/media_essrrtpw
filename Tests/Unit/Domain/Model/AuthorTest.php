<?php
namespace ESSRRTPW\MediaEssrrtpw\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Pierre Wroblewski 
 * @author Remy Torres 
 * @author Sulivan Roirand 
 * @author Evan Sevin 
 */
class AuthorTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \ESSRRTPW\MediaEssrrtpw\Domain\Model\Author
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \ESSRRTPW\MediaEssrrtpw\Domain\Model\Author();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getBioReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getBio()
        );
    }

    /**
     * @test
     */
    public function setBioForStringSetsBio()
    {
        $this->subject->setBio('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'bio',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPicturesReturnsInitialValueForFileReference()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getPictures()
        );
    }

    /**
     * @test
     */
    public function setPicturesForFileReferenceSetsPictures()
    {
        $picture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $objectStorageHoldingExactlyOnePictures = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOnePictures->attach($picture);
        $this->subject->setPictures($objectStorageHoldingExactlyOnePictures);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOnePictures,
            'pictures',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addPictureToObjectStorageHoldingPictures()
    {
        $picture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $picturesObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $picturesObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($picture));
        $this->inject($this->subject, 'pictures', $picturesObjectStorageMock);

        $this->subject->addPicture($picture);
    }

    /**
     * @test
     */
    public function removePictureFromObjectStorageHoldingPictures()
    {
        $picture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $picturesObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $picturesObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($picture));
        $this->inject($this->subject, 'pictures', $picturesObjectStorageMock);

        $this->subject->removePicture($picture);
    }

    /**
     * @test
     */
    public function getSocialsReturnsInitialValueForSocial()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSocials()
        );
    }

    /**
     * @test
     */
    public function setSocialsForObjectStorageContainingSocialSetsSocials()
    {
        $social = new \ESSRRTPW\MediaEssrrtpw\Domain\Model\Social();
        $objectStorageHoldingExactlyOneSocials = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSocials->attach($social);
        $this->subject->setSocials($objectStorageHoldingExactlyOneSocials);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSocials,
            'socials',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addSocialToObjectStorageHoldingSocials()
    {
        $social = new \ESSRRTPW\MediaEssrrtpw\Domain\Model\Social();
        $socialsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $socialsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($social));
        $this->inject($this->subject, 'socials', $socialsObjectStorageMock);

        $this->subject->addSocial($social);
    }

    /**
     * @test
     */
    public function removeSocialFromObjectStorageHoldingSocials()
    {
        $social = new \ESSRRTPW\MediaEssrrtpw\Domain\Model\Social();
        $socialsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $socialsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($social));
        $this->inject($this->subject, 'socials', $socialsObjectStorageMock);

        $this->subject->removeSocial($social);
    }
}
