<?php

namespace Santosdave\Travelport\Rail;

class FareNoteList
{

    /**
     * @var FareNote $FareNote
     */
    protected $FareNote = null;

    /**
     * @param FareNote $FareNote
     */
    public function __construct($FareNote = null)
    {
      $this->FareNote = $FareNote;
    }

    /**
     * @return FareNote
     */
    public function getFareNote()
    {
      return $this->FareNote;
    }

    /**
     * @param FareNote $FareNote
     * @return \Santosdave\Travelport\Rail\FareNoteList
     */
    public function setFareNote($FareNote)
    {
      $this->FareNote = $FareNote;
      return $this;
    }

}
