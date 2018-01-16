<?php
namespace ESSRRTPW\MediaEssrrtpw\Controller;

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
 * AuthorController
 */
class AuthorController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $authors = $this->authorRepository->findAll();
        $this->view->assign('authors', $authors);
    }

    /**
     * action show
     *
     * @param \ESSRRTPW\MediaEssrrtpw\Domain\Model\Author $author
     * @return void
     */
    public function showAction(\ESSRRTPW\MediaEssrrtpw\Domain\Model\Author $author)
    {
        $this->view->assign('author', $author);
    }
}
