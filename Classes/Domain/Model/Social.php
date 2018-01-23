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
 * Réseau social
 */
class Social extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    const FACEBOOK = 0;
    const TWITTER = 1;
    /**
     * titre
     *
     * @var int
     * @validate NotEmpty
     */
    protected $title = 0;

    /**
     * identifiant
     *
     * @var string
     * @validate NotEmpty
     */
    protected $accountName = '';

    /**
     * Returns the title
     *
     * @return int $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param int $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Returns the accountName
     *
     * @return string $accountName
     */
    public function getAccountName()
    {
        return $this->accountName;
    }

    /**
     * Sets the accountName
     *
     * @param string $accountName
     * @return void
     */
    public function setAccountName($accountName)
    {
        $this->accountName = $accountName;
    }
}
