<?php

namespace Alfakher\Excisetax\Model;

use Alfakher\Excisetax\Api\Data\GridInterface;

class Grid extends \Magento\Framework\Model\AbstractModel implements GridInterface
{

    const CACHE_TAG = 'alfakher_excise_rules_data';


    protected $_cacheTag = 'alfakher_excise_rules_data';


    protected $_eventPrefix = 'alfakher_excise_rules_data';


    protected function _construct()
    {
        $this->_init('Alfakher\Excisetax\Model\ResourceModel\Grid');
    }
    /**
     * Get Id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->getData(self::ID);
    }


    /**
     * Get Country.
     *
     * @return varchar
     */
    public function getCountry()
    {
        return $this->getData(self::COUNTRY);
    }

    /**
     * Set Country.
     */
    public function setCountry($country)
    {
        return $this->setData(self::COUNTRY, $country);
    }

    /**
     * Get Jurisdiction.
     *
     * @return varchar
     */
    public function getJurisdiction()
    {
        return $this->getData(self::JURISDICTION);
    }

    /**
     * Set Jurisdiction.
     */
    public function setJurisdiction($jurisdiction)
    {
        return $this->setData(self::JURISDICTION, $jurisdiction);
    }

    /**
     * Get PublishDate.
     *
     * @return int
     */
    public function getB2c_eligible()
    {
        return $this->getData(self::B2C_ELIGIBLE);
    }

    /**
     * Set b2c_eligible.
     */
    public function setB2c_eligible($b2c_eligible)
    {
        return $this->setData(self::B2C_ELIGIBLE, $b2c_eligible);
    }

    /**
     * Get tax_rate.
     *
     * @return int
     */
    public function getTax_rate()
    {
        return $this->getData(self::TAX_RATE);
    }

    /**
     * Set tax_rate.
     */
    public function setTax_rate($tax_rate)
    {
        return $this->setData(self::TAX_RATE, $tax_rate);
    }

    /**
     * Get tax_tier.
     *
     * @return int
     */
    public function getTax_tier()
    {
        return $this->getData(self::TAX_TIER);
    }

    /**
     * Set tax_tier.
     */
    public function setTax_tier($tax_tier)
    {
        return $this->setData(self::TAX_TIER, $tax_tier);
    }

    /**
     * Get UpdateTime.
     *
     * @return int
     */
    public function getUpdateAt()
    {
        return $this->getData(self::UPDATED_At);
    }

    /**
     * Set UpdateTime.
     */
    public function setUpdateAt($updateAt)
    {
        return $this->setData(self::UPDATED_At, $updateAt);
    }

    /**
     * Get CreatedAt.
     *
     * @return int
     */
    public function getCreatedAt()
    {
        return $this->getData(self::CREATED_AT);
    }

    /**
     * Set CreatedAt.
     */
    public function setCreatedAt($createdAt)
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }

}
