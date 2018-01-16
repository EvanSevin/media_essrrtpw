<?php
namespace ESSRRTPW\MediaEssrrtpw\Domain\Model;

/***
 *
 * This file is part of the "Media ESSRRTPW" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 Pierre Wroblewski
 *           Remy Torres
 *           Sulivan Roirand
 *           Evan Sevin
 *
 ***/

/**
 * Avis
 */
class Review extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * note
     *
     * @var int
     * @validate NotEmpty
     */
    protected $note = 0;

    /**
     * auteur
     *
     * @var string
     * @validate NotEmpty
     */
    protected $author = '';

    /**
     * commentaire
     *
     * @var string
     * @validate NotEmpty
     */
    protected $comment = '';

    /**
     * date
     *
     * @var \DateTime
     * @validate NotEmpty
     */
    protected $date = null;

    /**
     * Returns the note
     *
     * @return int $note
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets the note
     *
     * @param int $note
     * @return void
     */
    public function setNote($note)
    {
        $this->note = $note;
    }

    /**
     * Returns the author
     *
     * @return string $author
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Sets the author
     *
     * @param string $author
     * @return void
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * Returns the comment
     *
     * @return string $comment
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets the comment
     *
     * @param string $comment
     * @return void
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * Returns the date
     *
     * @return \DateTime $date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets the date
     *
     * @param \DateTime $date
     * @return void
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
    }
}
