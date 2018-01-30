<?php
namespace ESSRRTPW\MediaEssrrtpw\Domain\Repository;

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
 * The repository for Medias
 */
class MediaRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{

    public function search(\ESSRRTPW\MediaEssrrtpw\Domain\Query\Search $search)
    {
        $query = $this->createQuery();
        $constraints = [];
        if(trim($search->getString()))
        {
            $constraints[] = $query->logicalOr($query->like("name","%".$search->getString()."%"),$query->like("description","%".$search->getString()."%"));
        }
        if(trim($search->getCategory()))
        {
            $constraints[] = $query->like("category","%".$search->getString()."%");
        }

        $query->matching($query->logicalAnd($constraints));
        return $query->execute();
    }
}
