<?php declare(strict_types=1);

namespace Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPermission;

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
use Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRConsentProvisionType;
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
 * Permission resource holds access rules for a given data and context.
 *
 * Class FHIRPermissionRule
 * @package \Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPermission
 */
class FHIRPermissionRule extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_PERMISSION_DOT_RULE;

    const FIELD_TYPE = 'type';
    const FIELD_TYPE_EXT = '_type';
    const FIELD_DATA = 'data';
    const FIELD_ACTIVITY = 'activity';
    const FIELD_LIMIT = 'limit';

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * deny | permit.
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRConsentProvisionType
     */
    protected null|FHIRConsentProvisionType $type = null;
    /**
     * Permission resource holds access rules for a given data and context.
     *
     * A description or definition of which activities are allowed to be done on the
     * data.
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPermission\FHIRPermissionData[]
     */
    protected null|array $data = [];
    /**
     * Permission resource holds access rules for a given data and context.
     *
     * A description or definition of which activities are allowed to be done on the
     * data.
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPermission\FHIRPermissionActivity[]
     */
    protected null|array $activity = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * What limits apply to the use of the data.
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $limit = [];

    /**
     * Validation map for fields in type Permission.Rule
     * @var array
     */
    private const _VALIDATION_RULES = [];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRPermissionRule Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_TYPE, $data) || array_key_exists(self::FIELD_TYPE_EXT, $data)) {
            $value = $data[self::FIELD_TYPE] ?? null;
            $ext = (isset($data[self::FIELD_TYPE_EXT]) && is_array($data[self::FIELD_TYPE_EXT])) ? $data[self::FIELD_TYPE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRConsentProvisionType) {
                    $this->setType($value);
                } else if (is_array($value)) {
                    $this->setType(new FHIRConsentProvisionType(array_merge($ext, $value)));
                } else {
                    $this->setType(new FHIRConsentProvisionType([FHIRConsentProvisionType::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setType(new FHIRConsentProvisionType($ext));
            } else {
                $this->setType(new FHIRConsentProvisionType(null));
            }
        }
        if (array_key_exists(self::FIELD_DATA, $data)) {
            if (is_array($data[self::FIELD_DATA])) {
                foreach($data[self::FIELD_DATA] as $v) {
                    if ($v instanceof FHIRPermissionData) {
                        $this->addData($v);
                    } else {
                        $this->addData(new FHIRPermissionData($v));
                    }
                }
            } elseif ($data[self::FIELD_DATA] instanceof FHIRPermissionData) {
                $this->addData($data[self::FIELD_DATA]);
            } else {
                $this->addData(new FHIRPermissionData($data[self::FIELD_DATA]));
            }
        }
        if (array_key_exists(self::FIELD_ACTIVITY, $data)) {
            if (is_array($data[self::FIELD_ACTIVITY])) {
                foreach($data[self::FIELD_ACTIVITY] as $v) {
                    if ($v instanceof FHIRPermissionActivity) {
                        $this->addActivity($v);
                    } else {
                        $this->addActivity(new FHIRPermissionActivity($v));
                    }
                }
            } elseif ($data[self::FIELD_ACTIVITY] instanceof FHIRPermissionActivity) {
                $this->addActivity($data[self::FIELD_ACTIVITY]);
            } else {
                $this->addActivity(new FHIRPermissionActivity($data[self::FIELD_ACTIVITY]));
            }
        }
        if (array_key_exists(self::FIELD_LIMIT, $data)) {
            if (is_array($data[self::FIELD_LIMIT])) {
                foreach($data[self::FIELD_LIMIT] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addLimit($v);
                    } else {
                        $this->addLimit(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_LIMIT] instanceof FHIRCodeableConcept) {
                $this->addLimit($data[self::FIELD_LIMIT]);
            } else {
                $this->addLimit(new FHIRCodeableConcept($data[self::FIELD_LIMIT]));
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * deny | permit.
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRConsentProvisionType
     */
    public function getType(): null|FHIRConsentProvisionType
    {
        return $this->type;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * deny | permit.
     *
     * @param null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRConsentProvisionType $type
     * @return static
     */
    public function setType(null|FHIRConsentProvisionType $type = null): self
    {
        if (null === $type) {
            $type = new FHIRConsentProvisionType();
        }
        $this->_trackValueSet($this->type, $type);
        $this->type = $type;
        return $this;
    }

    /**
     * Permission resource holds access rules for a given data and context.
     *
     * A description or definition of which activities are allowed to be done on the
     * data.
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPermission\FHIRPermissionData[]
     */
    public function getData(): null|array
    {
        return $this->data;
    }

    /**
     * Permission resource holds access rules for a given data and context.
     *
     * A description or definition of which activities are allowed to be done on the
     * data.
     *
     * @param null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPermission\FHIRPermissionData $data
     * @return static
     */
    public function addData(null|FHIRPermissionData $data = null): self
    {
        if (null === $data) {
            $data = new FHIRPermissionData();
        }
        $this->_trackValueAdded();
        $this->data[] = $data;
        return $this;
    }

    /**
     * Permission resource holds access rules for a given data and context.
     *
     * A description or definition of which activities are allowed to be done on the
     * data.
     *
     * @param \Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPermission\FHIRPermissionData ...$data
     * @return static
     */
    public function setData(FHIRPermissionData ...$data): self
    {
        if ([] !== $this->data) {
            $this->_trackValuesRemoved(count($this->data));
            $this->data = [];
        }
        if ([] === $data) {
            return $this;
        }
        foreach($data as $v) {
            $this->addData($v);
        }
        return $this;
    }

    /**
     * Permission resource holds access rules for a given data and context.
     *
     * A description or definition of which activities are allowed to be done on the
     * data.
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPermission\FHIRPermissionActivity[]
     */
    public function getActivity(): null|array
    {
        return $this->activity;
    }

    /**
     * Permission resource holds access rules for a given data and context.
     *
     * A description or definition of which activities are allowed to be done on the
     * data.
     *
     * @param null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPermission\FHIRPermissionActivity $activity
     * @return static
     */
    public function addActivity(null|FHIRPermissionActivity $activity = null): self
    {
        if (null === $activity) {
            $activity = new FHIRPermissionActivity();
        }
        $this->_trackValueAdded();
        $this->activity[] = $activity;
        return $this;
    }

    /**
     * Permission resource holds access rules for a given data and context.
     *
     * A description or definition of which activities are allowed to be done on the
     * data.
     *
     * @param \Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPermission\FHIRPermissionActivity ...$activity
     * @return static
     */
    public function setActivity(FHIRPermissionActivity ...$activity): self
    {
        if ([] !== $this->activity) {
            $this->_trackValuesRemoved(count($this->activity));
            $this->activity = [];
        }
        if ([] === $activity) {
            return $this;
        }
        foreach($activity as $v) {
            $this->addActivity($v);
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * What limits apply to the use of the data.
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getLimit(): null|array
    {
        return $this->limit;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * What limits apply to the use of the data.
     *
     * @param null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $limit
     * @return static
     */
    public function addLimit(null|FHIRCodeableConcept $limit = null): self
    {
        if (null === $limit) {
            $limit = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->limit[] = $limit;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * What limits apply to the use of the data.
     *
     * @param \Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$limit
     * @return static
     */
    public function setLimit(FHIRCodeableConcept ...$limit): self
    {
        if ([] !== $this->limit) {
            $this->_trackValuesRemoved(count($this->limit));
            $this->limit = [];
        }
        if ([] === $limit) {
            return $this;
        }
        foreach($limit as $v) {
            $this->addLimit($v);
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
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getData())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DATA, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getActivity())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ACTIVITY, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getLimit())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_LIMIT, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PERMISSION_DOT_RULE, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATA])) {
            $v = $this->getData();
            foreach($validationRules[self::FIELD_DATA] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PERMISSION_DOT_RULE, self::FIELD_DATA, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATA])) {
                        $errs[self::FIELD_DATA] = [];
                    }
                    $errs[self::FIELD_DATA][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ACTIVITY])) {
            $v = $this->getActivity();
            foreach($validationRules[self::FIELD_ACTIVITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PERMISSION_DOT_RULE, self::FIELD_ACTIVITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ACTIVITY])) {
                        $errs[self::FIELD_ACTIVITY] = [];
                    }
                    $errs[self::FIELD_ACTIVITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LIMIT])) {
            $v = $this->getLimit();
            foreach($validationRules[self::FIELD_LIMIT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PERMISSION_DOT_RULE, self::FIELD_LIMIT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LIMIT])) {
                        $errs[self::FIELD_LIMIT] = [];
                    }
                    $errs[self::FIELD_LIMIT][$rule] = $err;
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
     * @param null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPermission\FHIRPermissionRule $type
     * @param null|int|\Romeldev\Fhir\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPermission\FHIRPermissionRule
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
        } else if (!($type instanceof FHIRPermissionRule)) {
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
            if (self::FIELD_TYPE === $childName) {
                $type->setType(FHIRConsentProvisionType::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DATA === $childName) {
                $type->addData(FHIRPermissionData::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ACTIVITY === $childName) {
                $type->addActivity(FHIRPermissionActivity::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_LIMIT === $childName) {
                $type->addLimit(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
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
            $xw->openRootNode($config, 'PermissionRule', $this->_getSourceXmlns());
        }
        parent::xmlSerialize($xw, $config);
        if (null !== ($v = $this->getType())) {
            $xw->startElement(self::FIELD_TYPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getData() as $v) {
            $xw->startElement(self::FIELD_DATA);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getActivity() as $v) {
            $xw->startElement(self::FIELD_ACTIVITY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getLimit() as $v) {
            $xw->startElement(self::FIELD_LIMIT);
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
        if (null !== ($v = $this->getType())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_TYPE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRConsentProvisionType::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TYPE_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getData())) {
            $out->{self::FIELD_DATA} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_DATA}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getActivity())) {
            $out->{self::FIELD_ACTIVITY} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_ACTIVITY}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getLimit())) {
            $out->{self::FIELD_LIMIT} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_LIMIT}[] = $v;
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