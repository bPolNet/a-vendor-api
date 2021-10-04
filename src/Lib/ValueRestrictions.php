<?php

namespace BPolNet\A\VendorApi\Lib;

class ValueRestrictions
{

    /**
     * @var string $MinLength
     */
    protected $MinLength = null;

    /**
     * @var string $MaxLength
     */
    protected $MaxLength = null;

    /**
     * @var string $MinValue
     */
    protected $MinValue = null;

    /**
     * @var string $MaxValue
     */
    protected $MaxValue = null;

    /**
     * @var string $ValuesRange
     */
    protected $ValuesRange = null;

    /**
     * @var string $MultipleChoices
     */
    protected $MultipleChoices = null;

    /**
     * @var string $SearchConjunction
     */
    protected $SearchConjunction = null;

    /**
     * @var string $FloatPrecision
     */
    protected $FloatPrecision = null;

    /**
     * @var boolean $HasDictionaryFlag
     */
    protected $HasDictionaryFlag = null;

    /**
     * @var string $MaxValues
     */
    protected $MaxValues = null;

    /**
     * @var string $AllowedNumberOfValues
     */
    protected $AllowedNumberOfValues = null;

    /**
     * @param string $MinLength
     * @param string $MaxLength
     * @param string $MinValue
     * @param string $MaxValue
     * @param string $ValuesRange
     * @param string $MultipleChoices
     * @param string $SearchConjunction
     * @param string $FloatPrecision
     * @param boolean $HasDictionaryFlag
     * @param string $MaxValues
     * @param string $AllowedNumberOfValues
     */
    public function __construct($MinLength, $MaxLength, $MinValue, $MaxValue, $ValuesRange, $MultipleChoices, $SearchConjunction, $FloatPrecision, $HasDictionaryFlag, $MaxValues, $AllowedNumberOfValues)
    {
      $this->MinLength = $MinLength;
      $this->MaxLength = $MaxLength;
      $this->MinValue = $MinValue;
      $this->MaxValue = $MaxValue;
      $this->ValuesRange = $ValuesRange;
      $this->MultipleChoices = $MultipleChoices;
      $this->SearchConjunction = $SearchConjunction;
      $this->FloatPrecision = $FloatPrecision;
      $this->HasDictionaryFlag = $HasDictionaryFlag;
      $this->MaxValues = $MaxValues;
      $this->AllowedNumberOfValues = $AllowedNumberOfValues;
    }

    /**
     * @return string
     */
    public function getMinLength()
    {
      return $this->MinLength;
    }

    /**
     * @param string $MinLength
     * @return \BPolNet\A\VendorApi\Lib\ValueRestrictions
     */
    public function setMinLength($MinLength)
    {
      $this->MinLength = $MinLength;
      return $this;
    }

    /**
     * @return string
     */
    public function getMaxLength()
    {
      return $this->MaxLength;
    }

    /**
     * @param string $MaxLength
     * @return \BPolNet\A\VendorApi\Lib\ValueRestrictions
     */
    public function setMaxLength($MaxLength)
    {
      $this->MaxLength = $MaxLength;
      return $this;
    }

    /**
     * @return string
     */
    public function getMinValue()
    {
      return $this->MinValue;
    }

    /**
     * @param string $MinValue
     * @return \BPolNet\A\VendorApi\Lib\ValueRestrictions
     */
    public function setMinValue($MinValue)
    {
      $this->MinValue = $MinValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getMaxValue()
    {
      return $this->MaxValue;
    }

    /**
     * @param string $MaxValue
     * @return \BPolNet\A\VendorApi\Lib\ValueRestrictions
     */
    public function setMaxValue($MaxValue)
    {
      $this->MaxValue = $MaxValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getValuesRange()
    {
      return $this->ValuesRange;
    }

    /**
     * @param string $ValuesRange
     * @return \BPolNet\A\VendorApi\Lib\ValueRestrictions
     */
    public function setValuesRange($ValuesRange)
    {
      $this->ValuesRange = $ValuesRange;
      return $this;
    }

    /**
     * @return string
     */
    public function getMultipleChoices()
    {
      return $this->MultipleChoices;
    }

    /**
     * @param string $MultipleChoices
     * @return \BPolNet\A\VendorApi\Lib\ValueRestrictions
     */
    public function setMultipleChoices($MultipleChoices)
    {
      $this->MultipleChoices = $MultipleChoices;
      return $this;
    }

    /**
     * @return string
     */
    public function getSearchConjunction()
    {
      return $this->SearchConjunction;
    }

    /**
     * @param string $SearchConjunction
     * @return \BPolNet\A\VendorApi\Lib\ValueRestrictions
     */
    public function setSearchConjunction($SearchConjunction)
    {
      $this->SearchConjunction = $SearchConjunction;
      return $this;
    }

    /**
     * @return string
     */
    public function getFloatPrecision()
    {
      return $this->FloatPrecision;
    }

    /**
     * @param string $FloatPrecision
     * @return \BPolNet\A\VendorApi\Lib\ValueRestrictions
     */
    public function setFloatPrecision($FloatPrecision)
    {
      $this->FloatPrecision = $FloatPrecision;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasDictionaryFlag()
    {
      return $this->HasDictionaryFlag;
    }

    /**
     * @param boolean $HasDictionaryFlag
     * @return \BPolNet\A\VendorApi\Lib\ValueRestrictions
     */
    public function setHasDictionaryFlag($HasDictionaryFlag)
    {
      $this->HasDictionaryFlag = $HasDictionaryFlag;
      return $this;
    }

    /**
     * @return string
     */
    public function getMaxValues()
    {
      return $this->MaxValues;
    }

    /**
     * @param string $MaxValues
     * @return \BPolNet\A\VendorApi\Lib\ValueRestrictions
     */
    public function setMaxValues($MaxValues)
    {
      $this->MaxValues = $MaxValues;
      return $this;
    }

    /**
     * @return string
     */
    public function getAllowedNumberOfValues()
    {
      return $this->AllowedNumberOfValues;
    }

    /**
     * @param string $AllowedNumberOfValues
     * @return \BPolNet\A\VendorApi\Lib\ValueRestrictions
     */
    public function setAllowedNumberOfValues($AllowedNumberOfValues)
    {
      $this->AllowedNumberOfValues = $AllowedNumberOfValues;
      return $this;
    }

}
