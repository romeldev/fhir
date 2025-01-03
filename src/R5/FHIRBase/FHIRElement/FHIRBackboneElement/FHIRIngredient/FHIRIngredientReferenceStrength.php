<?php declare(strict_types=1);

namespace Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRIngredient;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 19th, 2024 15:28+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2024 Daniel Carbone (daniel.p.carbone@gmail.com)
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *        http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 *
 * FHIR Copyright Notice:
 *
 *  * #%L
 *  * org.hl7.fhir.r5
 *  * %%
 *  * Copyright (C) 2014 - 2019 Health Level 7
 *  * %%
 *  * Licensed under the Apache License, Version 2.0 (the "License");
 *  * you may not use this file except in compliance with the License.
 *  * You may obtain a copy of the License at
 *  *
 *  *      http://www.apache.org/licenses/LICENSE-2.0
 *  *
 *  * Unless required by applicable law or agreed to in writing, software
 *  * distributed under the License is distributed on an "AS IS" BASIS,
 *  * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  * See the License for the specific language governing permissions and
 *  * limitations under the License.
 *  * #L%
 *  
 * 
 * 
 *   Copyright (c) 2011+, HL7, Inc.
 *   All rights reserved.
 * 
 *   Redistribution and use in source and binary forms, with or without modification,
 *   are permitted provided that the following conditions are met:
 * 
 *    * Redistributions of source code must retain the above copyright notice, this
 *      list of conditions and the following disclaimer.
 *    * Redistributions in binary form must reproduce the above copyright notice,
 *      this list of conditions and the following disclaimer in the documentation
 *      and/or other materials provided with the distribution.
 *    * Neither the name of HL7 nor the names of its contributors may be used to
 *      endorse or promote products derived from this software without specific
 *      prior written permission.
 * 
 *   THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 *   ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 *   WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 *   IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,
 *   INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 *   NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 *   PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 *   WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *   ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *   POSSIBILITY OF SUCH DAMAGE.
 * 
 * 
 *   Generated on Sun, Mar 26, 2023 15:21+1100 for FHIR v5.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement;
use Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference;
use Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity;
use Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio;
use Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRatioRange;
use Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRString;
use Romeldev\Fhir\R5\FHIRStringPrimitive;
use Romeldev\Fhir\R5\PHPFHIRConfig;
use Romeldev\Fhir\R5\PHPFHIRConfigKeyEnum;
use Romeldev\Fhir\R5\PHPFHIRConstants;
use Romeldev\Fhir\R5\PHPFHIRTypeInterface;
use Romeldev\Fhir\R5\PHPFHIRXmlLocationEnum;
use Romeldev\Fhir\R5\PHPFHIRXmlWriter;

/**
 * An ingredient of a manufactured item or pharmaceutical product.
 *
 * Class FHIRIngredientReferenceStrength
 * @package \Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRIngredient
 */
class FHIRIngredientReferenceStrength extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_INGREDIENT_DOT_REFERENCE_STRENGTH;

    const FIELD_SUBSTANCE = 'substance';
    const FIELD_STRENGTH_RATIO = 'strengthRatio';
    const FIELD_STRENGTH_RATIO_RANGE = 'strengthRatioRange';
    const FIELD_STRENGTH_QUANTITY = 'strengthQuantity';
    const FIELD_MEASUREMENT_POINT = 'measurementPoint';
    const FIELD_MEASUREMENT_POINT_EXT = '_measurementPoint';
    const FIELD_COUNTRY = 'country';

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Relevant reference substance.
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference
     */
    protected null|FHIRCodeableReference $substance = null;
    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Strength expressed in terms of a reference substance.
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio
     */
    protected null|FHIRRatio $strengthRatio = null;
    /**
     * A range of ratios expressed as a low and high numerator and a denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Strength expressed in terms of a reference substance.
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRatioRange
     */
    protected null|FHIRRatioRange $strengthRatioRange = null;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Strength expressed in terms of a reference substance.
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    protected null|FHIRQuantity $strengthQuantity = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For when strength is measured at a particular point or distance.
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $measurementPoint = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The country or countries for which the strength range applies.
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $country = [];

    /**
     * Validation map for fields in type Ingredient.ReferenceStrength
     * @var array
     */
    private const _VALIDATION_RULES = [
        self::FIELD_STRENGTH_QUANTITY => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_STRENGTH_RATIO => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_STRENGTH_RATIO_RANGE => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_SUBSTANCE => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRIngredientReferenceStrength Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_SUBSTANCE, $data)) {
            if ($data[self::FIELD_SUBSTANCE] instanceof FHIRCodeableReference) {
                $this->setSubstance($data[self::FIELD_SUBSTANCE]);
            } else {
                $this->setSubstance(new FHIRCodeableReference($data[self::FIELD_SUBSTANCE]));
            }
        }
        if (array_key_exists(self::FIELD_STRENGTH_RATIO, $data)) {
            if ($data[self::FIELD_STRENGTH_RATIO] instanceof FHIRRatio) {
                $this->setStrengthRatio($data[self::FIELD_STRENGTH_RATIO]);
            } else {
                $this->setStrengthRatio(new FHIRRatio($data[self::FIELD_STRENGTH_RATIO]));
            }
        }
        if (array_key_exists(self::FIELD_STRENGTH_RATIO_RANGE, $data)) {
            if ($data[self::FIELD_STRENGTH_RATIO_RANGE] instanceof FHIRRatioRange) {
                $this->setStrengthRatioRange($data[self::FIELD_STRENGTH_RATIO_RANGE]);
            } else {
                $this->setStrengthRatioRange(new FHIRRatioRange($data[self::FIELD_STRENGTH_RATIO_RANGE]));
            }
        }
        if (array_key_exists(self::FIELD_STRENGTH_QUANTITY, $data)) {
            if ($data[self::FIELD_STRENGTH_QUANTITY] instanceof FHIRQuantity) {
                $this->setStrengthQuantity($data[self::FIELD_STRENGTH_QUANTITY]);
            } else {
                $this->setStrengthQuantity(new FHIRQuantity($data[self::FIELD_STRENGTH_QUANTITY]));
            }
        }
        if (array_key_exists(self::FIELD_MEASUREMENT_POINT, $data) || array_key_exists(self::FIELD_MEASUREMENT_POINT_EXT, $data)) {
            $value = $data[self::FIELD_MEASUREMENT_POINT] ?? null;
            $ext = (isset($data[self::FIELD_MEASUREMENT_POINT_EXT]) && is_array($data[self::FIELD_MEASUREMENT_POINT_EXT])) ? $data[self::FIELD_MEASUREMENT_POINT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setMeasurementPoint($value);
                } else if (is_array($value)) {
                    $this->setMeasurementPoint(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setMeasurementPoint(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setMeasurementPoint(new FHIRString($ext));
            } else {
                $this->setMeasurementPoint(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_COUNTRY, $data)) {
            if (is_array($data[self::FIELD_COUNTRY])) {
                foreach($data[self::FIELD_COUNTRY] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addCountry($v);
                    } else {
                        $this->addCountry(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_COUNTRY] instanceof FHIRCodeableConcept) {
                $this->addCountry($data[self::FIELD_COUNTRY]);
            } else {
                $this->addCountry(new FHIRCodeableConcept($data[self::FIELD_COUNTRY]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFhirTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Relevant reference substance.
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference
     */
    public function getSubstance(): null|FHIRCodeableReference
    {
        return $this->substance;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Relevant reference substance.
     *
     * @param null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference $substance
     * @return static
     */
    public function setSubstance(null|FHIRCodeableReference $substance = null): self
    {
        if (null === $substance) {
            $substance = new FHIRCodeableReference();
        }
        $this->_trackValueSet($this->substance, $substance);
        $this->substance = $substance;
        return $this;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Strength expressed in terms of a reference substance.
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio
     */
    public function getStrengthRatio(): null|FHIRRatio
    {
        return $this->strengthRatio;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Strength expressed in terms of a reference substance.
     *
     * @param null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio $strengthRatio
     * @return static
     */
    public function setStrengthRatio(null|FHIRRatio $strengthRatio = null): self
    {
        if (null === $strengthRatio) {
            $strengthRatio = new FHIRRatio();
        }
        $this->_trackValueSet($this->strengthRatio, $strengthRatio);
        $this->strengthRatio = $strengthRatio;
        return $this;
    }

    /**
     * A range of ratios expressed as a low and high numerator and a denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Strength expressed in terms of a reference substance.
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRatioRange
     */
    public function getStrengthRatioRange(): null|FHIRRatioRange
    {
        return $this->strengthRatioRange;
    }

    /**
     * A range of ratios expressed as a low and high numerator and a denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Strength expressed in terms of a reference substance.
     *
     * @param null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRatioRange $strengthRatioRange
     * @return static
     */
    public function setStrengthRatioRange(null|FHIRRatioRange $strengthRatioRange = null): self
    {
        if (null === $strengthRatioRange) {
            $strengthRatioRange = new FHIRRatioRange();
        }
        $this->_trackValueSet($this->strengthRatioRange, $strengthRatioRange);
        $this->strengthRatioRange = $strengthRatioRange;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Strength expressed in terms of a reference substance.
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    public function getStrengthQuantity(): null|FHIRQuantity
    {
        return $this->strengthQuantity;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Strength expressed in terms of a reference substance.
     *
     * @param null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $strengthQuantity
     * @return static
     */
    public function setStrengthQuantity(null|FHIRQuantity $strengthQuantity = null): self
    {
        if (null === $strengthQuantity) {
            $strengthQuantity = new FHIRQuantity();
        }
        $this->_trackValueSet($this->strengthQuantity, $strengthQuantity);
        $this->strengthQuantity = $strengthQuantity;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For when strength is measured at a particular point or distance.
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getMeasurementPoint(): null|FHIRString
    {
        return $this->measurementPoint;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For when strength is measured at a particular point or distance.
     *
     * @param null|string|\Romeldev\Fhir\R5\FHIRStringPrimitive|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRString $measurementPoint
     * @param \Romeldev\Fhir\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setMeasurementPoint(null|string|FHIRStringPrimitive|FHIRString $measurementPoint = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $measurementPoint && !($measurementPoint instanceof FHIRString)) {
            $measurementPoint = new FHIRString($measurementPoint);
        }
        $this->_trackValueSet($this->measurementPoint, $measurementPoint);
        if (!isset($this->_xmlLocations[self::FIELD_MEASUREMENT_POINT])) {
            $this->_xmlLocations[self::FIELD_MEASUREMENT_POINT] = [];
        }
        $this->_xmlLocations[self::FIELD_MEASUREMENT_POINT][0] = $xmlLocation;
        $this->measurementPoint = $measurementPoint;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The country or countries for which the strength range applies.
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getCountry(): null|array
    {
        return $this->country;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The country or countries for which the strength range applies.
     *
     * @param null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $country
     * @return static
     */
    public function addCountry(null|FHIRCodeableConcept $country = null): self
    {
        if (null === $country) {
            $country = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->country[] = $country;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The country or countries for which the strength range applies.
     *
     * @param \Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$country
     * @return static
     */
    public function setCountry(FHIRCodeableConcept ...$country): self
    {
        if ([] !== $this->country) {
            $this->_trackValuesRemoved(count($this->country));
            $this->country = [];
        }
        if ([] === $country) {
            return $this;
        }
        foreach($country as $v) {
            $this->addCountry($v);
        }
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getSubstance())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBSTANCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStrengthRatio())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STRENGTH_RATIO] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStrengthRatioRange())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STRENGTH_RATIO_RANGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStrengthQuantity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STRENGTH_QUANTITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMeasurementPoint())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MEASUREMENT_POINT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getCountry())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_COUNTRY, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBSTANCE])) {
            $v = $this->getSubstance();
            foreach($validationRules[self::FIELD_SUBSTANCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INGREDIENT_DOT_REFERENCE_STRENGTH, self::FIELD_SUBSTANCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBSTANCE])) {
                        $errs[self::FIELD_SUBSTANCE] = [];
                    }
                    $errs[self::FIELD_SUBSTANCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STRENGTH_RATIO])) {
            $v = $this->getStrengthRatio();
            foreach($validationRules[self::FIELD_STRENGTH_RATIO] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INGREDIENT_DOT_REFERENCE_STRENGTH, self::FIELD_STRENGTH_RATIO, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STRENGTH_RATIO])) {
                        $errs[self::FIELD_STRENGTH_RATIO] = [];
                    }
                    $errs[self::FIELD_STRENGTH_RATIO][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STRENGTH_RATIO_RANGE])) {
            $v = $this->getStrengthRatioRange();
            foreach($validationRules[self::FIELD_STRENGTH_RATIO_RANGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INGREDIENT_DOT_REFERENCE_STRENGTH, self::FIELD_STRENGTH_RATIO_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STRENGTH_RATIO_RANGE])) {
                        $errs[self::FIELD_STRENGTH_RATIO_RANGE] = [];
                    }
                    $errs[self::FIELD_STRENGTH_RATIO_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STRENGTH_QUANTITY])) {
            $v = $this->getStrengthQuantity();
            foreach($validationRules[self::FIELD_STRENGTH_QUANTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INGREDIENT_DOT_REFERENCE_STRENGTH, self::FIELD_STRENGTH_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STRENGTH_QUANTITY])) {
                        $errs[self::FIELD_STRENGTH_QUANTITY] = [];
                    }
                    $errs[self::FIELD_STRENGTH_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MEASUREMENT_POINT])) {
            $v = $this->getMeasurementPoint();
            foreach($validationRules[self::FIELD_MEASUREMENT_POINT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INGREDIENT_DOT_REFERENCE_STRENGTH, self::FIELD_MEASUREMENT_POINT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MEASUREMENT_POINT])) {
                        $errs[self::FIELD_MEASUREMENT_POINT] = [];
                    }
                    $errs[self::FIELD_MEASUREMENT_POINT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COUNTRY])) {
            $v = $this->getCountry();
            foreach($validationRules[self::FIELD_COUNTRY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INGREDIENT_DOT_REFERENCE_STRENGTH, self::FIELD_COUNTRY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COUNTRY])) {
                        $errs[self::FIELD_COUNTRY] = [];
                    }
                    $errs[self::FIELD_COUNTRY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BACKBONE_ELEMENT, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param null|string|\SimpleXMLElement $element
     * @param null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRIngredient\FHIRIngredientReferenceStrength $type
     * @param null|int|\Romeldev\Fhir\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRIngredient\FHIRIngredientReferenceStrength
     */
    public static function xmlUnserialize(null|string|\SimpleXMLElement $element, null|PHPFHIRTypeInterface $type = null, null|int|PHPFHIRConfig $config = null): null|self
    {
        if (null === $element) {
            return null;
        }
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null === $type) {
            $type = new static(null);
        } else if (!($type instanceof FHIRIngredientReferenceStrength)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXmlns((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_SUBSTANCE === $childName) {
                $type->setSubstance(FHIRCodeableReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_STRENGTH_RATIO === $childName) {
                $type->setStrengthRatio(FHIRRatio::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_STRENGTH_RATIO_RANGE === $childName) {
                $type->setStrengthRatioRange(FHIRRatioRange::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_STRENGTH_QUANTITY === $childName) {
                $type->setStrengthQuantity(FHIRQuantity::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MEASUREMENT_POINT === $childName) {
                $type->setMeasurementPoint(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_COUNTRY === $childName) {
                $type->addCountry(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_MEASUREMENT_POINT])) {
            $pt = $type->getMeasurementPoint();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MEASUREMENT_POINT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setMeasurementPoint((string)$attributes[self::FIELD_MEASUREMENT_POINT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param null|\Romeldev\Fhir\R5\PHPFHIRXmlWriter $xw
     * @param null|int|\Romeldev\Fhir\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \Romeldev\Fhir\R5\PHPFHIRXmlWriter
     */
    public function xmlSerialize(null|PHPFHIRXmlWriter $xw = null, null|int|PHPFHIRConfig $config = null): PHPFHIRXmlWriter
    {
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (null === $xw) {
            $xw = new PHPFHIRXmlWriter();
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $openedRoot = true;
            $xw->openRootNode($config, 'IngredientReferenceStrength', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_MEASUREMENT_POINT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getMeasurementPoint())) {
            $xw->writeAttribute(self::FIELD_MEASUREMENT_POINT, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (null !== ($v = $this->getSubstance())) {
            $xw->startElement(self::FIELD_SUBSTANCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getStrengthRatio())) {
            $xw->startElement(self::FIELD_STRENGTH_RATIO);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getStrengthRatioRange())) {
            $xw->startElement(self::FIELD_STRENGTH_RATIO_RANGE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getStrengthQuantity())) {
            $xw->startElement(self::FIELD_STRENGTH_QUANTITY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_MEASUREMENT_POINT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getMeasurementPoint())) {
            $xw->startElement(self::FIELD_MEASUREMENT_POINT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getCountry() as $v) {
            $xw->startElement(self::FIELD_COUNTRY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($openedRoot) && $openedRoot) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (null !== ($v = $this->getSubstance())) {
            $out->{self::FIELD_SUBSTANCE} = $v;
        }
        if (null !== ($v = $this->getStrengthRatio())) {
            $out->{self::FIELD_STRENGTH_RATIO} = $v;
        }
        if (null !== ($v = $this->getStrengthRatioRange())) {
            $out->{self::FIELD_STRENGTH_RATIO_RANGE} = $v;
        }
        if (null !== ($v = $this->getStrengthQuantity())) {
            $out->{self::FIELD_STRENGTH_QUANTITY} = $v;
        }
        if (null !== ($v = $this->getMeasurementPoint())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_MEASUREMENT_POINT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MEASUREMENT_POINT_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getCountry())) {
            $out->{self::FIELD_COUNTRY} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_COUNTRY}[] = $v;
            }
        }

        return $out;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}