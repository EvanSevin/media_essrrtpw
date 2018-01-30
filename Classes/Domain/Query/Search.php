<?php
  namespace ESSRRTPW\MediaEssrrtpw\Domain\Query;

  class Search{
    protected $string;
    protected $category;

      /**
       * @return mixed
       */
      public function getString()
      {
          return $this->string;
      }

      /**
       * @param mixed $string
       */
      public function setString($string)
      {
          $this->string = $string;
      }

      /**
       * @return mixed
       */
      public function getCategory()
      {
          return $this->category;
      }

      /**
       * @param mixed $category
       */
      public function setCategory($category)
      {
          $this->category = $category;
      }



  }
