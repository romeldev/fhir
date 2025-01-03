<?php declare(strict_types=1);

namespace Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConsent;

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
use Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBoolean;
use Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDateTime;
use Romeldev\Fhir\R5\FHIRBooleanPrimitive;
use Romeldev\Fhir\R5\FHIRDateTimePrimitive;
use Romeldev\Fhir\R5\FHIRStringPrimitive;
use Romeldev\Fhir\R5\PHPFHIRConfig;
use Romeldev\Fhir\R5\PHPFHIRConfigKeyEnum;
use Romeldev\Fhir\R5\PHPFHIRConstants;
use Romeldev\Fhir\R5\PHPFHIRTypeInterface;
use Romeldev\Fhir\R5\PHPFHIRXmlLocationEnum;
use Romeldev\Fhir\R5\PHPFHIRXmlWriter;

/**
 * A record of a healthcare consumer’s choices or choices made on their behalf by
 * a third party, which permits or denies identified recipient(s) or recipient
 * role(s) to perform one or more actions within a given policy context, for
 * specific purposes and periods of time.
 *
 * Class FHIRConsentVerification
 * @package \Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConsent
 */
class FHIRConsentVerification extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CONSENT_DOT_VERIFICATION;

    const FIELD_VERIFIED = 'verified';
    const FIELD_VERIFIED_EXT = '_verified';
    const FIELD_VERIFICATION_TYPE = 'verificationType';
    const FIELD_VERIFIED_BY = 'verifiedBy';
    const FIELD_VERIFIED_WITH = 'verifiedWith';
    const FIELD_VERIFICATION_DATE = 'verificationDate';
    const FIELD_VERIFICATION_DATE_EXT = '_verificationDate';

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Has the instruction been verified.
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $verified = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Extensible list of verification type starting with verification and
     * re-validation.
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $verificationType = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person who conducted the verification/validation of the Grantor decision.
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $verifiedBy = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who verified the instruction (Patient, Relative or other Authorized Person).
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $verifiedWith = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date(s) verification was collected.
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDateTime[]
     */
    protected null|array $verificationDate = [];

    /**
     * Validation map for fields in type Consent.Verification
     * @var array
     */
    private const _VALIDATION_RULES = [
        self::FIELD_VERIFIED => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRConsentVerification Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_VERIFIED, $data) || array_key_exists(self::FIELD_VERIFIED_EXT, $data)) {
            $value = $data[self::FIELD_VERIFIED] ?? null;
            $ext = (isset($data[self::FIELD_VERIFIED_EXT]) && is_array($data[self::FIELD_VERIFIED_EXT])) ? $data[self::FIELD_VERIFIED_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setVerified($value);
                } else if (is_array($value)) {
                    $this->setVerified(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setVerified(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setVerified(new FHIRBoolean($ext));
            } else {
                $this->setVerified(new FHIRBoolean(null));
            }
        }
        if (array_key_exists(self::FIELD_VERIFICATION_TYPE, $data)) {
            if ($data[self::FIELD_VERIFICATION_TYPE] instanceof FHIRCodeableConcept) {
                $this->setVerificationType($data[self::FIELD_VERIFICATION_TYPE]);
            } else {
                $this->setVerificationType(new FHIRCodeableConcept($data[self::FIELD_VERIFICATION_TYPE]));
            }
        }
        if (array_key_exists(self::FIELD_VERIFIED_BY, $data)) {
            if ($data[self::FIELD_VERIFIED_BY] instanceof FHIRReference) {
                $this->setVerifiedBy($data[self::FIELD_VERIFIED_BY]);
            } else {
                $this->setVerifiedBy(new FHIRReference($data[self::FIELD_VERIFIED_BY]));
            }
        }
        if (array_key_exists(self::FIELD_VERIFIED_WITH, $data)) {
            if ($data[self::FIELD_VERIFIED_WITH] instanceof FHIRReference) {
                $this->setVerifiedWith($data[self::FIELD_VERIFIED_WITH]);
            } else {
                $this->setVerifiedWith(new FHIRReference($data[self::FIELD_VERIFIED_WITH]));
            }
        }
        if (array_key_exists(self::FIELD_VERIFICATION_DATE, $data) || array_key_exists(self::FIELD_VERIFICATION_DATE_EXT, $data)) {
            $value = $data[self::FIELD_VERIFICATION_DATE] ?? null;
            $ext = (isset($data[self::FIELD_VERIFICATION_DATE_EXT]) && is_array($data[self::FIELD_VERIFICATION_DATE_EXT])) ? $data[self::FIELD_VERIFICATION_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->addVerificationDate($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRDateTime) {
                            $this->addVerificationDate($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addVerificationDate(new FHIRDateTime(array_merge($v, $iext)));
                            } else {
                                $this->addVerificationDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addVerificationDate(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->addVerificationDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addVerificationDate(new FHIRDateTime($iext));
                }
            } else {
                $this->addVerificationDate(new FHIRDateTime(null));
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
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Has the instruction been verified.
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getVerified(): null|FHIRBoolean
    {
        return $this->verified;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Has the instruction been verified.
     *
     * @param null|string|bool|\Romeldev\Fhir\R5\FHIRBooleanPrimitive|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBoolean $verified
     * @param \Romeldev\Fhir\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setVerified(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $verified = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $verified && !($verified instanceof FHIRBoolean)) {
            $verified = new FHIRBoolean($verified);
        }
        $this->_trackValueSet($this->verified, $verified);
        if (!isset($this->_xmlLocations[self::FIELD_VERIFIED])) {
            $this->_xmlLocations[self::FIELD_VERIFIED] = [];
        }
        $this->_xmlLocations[self::FIELD_VERIFIED][0] = $xmlLocation;
        $this->verified = $verified;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Extensible list of verification type starting with verification and
     * re-validation.
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getVerificationType(): null|FHIRCodeableConcept
    {
        return $this->verificationType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Extensible list of verification type starting with verification and
     * re-validation.
     *
     * @param null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $verificationType
     * @return static
     */
    public function setVerificationType(null|FHIRCodeableConcept $verificationType = null): self
    {
        if (null === $verificationType) {
            $verificationType = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->verificationType, $verificationType);
        $this->verificationType = $verificationType;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person who conducted the verification/validation of the Grantor decision.
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getVerifiedBy(): null|FHIRReference
    {
        return $this->verifiedBy;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person who conducted the verification/validation of the Grantor decision.
     *
     * @param null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $verifiedBy
     * @return static
     */
    public function setVerifiedBy(null|FHIRReference $verifiedBy = null): self
    {
        if (null === $verifiedBy) {
            $verifiedBy = new FHIRReference();
        }
        $this->_trackValueSet($this->verifiedBy, $verifiedBy);
        $this->verifiedBy = $verifiedBy;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who verified the instruction (Patient, Relative or other Authorized Person).
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getVerifiedWith(): null|FHIRReference
    {
        return $this->verifiedWith;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who verified the instruction (Patient, Relative or other Authorized Person).
     *
     * @param null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $verifiedWith
     * @return static
     */
    public function setVerifiedWith(null|FHIRReference $verifiedWith = null): self
    {
        if (null === $verifiedWith) {
            $verifiedWith = new FHIRReference();
        }
        $this->_trackValueSet($this->verifiedWith, $verifiedWith);
        $this->verifiedWith = $verifiedWith;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date(s) verification was collected.
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDateTime[]
     */
    public function getVerificationDate(): null|array
    {
        return $this->verificationDate;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date(s) verification was collected.
     *
     * @param null|string|\DateTimeInterface|\Romeldev\Fhir\R5\FHIRDateTimePrimitive|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDateTime $verificationDate
     * @param \Romeldev\Fhir\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function addVerificationDate(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $verificationDate = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $verificationDate && !($verificationDate instanceof FHIRDateTime)) {
            $verificationDate = new FHIRDateTime($verificationDate);
        }
        $this->_trackValueAdded();
        if (!isset($this->_xmlLocations[self::FIELD_VERIFICATION_DATE])) {
            $this->_xmlLocations[self::FIELD_VERIFICATION_DATE] = [];
        }
        if ([] === $this->_xmlLocations[self::FIELD_VERIFICATION_DATE]) {
            $this->_xmlLocations[self::FIELD_VERIFICATION_DATE][0] = $xmlLocation;
        } else {
            $this->_xmlLocations[self::FIELD_VERIFICATION_DATE][] = PHPFHIRXmlLocationEnum::ELEMENT;
        }
        $this->verificationDate[] = $verificationDate;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date(s) verification was collected.
     *
     * @param \Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDateTime[] $verificationDate
     * @param \Romeldev\Fhir\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setVerificationDate(array $verificationDate = [], PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        unset($this->_xmlLocations[self::FIELD_VERIFICATION_DATE]);
        if ([] !== $this->verificationDate) {
            $this->_trackValuesRemoved(count($this->verificationDate));
            $this->verificationDate = [];
        }
        if ([] === $verificationDate) {
            return $this;
        }
        foreach($verificationDate as $v) {
            if ($v instanceof FHIRDateTime) {
                $this->addVerificationDate($v, $xmlLocation);
            } else {
                $this->addVerificationDate(new FHIRDateTime($v), $xmlLocation);
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
        if (null !== ($v = $this->getVerified())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VERIFIED] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getVerificationType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VERIFICATION_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getVerifiedBy())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VERIFIED_BY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getVerifiedWith())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VERIFIED_WITH] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getVerificationDate())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_VERIFICATION_DATE, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VERIFIED])) {
            $v = $this->getVerified();
            foreach($validationRules[self::FIELD_VERIFIED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT_DOT_VERIFICATION, self::FIELD_VERIFIED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VERIFIED])) {
                        $errs[self::FIELD_VERIFIED] = [];
                    }
                    $errs[self::FIELD_VERIFIED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VERIFICATION_TYPE])) {
            $v = $this->getVerificationType();
            foreach($validationRules[self::FIELD_VERIFICATION_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT_DOT_VERIFICATION, self::FIELD_VERIFICATION_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VERIFICATION_TYPE])) {
                        $errs[self::FIELD_VERIFICATION_TYPE] = [];
                    }
                    $errs[self::FIELD_VERIFICATION_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VERIFIED_BY])) {
            $v = $this->getVerifiedBy();
            foreach($validationRules[self::FIELD_VERIFIED_BY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT_DOT_VERIFICATION, self::FIELD_VERIFIED_BY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VERIFIED_BY])) {
                        $errs[self::FIELD_VERIFIED_BY] = [];
                    }
                    $errs[self::FIELD_VERIFIED_BY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VERIFIED_WITH])) {
            $v = $this->getVerifiedWith();
            foreach($validationRules[self::FIELD_VERIFIED_WITH] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT_DOT_VERIFICATION, self::FIELD_VERIFIED_WITH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VERIFIED_WITH])) {
                        $errs[self::FIELD_VERIFIED_WITH] = [];
                    }
                    $errs[self::FIELD_VERIFIED_WITH][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VERIFICATION_DATE])) {
            $v = $this->getVerificationDate();
            foreach($validationRules[self::FIELD_VERIFICATION_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT_DOT_VERIFICATION, self::FIELD_VERIFICATION_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VERIFICATION_DATE])) {
                        $errs[self::FIELD_VERIFICATION_DATE] = [];
                    }
                    $errs[self::FIELD_VERIFICATION_DATE][$rule] = $err;
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
     * @param null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentVerification $type
     * @param null|int|\Romeldev\Fhir\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentVerification
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
        } else if (!($type instanceof FHIRConsentVerification)) {
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
            if (self::FIELD_VERIFIED === $childName) {
                $type->setVerified(FHIRBoolean::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_VERIFICATION_TYPE === $childName) {
                $type->setVerificationType(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_VERIFIED_BY === $childName) {
                $type->setVerifiedBy(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_VERIFIED_WITH === $childName) {
                $type->setVerifiedWith(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_VERIFICATION_DATE === $childName) {
                $type->addVerificationDate(FHIRDateTime::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_VERIFIED])) {
            $pt = $type->getVerified();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_VERIFIED], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setVerified((string)$attributes[self::FIELD_VERIFIED], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VERIFICATION_DATE])) {
            $type->addVerificationDate((string)$attributes[self::FIELD_VERIFICATION_DATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
            $xw->openRootNode($config, 'ConsentVerification', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_VERIFIED] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getVerified())) {
            $xw->writeAttribute(self::FIELD_VERIFIED, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_VERIFICATION_DATE] ?? [];
        if ([] === $locs && [] !== ($vs = $this->getVerificationDate())) {
            $xw->writeAttribute(self::FIELD_VERIFICATION_DATE, $vs[0]->getValue()?->getFormattedValue());
        } else if (false !== ($idx = array_search(PHPFHIRXmlLocationEnum::ATTRIBUTE, $locs, true)) && [] !== ($vs = $this->getVerificationDate()) && isset($vs[$idx])) {
            $xw->writeAttribute(self::FIELD_VERIFICATION_DATE, $vs[$idx]->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        $locs = $this->_xmlLocations[self::FIELD_VERIFIED] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getVerified())) {
            $xw->startElement(self::FIELD_VERIFIED);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getVerificationType())) {
            $xw->startElement(self::FIELD_VERIFICATION_TYPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getVerifiedBy())) {
            $xw->startElement(self::FIELD_VERIFIED_BY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getVerifiedWith())) {
            $xw->startElement(self::FIELD_VERIFIED_WITH);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_VERIFICATION_DATE] ?? [];
        if (([] === $locs || in_array(PHPFHIRXmlLocationEnum::ELEMENT, $locs, true)) && [] !== ($vs = $this->getVerificationDate())) {
            foreach($vs as $i => $v) {
                if (!isset($locs[$i]) || PHPFHIRXmlLocationEnum::ELEMENT === $locs[$i]) {
                    $xw->startElement(self::FIELD_VERIFICATION_DATE);
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
        if (null !== ($v = $this->getVerified())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_VERIFIED} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_VERIFIED_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getVerificationType())) {
            $out->{self::FIELD_VERIFICATION_TYPE} = $v;
        }
        if (null !== ($v = $this->getVerifiedBy())) {
            $out->{self::FIELD_VERIFIED_BY} = $v;
        }
        if (null !== ($v = $this->getVerifiedWith())) {
            $out->{self::FIELD_VERIFIED_WITH} = $v;
        }
        if ([] !== ($vs = $this->getVerificationDate())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRDateTime::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_VERIFICATION_DATE} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_VERIFICATION_DATE_EXT} = $exts;
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