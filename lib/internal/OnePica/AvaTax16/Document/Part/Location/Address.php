<?php
/**
 * OnePica
 * NOTICE OF LICENSE
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to codemaster@onepica.com so we can send you a copy immediately.
 *
 * @category  OnePica
 * @package   OnePica_AvaTax16
 * @copyright Copyright (c) 2016 One Pica, Inc. (http://www.onepica.com)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
namespace OnePica\AvaTax16\Document\Part\Location;

use OnePica\AvaTax16\Document\Part;

/**
 * Class \OnePica\AvaTax16\Document\Part\Location\Address
 *
 * @method string getLine1()
 * @method setLine1(string $value)
 * @method string getLine2()
 * @method setLine2(string $value)
 * @method string getLine3()
 * @method setLine3(string $value)
 * @method string getLatitude()
 * @method setLatitude(string $value)
 * @method string getCity()
 * @method setCity(string $value)
 * @method string getMunicipality()
 * @method setMunicipality(string $value)
 * @method string getTown()
 * @method setTown(string $value)
 * @method string getState()
 * @method setState(string $value)
 * @method string getProvince()
 * @method setProvince(string $value)
 * @method string getCountry()
 * @method setCountry(string $value)
 * @method string getZipcode()
 * @method setZipcode(string $value)
 * @method string getPostalCode()
 * @method setPostalCode(string $value)
 * @method string getPostcode()
 * @method setPostcode(string $value)
 */
class Address extends Part
{
    /**
     * Required properties
     *
     * @var array
     */
    protected $_requiredProperties = array('_line1');

    /**
     * Line 1
     * (Required)
     *
     * @var string
     */
    protected $_line1;

    /**
     * Line 2
     *
     * @var string
     */
    protected $_line2;

    /**
     * Line3
     *
     * @var string
     */
    protected $_line3;

    /**
     * City
     * city, municipality, town are synonyms. Should be set only one of them
     *
     * @var string
     */
    protected $_city;

    /**
     * Municipality
     * city, municipality, town are synonyms. Should be set only one of them
     *
     * @var string
     */
    protected $_municipality;

    /**
     * Town
     * city, municipality, town are synonyms. Should be set only one of them
     *
     * @var string
     */
    protected $_town;

    /**
     * State
     * state, province are synonyms. Should be set only one of them
     *
     * @var string
     */
    protected $_state;

    /**
     * Province
     * state, province are synonyms. Should be set only one of them
     *
     * @var string
     */
    protected $_province;

    /**
     * Country
     *
     * @var string
     */
    protected $_country;

    /**
     * Zip Code
     * zipcode, postalCode, postcode are synonyms. Should be set only one of them
     *
     * @var string
     */
    protected $_zipcode;

    /**
     * Postal Code
     * zipcode, postalCode, postcode are synonyms. Should be set only one of them
     *
     * @var string
     */
    protected $_postalCode;

    /**
     * Post Code
     * zipcode, postalCode, postcode are synonyms. Should be set only one of them
     *
     * @var string
     */
    protected $_postcode;
}
