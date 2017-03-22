<?php
    class Module
    {
        public $moduleID;
        public $confidenceLevel;
        public $studyHours;
       
       
        public function __construct($moduleID, $confidenceLevel, $recommendedStudyHours, $hoursWillingToWork)
        {
            $this->moduleID = $moduleID;
            $this->confidenceLevel = $confidenceLevel;
            $this->recommendedStudyHours = $hoursWillingToWork;
        } //  constructor
       
        // Getters and setters
        public function getID()
        {
            return $this->moduleID;
        }
       
        public function getConfidence()
        {
            return $this->confidenceLevel;
        } // getConfidence
       
    }
?>
