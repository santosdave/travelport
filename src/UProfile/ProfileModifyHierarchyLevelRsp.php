<?php

namespace Santosdave\Travelport\UProfile;

class ProfileModifyHierarchyLevelRsp extends BaseRsp
{

    /**
     * @var HierarchyLevel $HierarchyLevel
     */
    protected $HierarchyLevel = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param HierarchyLevel $HierarchyLevel
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $HierarchyLevel = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->HierarchyLevel = $HierarchyLevel;
    }

    /**
     * @return HierarchyLevel
     */
    public function getHierarchyLevel()
    {
      return $this->HierarchyLevel;
    }

    /**
     * @param HierarchyLevel $HierarchyLevel
     * @return \Santosdave\Travelport\UProfile\ProfileModifyHierarchyLevelRsp
     */
    public function setHierarchyLevel($HierarchyLevel)
    {
      $this->HierarchyLevel = $HierarchyLevel;
      return $this;
    }

}
