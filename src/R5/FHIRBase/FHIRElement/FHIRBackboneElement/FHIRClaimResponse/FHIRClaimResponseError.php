<?php declare(strict_types=1);

namespace Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse;

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
use Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRPositiveInt;
use Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRString;
use Romeldev\Fhir\R5\FHIRPositiveIntPrimitive;
use Romeldev\Fhir\R5\FHIRStringPrimitive;
use Romeldev\Fhir\R5\PHPFHIRConfig;
use Romeldev\Fhir\R5\PHPFHIRConfigKeyEnum;
use Romeldev\Fhir\R5\PHPFHIRConstants;
use Romeldev\Fhir\R5\PHPFHIRTypeInterface;
use Romeldev\Fhir\R5\PHPFHIRXmlLocationEnum;
use Romeldev\Fhir\R5\PHPFHIRXmlWriter;

/**
 * This resource provides the adjudication details from the processing of a Claim
 * resource.
 *
 * Class FHIRClaimResponseError
 * @package \Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse
 */
class FHIRClaimResponseError extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_ERROR;

    const FIELD_ITEM_SEQUENCE = 'itemSequence';
    const FIELD_ITEM_SEQUENCE_EXT = '_itemSequence';
    const FIELD_DETAIL_SEQUENCE = 'detailSequence';
    const FIELD_DETAIL_SEQUENCE_EXT = '_detailSequence';
    const FIELD_SUB_DETAIL_SEQUENCE = 'subDetailSequence';
    const FIELD_SUB_DETAIL_SEQUENCE_EXT = '_subDetailSequence';
    const FIELD_CODE = 'code';
    const FIELD_EXPRESSION = 'expression';
    const FIELD_EXPRESSION_EXT = '_expression';

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The sequence number of the line item submitted which contains the error. This
     * value is omitted when the error occurs outside of the item structure.
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRPositiveInt
     */
    protected null|FHIRPositiveInt $itemSequence = null;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The sequence number of the detail within the line item submitted which contains
     * the error. This value is omitted when the error occurs outside of the item
     * structure.
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRPositiveInt
     */
    protected null|FHIRPositiveInt $detailSequence = null;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The sequence number of the sub-detail within the detail within the line item
     * submitted which contains the error. This value is omitted when the error occurs
     * outside of the item structure.
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRPositiveInt
     */
    protected null|FHIRPositiveInt $subDetailSequence = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An error code, from a specified code system, which details why the claim could
     * not be adjudicated.
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $code = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A [simple subset of FHIRPath](fhirpath.html#simple) limited to element names,
     * repetition indicators and the default child accessor that identifies one of the
     * elements in the resource that caused this issue to be raised.
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRString[]
     */
    protected null|array $expression = [];

    /**
     * Validation map for fields in type ClaimResponse.Error
     * @var array
     */
    private const _VALIDATION_RULES = [
        self::FIELD_CODE => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRClaimResponseError Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_ITEM_SEQUENCE, $data) || array_key_exists(self::FIELD_ITEM_SEQUENCE_EXT, $data)) {
            $value = $data[self::FIELD_ITEM_SEQUENCE] ?? null;
            $ext = (isset($data[self::FIELD_ITEM_SEQUENCE_EXT]) && is_array($data[self::FIELD_ITEM_SEQUENCE_EXT])) ? $data[self::FIELD_ITEM_SEQUENCE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setItemSequence($value);
                } else if (is_array($value)) {
                    $this->setItemSequence(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setItemSequence(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setItemSequence(new FHIRPositiveInt($ext));
            } else {
                $this->setItemSequence(new FHIRPositiveInt(null));
            }
        }
        if (array_key_exists(self::FIELD_DETAIL_SEQUENCE, $data) || array_key_exists(self::FIELD_DETAIL_SEQUENCE_EXT, $data)) {
            $value = $data[self::FIELD_DETAIL_SEQUENCE] ?? null;
            $ext = (isset($data[self::FIELD_DETAIL_SEQUENCE_EXT]) && is_array($data[self::FIELD_DETAIL_SEQUENCE_EXT])) ? $data[self::FIELD_DETAIL_SEQUENCE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setDetailSequence($value);
                } else if (is_array($value)) {
                    $this->setDetailSequence(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setDetailSequence(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDetailSequence(new FHIRPositiveInt($ext));
            } else {
                $this->setDetailSequence(new FHIRPositiveInt(null));
            }
        }
        if (array_key_exists(self::FIELD_SUB_DETAIL_SEQUENCE, $data) || array_key_exists(self::FIELD_SUB_DETAIL_SEQUENCE_EXT, $data)) {
            $value = $data[self::FIELD_SUB_DETAIL_SEQUENCE] ?? null;
            $ext = (isset($data[self::FIELD_SUB_DETAIL_SEQUENCE_EXT]) && is_array($data[self::FIELD_SUB_DETAIL_SEQUENCE_EXT])) ? $data[self::FIELD_SUB_DETAIL_SEQUENCE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setSubDetailSequence($value);
                } else if (is_array($value)) {
                    $this->setSubDetailSequence(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setSubDetailSequence(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setSubDetailSequence(new FHIRPositiveInt($ext));
            } else {
                $this->setSubDetailSequence(new FHIRPositiveInt(null));
            }
        }
        if (array_key_exists(self::FIELD_CODE, $data)) {
            if ($data[self::FIELD_CODE] instanceof FHIRCodeableConcept) {
                $this->setCode($data[self::FIELD_CODE]);
            } else {
                $this->setCode(new FHIRCodeableConcept($data[self::FIELD_CODE]));
            }
        }
        if (array_key_exists(self::FIELD_EXPRESSION, $data) || array_key_exists(self::FIELD_EXPRESSION_EXT, $data)) {
            $value = $data[self::FIELD_EXPRESSION] ?? null;
            $ext = (isset($data[self::FIELD_EXPRESSION_EXT]) && is_array($data[self::FIELD_EXPRESSION_EXT])) ? $data[self::FIELD_EXPRESSION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->addExpression($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $this->addExpression($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addExpression(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $this->addExpression(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addExpression(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->addExpression(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addExpression(new FHIRString($iext));
                }
            } else {
                $this->addExpression(new FHIRString(null));
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
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The sequence number of the line item submitted which contains the error. This
     * value is omitted when the error occurs outside of the item structure.
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRPositiveInt
     */
    public function getItemSequence(): null|FHIRPositiveInt
    {
        return $this->itemSequence;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The sequence number of the line item submitted which contains the error. This
     * value is omitted when the error occurs outside of the item structure.
     *
     * @param null|string|int|float|\Romeldev\Fhir\R5\FHIRPositiveIntPrimitive|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRPositiveInt $itemSequence
     * @param \Romeldev\Fhir\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setItemSequence(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $itemSequence = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $itemSequence && !($itemSequence instanceof FHIRPositiveInt)) {
            $itemSequence = new FHIRPositiveInt($itemSequence);
        }
        $this->_trackValueSet($this->itemSequence, $itemSequence);
        if (!isset($this->_xmlLocations[self::FIELD_ITEM_SEQUENCE])) {
            $this->_xmlLocations[self::FIELD_ITEM_SEQUENCE] = [];
        }
        $this->_xmlLocations[self::FIELD_ITEM_SEQUENCE][0] = $xmlLocation;
        $this->itemSequence = $itemSequence;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The sequence number of the detail within the line item submitted which contains
     * the error. This value is omitted when the error occurs outside of the item
     * structure.
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRPositiveInt
     */
    public function getDetailSequence(): null|FHIRPositiveInt
    {
        return $this->detailSequence;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The sequence number of the detail within the line item submitted which contains
     * the error. This value is omitted when the error occurs outside of the item
     * structure.
     *
     * @param null|string|int|float|\Romeldev\Fhir\R5\FHIRPositiveIntPrimitive|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRPositiveInt $detailSequence
     * @param \Romeldev\Fhir\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDetailSequence(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $detailSequence = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $detailSequence && !($detailSequence instanceof FHIRPositiveInt)) {
            $detailSequence = new FHIRPositiveInt($detailSequence);
        }
        $this->_trackValueSet($this->detailSequence, $detailSequence);
        if (!isset($this->_xmlLocations[self::FIELD_DETAIL_SEQUENCE])) {
            $this->_xmlLocations[self::FIELD_DETAIL_SEQUENCE] = [];
        }
        $this->_xmlLocations[self::FIELD_DETAIL_SEQUENCE][0] = $xmlLocation;
        $this->detailSequence = $detailSequence;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The sequence number of the sub-detail within the detail within the line item
     * submitted which contains the error. This value is omitted when the error occurs
     * outside of the item structure.
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRPositiveInt
     */
    public function getSubDetailSequence(): null|FHIRPositiveInt
    {
        return $this->subDetailSequence;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The sequence number of the sub-detail within the detail within the line item
     * submitted which contains the error. This value is omitted when the error occurs
     * outside of the item structure.
     *
     * @param null|string|int|float|\Romeldev\Fhir\R5\FHIRPositiveIntPrimitive|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRPositiveInt $subDetailSequence
     * @param \Romeldev\Fhir\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setSubDetailSequence(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $subDetailSequence = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $subDetailSequence && !($subDetailSequence instanceof FHIRPositiveInt)) {
            $subDetailSequence = new FHIRPositiveInt($subDetailSequence);
        }
        $this->_trackValueSet($this->subDetailSequence, $subDetailSequence);
        if (!isset($this->_xmlLocations[self::FIELD_SUB_DETAIL_SEQUENCE])) {
            $this->_xmlLocations[self::FIELD_SUB_DETAIL_SEQUENCE] = [];
        }
        $this->_xmlLocations[self::FIELD_SUB_DETAIL_SEQUENCE][0] = $xmlLocation;
        $this->subDetailSequence = $subDetailSequence;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An error code, from a specified code system, which details why the claim could
     * not be adjudicated.
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getCode(): null|FHIRCodeableConcept
    {
        return $this->code;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An error code, from a specified code system, which details why the claim could
     * not be adjudicated.
     *
     * @param null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $code
     * @return static
     */
    public function setCode(null|FHIRCodeableConcept $code = null): self
    {
        if (null === $code) {
            $code = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->code, $code);
        $this->code = $code;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A [simple subset of FHIRPath](fhirpath.html#simple) limited to element names,
     * repetition indicators and the default child accessor that identifies one of the
     * elements in the resource that caused this issue to be raised.
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRString[]
     */
    public function getExpression(): null|array
    {
        return $this->expression;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A [simple subset of FHIRPath](fhirpath.html#simple) limited to element names,
     * repetition indicators and the default child accessor that identifies one of the
     * elements in the resource that caused this issue to be raised.
     *
     * @param null|string|\Romeldev\Fhir\R5\FHIRStringPrimitive|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRString $expression
     * @param \Romeldev\Fhir\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function addExpression(null|string|FHIRStringPrimitive|FHIRString $expression = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $expression && !($expression instanceof FHIRString)) {
            $expression = new FHIRString($expression);
        }
        $this->_trackValueAdded();
        if (!isset($this->_xmlLocations[self::FIELD_EXPRESSION])) {
            $this->_xmlLocations[self::FIELD_EXPRESSION] = [];
        }
        if ([] === $this->_xmlLocations[self::FIELD_EXPRESSION]) {
            $this->_xmlLocations[self::FIELD_EXPRESSION][0] = $xmlLocation;
        } else {
            $this->_xmlLocations[self::FIELD_EXPRESSION][] = PHPFHIRXmlLocationEnum::ELEMENT;
        }
        $this->expression[] = $expression;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A [simple subset of FHIRPath](fhirpath.html#simple) limited to element names,
     * repetition indicators and the default child accessor that identifies one of the
     * elements in the resource that caused this issue to be raised.
     *
     * @param \Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRString[] $expression
     * @param \Romeldev\Fhir\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setExpression(array $expression = [], PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        unset($this->_xmlLocations[self::FIELD_EXPRESSION]);
        if ([] !== $this->expression) {
            $this->_trackValuesRemoved(count($this->expression));
            $this->expression = [];
        }
        if ([] === $expression) {
            return $this;
        }
        foreach($expression as $v) {
            if ($v instanceof FHIRString) {
                $this->addExpression($v, $xmlLocation);
            } else {
                $this->addExpression(new FHIRString($v), $xmlLocation);
            }
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
        if (null !== ($v = $this->getItemSequence())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ITEM_SEQUENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDetailSequence())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DETAIL_SEQUENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubDetailSequence())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUB_DETAIL_SEQUENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CODE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getExpression())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_EXPRESSION, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ITEM_SEQUENCE])) {
            $v = $this->getItemSequence();
            foreach($validationRules[self::FIELD_ITEM_SEQUENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_ERROR, self::FIELD_ITEM_SEQUENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ITEM_SEQUENCE])) {
                        $errs[self::FIELD_ITEM_SEQUENCE] = [];
                    }
                    $errs[self::FIELD_ITEM_SEQUENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DETAIL_SEQUENCE])) {
            $v = $this->getDetailSequence();
            foreach($validationRules[self::FIELD_DETAIL_SEQUENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_ERROR, self::FIELD_DETAIL_SEQUENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DETAIL_SEQUENCE])) {
                        $errs[self::FIELD_DETAIL_SEQUENCE] = [];
                    }
                    $errs[self::FIELD_DETAIL_SEQUENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUB_DETAIL_SEQUENCE])) {
            $v = $this->getSubDetailSequence();
            foreach($validationRules[self::FIELD_SUB_DETAIL_SEQUENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_ERROR, self::FIELD_SUB_DETAIL_SEQUENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUB_DETAIL_SEQUENCE])) {
                        $errs[self::FIELD_SUB_DETAIL_SEQUENCE] = [];
                    }
                    $errs[self::FIELD_SUB_DETAIL_SEQUENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CODE])) {
            $v = $this->getCode();
            foreach($validationRules[self::FIELD_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_ERROR, self::FIELD_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODE])) {
                        $errs[self::FIELD_CODE] = [];
                    }
                    $errs[self::FIELD_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXPRESSION])) {
            $v = $this->getExpression();
            foreach($validationRules[self::FIELD_EXPRESSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_ERROR, self::FIELD_EXPRESSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXPRESSION])) {
                        $errs[self::FIELD_EXPRESSION] = [];
                    }
                    $errs[self::FIELD_EXPRESSION][$rule] = $err;
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
     * @param null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError $type
     * @param null|int|\Romeldev\Fhir\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError
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
        } else if (!($type instanceof FHIRClaimResponseError)) {
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
            if (self::FIELD_ITEM_SEQUENCE === $childName) {
                $type->setItemSequence(FHIRPositiveInt::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DETAIL_SEQUENCE === $childName) {
                $type->setDetailSequence(FHIRPositiveInt::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_SUB_DETAIL_SEQUENCE === $childName) {
                $type->setSubDetailSequence(FHIRPositiveInt::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_CODE === $childName) {
                $type->setCode(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXPRESSION === $childName) {
                $type->addExpression(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ITEM_SEQUENCE])) {
            $pt = $type->getItemSequence();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ITEM_SEQUENCE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setItemSequence((string)$attributes[self::FIELD_ITEM_SEQUENCE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DETAIL_SEQUENCE])) {
            $pt = $type->getDetailSequence();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DETAIL_SEQUENCE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDetailSequence((string)$attributes[self::FIELD_DETAIL_SEQUENCE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_SUB_DETAIL_SEQUENCE])) {
            $pt = $type->getSubDetailSequence();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_SUB_DETAIL_SEQUENCE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setSubDetailSequence((string)$attributes[self::FIELD_SUB_DETAIL_SEQUENCE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_EXPRESSION])) {
            $type->addExpression((string)$attributes[self::FIELD_EXPRESSION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
            $xw->openRootNode($config, 'ClaimResponseError', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_ITEM_SEQUENCE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getItemSequence())) {
            $xw->writeAttribute(self::FIELD_ITEM_SEQUENCE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_DETAIL_SEQUENCE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDetailSequence())) {
            $xw->writeAttribute(self::FIELD_DETAIL_SEQUENCE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_SUB_DETAIL_SEQUENCE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getSubDetailSequence())) {
            $xw->writeAttribute(self::FIELD_SUB_DETAIL_SEQUENCE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_EXPRESSION] ?? [];
        if ([] === $locs && [] !== ($vs = $this->getExpression())) {
            $xw->writeAttribute(self::FIELD_EXPRESSION, $vs[0]->getValue()?->getFormattedValue());
        } else if (false !== ($idx = array_search(PHPFHIRXmlLocationEnum::ATTRIBUTE, $locs, true)) && [] !== ($vs = $this->getExpression()) && isset($vs[$idx])) {
            $xw->writeAttribute(self::FIELD_EXPRESSION, $vs[$idx]->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        $locs = $this->_xmlLocations[self::FIELD_ITEM_SEQUENCE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getItemSequence())) {
            $xw->startElement(self::FIELD_ITEM_SEQUENCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_DETAIL_SEQUENCE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDetailSequence())) {
            $xw->startElement(self::FIELD_DETAIL_SEQUENCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_SUB_DETAIL_SEQUENCE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getSubDetailSequence())) {
            $xw->startElement(self::FIELD_SUB_DETAIL_SEQUENCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getCode())) {
            $xw->startElement(self::FIELD_CODE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_EXPRESSION] ?? [];
        if (([] === $locs || in_array(PHPFHIRXmlLocationEnum::ELEMENT, $locs, true)) && [] !== ($vs = $this->getExpression())) {
            foreach($vs as $i => $v) {
                if (!isset($locs[$i]) || PHPFHIRXmlLocationEnum::ELEMENT === $locs[$i]) {
                    $xw->startElement(self::FIELD_EXPRESSION);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
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
        if (null !== ($v = $this->getItemSequence())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ITEM_SEQUENCE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRPositiveInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ITEM_SEQUENCE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDetailSequence())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DETAIL_SEQUENCE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRPositiveInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DETAIL_SEQUENCE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getSubDetailSequence())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_SUB_DETAIL_SEQUENCE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRPositiveInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SUB_DETAIL_SEQUENCE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getCode())) {
            $out->{self::FIELD_CODE} = $v;
        }
        if ([] !== ($vs = $this->getExpression())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRString::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_EXPRESSION} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_EXPRESSION_EXT} = $exts;
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