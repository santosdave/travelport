<?php

namespace FilippoToso\Travelport\Air;

class DocumentInfo
{

    /**
     * @var TicketInfo $TicketInfo
     */
    protected $TicketInfo = null;

    /**
     * @var MCOInformation[] $MCOInfo
     */
    protected $MCOInfo = null;

    /**
     * @var TCRInfo $TCRInfo
     */
    protected $TCRInfo = null;

    /**
     * @param TicketInfo $TicketInfo
     * @param TCRInfo $TCRInfo
     */
    public function __construct($TicketInfo = null, $TCRInfo = null)
    {
      $this->TicketInfo = $TicketInfo;
      $this->TCRInfo = $TCRInfo;
    }

    /**
     * @return TicketInfo
     */
    public function getTicketInfo()
    {
      return $this->TicketInfo;
    }

    /**
     * @param TicketInfo $TicketInfo
     * @return \FilippoToso\Travelport\Air\DocumentInfo
     */
    public function setTicketInfo($TicketInfo)
    {
      $this->TicketInfo = $TicketInfo;
      return $this;
    }

    /**
     * @return MCOInformation[]
     */
    public function getMCOInfo()
    {
      return $this->MCOInfo;
    }

    /**
     * @param MCOInformation[] $MCOInfo
     * @return \FilippoToso\Travelport\Air\DocumentInfo
     */
    public function setMCOInfo(array $MCOInfo = null)
    {
      $this->MCOInfo = $MCOInfo;
      return $this;
    }

    /**
     * @return TCRInfo
     */
    public function getTCRInfo()
    {
      return $this->TCRInfo;
    }

    /**
     * @param TCRInfo $TCRInfo
     * @return \FilippoToso\Travelport\Air\DocumentInfo
     */
    public function setTCRInfo($TCRInfo)
    {
      $this->TCRInfo = $TCRInfo;
      return $this;
    }

}
