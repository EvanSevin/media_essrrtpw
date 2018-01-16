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
class TypeTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \ESSRRTPW\MediaEssrrtpw\Domain\Model\Type
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \ESSRRTPW\MediaEssrrtpw\Domain\Model\Type();
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
}
