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
class ReviewTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \ESSRRTPW\MediaEssrrtpw\Domain\Model\Review
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \ESSRRTPW\MediaEssrrtpw\Domain\Model\Review();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNoteReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getNote()
        );
    }

    /**
     * @test
     */
    public function setNoteForIntSetsNote()
    {
        $this->subject->setNote(12);

        self::assertAttributeEquals(
            12,
            'note',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAuthorReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAuthor()
        );
    }

    /**
     * @test
     */
    public function setAuthorForStringSetsAuthor()
    {
        $this->subject->setAuthor('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'author',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCommentReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getComment()
        );
    }

    /**
     * @test
     */
    public function setCommentForStringSetsComment()
    {
        $this->subject->setComment('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'comment',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDateReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getDate()
        );
    }

    /**
     * @test
     */
    public function setDateForDateTimeSetsDate()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setDate($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'date',
            $this->subject
        );
    }
}
