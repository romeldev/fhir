<?php declare(strict_types=1);

namespace Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType;

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

use Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBoolean;
use Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType;
use Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRDosage\FHIRDosageDoseAndRate;
use Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity;
use Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio;
use Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRInteger;
use Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRString;
use Romeldev\Fhir\R5\FHIRBooleanPrimitive;
use Romeldev\Fhir\R5\FHIRIntegerPrimitive;
use Romeldev\Fhir\R5\FHIRStringPrimitive;
use Romeldev\Fhir\R5\PHPFHIRConfig;
use Romeldev\Fhir\R5\PHPFHIRConfigKeyEnum;
use Romeldev\Fhir\R5\PHPFHIRConstants;
use Romeldev\Fhir\R5\PHPFHIRTypeInterface;
use Romeldev\Fhir\R5\PHPFHIRXmlLocationEnum;
use Romeldev\Fhir\R5\PHPFHIRXmlWriter;

/**
 * Indicates how the medication is/was taken or should be taken by the patient.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 *
 * Class FHIRDosage
 * @package \Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType
 */
class FHIRDosage extends FHIRBackboneType
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_DOSAGE;

    const FIELD_SEQUENCE = 'sequence';
    const FIELD_SEQUENCE_EXT = '_sequence';
    const FIELD_TEXT = 'text';
    const FIELD_TEXT_EXT = '_text';
    const FIELD_ADDITIONAL_INSTRUCTION = 'additionalInstruction';
    const FIELD_PATIENT_INSTRUCTION = 'patientInstruction';
    const FIELD_PATIENT_INSTRUCTION_EXT = '_patientInstruction';
    const FIELD_TIMING = 'timing';
    const FIELD_AS_NEEDED = 'asNeeded';
    const FIELD_AS_NEEDED_EXT = '_asNeeded';
    const FIELD_AS_NEEDED_FOR = 'asNeededFor';
    const FIELD_SITE = 'site';
    const FIELD_ROUTE = 'route';
    const FIELD_METHOD = 'method';
    const FIELD_DOSE_AND_RATE = 'doseAndRate';
    const FIELD_MAX_DOSE_PER_PERIOD = 'maxDosePerPeriod';
    const FIELD_MAX_DOSE_PER_ADMINISTRATION = 'maxDosePerAdministration';
    const FIELD_MAX_DOSE_PER_LIFETIME = 'maxDosePerLifetime';

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the order in which the dosage instructions should be applied or
     * interpreted.
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRInteger
     */
    protected null|FHIRInteger $sequence = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Free text dosage instructions e.g. SIG.
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $text = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Supplemental instructions to the patient on how to take the medication (e.g.
     * "with meals" or"take half to one hour before food") or warnings for the patient
     * about the medication (e.g. "may cause drowsiness" or "avoid exposure of skin to
     * direct sunlight or sunlamps").
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $additionalInstruction = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Instructions in terms that are understood by the patient or consumer.
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $patientInstruction = null;
    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * When medication should be administered.
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRTiming
     */
    protected null|FHIRTiming $timing = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether the Medication is only taken when needed within a specific
     * dosing schedule (Boolean option).
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $asNeeded = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates whether the Medication is only taken based on a precondition for
     * taking the Medication (CodeableConcept).
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $asNeededFor = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Body site to administer to.
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $site = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * How drug should enter body.
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $route = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Technique for administering medication.
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $method = null;
    /**
     * Indicates how the medication is/was taken or should be taken by the patient.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Depending on the resource,this is the amount of medication administered, to be
     * administered or typical amount to be administered.
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRDosage\FHIRDosageDoseAndRate[]
     */
    protected null|array $doseAndRate = [];
    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Upper limit on medication per unit of time.
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio[]
     */
    protected null|array $maxDosePerPeriod = [];
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Upper limit on medication per administration.
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    protected null|FHIRQuantity $maxDosePerAdministration = null;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Upper limit on medication per lifetime of the patient.
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    protected null|FHIRQuantity $maxDosePerLifetime = null;

    /**
     * Validation map for fields in type Dosage
     * @var array
     */
    private const _VALIDATION_RULES = [];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRDosage Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_SEQUENCE, $data) || array_key_exists(self::FIELD_SEQUENCE_EXT, $data)) {
            $value = $data[self::FIELD_SEQUENCE] ?? null;
            $ext = (isset($data[self::FIELD_SEQUENCE_EXT]) && is_array($data[self::FIELD_SEQUENCE_EXT])) ? $data[self::FIELD_SEQUENCE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setSequence($value);
                } else if (is_array($value)) {
                    $this->setSequence(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setSequence(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setSequence(new FHIRInteger($ext));
            } else {
                $this->setSequence(new FHIRInteger(null));
            }
        }
        if (array_key_exists(self::FIELD_TEXT, $data) || array_key_exists(self::FIELD_TEXT_EXT, $data)) {
            $value = $data[self::FIELD_TEXT] ?? null;
            $ext = (isset($data[self::FIELD_TEXT_EXT]) && is_array($data[self::FIELD_TEXT_EXT])) ? $data[self::FIELD_TEXT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setText($value);
                } else if (is_array($value)) {
                    $this->setText(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setText(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setText(new FHIRString($ext));
            } else {
                $this->setText(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_ADDITIONAL_INSTRUCTION, $data)) {
            if (is_array($data[self::FIELD_ADDITIONAL_INSTRUCTION])) {
                foreach($data[self::FIELD_ADDITIONAL_INSTRUCTION] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addAdditionalInstruction($v);
                    } else {
                        $this->addAdditionalInstruction(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_ADDITIONAL_INSTRUCTION] instanceof FHIRCodeableConcept) {
                $this->addAdditionalInstruction($data[self::FIELD_ADDITIONAL_INSTRUCTION]);
            } else {
                $this->addAdditionalInstruction(new FHIRCodeableConcept($data[self::FIELD_ADDITIONAL_INSTRUCTION]));
            }
        }
        if (array_key_exists(self::FIELD_PATIENT_INSTRUCTION, $data) || array_key_exists(self::FIELD_PATIENT_INSTRUCTION_EXT, $data)) {
            $value = $data[self::FIELD_PATIENT_INSTRUCTION] ?? null;
            $ext = (isset($data[self::FIELD_PATIENT_INSTRUCTION_EXT]) && is_array($data[self::FIELD_PATIENT_INSTRUCTION_EXT])) ? $data[self::FIELD_PATIENT_INSTRUCTION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setPatientInstruction($value);
                } else if (is_array($value)) {
                    $this->setPatientInstruction(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setPatientInstruction(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPatientInstruction(new FHIRString($ext));
            } else {
                $this->setPatientInstruction(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_TIMING, $data)) {
            if ($data[self::FIELD_TIMING] instanceof FHIRTiming) {
                $this->setTiming($data[self::FIELD_TIMING]);
            } else {
                $this->setTiming(new FHIRTiming($data[self::FIELD_TIMING]));
            }
        }
        if (array_key_exists(self::FIELD_AS_NEEDED, $data) || array_key_exists(self::FIELD_AS_NEEDED_EXT, $data)) {
            $value = $data[self::FIELD_AS_NEEDED] ?? null;
            $ext = (isset($data[self::FIELD_AS_NEEDED_EXT]) && is_array($data[self::FIELD_AS_NEEDED_EXT])) ? $data[self::FIELD_AS_NEEDED_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setAsNeeded($value);
                } else if (is_array($value)) {
                    $this->setAsNeeded(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setAsNeeded(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setAsNeeded(new FHIRBoolean($ext));
            } else {
                $this->setAsNeeded(new FHIRBoolean(null));
            }
        }
        if (array_key_exists(self::FIELD_AS_NEEDED_FOR, $data)) {
            if (is_array($data[self::FIELD_AS_NEEDED_FOR])) {
                foreach($data[self::FIELD_AS_NEEDED_FOR] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addAsNeededFor($v);
                    } else {
                        $this->addAsNeededFor(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_AS_NEEDED_FOR] instanceof FHIRCodeableConcept) {
                $this->addAsNeededFor($data[self::FIELD_AS_NEEDED_FOR]);
            } else {
                $this->addAsNeededFor(new FHIRCodeableConcept($data[self::FIELD_AS_NEEDED_FOR]));
            }
        }
        if (array_key_exists(self::FIELD_SITE, $data)) {
            if ($data[self::FIELD_SITE] instanceof FHIRCodeableConcept) {
                $this->setSite($data[self::FIELD_SITE]);
            } else {
                $this->setSite(new FHIRCodeableConcept($data[self::FIELD_SITE]));
            }
        }
        if (array_key_exists(self::FIELD_ROUTE, $data)) {
            if ($data[self::FIELD_ROUTE] instanceof FHIRCodeableConcept) {
                $this->setRoute($data[self::FIELD_ROUTE]);
            } else {
                $this->setRoute(new FHIRCodeableConcept($data[self::FIELD_ROUTE]));
            }
        }
        if (array_key_exists(self::FIELD_METHOD, $data)) {
            if ($data[self::FIELD_METHOD] instanceof FHIRCodeableConcept) {
                $this->setMethod($data[self::FIELD_METHOD]);
            } else {
                $this->setMethod(new FHIRCodeableConcept($data[self::FIELD_METHOD]));
            }
        }
        if (array_key_exists(self::FIELD_DOSE_AND_RATE, $data)) {
            if (is_array($data[self::FIELD_DOSE_AND_RATE])) {
                foreach($data[self::FIELD_DOSE_AND_RATE] as $v) {
                    if ($v instanceof FHIRDosageDoseAndRate) {
                        $this->addDoseAndRate($v);
                    } else {
                        $this->addDoseAndRate(new FHIRDosageDoseAndRate($v));
                    }
                }
            } elseif ($data[self::FIELD_DOSE_AND_RATE] instanceof FHIRDosageDoseAndRate) {
                $this->addDoseAndRate($data[self::FIELD_DOSE_AND_RATE]);
            } else {
                $this->addDoseAndRate(new FHIRDosageDoseAndRate($data[self::FIELD_DOSE_AND_RATE]));
            }
        }
        if (array_key_exists(self::FIELD_MAX_DOSE_PER_PERIOD, $data)) {
            if (is_array($data[self::FIELD_MAX_DOSE_PER_PERIOD])) {
                foreach($data[self::FIELD_MAX_DOSE_PER_PERIOD] as $v) {
                    if ($v instanceof FHIRRatio) {
                        $this->addMaxDosePerPeriod($v);
                    } else {
                        $this->addMaxDosePerPeriod(new FHIRRatio($v));
                    }
                }
            } elseif ($data[self::FIELD_MAX_DOSE_PER_PERIOD] instanceof FHIRRatio) {
                $this->addMaxDosePerPeriod($data[self::FIELD_MAX_DOSE_PER_PERIOD]);
            } else {
                $this->addMaxDosePerPeriod(new FHIRRatio($data[self::FIELD_MAX_DOSE_PER_PERIOD]));
            }
        }
        if (array_key_exists(self::FIELD_MAX_DOSE_PER_ADMINISTRATION, $data)) {
            if ($data[self::FIELD_MAX_DOSE_PER_ADMINISTRATION] instanceof FHIRQuantity) {
                $this->setMaxDosePerAdministration($data[self::FIELD_MAX_DOSE_PER_ADMINISTRATION]);
            } else {
                $this->setMaxDosePerAdministration(new FHIRQuantity($data[self::FIELD_MAX_DOSE_PER_ADMINISTRATION]));
            }
        }
        if (array_key_exists(self::FIELD_MAX_DOSE_PER_LIFETIME, $data)) {
            if ($data[self::FIELD_MAX_DOSE_PER_LIFETIME] instanceof FHIRQuantity) {
                $this->setMaxDosePerLifetime($data[self::FIELD_MAX_DOSE_PER_LIFETIME]);
            } else {
                $this->setMaxDosePerLifetime(new FHIRQuantity($data[self::FIELD_MAX_DOSE_PER_LIFETIME]));
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
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the order in which the dosage instructions should be applied or
     * interpreted.
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRInteger
     */
    public function getSequence(): null|FHIRInteger
    {
        return $this->sequence;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the order in which the dosage instructions should be applied or
     * interpreted.
     *
     * @param null|string|int|float|\Romeldev\Fhir\R5\FHIRIntegerPrimitive|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRInteger $sequence
     * @param \Romeldev\Fhir\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setSequence(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $sequence = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $sequence && !($sequence instanceof FHIRInteger)) {
            $sequence = new FHIRInteger($sequence);
        }
        $this->_trackValueSet($this->sequence, $sequence);
        if (!isset($this->_xmlLocations[self::FIELD_SEQUENCE])) {
            $this->_xmlLocations[self::FIELD_SEQUENCE] = [];
        }
        $this->_xmlLocations[self::FIELD_SEQUENCE][0] = $xmlLocation;
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Free text dosage instructions e.g. SIG.
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getText(): null|FHIRString
    {
        return $this->text;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Free text dosage instructions e.g. SIG.
     *
     * @param null|string|\Romeldev\Fhir\R5\FHIRStringPrimitive|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRString $text
     * @param \Romeldev\Fhir\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setText(null|string|FHIRStringPrimitive|FHIRString $text = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $text && !($text instanceof FHIRString)) {
            $text = new FHIRString($text);
        }
        $this->_trackValueSet($this->text, $text);
        if (!isset($this->_xmlLocations[self::FIELD_TEXT])) {
            $this->_xmlLocations[self::FIELD_TEXT] = [];
        }
        $this->_xmlLocations[self::FIELD_TEXT][0] = $xmlLocation;
        $this->text = $text;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Supplemental instructions to the patient on how to take the medication (e.g.
     * "with meals" or"take half to one hour before food") or warnings for the patient
     * about the medication (e.g. "may cause drowsiness" or "avoid exposure of skin to
     * direct sunlight or sunlamps").
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getAdditionalInstruction(): null|array
    {
        return $this->additionalInstruction;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Supplemental instructions to the patient on how to take the medication (e.g.
     * "with meals" or"take half to one hour before food") or warnings for the patient
     * about the medication (e.g. "may cause drowsiness" or "avoid exposure of skin to
     * direct sunlight or sunlamps").
     *
     * @param null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $additionalInstruction
     * @return static
     */
    public function addAdditionalInstruction(null|FHIRCodeableConcept $additionalInstruction = null): self
    {
        if (null === $additionalInstruction) {
            $additionalInstruction = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->additionalInstruction[] = $additionalInstruction;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Supplemental instructions to the patient on how to take the medication (e.g.
     * "with meals" or"take half to one hour before food") or warnings for the patient
     * about the medication (e.g. "may cause drowsiness" or "avoid exposure of skin to
     * direct sunlight or sunlamps").
     *
     * @param \Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$additionalInstruction
     * @return static
     */
    public function setAdditionalInstruction(FHIRCodeableConcept ...$additionalInstruction): self
    {
        if ([] !== $this->additionalInstruction) {
            $this->_trackValuesRemoved(count($this->additionalInstruction));
            $this->additionalInstruction = [];
        }
        if ([] === $additionalInstruction) {
            return $this;
        }
        foreach($additionalInstruction as $v) {
            $this->addAdditionalInstruction($v);
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Instructions in terms that are understood by the patient or consumer.
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getPatientInstruction(): null|FHIRString
    {
        return $this->patientInstruction;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Instructions in terms that are understood by the patient or consumer.
     *
     * @param null|string|\Romeldev\Fhir\R5\FHIRStringPrimitive|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRString $patientInstruction
     * @param \Romeldev\Fhir\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setPatientInstruction(null|string|FHIRStringPrimitive|FHIRString $patientInstruction = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $patientInstruction && !($patientInstruction instanceof FHIRString)) {
            $patientInstruction = new FHIRString($patientInstruction);
        }
        $this->_trackValueSet($this->patientInstruction, $patientInstruction);
        if (!isset($this->_xmlLocations[self::FIELD_PATIENT_INSTRUCTION])) {
            $this->_xmlLocations[self::FIELD_PATIENT_INSTRUCTION] = [];
        }
        $this->_xmlLocations[self::FIELD_PATIENT_INSTRUCTION][0] = $xmlLocation;
        $this->patientInstruction = $patientInstruction;
        return $this;
    }

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * When medication should be administered.
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRTiming
     */
    public function getTiming(): null|FHIRTiming
    {
        return $this->timing;
    }

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * When medication should be administered.
     *
     * @param null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRTiming $timing
     * @return static
     */
    public function setTiming(null|FHIRTiming $timing = null): self
    {
        if (null === $timing) {
            $timing = new FHIRTiming();
        }
        $this->_trackValueSet($this->timing, $timing);
        $this->timing = $timing;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether the Medication is only taken when needed within a specific
     * dosing schedule (Boolean option).
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getAsNeeded(): null|FHIRBoolean
    {
        return $this->asNeeded;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether the Medication is only taken when needed within a specific
     * dosing schedule (Boolean option).
     *
     * @param null|string|bool|\Romeldev\Fhir\R5\FHIRBooleanPrimitive|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBoolean $asNeeded
     * @param \Romeldev\Fhir\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setAsNeeded(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $asNeeded = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $asNeeded && !($asNeeded instanceof FHIRBoolean)) {
            $asNeeded = new FHIRBoolean($asNeeded);
        }
        $this->_trackValueSet($this->asNeeded, $asNeeded);
        if (!isset($this->_xmlLocations[self::FIELD_AS_NEEDED])) {
            $this->_xmlLocations[self::FIELD_AS_NEEDED] = [];
        }
        $this->_xmlLocations[self::FIELD_AS_NEEDED][0] = $xmlLocation;
        $this->asNeeded = $asNeeded;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates whether the Medication is only taken based on a precondition for
     * taking the Medication (CodeableConcept).
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getAsNeededFor(): null|array
    {
        return $this->asNeededFor;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates whether the Medication is only taken based on a precondition for
     * taking the Medication (CodeableConcept).
     *
     * @param null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $asNeededFor
     * @return static
     */
    public function addAsNeededFor(null|FHIRCodeableConcept $asNeededFor = null): self
    {
        if (null === $asNeededFor) {
            $asNeededFor = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->asNeededFor[] = $asNeededFor;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates whether the Medication is only taken based on a precondition for
     * taking the Medication (CodeableConcept).
     *
     * @param \Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$asNeededFor
     * @return static
     */
    public function setAsNeededFor(FHIRCodeableConcept ...$asNeededFor): self
    {
        if ([] !== $this->asNeededFor) {
            $this->_trackValuesRemoved(count($this->asNeededFor));
            $this->asNeededFor = [];
        }
        if ([] === $asNeededFor) {
            return $this;
        }
        foreach($asNeededFor as $v) {
            $this->addAsNeededFor($v);
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Body site to administer to.
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getSite(): null|FHIRCodeableConcept
    {
        return $this->site;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Body site to administer to.
     *
     * @param null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $site
     * @return static
     */
    public function setSite(null|FHIRCodeableConcept $site = null): self
    {
        if (null === $site) {
            $site = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->site, $site);
        $this->site = $site;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * How drug should enter body.
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getRoute(): null|FHIRCodeableConcept
    {
        return $this->route;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * How drug should enter body.
     *
     * @param null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $route
     * @return static
     */
    public function setRoute(null|FHIRCodeableConcept $route = null): self
    {
        if (null === $route) {
            $route = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->route, $route);
        $this->route = $route;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Technique for administering medication.
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getMethod(): null|FHIRCodeableConcept
    {
        return $this->method;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Technique for administering medication.
     *
     * @param null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $method
     * @return static
     */
    public function setMethod(null|FHIRCodeableConcept $method = null): self
    {
        if (null === $method) {
            $method = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->method, $method);
        $this->method = $method;
        return $this;
    }

    /**
     * Indicates how the medication is/was taken or should be taken by the patient.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Depending on the resource,this is the amount of medication administered, to be
     * administered or typical amount to be administered.
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRDosage\FHIRDosageDoseAndRate[]
     */
    public function getDoseAndRate(): null|array
    {
        return $this->doseAndRate;
    }

    /**
     * Indicates how the medication is/was taken or should be taken by the patient.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Depending on the resource,this is the amount of medication administered, to be
     * administered or typical amount to be administered.
     *
     * @param null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRDosage\FHIRDosageDoseAndRate $doseAndRate
     * @return static
     */
    public function addDoseAndRate(null|FHIRDosageDoseAndRate $doseAndRate = null): self
    {
        if (null === $doseAndRate) {
            $doseAndRate = new FHIRDosageDoseAndRate();
        }
        $this->_trackValueAdded();
        $this->doseAndRate[] = $doseAndRate;
        return $this;
    }

    /**
     * Indicates how the medication is/was taken or should be taken by the patient.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Depending on the resource,this is the amount of medication administered, to be
     * administered or typical amount to be administered.
     *
     * @param \Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRDosage\FHIRDosageDoseAndRate ...$doseAndRate
     * @return static
     */
    public function setDoseAndRate(FHIRDosageDoseAndRate ...$doseAndRate): self
    {
        if ([] !== $this->doseAndRate) {
            $this->_trackValuesRemoved(count($this->doseAndRate));
            $this->doseAndRate = [];
        }
        if ([] === $doseAndRate) {
            return $this;
        }
        foreach($doseAndRate as $v) {
            $this->addDoseAndRate($v);
        }
        return $this;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Upper limit on medication per unit of time.
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio[]
     */
    public function getMaxDosePerPeriod(): null|array
    {
        return $this->maxDosePerPeriod;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Upper limit on medication per unit of time.
     *
     * @param null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio $maxDosePerPeriod
     * @return static
     */
    public function addMaxDosePerPeriod(null|FHIRRatio $maxDosePerPeriod = null): self
    {
        if (null === $maxDosePerPeriod) {
            $maxDosePerPeriod = new FHIRRatio();
        }
        $this->_trackValueAdded();
        $this->maxDosePerPeriod[] = $maxDosePerPeriod;
        return $this;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Upper limit on medication per unit of time.
     *
     * @param \Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio ...$maxDosePerPeriod
     * @return static
     */
    public function setMaxDosePerPeriod(FHIRRatio ...$maxDosePerPeriod): self
    {
        if ([] !== $this->maxDosePerPeriod) {
            $this->_trackValuesRemoved(count($this->maxDosePerPeriod));
            $this->maxDosePerPeriod = [];
        }
        if ([] === $maxDosePerPeriod) {
            return $this;
        }
        foreach($maxDosePerPeriod as $v) {
            $this->addMaxDosePerPeriod($v);
        }
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Upper limit on medication per administration.
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    public function getMaxDosePerAdministration(): null|FHIRQuantity
    {
        return $this->maxDosePerAdministration;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Upper limit on medication per administration.
     *
     * @param null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $maxDosePerAdministration
     * @return static
     */
    public function setMaxDosePerAdministration(null|FHIRQuantity $maxDosePerAdministration = null): self
    {
        if (null === $maxDosePerAdministration) {
            $maxDosePerAdministration = new FHIRQuantity();
        }
        $this->_trackValueSet($this->maxDosePerAdministration, $maxDosePerAdministration);
        $this->maxDosePerAdministration = $maxDosePerAdministration;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Upper limit on medication per lifetime of the patient.
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    public function getMaxDosePerLifetime(): null|FHIRQuantity
    {
        return $this->maxDosePerLifetime;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Upper limit on medication per lifetime of the patient.
     *
     * @param null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $maxDosePerLifetime
     * @return static
     */
    public function setMaxDosePerLifetime(null|FHIRQuantity $maxDosePerLifetime = null): self
    {
        if (null === $maxDosePerLifetime) {
            $maxDosePerLifetime = new FHIRQuantity();
        }
        $this->_trackValueSet($this->maxDosePerLifetime, $maxDosePerLifetime);
        $this->maxDosePerLifetime = $maxDosePerLifetime;
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
        if (null !== ($v = $this->getSequence())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SEQUENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getText())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TEXT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getAdditionalInstruction())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ADDITIONAL_INSTRUCTION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getPatientInstruction())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATIENT_INSTRUCTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTiming())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TIMING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAsNeeded())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AS_NEEDED] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getAsNeededFor())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_AS_NEEDED_FOR, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getSite())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SITE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRoute())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ROUTE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMethod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_METHOD] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getDoseAndRate())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DOSE_AND_RATE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getMaxDosePerPeriod())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_MAX_DOSE_PER_PERIOD, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getMaxDosePerAdministration())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MAX_DOSE_PER_ADMINISTRATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMaxDosePerLifetime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MAX_DOSE_PER_LIFETIME] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_SEQUENCE])) {
            $v = $this->getSequence();
            foreach($validationRules[self::FIELD_SEQUENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOSAGE, self::FIELD_SEQUENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SEQUENCE])) {
                        $errs[self::FIELD_SEQUENCE] = [];
                    }
                    $errs[self::FIELD_SEQUENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOSAGE, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ADDITIONAL_INSTRUCTION])) {
            $v = $this->getAdditionalInstruction();
            foreach($validationRules[self::FIELD_ADDITIONAL_INSTRUCTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOSAGE, self::FIELD_ADDITIONAL_INSTRUCTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ADDITIONAL_INSTRUCTION])) {
                        $errs[self::FIELD_ADDITIONAL_INSTRUCTION] = [];
                    }
                    $errs[self::FIELD_ADDITIONAL_INSTRUCTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATIENT_INSTRUCTION])) {
            $v = $this->getPatientInstruction();
            foreach($validationRules[self::FIELD_PATIENT_INSTRUCTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOSAGE, self::FIELD_PATIENT_INSTRUCTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATIENT_INSTRUCTION])) {
                        $errs[self::FIELD_PATIENT_INSTRUCTION] = [];
                    }
                    $errs[self::FIELD_PATIENT_INSTRUCTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TIMING])) {
            $v = $this->getTiming();
            foreach($validationRules[self::FIELD_TIMING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOSAGE, self::FIELD_TIMING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TIMING])) {
                        $errs[self::FIELD_TIMING] = [];
                    }
                    $errs[self::FIELD_TIMING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AS_NEEDED])) {
            $v = $this->getAsNeeded();
            foreach($validationRules[self::FIELD_AS_NEEDED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOSAGE, self::FIELD_AS_NEEDED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AS_NEEDED])) {
                        $errs[self::FIELD_AS_NEEDED] = [];
                    }
                    $errs[self::FIELD_AS_NEEDED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AS_NEEDED_FOR])) {
            $v = $this->getAsNeededFor();
            foreach($validationRules[self::FIELD_AS_NEEDED_FOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOSAGE, self::FIELD_AS_NEEDED_FOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AS_NEEDED_FOR])) {
                        $errs[self::FIELD_AS_NEEDED_FOR] = [];
                    }
                    $errs[self::FIELD_AS_NEEDED_FOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SITE])) {
            $v = $this->getSite();
            foreach($validationRules[self::FIELD_SITE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOSAGE, self::FIELD_SITE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SITE])) {
                        $errs[self::FIELD_SITE] = [];
                    }
                    $errs[self::FIELD_SITE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ROUTE])) {
            $v = $this->getRoute();
            foreach($validationRules[self::FIELD_ROUTE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOSAGE, self::FIELD_ROUTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ROUTE])) {
                        $errs[self::FIELD_ROUTE] = [];
                    }
                    $errs[self::FIELD_ROUTE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_METHOD])) {
            $v = $this->getMethod();
            foreach($validationRules[self::FIELD_METHOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOSAGE, self::FIELD_METHOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_METHOD])) {
                        $errs[self::FIELD_METHOD] = [];
                    }
                    $errs[self::FIELD_METHOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOSE_AND_RATE])) {
            $v = $this->getDoseAndRate();
            foreach($validationRules[self::FIELD_DOSE_AND_RATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOSAGE, self::FIELD_DOSE_AND_RATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOSE_AND_RATE])) {
                        $errs[self::FIELD_DOSE_AND_RATE] = [];
                    }
                    $errs[self::FIELD_DOSE_AND_RATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX_DOSE_PER_PERIOD])) {
            $v = $this->getMaxDosePerPeriod();
            foreach($validationRules[self::FIELD_MAX_DOSE_PER_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOSAGE, self::FIELD_MAX_DOSE_PER_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX_DOSE_PER_PERIOD])) {
                        $errs[self::FIELD_MAX_DOSE_PER_PERIOD] = [];
                    }
                    $errs[self::FIELD_MAX_DOSE_PER_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX_DOSE_PER_ADMINISTRATION])) {
            $v = $this->getMaxDosePerAdministration();
            foreach($validationRules[self::FIELD_MAX_DOSE_PER_ADMINISTRATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOSAGE, self::FIELD_MAX_DOSE_PER_ADMINISTRATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX_DOSE_PER_ADMINISTRATION])) {
                        $errs[self::FIELD_MAX_DOSE_PER_ADMINISTRATION] = [];
                    }
                    $errs[self::FIELD_MAX_DOSE_PER_ADMINISTRATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX_DOSE_PER_LIFETIME])) {
            $v = $this->getMaxDosePerLifetime();
            foreach($validationRules[self::FIELD_MAX_DOSE_PER_LIFETIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOSAGE, self::FIELD_MAX_DOSE_PER_LIFETIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX_DOSE_PER_LIFETIME])) {
                        $errs[self::FIELD_MAX_DOSE_PER_LIFETIME] = [];
                    }
                    $errs[self::FIELD_MAX_DOSE_PER_LIFETIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BACKBONE_TYPE, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
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
     * @param null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRDosage $type
     * @param null|int|\Romeldev\Fhir\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRDosage
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
        } else if (!($type instanceof FHIRDosage)) {
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
            if (self::FIELD_SEQUENCE === $childName) {
                $type->setSequence(FHIRInteger::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_TEXT === $childName) {
                $type->setText(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_ADDITIONAL_INSTRUCTION === $childName) {
                $type->addAdditionalInstruction(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PATIENT_INSTRUCTION === $childName) {
                $type->setPatientInstruction(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_TIMING === $childName) {
                $type->setTiming(FHIRTiming::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_AS_NEEDED === $childName) {
                $type->setAsNeeded(FHIRBoolean::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_AS_NEEDED_FOR === $childName) {
                $type->addAsNeededFor(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SITE === $childName) {
                $type->setSite(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ROUTE === $childName) {
                $type->setRoute(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_METHOD === $childName) {
                $type->setMethod(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DOSE_AND_RATE === $childName) {
                $type->addDoseAndRate(FHIRDosageDoseAndRate::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MAX_DOSE_PER_PERIOD === $childName) {
                $type->addMaxDosePerPeriod(FHIRRatio::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MAX_DOSE_PER_ADMINISTRATION === $childName) {
                $type->setMaxDosePerAdministration(FHIRQuantity::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MAX_DOSE_PER_LIFETIME === $childName) {
                $type->setMaxDosePerLifetime(FHIRQuantity::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_SEQUENCE])) {
            $pt = $type->getSequence();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_SEQUENCE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setSequence((string)$attributes[self::FIELD_SEQUENCE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_TEXT])) {
            $pt = $type->getText();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_TEXT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setText((string)$attributes[self::FIELD_TEXT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PATIENT_INSTRUCTION])) {
            $pt = $type->getPatientInstruction();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PATIENT_INSTRUCTION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setPatientInstruction((string)$attributes[self::FIELD_PATIENT_INSTRUCTION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_AS_NEEDED])) {
            $pt = $type->getAsNeeded();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_AS_NEEDED], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setAsNeeded((string)$attributes[self::FIELD_AS_NEEDED], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
            $xw->openRootNode($config, 'Dosage', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_SEQUENCE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getSequence())) {
            $xw->writeAttribute(self::FIELD_SEQUENCE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_TEXT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getText())) {
            $xw->writeAttribute(self::FIELD_TEXT, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_PATIENT_INSTRUCTION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getPatientInstruction())) {
            $xw->writeAttribute(self::FIELD_PATIENT_INSTRUCTION, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_AS_NEEDED] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getAsNeeded())) {
            $xw->writeAttribute(self::FIELD_AS_NEEDED, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        $locs = $this->_xmlLocations[self::FIELD_SEQUENCE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getSequence())) {
            $xw->startElement(self::FIELD_SEQUENCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_TEXT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getText())) {
            $xw->startElement(self::FIELD_TEXT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getAdditionalInstruction() as $v) {
            $xw->startElement(self::FIELD_ADDITIONAL_INSTRUCTION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_PATIENT_INSTRUCTION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getPatientInstruction())) {
            $xw->startElement(self::FIELD_PATIENT_INSTRUCTION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getTiming())) {
            $xw->startElement(self::FIELD_TIMING);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_AS_NEEDED] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getAsNeeded())) {
            $xw->startElement(self::FIELD_AS_NEEDED);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getAsNeededFor() as $v) {
            $xw->startElement(self::FIELD_AS_NEEDED_FOR);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getSite())) {
            $xw->startElement(self::FIELD_SITE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getRoute())) {
            $xw->startElement(self::FIELD_ROUTE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getMethod())) {
            $xw->startElement(self::FIELD_METHOD);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getDoseAndRate() as $v) {
            $xw->startElement(self::FIELD_DOSE_AND_RATE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getMaxDosePerPeriod() as $v) {
            $xw->startElement(self::FIELD_MAX_DOSE_PER_PERIOD);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getMaxDosePerAdministration())) {
            $xw->startElement(self::FIELD_MAX_DOSE_PER_ADMINISTRATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getMaxDosePerLifetime())) {
            $xw->startElement(self::FIELD_MAX_DOSE_PER_LIFETIME);
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
        if (null !== ($v = $this->getSequence())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_SEQUENCE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInteger::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SEQUENCE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getText())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_TEXT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TEXT_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getAdditionalInstruction())) {
            $out->{self::FIELD_ADDITIONAL_INSTRUCTION} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_ADDITIONAL_INSTRUCTION}[] = $v;
            }
        }
        if (null !== ($v = $this->getPatientInstruction())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PATIENT_INSTRUCTION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PATIENT_INSTRUCTION_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getTiming())) {
            $out->{self::FIELD_TIMING} = $v;
        }
        if (null !== ($v = $this->getAsNeeded())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_AS_NEEDED} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_AS_NEEDED_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getAsNeededFor())) {
            $out->{self::FIELD_AS_NEEDED_FOR} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_AS_NEEDED_FOR}[] = $v;
            }
        }
        if (null !== ($v = $this->getSite())) {
            $out->{self::FIELD_SITE} = $v;
        }
        if (null !== ($v = $this->getRoute())) {
            $out->{self::FIELD_ROUTE} = $v;
        }
        if (null !== ($v = $this->getMethod())) {
            $out->{self::FIELD_METHOD} = $v;
        }
        if ([] !== ($vs = $this->getDoseAndRate())) {
            $out->{self::FIELD_DOSE_AND_RATE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_DOSE_AND_RATE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getMaxDosePerPeriod())) {
            $out->{self::FIELD_MAX_DOSE_PER_PERIOD} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_MAX_DOSE_PER_PERIOD}[] = $v;
            }
        }
        if (null !== ($v = $this->getMaxDosePerAdministration())) {
            $out->{self::FIELD_MAX_DOSE_PER_ADMINISTRATION} = $v;
        }
        if (null !== ($v = $this->getMaxDosePerLifetime())) {
            $out->{self::FIELD_MAX_DOSE_PER_LIFETIME} = $v;
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