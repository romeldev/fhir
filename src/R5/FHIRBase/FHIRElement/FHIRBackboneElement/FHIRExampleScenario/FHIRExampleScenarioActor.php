<?php declare(strict_types=1);

namespace Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario;

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
use Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRExampleScenarioActorType;
use Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRMarkdown;
use Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRString;
use Romeldev\Fhir\R5\FHIRMarkdownPrimitive;
use Romeldev\Fhir\R5\FHIRStringPrimitive;
use Romeldev\Fhir\R5\PHPFHIRConfig;
use Romeldev\Fhir\R5\PHPFHIRConfigKeyEnum;
use Romeldev\Fhir\R5\PHPFHIRConstants;
use Romeldev\Fhir\R5\PHPFHIRTypeInterface;
use Romeldev\Fhir\R5\PHPFHIRXmlLocationEnum;
use Romeldev\Fhir\R5\PHPFHIRXmlWriter;

/**
 * Example of workflow instance.
 *
 * Class FHIRExampleScenarioActor
 * @package \Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario
 */
class FHIRExampleScenarioActor extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_ACTOR;

    const FIELD_KEY = 'key';
    const FIELD_KEY_EXT = '_key';
    const FIELD_TYPE = 'type';
    const FIELD_TYPE_EXT = '_type';
    const FIELD_TITLE = 'title';
    const FIELD_TITLE_EXT = '_title';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A unique string within the scenario that is used to reference the actor.
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $key = null;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The category of actor - person or system.
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRExampleScenarioActorType
     */
    protected null|FHIRExampleScenarioActorType $type = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The human-readable name for the actor used when rendering the scenario.
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $title = null;
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * An explanation of who/what the actor is and its role in the scenario.
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRMarkdown
     */
    protected null|FHIRMarkdown $description = null;

    /**
     * Validation map for fields in type ExampleScenario.Actor
     * @var array
     */
    private const _VALIDATION_RULES = [
        self::FIELD_KEY => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_TITLE => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_TYPE => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRExampleScenarioActor Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_KEY, $data) || array_key_exists(self::FIELD_KEY_EXT, $data)) {
            $value = $data[self::FIELD_KEY] ?? null;
            $ext = (isset($data[self::FIELD_KEY_EXT]) && is_array($data[self::FIELD_KEY_EXT])) ? $data[self::FIELD_KEY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setKey($value);
                } else if (is_array($value)) {
                    $this->setKey(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setKey(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setKey(new FHIRString($ext));
            } else {
                $this->setKey(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_TYPE, $data) || array_key_exists(self::FIELD_TYPE_EXT, $data)) {
            $value = $data[self::FIELD_TYPE] ?? null;
            $ext = (isset($data[self::FIELD_TYPE_EXT]) && is_array($data[self::FIELD_TYPE_EXT])) ? $data[self::FIELD_TYPE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRExampleScenarioActorType) {
                    $this->setType($value);
                } else if (is_array($value)) {
                    $this->setType(new FHIRExampleScenarioActorType(array_merge($ext, $value)));
                } else {
                    $this->setType(new FHIRExampleScenarioActorType([FHIRExampleScenarioActorType::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setType(new FHIRExampleScenarioActorType($ext));
            } else {
                $this->setType(new FHIRExampleScenarioActorType(null));
            }
        }
        if (array_key_exists(self::FIELD_TITLE, $data) || array_key_exists(self::FIELD_TITLE_EXT, $data)) {
            $value = $data[self::FIELD_TITLE] ?? null;
            $ext = (isset($data[self::FIELD_TITLE_EXT]) && is_array($data[self::FIELD_TITLE_EXT])) ? $data[self::FIELD_TITLE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setTitle($value);
                } else if (is_array($value)) {
                    $this->setTitle(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setTitle(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setTitle(new FHIRString($ext));
            } else {
                $this->setTitle(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_DESCRIPTION, $data) || array_key_exists(self::FIELD_DESCRIPTION_EXT, $data)) {
            $value = $data[self::FIELD_DESCRIPTION] ?? null;
            $ext = (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT])) ? $data[self::FIELD_DESCRIPTION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setDescription($value);
                } else if (is_array($value)) {
                    $this->setDescription(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setDescription(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDescription(new FHIRMarkdown($ext));
            } else {
                $this->setDescription(new FHIRMarkdown(null));
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A unique string within the scenario that is used to reference the actor.
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getKey(): null|FHIRString
    {
        return $this->key;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A unique string within the scenario that is used to reference the actor.
     *
     * @param null|string|\Romeldev\Fhir\R5\FHIRStringPrimitive|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRString $key
     * @param \Romeldev\Fhir\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setKey(null|string|FHIRStringPrimitive|FHIRString $key = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $key && !($key instanceof FHIRString)) {
            $key = new FHIRString($key);
        }
        $this->_trackValueSet($this->key, $key);
        if (!isset($this->_xmlLocations[self::FIELD_KEY])) {
            $this->_xmlLocations[self::FIELD_KEY] = [];
        }
        $this->_xmlLocations[self::FIELD_KEY][0] = $xmlLocation;
        $this->key = $key;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The category of actor - person or system.
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRExampleScenarioActorType
     */
    public function getType(): null|FHIRExampleScenarioActorType
    {
        return $this->type;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The category of actor - person or system.
     *
     * @param null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRExampleScenarioActorType $type
     * @return static
     */
    public function setType(null|FHIRExampleScenarioActorType $type = null): self
    {
        if (null === $type) {
            $type = new FHIRExampleScenarioActorType();
        }
        $this->_trackValueSet($this->type, $type);
        $this->type = $type;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The human-readable name for the actor used when rendering the scenario.
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getTitle(): null|FHIRString
    {
        return $this->title;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The human-readable name for the actor used when rendering the scenario.
     *
     * @param null|string|\Romeldev\Fhir\R5\FHIRStringPrimitive|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRString $title
     * @param \Romeldev\Fhir\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setTitle(null|string|FHIRStringPrimitive|FHIRString $title = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $title && !($title instanceof FHIRString)) {
            $title = new FHIRString($title);
        }
        $this->_trackValueSet($this->title, $title);
        if (!isset($this->_xmlLocations[self::FIELD_TITLE])) {
            $this->_xmlLocations[self::FIELD_TITLE] = [];
        }
        $this->_xmlLocations[self::FIELD_TITLE][0] = $xmlLocation;
        $this->title = $title;
        return $this;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * An explanation of who/what the actor is and its role in the scenario.
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRMarkdown
     */
    public function getDescription(): null|FHIRMarkdown
    {
        return $this->description;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * An explanation of who/what the actor is and its role in the scenario.
     *
     * @param null|string|\Romeldev\Fhir\R5\FHIRMarkdownPrimitive|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRMarkdown $description
     * @param \Romeldev\Fhir\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDescription(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $description = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $description && !($description instanceof FHIRMarkdown)) {
            $description = new FHIRMarkdown($description);
        }
        $this->_trackValueSet($this->description, $description);
        if (!isset($this->_xmlLocations[self::FIELD_DESCRIPTION])) {
            $this->_xmlLocations[self::FIELD_DESCRIPTION] = [];
        }
        $this->_xmlLocations[self::FIELD_DESCRIPTION][0] = $xmlLocation;
        $this->description = $description;
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
        if (null !== ($v = $this->getKey())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_KEY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTitle())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TITLE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_KEY])) {
            $v = $this->getKey();
            foreach($validationRules[self::FIELD_KEY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_ACTOR, self::FIELD_KEY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_KEY])) {
                        $errs[self::FIELD_KEY] = [];
                    }
                    $errs[self::FIELD_KEY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_ACTOR, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TITLE])) {
            $v = $this->getTitle();
            foreach($validationRules[self::FIELD_TITLE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_ACTOR, self::FIELD_TITLE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TITLE])) {
                        $errs[self::FIELD_TITLE] = [];
                    }
                    $errs[self::FIELD_TITLE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_ACTOR, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
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
     * @param null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioActor $type
     * @param null|int|\Romeldev\Fhir\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioActor
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
        } else if (!($type instanceof FHIRExampleScenarioActor)) {
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
            if (self::FIELD_KEY === $childName) {
                $type->setKey(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_TYPE === $childName) {
                $type->setType(FHIRExampleScenarioActorType::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TITLE === $childName) {
                $type->setTitle(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DESCRIPTION === $childName) {
                $type->setDescription(FHIRMarkdown::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_KEY])) {
            $pt = $type->getKey();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_KEY], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setKey((string)$attributes[self::FIELD_KEY], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_TITLE])) {
            $pt = $type->getTitle();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_TITLE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setTitle((string)$attributes[self::FIELD_TITLE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DESCRIPTION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDescription((string)$attributes[self::FIELD_DESCRIPTION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
            $xw->openRootNode($config, 'ExampleScenarioActor', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_KEY] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getKey())) {
            $xw->writeAttribute(self::FIELD_KEY, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_TITLE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getTitle())) {
            $xw->writeAttribute(self::FIELD_TITLE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_DESCRIPTION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDescription())) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        $locs = $this->_xmlLocations[self::FIELD_KEY] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getKey())) {
            $xw->startElement(self::FIELD_KEY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getType())) {
            $xw->startElement(self::FIELD_TYPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_TITLE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getTitle())) {
            $xw->startElement(self::FIELD_TITLE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_DESCRIPTION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDescription())) {
            $xw->startElement(self::FIELD_DESCRIPTION);
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
        if (null !== ($v = $this->getKey())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_KEY} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_KEY_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getType())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_TYPE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRExampleScenarioActorType::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TYPE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getTitle())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_TITLE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TITLE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DESCRIPTION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRMarkdown::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DESCRIPTION_EXT} = $ext;
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