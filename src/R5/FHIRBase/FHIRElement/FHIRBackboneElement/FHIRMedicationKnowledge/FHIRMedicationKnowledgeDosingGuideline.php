<?php declare(strict_types=1);

namespace Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge;

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
use Romeldev\Fhir\R5\FHIRStringPrimitive;
use Romeldev\Fhir\R5\PHPFHIRConfig;
use Romeldev\Fhir\R5\PHPFHIRConfigKeyEnum;
use Romeldev\Fhir\R5\PHPFHIRConstants;
use Romeldev\Fhir\R5\PHPFHIRTypeInterface;
use Romeldev\Fhir\R5\PHPFHIRXmlLocationEnum;
use Romeldev\Fhir\R5\PHPFHIRXmlWriter;

/**
 * Information about a medication that is used to support knowledge.
 *
 * Class FHIRMedicationKnowledgeDosingGuideline
 * @package \Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge
 */
class FHIRMedicationKnowledgeDosingGuideline extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE_DOT_DOSING_GUIDELINE;

    const FIELD_TREATMENT_INTENT = 'treatmentIntent';
    const FIELD_DOSAGE = 'dosage';
    const FIELD_ADMINISTRATION_TREATMENT = 'administrationTreatment';
    const FIELD_PATIENT_CHARACTERISTIC = 'patientCharacteristic';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The overall intention of the treatment, for example, prophylactic, supporative,
     * curative, etc.
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $treatmentIntent = null;
    /**
     * Information about a medication that is used to support knowledge.
     *
     * Dosage for the medication for the specific guidelines.
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDosage[]
     */
    protected null|array $dosage = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of the treatment that the guideline applies to, for example, long term
     * therapy, first line treatment, etc.
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $administrationTreatment = null;
    /**
     * Information about a medication that is used to support knowledge.
     *
     * Characteristics of the patient that are relevant to the administration
     * guidelines (for example, height, weight, gender, etc.).
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgePatientCharacteristic[]
     */
    protected null|array $patientCharacteristic = [];

    /**
     * Validation map for fields in type MedicationKnowledge.DosingGuideline
     * @var array
     */
    private const _VALIDATION_RULES = [];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRMedicationKnowledgeDosingGuideline Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_TREATMENT_INTENT, $data)) {
            if ($data[self::FIELD_TREATMENT_INTENT] instanceof FHIRCodeableConcept) {
                $this->setTreatmentIntent($data[self::FIELD_TREATMENT_INTENT]);
            } else {
                $this->setTreatmentIntent(new FHIRCodeableConcept($data[self::FIELD_TREATMENT_INTENT]));
            }
        }
        if (array_key_exists(self::FIELD_DOSAGE, $data)) {
            if (is_array($data[self::FIELD_DOSAGE])) {
                foreach($data[self::FIELD_DOSAGE] as $v) {
                    if ($v instanceof FHIRMedicationKnowledgeDosage) {
                        $this->addDosage($v);
                    } else {
                        $this->addDosage(new FHIRMedicationKnowledgeDosage($v));
                    }
                }
            } elseif ($data[self::FIELD_DOSAGE] instanceof FHIRMedicationKnowledgeDosage) {
                $this->addDosage($data[self::FIELD_DOSAGE]);
            } else {
                $this->addDosage(new FHIRMedicationKnowledgeDosage($data[self::FIELD_DOSAGE]));
            }
        }
        if (array_key_exists(self::FIELD_ADMINISTRATION_TREATMENT, $data)) {
            if ($data[self::FIELD_ADMINISTRATION_TREATMENT] instanceof FHIRCodeableConcept) {
                $this->setAdministrationTreatment($data[self::FIELD_ADMINISTRATION_TREATMENT]);
            } else {
                $this->setAdministrationTreatment(new FHIRCodeableConcept($data[self::FIELD_ADMINISTRATION_TREATMENT]));
            }
        }
        if (array_key_exists(self::FIELD_PATIENT_CHARACTERISTIC, $data)) {
            if (is_array($data[self::FIELD_PATIENT_CHARACTERISTIC])) {
                foreach($data[self::FIELD_PATIENT_CHARACTERISTIC] as $v) {
                    if ($v instanceof FHIRMedicationKnowledgePatientCharacteristic) {
                        $this->addPatientCharacteristic($v);
                    } else {
                        $this->addPatientCharacteristic(new FHIRMedicationKnowledgePatientCharacteristic($v));
                    }
                }
            } elseif ($data[self::FIELD_PATIENT_CHARACTERISTIC] instanceof FHIRMedicationKnowledgePatientCharacteristic) {
                $this->addPatientCharacteristic($data[self::FIELD_PATIENT_CHARACTERISTIC]);
            } else {
                $this->addPatientCharacteristic(new FHIRMedicationKnowledgePatientCharacteristic($data[self::FIELD_PATIENT_CHARACTERISTIC]));
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The overall intention of the treatment, for example, prophylactic, supporative,
     * curative, etc.
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getTreatmentIntent(): null|FHIRCodeableConcept
    {
        return $this->treatmentIntent;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The overall intention of the treatment, for example, prophylactic, supporative,
     * curative, etc.
     *
     * @param null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $treatmentIntent
     * @return static
     */
    public function setTreatmentIntent(null|FHIRCodeableConcept $treatmentIntent = null): self
    {
        if (null === $treatmentIntent) {
            $treatmentIntent = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->treatmentIntent, $treatmentIntent);
        $this->treatmentIntent = $treatmentIntent;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Dosage for the medication for the specific guidelines.
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDosage[]
     */
    public function getDosage(): null|array
    {
        return $this->dosage;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Dosage for the medication for the specific guidelines.
     *
     * @param null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDosage $dosage
     * @return static
     */
    public function addDosage(null|FHIRMedicationKnowledgeDosage $dosage = null): self
    {
        if (null === $dosage) {
            $dosage = new FHIRMedicationKnowledgeDosage();
        }
        $this->_trackValueAdded();
        $this->dosage[] = $dosage;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Dosage for the medication for the specific guidelines.
     *
     * @param \Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDosage ...$dosage
     * @return static
     */
    public function setDosage(FHIRMedicationKnowledgeDosage ...$dosage): self
    {
        if ([] !== $this->dosage) {
            $this->_trackValuesRemoved(count($this->dosage));
            $this->dosage = [];
        }
        if ([] === $dosage) {
            return $this;
        }
        foreach($dosage as $v) {
            $this->addDosage($v);
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of the treatment that the guideline applies to, for example, long term
     * therapy, first line treatment, etc.
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getAdministrationTreatment(): null|FHIRCodeableConcept
    {
        return $this->administrationTreatment;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of the treatment that the guideline applies to, for example, long term
     * therapy, first line treatment, etc.
     *
     * @param null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $administrationTreatment
     * @return static
     */
    public function setAdministrationTreatment(null|FHIRCodeableConcept $administrationTreatment = null): self
    {
        if (null === $administrationTreatment) {
            $administrationTreatment = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->administrationTreatment, $administrationTreatment);
        $this->administrationTreatment = $administrationTreatment;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Characteristics of the patient that are relevant to the administration
     * guidelines (for example, height, weight, gender, etc.).
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgePatientCharacteristic[]
     */
    public function getPatientCharacteristic(): null|array
    {
        return $this->patientCharacteristic;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Characteristics of the patient that are relevant to the administration
     * guidelines (for example, height, weight, gender, etc.).
     *
     * @param null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgePatientCharacteristic $patientCharacteristic
     * @return static
     */
    public function addPatientCharacteristic(null|FHIRMedicationKnowledgePatientCharacteristic $patientCharacteristic = null): self
    {
        if (null === $patientCharacteristic) {
            $patientCharacteristic = new FHIRMedicationKnowledgePatientCharacteristic();
        }
        $this->_trackValueAdded();
        $this->patientCharacteristic[] = $patientCharacteristic;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Characteristics of the patient that are relevant to the administration
     * guidelines (for example, height, weight, gender, etc.).
     *
     * @param \Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgePatientCharacteristic ...$patientCharacteristic
     * @return static
     */
    public function setPatientCharacteristic(FHIRMedicationKnowledgePatientCharacteristic ...$patientCharacteristic): self
    {
        if ([] !== $this->patientCharacteristic) {
            $this->_trackValuesRemoved(count($this->patientCharacteristic));
            $this->patientCharacteristic = [];
        }
        if ([] === $patientCharacteristic) {
            return $this;
        }
        foreach($patientCharacteristic as $v) {
            $this->addPatientCharacteristic($v);
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
        if (null !== ($v = $this->getTreatmentIntent())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TREATMENT_INTENT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getDosage())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DOSAGE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getAdministrationTreatment())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ADMINISTRATION_TREATMENT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getPatientCharacteristic())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PATIENT_CHARACTERISTIC, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TREATMENT_INTENT])) {
            $v = $this->getTreatmentIntent();
            foreach($validationRules[self::FIELD_TREATMENT_INTENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE_DOT_DOSING_GUIDELINE, self::FIELD_TREATMENT_INTENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TREATMENT_INTENT])) {
                        $errs[self::FIELD_TREATMENT_INTENT] = [];
                    }
                    $errs[self::FIELD_TREATMENT_INTENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOSAGE])) {
            $v = $this->getDosage();
            foreach($validationRules[self::FIELD_DOSAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE_DOT_DOSING_GUIDELINE, self::FIELD_DOSAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOSAGE])) {
                        $errs[self::FIELD_DOSAGE] = [];
                    }
                    $errs[self::FIELD_DOSAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ADMINISTRATION_TREATMENT])) {
            $v = $this->getAdministrationTreatment();
            foreach($validationRules[self::FIELD_ADMINISTRATION_TREATMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE_DOT_DOSING_GUIDELINE, self::FIELD_ADMINISTRATION_TREATMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ADMINISTRATION_TREATMENT])) {
                        $errs[self::FIELD_ADMINISTRATION_TREATMENT] = [];
                    }
                    $errs[self::FIELD_ADMINISTRATION_TREATMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATIENT_CHARACTERISTIC])) {
            $v = $this->getPatientCharacteristic();
            foreach($validationRules[self::FIELD_PATIENT_CHARACTERISTIC] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE_DOT_DOSING_GUIDELINE, self::FIELD_PATIENT_CHARACTERISTIC, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATIENT_CHARACTERISTIC])) {
                        $errs[self::FIELD_PATIENT_CHARACTERISTIC] = [];
                    }
                    $errs[self::FIELD_PATIENT_CHARACTERISTIC][$rule] = $err;
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
     * @param null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDosingGuideline $type
     * @param null|int|\Romeldev\Fhir\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDosingGuideline
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
        } else if (!($type instanceof FHIRMedicationKnowledgeDosingGuideline)) {
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
            if (self::FIELD_TREATMENT_INTENT === $childName) {
                $type->setTreatmentIntent(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DOSAGE === $childName) {
                $type->addDosage(FHIRMedicationKnowledgeDosage::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ADMINISTRATION_TREATMENT === $childName) {
                $type->setAdministrationTreatment(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PATIENT_CHARACTERISTIC === $childName) {
                $type->addPatientCharacteristic(FHIRMedicationKnowledgePatientCharacteristic::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
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
            $xw->openRootNode($config, 'MedicationKnowledgeDosingGuideline', $this->_getSourceXmlns());
        }
        parent::xmlSerialize($xw, $config);
        if (null !== ($v = $this->getTreatmentIntent())) {
            $xw->startElement(self::FIELD_TREATMENT_INTENT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getDosage() as $v) {
            $xw->startElement(self::FIELD_DOSAGE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getAdministrationTreatment())) {
            $xw->startElement(self::FIELD_ADMINISTRATION_TREATMENT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getPatientCharacteristic() as $v) {
            $xw->startElement(self::FIELD_PATIENT_CHARACTERISTIC);
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
        if (null !== ($v = $this->getTreatmentIntent())) {
            $out->{self::FIELD_TREATMENT_INTENT} = $v;
        }
        if ([] !== ($vs = $this->getDosage())) {
            $out->{self::FIELD_DOSAGE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_DOSAGE}[] = $v;
            }
        }
        if (null !== ($v = $this->getAdministrationTreatment())) {
            $out->{self::FIELD_ADMINISTRATION_TREATMENT} = $v;
        }
        if ([] !== ($vs = $this->getPatientCharacteristic())) {
            $out->{self::FIELD_PATIENT_CHARACTERISTIC} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_PATIENT_CHARACTERISTIC}[] = $v;
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