<?php

namespace Alfakher\Excisetax\Api\Data;

interface GridInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case.
     */
    const ID = 'id';
    const COUNTRY = 'country';
    const JURISDICTION = 'jurisdiction';
    const B2C_ELIGIBLE = 'b2c_eligible';
    const TAX_RATE = 'tax_rate';
    const TAX_TIER = 'tax_tier';
    const CREATED_AT = 'created_at';
    const UPDATED_At ='updated_at';

    /**
     * Get Id.
     *
     * @return int
     */
    public function getId();


    /**
     * Get country.
     *
     * @return varchar
     */
    public function getCountry();

    /**
     * Set country.
     */
    public function setCountry($country);

    /**
     * Get jurisdiction.
     *
     * @return varchar
     */
    public function getJurisdiction();

    /**
     * Set jurisdiction.
     */
    public function setJurisdiction($jurisdiction);

    /**
     * Get b2c_eligible.
     *
     * @return int
     */
    public function getB2c_eligible();

    /**
     * Set b2c_eligible.
     */
    public function setB2c_eligible($b2c_eligible);



    /**
     * Get tax_rate.
     *
     * @return int
     */
    public function getTax_rate();

    /**
     * Set tax_rate.
     */
    public function setTax_rate($tax_rate);



    /**
     * Get tax_tier.
     *
     * @return int
     */
    public function getTax_tier();

    /**
     * Set tax_tier.
     */
    public function setTax_tier($tax_tier);

    /**
     * Get UpdateTime.
     *
     * @return int
     */
    public function getUpdateAt();

    /**
     * Set UpdateTime.
     */
    public function setUpdateAt($updateAt);

    /**
     * Get CreatedAt.
     *
     * @return int
     */
    public function getCreatedAt();

    /**
     * Set CreatedAt.
     */
    public function setCreatedAt($createdAt);
}
