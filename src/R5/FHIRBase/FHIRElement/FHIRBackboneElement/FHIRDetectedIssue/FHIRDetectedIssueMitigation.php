<?php declare(strict_types=1);

namespace Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDetectedIssue;

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
use Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation;
use Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDateTime;
use Romeldev\Fhir\R5\FHIRDateTimePrimitive;
use Romeldev\Fhir\R5\FHIRStringPrimitive;
use Romeldev\Fhir\R5\PHPFHIRConfig;
use Romeldev\Fhir\R5\PHPFHIRConfigKeyEnum;
use Romeldev\Fhir\R5\PHPFHIRConstants;
use Romeldev\Fhir\R5\PHPFHIRTypeInterface;
use Romeldev\Fhir\R5\PHPFHIRXmlLocationEnum;
use Romeldev\Fhir\R5\PHPFHIRXmlWriter;

/**
 * Indicates an actual or potential clinical issue with or between one or more
 * active or proposed clinical actions for a patient; e.g. Drug-drug interaction,
 * Ineffective treatment frequency, Procedure-condition conflict, gaps in care,
 * etc.
 *
 * Class FHIRDetectedIssueMitigation
 * @package \Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDetectedIssue
 */
class FHIRDetectedIssueMitigation extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_DETECTED_ISSUE_DOT_MITIGATION;

    const FIELD_ACTION = 'action';
    const FIELD_DATE = 'date';
    const FIELD_DATE_EXT = '_date';
    const FIELD_AUTHOR = 'author';
    const FIELD_NOTE = 'note';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the action that was taken or the observation that was made that
     * reduces/eliminates the risk associated with the identified issue.
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $action = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates when the mitigating action was documented.
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $date = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the practitioner who determined the mitigation and takes
     * responsibility for the mitigation step occurring.
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $author = null;
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Clinicians may add additional notes or justifications about the mitigation
     * action. For example, patient can have this drug because they have had it before
     * without any issues. Multiple justifications may be provided.
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation[]
     */
    protected null|array $note = [];

    /**
     * Validation map for fields in type DetectedIssue.Mitigation
     * @var array
     */
    private const _VALIDATION_RULES = [
        self::FIELD_ACTION => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRDetectedIssueMitigation Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_ACTION, $data)) {
            if ($data[self::FIELD_ACTION] instanceof FHIRCodeableConcept) {
                $this->setAction($data[self::FIELD_ACTION]);
            } else {
                $this->setAction(new FHIRCodeableConcept($data[self::FIELD_ACTION]));
            }
        }
        if (array_key_exists(self::FIELD_DATE, $data) || array_key_exists(self::FIELD_DATE_EXT, $data)) {
            $value = $data[self::FIELD_DATE] ?? null;
            $ext = (isset($data[self::FIELD_DATE_EXT]) && is_array($data[self::FIELD_DATE_EXT])) ? $data[self::FIELD_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setDate($value);
                } else if (is_array($value)) {
                    $this->setDate(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDate(new FHIRDateTime($ext));
            } else {
                $this->setDate(new FHIRDateTime(null));
            }
        }
        if (array_key_exists(self::FIELD_AUTHOR, $data)) {
            if ($data[self::FIELD_AUTHOR] instanceof FHIRReference) {
                $this->setAuthor($data[self::FIELD_AUTHOR]);
            } else {
                $this->setAuthor(new FHIRReference($data[self::FIELD_AUTHOR]));
            }
        }
        if (array_key_exists(self::FIELD_NOTE, $data)) {
            if (is_array($data[self::FIELD_NOTE])) {
                foreach($data[self::FIELD_NOTE] as $v) {
                    if ($v instanceof FHIRAnnotation) {
                        $this->addNote($v);
                    } else {
                        $this->addNote(new FHIRAnnotation($v));
                    }
                }
            } elseif ($data[self::FIELD_NOTE] instanceof FHIRAnnotation) {
                $this->addNote($data[self::FIELD_NOTE]);
            } else {
                $this->addNote(new FHIRAnnotation($data[self::FIELD_NOTE]));
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
     * Describes the action that was taken or the observation that was made that
     * reduces/eliminates the risk associated with the identified issue.
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getAction(): null|FHIRCodeableConcept
    {
        return $this->action;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the action that was taken or the observation that was made that
     * reduces/eliminates the risk associated with the identified issue.
     *
     * @param null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $action
     * @return static
     */
    public function setAction(null|FHIRCodeableConcept $action = null): self
    {
        if (null === $action) {
            $action = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->action, $action);
        $this->action = $action;
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
     * Indicates when the mitigating action was documented.
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDateTime
     */
    public function getDate(): null|FHIRDateTime
    {
        return $this->date;
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
     * Indicates when the mitigating action was documented.
     *
     * @param null|string|\DateTimeInterface|\Romeldev\Fhir\R5\FHIRDateTimePrimitive|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDateTime $date
     * @param \Romeldev\Fhir\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDate(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $date = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $date && !($date instanceof FHIRDateTime)) {
            $date = new FHIRDateTime($date);
        }
        $this->_trackValueSet($this->date, $date);
        if (!isset($this->_xmlLocations[self::FIELD_DATE])) {
            $this->_xmlLocations[self::FIELD_DATE] = [];
        }
        $this->_xmlLocations[self::FIELD_DATE][0] = $xmlLocation;
        $this->date = $date;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the practitioner who determined the mitigation and takes
     * responsibility for the mitigation step occurring.
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getAuthor(): null|FHIRReference
    {
        return $this->author;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the practitioner who determined the mitigation and takes
     * responsibility for the mitigation step occurring.
     *
     * @param null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $author
     * @return static
     */
    public function setAuthor(null|FHIRReference $author = null): self
    {
        if (null === $author) {
            $author = new FHIRReference();
        }
        $this->_trackValueSet($this->author, $author);
        $this->author = $author;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Clinicians may add additional notes or justifications about the mitigation
     * action. For example, patient can have this drug because they have had it before
     * without any issues. Multiple justifications may be provided.
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation[]
     */
    public function getNote(): null|array
    {
        return $this->note;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Clinicians may add additional notes or justifications about the mitigation
     * action. For example, patient can have this drug because they have had it before
     * without any issues. Multiple justifications may be provided.
     *
     * @param null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation $note
     * @return static
     */
    public function addNote(null|FHIRAnnotation $note = null): self
    {
        if (null === $note) {
            $note = new FHIRAnnotation();
        }
        $this->_trackValueAdded();
        $this->note[] = $note;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Clinicians may add additional notes or justifications about the mitigation
     * action. For example, patient can have this drug because they have had it before
     * without any issues. Multiple justifications may be provided.
     *
     * @param \Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation ...$note
     * @return static
     */
    public function setNote(FHIRAnnotation ...$note): self
    {
        if ([] !== $this->note) {
            $this->_trackValuesRemoved(count($this->note));
            $this->note = [];
        }
        if ([] === $note) {
            return $this;
        }
        foreach($note as $v) {
            $this->addNote($v);
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
        if (null !== ($v = $this->getAction())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ACTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAuthor())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AUTHOR] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getNote())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_NOTE, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ACTION])) {
            $v = $this->getAction();
            foreach($validationRules[self::FIELD_ACTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DETECTED_ISSUE_DOT_MITIGATION, self::FIELD_ACTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ACTION])) {
                        $errs[self::FIELD_ACTION] = [];
                    }
                    $errs[self::FIELD_ACTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATE])) {
            $v = $this->getDate();
            foreach($validationRules[self::FIELD_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DETECTED_ISSUE_DOT_MITIGATION, self::FIELD_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATE])) {
                        $errs[self::FIELD_DATE] = [];
                    }
                    $errs[self::FIELD_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AUTHOR])) {
            $v = $this->getAuthor();
            foreach($validationRules[self::FIELD_AUTHOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DETECTED_ISSUE_DOT_MITIGATION, self::FIELD_AUTHOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AUTHOR])) {
                        $errs[self::FIELD_AUTHOR] = [];
                    }
                    $errs[self::FIELD_AUTHOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOTE])) {
            $v = $this->getNote();
            foreach($validationRules[self::FIELD_NOTE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DETECTED_ISSUE_DOT_MITIGATION, self::FIELD_NOTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOTE])) {
                        $errs[self::FIELD_NOTE] = [];
                    }
                    $errs[self::FIELD_NOTE][$rule] = $err;
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
     * @param null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDetectedIssue\FHIRDetectedIssueMitigation $type
     * @param null|int|\Romeldev\Fhir\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDetectedIssue\FHIRDetectedIssueMitigation
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
        } else if (!($type instanceof FHIRDetectedIssueMitigation)) {
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
            if (self::FIELD_ACTION === $childName) {
                $type->setAction(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DATE === $childName) {
                $type->setDate(FHIRDateTime::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_AUTHOR === $childName) {
                $type->setAuthor(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_NOTE === $childName) {
                $type->addNote(FHIRAnnotation::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_DATE])) {
            $pt = $type->getDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDate((string)$attributes[self::FIELD_DATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
            $xw->openRootNode($config, 'DetectedIssueMitigation', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_DATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDate())) {
            $xw->writeAttribute(self::FIELD_DATE, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (null !== ($v = $this->getAction())) {
            $xw->startElement(self::FIELD_ACTION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_DATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDate())) {
            $xw->startElement(self::FIELD_DATE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getAuthor())) {
            $xw->startElement(self::FIELD_AUTHOR);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getNote() as $v) {
            $xw->startElement(self::FIELD_NOTE);
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
        if (null !== ($v = $this->getAction())) {
            $out->{self::FIELD_ACTION} = $v;
        }
        if (null !== ($v = $this->getDate())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DATE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getAuthor())) {
            $out->{self::FIELD_AUTHOR} = $v;
        }
        if ([] !== ($vs = $this->getNote())) {
            $out->{self::FIELD_NOTE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_NOTE}[] = $v;
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