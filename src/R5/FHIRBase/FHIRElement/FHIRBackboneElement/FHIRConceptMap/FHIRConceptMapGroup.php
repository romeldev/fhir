<?php declare(strict_types=1);

namespace Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConceptMap;

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
use Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRCanonical;
use Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use Romeldev\Fhir\R5\FHIRCanonicalPrimitive;
use Romeldev\Fhir\R5\FHIRStringPrimitive;
use Romeldev\Fhir\R5\PHPFHIRConfig;
use Romeldev\Fhir\R5\PHPFHIRConfigKeyEnum;
use Romeldev\Fhir\R5\PHPFHIRConstants;
use Romeldev\Fhir\R5\PHPFHIRTypeInterface;
use Romeldev\Fhir\R5\PHPFHIRXmlLocationEnum;
use Romeldev\Fhir\R5\PHPFHIRXmlWriter;

/**
 * A statement of relationships from one set of concepts to one or more other
 * concepts - either concepts in code systems, or data element/data element
 * concepts, or classes in class models.
 *
 * Class FHIRConceptMapGroup
 * @package \Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConceptMap
 */
class FHIRConceptMapGroup extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CONCEPT_MAP_DOT_GROUP;

    const FIELD_SOURCE = 'source';
    const FIELD_SOURCE_EXT = '_source';
    const FIELD_TARGET = 'target';
    const FIELD_TARGET_EXT = '_target';
    const FIELD_ELEMENT = 'element';
    const FIELD_UNMAPPED = 'unmapped';

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * An absolute URI that identifies the source system where the concepts to be
     * mapped are defined.
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRCanonical
     */
    protected null|FHIRCanonical $source = null;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * An absolute URI that identifies the target system that the concepts will be
     * mapped to.
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRCanonical
     */
    protected null|FHIRCanonical $target = null;
    /**
     * A statement of relationships from one set of concepts to one or more other
     * concepts - either concepts in code systems, or data element/data element
     * concepts, or classes in class models.
     *
     * Mappings for an individual concept in the source to one or more concepts in the
     * target.
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapElement[]
     */
    protected null|array $element = [];
    /**
     * A statement of relationships from one set of concepts to one or more other
     * concepts - either concepts in code systems, or data element/data element
     * concepts, or classes in class models.
     *
     * What to do when there is no mapping to a target concept from the source concept
     * and ConceptMap.group.element.noMap is not true. This provides the "default" to
     * be applied when there is no target concept mapping specified or the expansion of
     * ConceptMap.group.element.target.valueSet is empty.
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapUnmapped
     */
    protected null|FHIRConceptMapUnmapped $unmapped = null;

    /**
     * Validation map for fields in type ConceptMap.Group
     * @var array
     */
    private const _VALIDATION_RULES = [
        self::FIELD_ELEMENT => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRConceptMapGroup Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_SOURCE, $data) || array_key_exists(self::FIELD_SOURCE_EXT, $data)) {
            $value = $data[self::FIELD_SOURCE] ?? null;
            $ext = (isset($data[self::FIELD_SOURCE_EXT]) && is_array($data[self::FIELD_SOURCE_EXT])) ? $data[self::FIELD_SOURCE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCanonical) {
                    $this->setSource($value);
                } else if (is_array($value)) {
                    $this->setSource(new FHIRCanonical(array_merge($ext, $value)));
                } else {
                    $this->setSource(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setSource(new FHIRCanonical($ext));
            } else {
                $this->setSource(new FHIRCanonical(null));
            }
        }
        if (array_key_exists(self::FIELD_TARGET, $data) || array_key_exists(self::FIELD_TARGET_EXT, $data)) {
            $value = $data[self::FIELD_TARGET] ?? null;
            $ext = (isset($data[self::FIELD_TARGET_EXT]) && is_array($data[self::FIELD_TARGET_EXT])) ? $data[self::FIELD_TARGET_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCanonical) {
                    $this->setTarget($value);
                } else if (is_array($value)) {
                    $this->setTarget(new FHIRCanonical(array_merge($ext, $value)));
                } else {
                    $this->setTarget(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setTarget(new FHIRCanonical($ext));
            } else {
                $this->setTarget(new FHIRCanonical(null));
            }
        }
        if (array_key_exists(self::FIELD_ELEMENT, $data)) {
            if (is_array($data[self::FIELD_ELEMENT])) {
                foreach($data[self::FIELD_ELEMENT] as $v) {
                    if ($v instanceof FHIRConceptMapElement) {
                        $this->addElement($v);
                    } else {
                        $this->addElement(new FHIRConceptMapElement($v));
                    }
                }
            } elseif ($data[self::FIELD_ELEMENT] instanceof FHIRConceptMapElement) {
                $this->addElement($data[self::FIELD_ELEMENT]);
            } else {
                $this->addElement(new FHIRConceptMapElement($data[self::FIELD_ELEMENT]));
            }
        }
        if (array_key_exists(self::FIELD_UNMAPPED, $data)) {
            if ($data[self::FIELD_UNMAPPED] instanceof FHIRConceptMapUnmapped) {
                $this->setUnmapped($data[self::FIELD_UNMAPPED]);
            } else {
                $this->setUnmapped(new FHIRConceptMapUnmapped($data[self::FIELD_UNMAPPED]));
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
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * An absolute URI that identifies the source system where the concepts to be
     * mapped are defined.
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRCanonical
     */
    public function getSource(): null|FHIRCanonical
    {
        return $this->source;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * An absolute URI that identifies the source system where the concepts to be
     * mapped are defined.
     *
     * @param null|string|\Romeldev\Fhir\R5\FHIRCanonicalPrimitive|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRCanonical $source
     * @param \Romeldev\Fhir\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setSource(null|string|FHIRCanonicalPrimitive|FHIRCanonical $source = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $source && !($source instanceof FHIRCanonical)) {
            $source = new FHIRCanonical($source);
        }
        $this->_trackValueSet($this->source, $source);
        if (!isset($this->_xmlLocations[self::FIELD_SOURCE])) {
            $this->_xmlLocations[self::FIELD_SOURCE] = [];
        }
        $this->_xmlLocations[self::FIELD_SOURCE][0] = $xmlLocation;
        $this->source = $source;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * An absolute URI that identifies the target system that the concepts will be
     * mapped to.
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRCanonical
     */
    public function getTarget(): null|FHIRCanonical
    {
        return $this->target;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * An absolute URI that identifies the target system that the concepts will be
     * mapped to.
     *
     * @param null|string|\Romeldev\Fhir\R5\FHIRCanonicalPrimitive|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRCanonical $target
     * @param \Romeldev\Fhir\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setTarget(null|string|FHIRCanonicalPrimitive|FHIRCanonical $target = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $target && !($target instanceof FHIRCanonical)) {
            $target = new FHIRCanonical($target);
        }
        $this->_trackValueSet($this->target, $target);
        if (!isset($this->_xmlLocations[self::FIELD_TARGET])) {
            $this->_xmlLocations[self::FIELD_TARGET] = [];
        }
        $this->_xmlLocations[self::FIELD_TARGET][0] = $xmlLocation;
        $this->target = $target;
        return $this;
    }

    /**
     * A statement of relationships from one set of concepts to one or more other
     * concepts - either concepts in code systems, or data element/data element
     * concepts, or classes in class models.
     *
     * Mappings for an individual concept in the source to one or more concepts in the
     * target.
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapElement[]
     */
    public function getElement(): null|array
    {
        return $this->element;
    }

    /**
     * A statement of relationships from one set of concepts to one or more other
     * concepts - either concepts in code systems, or data element/data element
     * concepts, or classes in class models.
     *
     * Mappings for an individual concept in the source to one or more concepts in the
     * target.
     *
     * @param null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapElement $element
     * @return static
     */
    public function addElement(null|FHIRConceptMapElement $element = null): self
    {
        if (null === $element) {
            $element = new FHIRConceptMapElement();
        }
        $this->_trackValueAdded();
        $this->element[] = $element;
        return $this;
    }

    /**
     * A statement of relationships from one set of concepts to one or more other
     * concepts - either concepts in code systems, or data element/data element
     * concepts, or classes in class models.
     *
     * Mappings for an individual concept in the source to one or more concepts in the
     * target.
     *
     * @param \Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapElement ...$element
     * @return static
     */
    public function setElement(FHIRConceptMapElement ...$element): self
    {
        if ([] !== $this->element) {
            $this->_trackValuesRemoved(count($this->element));
            $this->element = [];
        }
        if ([] === $element) {
            return $this;
        }
        foreach($element as $v) {
            $this->addElement($v);
        }
        return $this;
    }

    /**
     * A statement of relationships from one set of concepts to one or more other
     * concepts - either concepts in code systems, or data element/data element
     * concepts, or classes in class models.
     *
     * What to do when there is no mapping to a target concept from the source concept
     * and ConceptMap.group.element.noMap is not true. This provides the "default" to
     * be applied when there is no target concept mapping specified or the expansion of
     * ConceptMap.group.element.target.valueSet is empty.
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapUnmapped
     */
    public function getUnmapped(): null|FHIRConceptMapUnmapped
    {
        return $this->unmapped;
    }

    /**
     * A statement of relationships from one set of concepts to one or more other
     * concepts - either concepts in code systems, or data element/data element
     * concepts, or classes in class models.
     *
     * What to do when there is no mapping to a target concept from the source concept
     * and ConceptMap.group.element.noMap is not true. This provides the "default" to
     * be applied when there is no target concept mapping specified or the expansion of
     * ConceptMap.group.element.target.valueSet is empty.
     *
     * @param null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapUnmapped $unmapped
     * @return static
     */
    public function setUnmapped(null|FHIRConceptMapUnmapped $unmapped = null): self
    {
        if (null === $unmapped) {
            $unmapped = new FHIRConceptMapUnmapped();
        }
        $this->_trackValueSet($this->unmapped, $unmapped);
        $this->unmapped = $unmapped;
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
        if (null !== ($v = $this->getSource())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SOURCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTarget())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TARGET] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getElement())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ELEMENT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getUnmapped())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_UNMAPPED] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_SOURCE])) {
            $v = $this->getSource();
            foreach($validationRules[self::FIELD_SOURCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONCEPT_MAP_DOT_GROUP, self::FIELD_SOURCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SOURCE])) {
                        $errs[self::FIELD_SOURCE] = [];
                    }
                    $errs[self::FIELD_SOURCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TARGET])) {
            $v = $this->getTarget();
            foreach($validationRules[self::FIELD_TARGET] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONCEPT_MAP_DOT_GROUP, self::FIELD_TARGET, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TARGET])) {
                        $errs[self::FIELD_TARGET] = [];
                    }
                    $errs[self::FIELD_TARGET][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ELEMENT])) {
            $v = $this->getElement();
            foreach($validationRules[self::FIELD_ELEMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONCEPT_MAP_DOT_GROUP, self::FIELD_ELEMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ELEMENT])) {
                        $errs[self::FIELD_ELEMENT] = [];
                    }
                    $errs[self::FIELD_ELEMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_UNMAPPED])) {
            $v = $this->getUnmapped();
            foreach($validationRules[self::FIELD_UNMAPPED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONCEPT_MAP_DOT_GROUP, self::FIELD_UNMAPPED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_UNMAPPED])) {
                        $errs[self::FIELD_UNMAPPED] = [];
                    }
                    $errs[self::FIELD_UNMAPPED][$rule] = $err;
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
     * @param null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapGroup $type
     * @param null|int|\Romeldev\Fhir\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapGroup
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
        } else if (!($type instanceof FHIRConceptMapGroup)) {
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
            if (self::FIELD_SOURCE === $childName) {
                $type->setSource(FHIRCanonical::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_TARGET === $childName) {
                $type->setTarget(FHIRCanonical::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_ELEMENT === $childName) {
                $type->addElement(FHIRConceptMapElement::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_UNMAPPED === $childName) {
                $type->setUnmapped(FHIRConceptMapUnmapped::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_SOURCE])) {
            $pt = $type->getSource();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_SOURCE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setSource((string)$attributes[self::FIELD_SOURCE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_TARGET])) {
            $pt = $type->getTarget();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_TARGET], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setTarget((string)$attributes[self::FIELD_TARGET], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
            $xw->openRootNode($config, 'ConceptMapGroup', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_SOURCE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getSource())) {
            $xw->writeAttribute(self::FIELD_SOURCE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_TARGET] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getTarget())) {
            $xw->writeAttribute(self::FIELD_TARGET, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        $locs = $this->_xmlLocations[self::FIELD_SOURCE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getSource())) {
            $xw->startElement(self::FIELD_SOURCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_TARGET] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getTarget())) {
            $xw->startElement(self::FIELD_TARGET);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getElement() as $v) {
            $xw->startElement(self::FIELD_ELEMENT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getUnmapped())) {
            $xw->startElement(self::FIELD_UNMAPPED);
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
        if (null !== ($v = $this->getSource())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_SOURCE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRCanonical::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SOURCE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getTarget())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_TARGET} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRCanonical::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TARGET_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getElement())) {
            $out->{self::FIELD_ELEMENT} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_ELEMENT}[] = $v;
            }
        }
        if (null !== ($v = $this->getUnmapped())) {
            $out->{self::FIELD_UNMAPPED} = $v;
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