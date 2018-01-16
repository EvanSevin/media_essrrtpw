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
class SocialTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \ESSRRTPW\MediaEssrrtpw\Domain\Model\Social
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \ESSRRTPW\MediaEssrrtpw\Domain\Model\Social();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getTitleReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getTitle()
        );
    }

    /**
     * @test
     */
    public function setTitleForIntSetsTitle()
    {
        $this->subject->setTitle(12);

        self::assertAttributeEquals(
            12,
            'title',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAccountNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAccountName()
        );
    }

    /**
     * @test
     */
    public function setAccountNameForStringSetsAccountName()
    {
        $this->subject->setAccountName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'accountName',
            $this->subject
        );
    }
}
