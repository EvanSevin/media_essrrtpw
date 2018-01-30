<?php
  namespace ESSRRTPW\MediaEssrrtpw\Domain\Query;

  class Search{

    /**
     * @var string
     */
    protected $string;

      /**
       * @var string
       */
      protected $category;

      /**
       * @return string
       */
      public function getString()
      {
          return $this->string;
      }

      /**
       * @param string $string
       */
      public function setString($string)
      {
          $this->string = $string;
      }

      /**
       * @return string
       */
      public function getCategory()
      {
          return $this->category;
      }

      /**
       * @param string $category
       */
      public function setCategory($category)
      {
          $this->category = $category;
      }



  }
