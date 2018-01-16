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
 * MediaController
 */
class MediaController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * mediaRepository
     *
     * @var \ESSRRTPW\MediaEssrrtpw\Domain\Repository\MediaRepository
     * @inject
     */
    protected $mediaRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $medias = $this->mediaRepository->findAll();
        $this->view->assign('medias', $medias);
    }

    /**
     * action show
     *
     * @param \ESSRRTPW\MediaEssrrtpw\Domain\Model\Media $media
     * @return void
     */
    public function showAction(\ESSRRTPW\MediaEssrrtpw\Domain\Model\Media $media)
    {
        $this->view->assign('media', $media);
    }

    /**
     * action search
     *
     * @return void
     */
    public function searchAction()
    {

    }

    /**
     * action recommend
     *
     * @return void
     */
    public function recommendAction()
    {

    }
}
