<?php

namespace Santosdave\Travelport\GDSQueue;

class EmailNotification
{

    /**
     * @var typeRef[] $EmailRef
     */
    protected $EmailRef = null;

    /**
     * @var anonymous489 $Recipients
     */
    protected $Recipients = null;

    /**
     * @param anonymous489 $Recipients
     */
    public function __construct($Recipients = null)
    {
      $this->Recipients = $Recipients;
    }

    /**
     * @return typeRef[]
     */
    public function getEmailRef()
    {
      return $this->EmailRef;
    }

    /**
     * @param typeRef[] $EmailRef
     * @return \Santosdave\Travelport\GDSQueue\EmailNotification
     */
    public function setEmailRef(array $EmailRef = null)
    {
      $this->EmailRef = $EmailRef;
      return $this;
    }

    /**
     * @return anonymous489
     */
    public function getRecipients()
    {
      return $this->Recipients;
    }

    /**
     * @param anonymous489 $Recipients
     * @return \Santosdave\Travelport\GDSQueue\EmailNotification
     */
    public function setRecipients($Recipients)
    {
      $this->Recipients = $Recipients;
      return $this;
    }

}
