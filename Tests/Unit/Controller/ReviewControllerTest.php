<?php
namespace ESSRRTPW\MediaEssrrtpw\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Pierre Wroblewski 
 * @author Remy Torres 
 * @author Sulivan Roirand 
 * @author Evan Sevin 
 */
class ReviewControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \ESSRRTPW\MediaEssrrtpw\Controller\ReviewController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\ESSRRTPW\MediaEssrrtpw\Controller\ReviewController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenReviewToReviewRepository()
    {
        $review = new \ESSRRTPW\MediaEssrrtpw\Domain\Model\Review();

        $reviewRepository = $this->getMockBuilder(\::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $reviewRepository->expects(self::once())->method('add')->with($review);
        $this->inject($this->subject, 'reviewRepository', $reviewRepository);

        $this->subject->createAction($review);
    }
}
