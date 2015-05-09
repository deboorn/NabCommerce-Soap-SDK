<?php


/*
 * LICENSE: This source file is subject to version 4.0 of the CC BY 4.0 license
 * that is available through the world-wide-web at the following URI:
 * http://creativecommons.org/licenses/by/4.0/.  If you did not receive a copy of
 * the CC BY 4.0 License and are unable to obtain it through the web, please
 * send a note to daniel.boorn@gmail.com so we can mail you a copy immediately.
 *
 * @author Daniel Boorn <daniel.boorn@gmail.com>
 * @license http://creativecommons.org/licenses/by/4.0/ CC BY 4.0 *
 * @package NabCommerce\Service
 */

 

namespace NabCommerce\Transaction;

class CheckImage
{

    /**
     * @var ImgCompressionType $CompressionType
     */
    protected $CompressionType = null;

    /**
     * @var DocType $DocType
     */
    protected $DocType = null;

    /**
     * @var ImgFormatType $FormatType
     */
    protected $FormatType = null;

    /**
     * @var base64Binary $ImgData
     */
    protected $ImgData = null;

    /**
     * @var int $ImgSize
     */
    protected $ImgSize = null;

    /**
     * @var string $UserField
     */
    protected $UserField = null;

    /**
     * @param ImgCompressionType $CompressionType
     * @param DocType $DocType
     * @param ImgFormatType $FormatType
     * @param int $ImgSize
     */
    public function __construct($CompressionType, $DocType, $FormatType, $ImgSize)
    {
        $this->CompressionType = $CompressionType;
        $this->DocType = $DocType;
        $this->FormatType = $FormatType;
        $this->ImgSize = $ImgSize;
    }

    /**
     * @param ImgCompressionType $CompressionType
     * @param DocType $DocType
     * @param ImgFormatType $FormatType
     * @param int $ImgSize
     */
    public static function forge($CompressionType, $DocType, $FormatType, $ImgSize)
    {
        return new self($CompressionType, $DocType, $FormatType, $ImgSize);
    }

    public function set(array $properties)
    {
        foreach ($properties as $key => $value) {
            if (isset($this->{$key}) && !method_exists($this, $key)) {
                $this->{$key} = $value;
            }
        }
        return $this;
    }

    /**
     * @return ImgCompressionType
     */
    public function getCompressionType()
    {
        return $this->CompressionType;
    }

    /**
     * @param ImgCompressionType $CompressionType
     * @return \NabCommerce\Transaction\CheckImage
     */
    public function setCompressionType(ImgCompressionType $CompressionType)
    {
        $this->CompressionType = $CompressionType;
        return $this;
    }

    /**
     * @return DocType
     */
    public function getDocType()
    {
        return $this->DocType;
    }

    /**
     * @param DocType $DocType
     * @return \NabCommerce\Transaction\CheckImage
     */
    public function setDocType(DocType $DocType)
    {
        $this->DocType = $DocType;
        return $this;
    }

    /**
     * @return ImgFormatType
     */
    public function getFormatType()
    {
        return $this->FormatType;
    }

    /**
     * @param ImgFormatType $FormatType
     * @return \NabCommerce\Transaction\CheckImage
     */
    public function setFormatType(ImgFormatType $FormatType)
    {
        $this->FormatType = $FormatType;
        return $this;
    }

    /**
     * @return base64Binary
     */
    public function getImgData()
    {
        return $this->ImgData;
    }

    /**
     * @param base64Binary $ImgData
     * @return \NabCommerce\Transaction\CheckImage
     */
    public function setImgData($ImgData)
    {
        $this->ImgData = $ImgData;
        return $this;
    }

    /**
     * @return int
     */
    public function getImgSize()
    {
        return $this->ImgSize;
    }

    /**
     * @param int $ImgSize
     * @return \NabCommerce\Transaction\CheckImage
     */
    public function setImgSize($ImgSize)
    {
        $this->ImgSize = $ImgSize;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserField()
    {
        return $this->UserField;
    }

    /**
     * @param string $UserField
     * @return \NabCommerce\Transaction\CheckImage
     */
    public function setUserField($UserField)
    {
        $this->UserField = $UserField;
        return $this;
    }

}
