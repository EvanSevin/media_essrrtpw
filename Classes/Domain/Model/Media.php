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
 * Media
 */
class Media extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * description
     *
     * @var string
     */
    protected $description = '';

    /**
     * image
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @cascade remove
     */
    protected $image = null;

    /**
     * fichier
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     * @cascade remove
     */
    protected $files = null;

    /**
     * datePublication
     *
     * @var \DateTime
     * @validate NotEmpty
     */
    protected $datePublication = null;

    /**
     * nom
     *
     * @var string
     * @validate NotEmpty
     */
    protected $name = '';

    /**
     * reviews
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ESSRRTPW\MediaEssrrtpw\Domain\Model\Review>
     * @cascade remove
     * @lazy
     */
    protected $reviews = null;

    /**
     * auteurs
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ESSRRTPW\MediaEssrrtpw\Domain\Model\Author>
     * @lazy
     */
    protected $author = null;

    /**
     * categorie
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ESSRRTPW\MediaEssrrtpw\Domain\Model\Category>
     * @cascade remove
     */
    protected $categories = null;

    /**
     * categorie
     *
     * @var \ESSRRTPW\MediaEssrrtpw\Domain\Model\Type
     */
    protected $type = null;

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->files = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->reviews = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->author = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->categories = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Returns the image
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Sets the image
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     * @return void
     */
    public function setImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image)
    {
        $this->image = $image;
    }

    /**
     * Returns the datePublication
     *
     * @return \DateTime $datePublication
     */
    public function getDatePublication()
    {
        return $this->datePublication;
    }

    /**
     * Sets the datePublication
     *
     * @param \DateTime $datePublication
     * @return void
     */
    public function setDatePublication(\DateTime $datePublication)
    {
        $this->datePublication = $datePublication;
    }

    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Adds a Review
     *
     * @param \ESSRRTPW\MediaEssrrtpw\Domain\Model\Review $review
     * @return void
     */
    public function addReview(\ESSRRTPW\MediaEssrrtpw\Domain\Model\Review $review)
    {
        $this->reviews->attach($review);
    }

    /**
     * Removes a Review
     *
     * @param \ESSRRTPW\MediaEssrrtpw\Domain\Model\Review $reviewToRemove The Review to be removed
     * @return void
     */
    public function removeReview(\ESSRRTPW\MediaEssrrtpw\Domain\Model\Review $reviewToRemove)
    {
        $this->reviews->detach($reviewToRemove);
    }

    /**
     * Returns the reviews
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ESSRRTPW\MediaEssrrtpw\Domain\Model\Review> $reviews
     */
    public function getReviews()
    {
        return $this->reviews;
    }

    /**
     * Sets the reviews
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ESSRRTPW\MediaEssrrtpw\Domain\Model\Review> $reviews
     * @return void
     */
    public function setReviews(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $reviews)
    {
        $this->reviews = $reviews;
    }

    /**
     * Adds a Author
     *
     * @param \ESSRRTPW\MediaEssrrtpw\Domain\Model\Author $author
     * @return void
     */
    public function addAuthor(\ESSRRTPW\MediaEssrrtpw\Domain\Model\Author $author)
    {
        $this->author->attach($author);
    }

    /**
     * Removes a Author
     *
     * @param \ESSRRTPW\MediaEssrrtpw\Domain\Model\Author $authorToRemove The Author to be removed
     * @return void
     */
    public function removeAuthor(\ESSRRTPW\MediaEssrrtpw\Domain\Model\Author $authorToRemove)
    {
        $this->author->detach($authorToRemove);
    }

    /**
     * Returns the author
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ESSRRTPW\MediaEssrrtpw\Domain\Model\Author> $author
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Sets the author
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ESSRRTPW\MediaEssrrtpw\Domain\Model\Author> $author
     * @return void
     */
    public function setAuthor(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $author)
    {
        $this->author = $author;
    }

    /**
     * Adds a Category
     *
     * @param \ESSRRTPW\MediaEssrrtpw\Domain\Model\Category $category
     * @return void
     */
    public function addCategory(\ESSRRTPW\MediaEssrrtpw\Domain\Model\Category $category)
    {
        $this->categories->attach($category);
    }

    /**
     * Removes a Category
     *
     * @param \ESSRRTPW\MediaEssrrtpw\Domain\Model\Category $categoryToRemove The Category to be removed
     * @return void
     */
    public function removeCategory(\ESSRRTPW\MediaEssrrtpw\Domain\Model\Category $categoryToRemove)
    {
        $this->categories->detach($categoryToRemove);
    }

    /**
     * Returns the categories
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ESSRRTPW\MediaEssrrtpw\Domain\Model\Category> $categories
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Sets the categories
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ESSRRTPW\MediaEssrrtpw\Domain\Model\Category> $categories
     * @return void
     */
    public function setCategories(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $categories)
    {
        $this->categories = $categories;
    }

    /**
     * Adds a FileReference
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $file
     * @return void
     */
    public function addFile(\TYPO3\CMS\Extbase\Domain\Model\FileReference $file)
    {
        $this->files->attach($file);
    }

    /**
     * Removes a FileReference
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $fileToRemove The FileReference to be removed
     * @return void
     */
    public function removeFile(\TYPO3\CMS\Extbase\Domain\Model\FileReference $fileToRemove)
    {
        $this->files->detach($fileToRemove);
    }

    /**
     * Returns the files
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $files
     */
    public function getFiles()
    {
        return $this->files;
    }

    /**
     * Sets the files
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $files
     * @return void
     */
    public function setFiles(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $files)
    {
        $this->files = $files;
    }

    /**
     * Returns the type
     *
     * @return \ESSRRTPW\MediaEssrrtpw\Domain\Model\Type $type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets the type
     *
     * @param \ESSRRTPW\MediaEssrrtpw\Domain\Model\Type $type
     * @return void
     */
    public function setType(\ESSRRTPW\MediaEssrrtpw\Domain\Model\Type $type)
    {
        $this->type = $type;
    }
}
