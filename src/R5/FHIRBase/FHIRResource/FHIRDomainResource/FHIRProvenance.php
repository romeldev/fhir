<?php declare(strict_types=1);

namespace Romeldev\Fhir\R5\FHIRBase\FHIRResource\FHIRDomainResource;

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

use Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent;
use Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity;
use Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRCode;
use Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference;
use Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta;
use Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative;
use Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod;
use Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRSignature;
use Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDateTime;
use Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRId;
use Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRInstant;
use Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRUri;
use Romeldev\Fhir\R5\FHIRBase\FHIRResource\FHIRDomainResource;
use Romeldev\Fhir\R5\FHIRCodePrimitive;
use Romeldev\Fhir\R5\FHIRDateTimePrimitive;
use Romeldev\Fhir\R5\FHIRIdPrimitive;
use Romeldev\Fhir\R5\FHIRInstantPrimitive;
use Romeldev\Fhir\R5\FHIRUriPrimitive;
use Romeldev\Fhir\R5\PHPFHIRConfig;
use Romeldev\Fhir\R5\PHPFHIRConfigKeyEnum;
use Romeldev\Fhir\R5\PHPFHIRConstants;
use Romeldev\Fhir\R5\PHPFHIRContainedTypeInterface;
use Romeldev\Fhir\R5\PHPFHIRTypeInterface;
use Romeldev\Fhir\R5\PHPFHIRTypeMap;
use Romeldev\Fhir\R5\PHPFHIRXmlLocationEnum;
use Romeldev\Fhir\R5\PHPFHIRXmlWriter;

/**
 * Provenance of a resource is a record that describes entities and processes
 * involved in producing and delivering or otherwise influencing that resource.
 * Provenance provides a critical foundation for assessing authenticity, enabling
 * trust, and allowing reproducibility. Provenance assertions are a form of
 * contextual metadata and can themselves become important records with their own
 * provenance. Provenance statement indicates clinical significance in terms of
 * confidence in authenticity, reliability, and trustworthiness, integrity, and
 * stage in lifecycle (e.g. Document Completion - has the artifact been legally
 * authenticated), all of which may impact security, privacy, and trust policies.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRProvenance
 * @package \Romeldev\Fhir\R5\FHIRBase\FHIRResource\FHIRDomainResource
 */
class FHIRProvenance extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_PROVENANCE;

    const FIELD_TARGET = 'target';
    const FIELD_OCCURRED_PERIOD = 'occurredPeriod';
    const FIELD_OCCURRED_DATE_TIME = 'occurredDateTime';
    const FIELD_OCCURRED_DATE_TIME_EXT = '_occurredDateTime';
    const FIELD_RECORDED = 'recorded';
    const FIELD_RECORDED_EXT = '_recorded';
    const FIELD_POLICY = 'policy';
    const FIELD_POLICY_EXT = '_policy';
    const FIELD_LOCATION = 'location';
    const FIELD_AUTHORIZATION = 'authorization';
    const FIELD_ACTIVITY = 'activity';
    const FIELD_BASED_ON = 'basedOn';
    const FIELD_PATIENT = 'patient';
    const FIELD_ENCOUNTER = 'encounter';
    const FIELD_AGENT = 'agent';
    const FIELD_ENTITY = 'entity';
    const FIELD_SIGNATURE = 'signature';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Reference(s) that were generated or updated by the activity described in
     * this resource. A provenance can point to more than one target if multiple
     * resources were created/updated by the same activity.
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $target = [];
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period during which the activity occurred.
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod
     */
    protected null|FHIRPeriod $occurredPeriod = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The period during which the activity occurred.
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $occurredDateTime = null;
    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. UTC offset is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The instant of time at which the activity was recorded.
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRInstant
     */
    protected null|FHIRInstant $recorded = null;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Policy or plan the activity was defined by. Typically, a single activity may
     * have multiple applicable policy documents, such as patient consent, guarantor
     * funding, etc.
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRUri[]
     */
    protected null|array $policy = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where the activity occurred, if relevant.
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $location = null;
    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The authorization (e.g., PurposeOfUse) that was used during the event being
     * recorded.
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference[]
     */
    protected null|array $authorization = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An activity is something that occurs over a period of time and acts upon or with
     * entities; it may include consuming, processing, transforming, modifying,
     * relocating, using, or generating entities.
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $activity = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Allows tracing of authorizatino for the events and tracking whether
     * proposals/recommendations were acted upon.
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $basedOn = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient element is available to enable deterministic tracking of activities
     * that involve the patient as the subject of the data used in an activity.
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $patient = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This will typically be the encounter the event occurred, but some events may be
     * initiated prior to or after the official completion of an encounter but still be
     * tied to the context of the encounter (e.g. pre-admission lab tests).
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $encounter = null;
    /**
     * Provenance of a resource is a record that describes entities and processes
     * involved in producing and delivering or otherwise influencing that resource.
     * Provenance provides a critical foundation for assessing authenticity, enabling
     * trust, and allowing reproducibility. Provenance assertions are a form of
     * contextual metadata and can themselves become important records with their own
     * provenance. Provenance statement indicates clinical significance in terms of
     * confidence in authenticity, reliability, and trustworthiness, integrity, and
     * stage in lifecycle (e.g. Document Completion - has the artifact been legally
     * authenticated), all of which may impact security, privacy, and trust policies.
     *
     * An actor taking a role in an activity for which it can be assigned some degree
     * of responsibility for the activity taking place.
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent[]
     */
    protected null|array $agent = [];
    /**
     * Provenance of a resource is a record that describes entities and processes
     * involved in producing and delivering or otherwise influencing that resource.
     * Provenance provides a critical foundation for assessing authenticity, enabling
     * trust, and allowing reproducibility. Provenance assertions are a form of
     * contextual metadata and can themselves become important records with their own
     * provenance. Provenance statement indicates clinical significance in terms of
     * confidence in authenticity, reliability, and trustworthiness, integrity, and
     * stage in lifecycle (e.g. Document Completion - has the artifact been legally
     * authenticated), all of which may impact security, privacy, and trust policies.
     *
     * An entity used in this activity.
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity[]
     */
    protected null|array $entity = [];
    /**
     * A signature along with supporting context. The signature may be a digital
     * signature that is cryptographic in nature, or some other signature acceptable to
     * the domain. This other signature may be as simple as a graphical image
     * representing a hand-written signature, or a signature ceremony Different
     * signature approaches have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A digital signature on the target Reference(s). The signer should match a
     * Provenance.agent. The purpose of the signature is indicated.
     * @var null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRSignature[]
     */
    protected null|array $signature = [];

    /**
     * Validation map for fields in type Provenance
     * @var array
     */
    private const _VALIDATION_RULES = [
        self::FIELD_AGENT => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_TARGET => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRProvenance Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_TARGET, $data)) {
            if (is_array($data[self::FIELD_TARGET])) {
                foreach($data[self::FIELD_TARGET] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addTarget($v);
                    } else {
                        $this->addTarget(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_TARGET] instanceof FHIRReference) {
                $this->addTarget($data[self::FIELD_TARGET]);
            } else {
                $this->addTarget(new FHIRReference($data[self::FIELD_TARGET]));
            }
        }
        if (array_key_exists(self::FIELD_OCCURRED_PERIOD, $data)) {
            if ($data[self::FIELD_OCCURRED_PERIOD] instanceof FHIRPeriod) {
                $this->setOccurredPeriod($data[self::FIELD_OCCURRED_PERIOD]);
            } else {
                $this->setOccurredPeriod(new FHIRPeriod($data[self::FIELD_OCCURRED_PERIOD]));
            }
        }
        if (array_key_exists(self::FIELD_OCCURRED_DATE_TIME, $data) || array_key_exists(self::FIELD_OCCURRED_DATE_TIME_EXT, $data)) {
            $value = $data[self::FIELD_OCCURRED_DATE_TIME] ?? null;
            $ext = (isset($data[self::FIELD_OCCURRED_DATE_TIME_EXT]) && is_array($data[self::FIELD_OCCURRED_DATE_TIME_EXT])) ? $data[self::FIELD_OCCURRED_DATE_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setOccurredDateTime($value);
                } else if (is_array($value)) {
                    $this->setOccurredDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setOccurredDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setOccurredDateTime(new FHIRDateTime($ext));
            } else {
                $this->setOccurredDateTime(new FHIRDateTime(null));
            }
        }
        if (array_key_exists(self::FIELD_RECORDED, $data) || array_key_exists(self::FIELD_RECORDED_EXT, $data)) {
            $value = $data[self::FIELD_RECORDED] ?? null;
            $ext = (isset($data[self::FIELD_RECORDED_EXT]) && is_array($data[self::FIELD_RECORDED_EXT])) ? $data[self::FIELD_RECORDED_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInstant) {
                    $this->setRecorded($value);
                } else if (is_array($value)) {
                    $this->setRecorded(new FHIRInstant(array_merge($ext, $value)));
                } else {
                    $this->setRecorded(new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setRecorded(new FHIRInstant($ext));
            } else {
                $this->setRecorded(new FHIRInstant(null));
            }
        }
        if (array_key_exists(self::FIELD_POLICY, $data) || array_key_exists(self::FIELD_POLICY_EXT, $data)) {
            $value = $data[self::FIELD_POLICY] ?? null;
            $ext = (isset($data[self::FIELD_POLICY_EXT]) && is_array($data[self::FIELD_POLICY_EXT])) ? $data[self::FIELD_POLICY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->addPolicy($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRUri) {
                            $this->addPolicy($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addPolicy(new FHIRUri(array_merge($v, $iext)));
                            } else {
                                $this->addPolicy(new FHIRUri([FHIRUri::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addPolicy(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->addPolicy(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addPolicy(new FHIRUri($iext));
                }
            } else {
                $this->addPolicy(new FHIRUri(null));
            }
        }
        if (array_key_exists(self::FIELD_LOCATION, $data)) {
            if ($data[self::FIELD_LOCATION] instanceof FHIRReference) {
                $this->setLocation($data[self::FIELD_LOCATION]);
            } else {
                $this->setLocation(new FHIRReference($data[self::FIELD_LOCATION]));
            }
        }
        if (array_key_exists(self::FIELD_AUTHORIZATION, $data)) {
            if (is_array($data[self::FIELD_AUTHORIZATION])) {
                foreach($data[self::FIELD_AUTHORIZATION] as $v) {
                    if ($v instanceof FHIRCodeableReference) {
                        $this->addAuthorization($v);
                    } else {
                        $this->addAuthorization(new FHIRCodeableReference($v));
                    }
                }
            } elseif ($data[self::FIELD_AUTHORIZATION] instanceof FHIRCodeableReference) {
                $this->addAuthorization($data[self::FIELD_AUTHORIZATION]);
            } else {
                $this->addAuthorization(new FHIRCodeableReference($data[self::FIELD_AUTHORIZATION]));
            }
        }
        if (array_key_exists(self::FIELD_ACTIVITY, $data)) {
            if ($data[self::FIELD_ACTIVITY] instanceof FHIRCodeableConcept) {
                $this->setActivity($data[self::FIELD_ACTIVITY]);
            } else {
                $this->setActivity(new FHIRCodeableConcept($data[self::FIELD_ACTIVITY]));
            }
        }
        if (array_key_exists(self::FIELD_BASED_ON, $data)) {
            if (is_array($data[self::FIELD_BASED_ON])) {
                foreach($data[self::FIELD_BASED_ON] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addBasedOn($v);
                    } else {
                        $this->addBasedOn(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_BASED_ON] instanceof FHIRReference) {
                $this->addBasedOn($data[self::FIELD_BASED_ON]);
            } else {
                $this->addBasedOn(new FHIRReference($data[self::FIELD_BASED_ON]));
            }
        }
        if (array_key_exists(self::FIELD_PATIENT, $data)) {
            if ($data[self::FIELD_PATIENT] instanceof FHIRReference) {
                $this->setPatient($data[self::FIELD_PATIENT]);
            } else {
                $this->setPatient(new FHIRReference($data[self::FIELD_PATIENT]));
            }
        }
        if (array_key_exists(self::FIELD_ENCOUNTER, $data)) {
            if ($data[self::FIELD_ENCOUNTER] instanceof FHIRReference) {
                $this->setEncounter($data[self::FIELD_ENCOUNTER]);
            } else {
                $this->setEncounter(new FHIRReference($data[self::FIELD_ENCOUNTER]));
            }
        }
        if (array_key_exists(self::FIELD_AGENT, $data)) {
            if (is_array($data[self::FIELD_AGENT])) {
                foreach($data[self::FIELD_AGENT] as $v) {
                    if ($v instanceof FHIRProvenanceAgent) {
                        $this->addAgent($v);
                    } else {
                        $this->addAgent(new FHIRProvenanceAgent($v));
                    }
                }
            } elseif ($data[self::FIELD_AGENT] instanceof FHIRProvenanceAgent) {
                $this->addAgent($data[self::FIELD_AGENT]);
            } else {
                $this->addAgent(new FHIRProvenanceAgent($data[self::FIELD_AGENT]));
            }
        }
        if (array_key_exists(self::FIELD_ENTITY, $data)) {
            if (is_array($data[self::FIELD_ENTITY])) {
                foreach($data[self::FIELD_ENTITY] as $v) {
                    if ($v instanceof FHIRProvenanceEntity) {
                        $this->addEntity($v);
                    } else {
                        $this->addEntity(new FHIRProvenanceEntity($v));
                    }
                }
            } elseif ($data[self::FIELD_ENTITY] instanceof FHIRProvenanceEntity) {
                $this->addEntity($data[self::FIELD_ENTITY]);
            } else {
                $this->addEntity(new FHIRProvenanceEntity($data[self::FIELD_ENTITY]));
            }
        }
        if (array_key_exists(self::FIELD_SIGNATURE, $data)) {
            if (is_array($data[self::FIELD_SIGNATURE])) {
                foreach($data[self::FIELD_SIGNATURE] as $v) {
                    if ($v instanceof FHIRSignature) {
                        $this->addSignature($v);
                    } else {
                        $this->addSignature(new FHIRSignature($v));
                    }
                }
            } elseif ($data[self::FIELD_SIGNATURE] instanceof FHIRSignature) {
                $this->addSignature($data[self::FIELD_SIGNATURE]);
            } else {
                $this->addSignature(new FHIRSignature($data[self::FIELD_SIGNATURE]));
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
     * @return string
     */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Reference(s) that were generated or updated by the activity described in
     * this resource. A provenance can point to more than one target if multiple
     * resources were created/updated by the same activity.
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getTarget(): null|array
    {
        return $this->target;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Reference(s) that were generated or updated by the activity described in
     * this resource. A provenance can point to more than one target if multiple
     * resources were created/updated by the same activity.
     *
     * @param null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $target
     * @return static
     */
    public function addTarget(null|FHIRReference $target = null): self
    {
        if (null === $target) {
            $target = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->target[] = $target;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Reference(s) that were generated or updated by the activity described in
     * this resource. A provenance can point to more than one target if multiple
     * resources were created/updated by the same activity.
     *
     * @param \Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference ...$target
     * @return static
     */
    public function setTarget(FHIRReference ...$target): self
    {
        if ([] !== $this->target) {
            $this->_trackValuesRemoved(count($this->target));
            $this->target = [];
        }
        if ([] === $target) {
            return $this;
        }
        foreach($target as $v) {
            $this->addTarget($v);
        }
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period during which the activity occurred.
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod
     */
    public function getOccurredPeriod(): null|FHIRPeriod
    {
        return $this->occurredPeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period during which the activity occurred.
     *
     * @param null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod $occurredPeriod
     * @return static
     */
    public function setOccurredPeriod(null|FHIRPeriod $occurredPeriod = null): self
    {
        if (null === $occurredPeriod) {
            $occurredPeriod = new FHIRPeriod();
        }
        $this->_trackValueSet($this->occurredPeriod, $occurredPeriod);
        $this->occurredPeriod = $occurredPeriod;
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
     * The period during which the activity occurred.
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDateTime
     */
    public function getOccurredDateTime(): null|FHIRDateTime
    {
        return $this->occurredDateTime;
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
     * The period during which the activity occurred.
     *
     * @param null|string|\DateTimeInterface|\Romeldev\Fhir\R5\FHIRDateTimePrimitive|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDateTime $occurredDateTime
     * @param \Romeldev\Fhir\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setOccurredDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $occurredDateTime = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $occurredDateTime && !($occurredDateTime instanceof FHIRDateTime)) {
            $occurredDateTime = new FHIRDateTime($occurredDateTime);
        }
        $this->_trackValueSet($this->occurredDateTime, $occurredDateTime);
        if (!isset($this->_xmlLocations[self::FIELD_OCCURRED_DATE_TIME])) {
            $this->_xmlLocations[self::FIELD_OCCURRED_DATE_TIME] = [];
        }
        $this->_xmlLocations[self::FIELD_OCCURRED_DATE_TIME][0] = $xmlLocation;
        $this->occurredDateTime = $occurredDateTime;
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. UTC offset is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The instant of time at which the activity was recorded.
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRInstant
     */
    public function getRecorded(): null|FHIRInstant
    {
        return $this->recorded;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. UTC offset is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The instant of time at which the activity was recorded.
     *
     * @param null|string|\DateTimeInterface|\Romeldev\Fhir\R5\FHIRInstantPrimitive|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRInstant $recorded
     * @param \Romeldev\Fhir\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setRecorded(null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $recorded = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $recorded && !($recorded instanceof FHIRInstant)) {
            $recorded = new FHIRInstant($recorded);
        }
        $this->_trackValueSet($this->recorded, $recorded);
        if (!isset($this->_xmlLocations[self::FIELD_RECORDED])) {
            $this->_xmlLocations[self::FIELD_RECORDED] = [];
        }
        $this->_xmlLocations[self::FIELD_RECORDED][0] = $xmlLocation;
        $this->recorded = $recorded;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Policy or plan the activity was defined by. Typically, a single activity may
     * have multiple applicable policy documents, such as patient consent, guarantor
     * funding, etc.
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRUri[]
     */
    public function getPolicy(): null|array
    {
        return $this->policy;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Policy or plan the activity was defined by. Typically, a single activity may
     * have multiple applicable policy documents, such as patient consent, guarantor
     * funding, etc.
     *
     * @param null|string|\Romeldev\Fhir\R5\FHIRUriPrimitive|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRUri $policy
     * @param \Romeldev\Fhir\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function addPolicy(null|string|FHIRUriPrimitive|FHIRUri $policy = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $policy && !($policy instanceof FHIRUri)) {
            $policy = new FHIRUri($policy);
        }
        $this->_trackValueAdded();
        if (!isset($this->_xmlLocations[self::FIELD_POLICY])) {
            $this->_xmlLocations[self::FIELD_POLICY] = [];
        }
        if ([] === $this->_xmlLocations[self::FIELD_POLICY]) {
            $this->_xmlLocations[self::FIELD_POLICY][0] = $xmlLocation;
        } else {
            $this->_xmlLocations[self::FIELD_POLICY][] = PHPFHIRXmlLocationEnum::ELEMENT;
        }
        $this->policy[] = $policy;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Policy or plan the activity was defined by. Typically, a single activity may
     * have multiple applicable policy documents, such as patient consent, guarantor
     * funding, etc.
     *
     * @param \Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRUri[] $policy
     * @param \Romeldev\Fhir\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setPolicy(array $policy = [], PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        unset($this->_xmlLocations[self::FIELD_POLICY]);
        if ([] !== $this->policy) {
            $this->_trackValuesRemoved(count($this->policy));
            $this->policy = [];
        }
        if ([] === $policy) {
            return $this;
        }
        foreach($policy as $v) {
            if ($v instanceof FHIRUri) {
                $this->addPolicy($v, $xmlLocation);
            } else {
                $this->addPolicy(new FHIRUri($v), $xmlLocation);
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where the activity occurred, if relevant.
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getLocation(): null|FHIRReference
    {
        return $this->location;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where the activity occurred, if relevant.
     *
     * @param null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $location
     * @return static
     */
    public function setLocation(null|FHIRReference $location = null): self
    {
        if (null === $location) {
            $location = new FHIRReference();
        }
        $this->_trackValueSet($this->location, $location);
        $this->location = $location;
        return $this;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The authorization (e.g., PurposeOfUse) that was used during the event being
     * recorded.
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference[]
     */
    public function getAuthorization(): null|array
    {
        return $this->authorization;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The authorization (e.g., PurposeOfUse) that was used during the event being
     * recorded.
     *
     * @param null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference $authorization
     * @return static
     */
    public function addAuthorization(null|FHIRCodeableReference $authorization = null): self
    {
        if (null === $authorization) {
            $authorization = new FHIRCodeableReference();
        }
        $this->_trackValueAdded();
        $this->authorization[] = $authorization;
        return $this;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The authorization (e.g., PurposeOfUse) that was used during the event being
     * recorded.
     *
     * @param \Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference ...$authorization
     * @return static
     */
    public function setAuthorization(FHIRCodeableReference ...$authorization): self
    {
        if ([] !== $this->authorization) {
            $this->_trackValuesRemoved(count($this->authorization));
            $this->authorization = [];
        }
        if ([] === $authorization) {
            return $this;
        }
        foreach($authorization as $v) {
            $this->addAuthorization($v);
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An activity is something that occurs over a period of time and acts upon or with
     * entities; it may include consuming, processing, transforming, modifying,
     * relocating, using, or generating entities.
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getActivity(): null|FHIRCodeableConcept
    {
        return $this->activity;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An activity is something that occurs over a period of time and acts upon or with
     * entities; it may include consuming, processing, transforming, modifying,
     * relocating, using, or generating entities.
     *
     * @param null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $activity
     * @return static
     */
    public function setActivity(null|FHIRCodeableConcept $activity = null): self
    {
        if (null === $activity) {
            $activity = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->activity, $activity);
        $this->activity = $activity;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Allows tracing of authorizatino for the events and tracking whether
     * proposals/recommendations were acted upon.
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getBasedOn(): null|array
    {
        return $this->basedOn;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Allows tracing of authorizatino for the events and tracking whether
     * proposals/recommendations were acted upon.
     *
     * @param null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $basedOn
     * @return static
     */
    public function addBasedOn(null|FHIRReference $basedOn = null): self
    {
        if (null === $basedOn) {
            $basedOn = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->basedOn[] = $basedOn;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Allows tracing of authorizatino for the events and tracking whether
     * proposals/recommendations were acted upon.
     *
     * @param \Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference ...$basedOn
     * @return static
     */
    public function setBasedOn(FHIRReference ...$basedOn): self
    {
        if ([] !== $this->basedOn) {
            $this->_trackValuesRemoved(count($this->basedOn));
            $this->basedOn = [];
        }
        if ([] === $basedOn) {
            return $this;
        }
        foreach($basedOn as $v) {
            $this->addBasedOn($v);
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient element is available to enable deterministic tracking of activities
     * that involve the patient as the subject of the data used in an activity.
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getPatient(): null|FHIRReference
    {
        return $this->patient;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient element is available to enable deterministic tracking of activities
     * that involve the patient as the subject of the data used in an activity.
     *
     * @param null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $patient
     * @return static
     */
    public function setPatient(null|FHIRReference $patient = null): self
    {
        if (null === $patient) {
            $patient = new FHIRReference();
        }
        $this->_trackValueSet($this->patient, $patient);
        $this->patient = $patient;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This will typically be the encounter the event occurred, but some events may be
     * initiated prior to or after the official completion of an encounter but still be
     * tied to the context of the encounter (e.g. pre-admission lab tests).
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getEncounter(): null|FHIRReference
    {
        return $this->encounter;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This will typically be the encounter the event occurred, but some events may be
     * initiated prior to or after the official completion of an encounter but still be
     * tied to the context of the encounter (e.g. pre-admission lab tests).
     *
     * @param null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $encounter
     * @return static
     */
    public function setEncounter(null|FHIRReference $encounter = null): self
    {
        if (null === $encounter) {
            $encounter = new FHIRReference();
        }
        $this->_trackValueSet($this->encounter, $encounter);
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * Provenance of a resource is a record that describes entities and processes
     * involved in producing and delivering or otherwise influencing that resource.
     * Provenance provides a critical foundation for assessing authenticity, enabling
     * trust, and allowing reproducibility. Provenance assertions are a form of
     * contextual metadata and can themselves become important records with their own
     * provenance. Provenance statement indicates clinical significance in terms of
     * confidence in authenticity, reliability, and trustworthiness, integrity, and
     * stage in lifecycle (e.g. Document Completion - has the artifact been legally
     * authenticated), all of which may impact security, privacy, and trust policies.
     *
     * An actor taking a role in an activity for which it can be assigned some degree
     * of responsibility for the activity taking place.
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent[]
     */
    public function getAgent(): null|array
    {
        return $this->agent;
    }

    /**
     * Provenance of a resource is a record that describes entities and processes
     * involved in producing and delivering or otherwise influencing that resource.
     * Provenance provides a critical foundation for assessing authenticity, enabling
     * trust, and allowing reproducibility. Provenance assertions are a form of
     * contextual metadata and can themselves become important records with their own
     * provenance. Provenance statement indicates clinical significance in terms of
     * confidence in authenticity, reliability, and trustworthiness, integrity, and
     * stage in lifecycle (e.g. Document Completion - has the artifact been legally
     * authenticated), all of which may impact security, privacy, and trust policies.
     *
     * An actor taking a role in an activity for which it can be assigned some degree
     * of responsibility for the activity taking place.
     *
     * @param null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent $agent
     * @return static
     */
    public function addAgent(null|FHIRProvenanceAgent $agent = null): self
    {
        if (null === $agent) {
            $agent = new FHIRProvenanceAgent();
        }
        $this->_trackValueAdded();
        $this->agent[] = $agent;
        return $this;
    }

    /**
     * Provenance of a resource is a record that describes entities and processes
     * involved in producing and delivering or otherwise influencing that resource.
     * Provenance provides a critical foundation for assessing authenticity, enabling
     * trust, and allowing reproducibility. Provenance assertions are a form of
     * contextual metadata and can themselves become important records with their own
     * provenance. Provenance statement indicates clinical significance in terms of
     * confidence in authenticity, reliability, and trustworthiness, integrity, and
     * stage in lifecycle (e.g. Document Completion - has the artifact been legally
     * authenticated), all of which may impact security, privacy, and trust policies.
     *
     * An actor taking a role in an activity for which it can be assigned some degree
     * of responsibility for the activity taking place.
     *
     * @param \Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent ...$agent
     * @return static
     */
    public function setAgent(FHIRProvenanceAgent ...$agent): self
    {
        if ([] !== $this->agent) {
            $this->_trackValuesRemoved(count($this->agent));
            $this->agent = [];
        }
        if ([] === $agent) {
            return $this;
        }
        foreach($agent as $v) {
            $this->addAgent($v);
        }
        return $this;
    }

    /**
     * Provenance of a resource is a record that describes entities and processes
     * involved in producing and delivering or otherwise influencing that resource.
     * Provenance provides a critical foundation for assessing authenticity, enabling
     * trust, and allowing reproducibility. Provenance assertions are a form of
     * contextual metadata and can themselves become important records with their own
     * provenance. Provenance statement indicates clinical significance in terms of
     * confidence in authenticity, reliability, and trustworthiness, integrity, and
     * stage in lifecycle (e.g. Document Completion - has the artifact been legally
     * authenticated), all of which may impact security, privacy, and trust policies.
     *
     * An entity used in this activity.
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity[]
     */
    public function getEntity(): null|array
    {
        return $this->entity;
    }

    /**
     * Provenance of a resource is a record that describes entities and processes
     * involved in producing and delivering or otherwise influencing that resource.
     * Provenance provides a critical foundation for assessing authenticity, enabling
     * trust, and allowing reproducibility. Provenance assertions are a form of
     * contextual metadata and can themselves become important records with their own
     * provenance. Provenance statement indicates clinical significance in terms of
     * confidence in authenticity, reliability, and trustworthiness, integrity, and
     * stage in lifecycle (e.g. Document Completion - has the artifact been legally
     * authenticated), all of which may impact security, privacy, and trust policies.
     *
     * An entity used in this activity.
     *
     * @param null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity $entity
     * @return static
     */
    public function addEntity(null|FHIRProvenanceEntity $entity = null): self
    {
        if (null === $entity) {
            $entity = new FHIRProvenanceEntity();
        }
        $this->_trackValueAdded();
        $this->entity[] = $entity;
        return $this;
    }

    /**
     * Provenance of a resource is a record that describes entities and processes
     * involved in producing and delivering or otherwise influencing that resource.
     * Provenance provides a critical foundation for assessing authenticity, enabling
     * trust, and allowing reproducibility. Provenance assertions are a form of
     * contextual metadata and can themselves become important records with their own
     * provenance. Provenance statement indicates clinical significance in terms of
     * confidence in authenticity, reliability, and trustworthiness, integrity, and
     * stage in lifecycle (e.g. Document Completion - has the artifact been legally
     * authenticated), all of which may impact security, privacy, and trust policies.
     *
     * An entity used in this activity.
     *
     * @param \Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity ...$entity
     * @return static
     */
    public function setEntity(FHIRProvenanceEntity ...$entity): self
    {
        if ([] !== $this->entity) {
            $this->_trackValuesRemoved(count($this->entity));
            $this->entity = [];
        }
        if ([] === $entity) {
            return $this;
        }
        foreach($entity as $v) {
            $this->addEntity($v);
        }
        return $this;
    }

    /**
     * A signature along with supporting context. The signature may be a digital
     * signature that is cryptographic in nature, or some other signature acceptable to
     * the domain. This other signature may be as simple as a graphical image
     * representing a hand-written signature, or a signature ceremony Different
     * signature approaches have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A digital signature on the target Reference(s). The signer should match a
     * Provenance.agent. The purpose of the signature is indicated.
     *
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRSignature[]
     */
    public function getSignature(): null|array
    {
        return $this->signature;
    }

    /**
     * A signature along with supporting context. The signature may be a digital
     * signature that is cryptographic in nature, or some other signature acceptable to
     * the domain. This other signature may be as simple as a graphical image
     * representing a hand-written signature, or a signature ceremony Different
     * signature approaches have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A digital signature on the target Reference(s). The signer should match a
     * Provenance.agent. The purpose of the signature is indicated.
     *
     * @param null|\Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRSignature $signature
     * @return static
     */
    public function addSignature(null|FHIRSignature $signature = null): self
    {
        if (null === $signature) {
            $signature = new FHIRSignature();
        }
        $this->_trackValueAdded();
        $this->signature[] = $signature;
        return $this;
    }

    /**
     * A signature along with supporting context. The signature may be a digital
     * signature that is cryptographic in nature, or some other signature acceptable to
     * the domain. This other signature may be as simple as a graphical image
     * representing a hand-written signature, or a signature ceremony Different
     * signature approaches have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A digital signature on the target Reference(s). The signer should match a
     * Provenance.agent. The purpose of the signature is indicated.
     *
     * @param \Romeldev\Fhir\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRSignature ...$signature
     * @return static
     */
    public function setSignature(FHIRSignature ...$signature): self
    {
        if ([] !== $this->signature) {
            $this->_trackValuesRemoved(count($this->signature));
            $this->signature = [];
        }
        if ([] === $signature) {
            return $this;
        }
        foreach($signature as $v) {
            $this->addSignature($v);
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
        if ([] !== ($vs = $this->getTarget())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TARGET, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getOccurredPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OCCURRED_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOccurredDateTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OCCURRED_DATE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRecorded())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RECORDED] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getPolicy())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_POLICY, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getLocation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LOCATION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getAuthorization())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_AUTHORIZATION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getActivity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ACTIVITY] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getBasedOn())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_BASED_ON, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getPatient())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATIENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getEncounter())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ENCOUNTER] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getAgent())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_AGENT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getEntity())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ENTITY, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getSignature())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SIGNATURE, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TARGET])) {
            $v = $this->getTarget();
            foreach($validationRules[self::FIELD_TARGET] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROVENANCE, self::FIELD_TARGET, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TARGET])) {
                        $errs[self::FIELD_TARGET] = [];
                    }
                    $errs[self::FIELD_TARGET][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OCCURRED_PERIOD])) {
            $v = $this->getOccurredPeriod();
            foreach($validationRules[self::FIELD_OCCURRED_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROVENANCE, self::FIELD_OCCURRED_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OCCURRED_PERIOD])) {
                        $errs[self::FIELD_OCCURRED_PERIOD] = [];
                    }
                    $errs[self::FIELD_OCCURRED_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OCCURRED_DATE_TIME])) {
            $v = $this->getOccurredDateTime();
            foreach($validationRules[self::FIELD_OCCURRED_DATE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROVENANCE, self::FIELD_OCCURRED_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OCCURRED_DATE_TIME])) {
                        $errs[self::FIELD_OCCURRED_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_OCCURRED_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RECORDED])) {
            $v = $this->getRecorded();
            foreach($validationRules[self::FIELD_RECORDED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROVENANCE, self::FIELD_RECORDED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RECORDED])) {
                        $errs[self::FIELD_RECORDED] = [];
                    }
                    $errs[self::FIELD_RECORDED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_POLICY])) {
            $v = $this->getPolicy();
            foreach($validationRules[self::FIELD_POLICY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROVENANCE, self::FIELD_POLICY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_POLICY])) {
                        $errs[self::FIELD_POLICY] = [];
                    }
                    $errs[self::FIELD_POLICY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LOCATION])) {
            $v = $this->getLocation();
            foreach($validationRules[self::FIELD_LOCATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROVENANCE, self::FIELD_LOCATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LOCATION])) {
                        $errs[self::FIELD_LOCATION] = [];
                    }
                    $errs[self::FIELD_LOCATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AUTHORIZATION])) {
            $v = $this->getAuthorization();
            foreach($validationRules[self::FIELD_AUTHORIZATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROVENANCE, self::FIELD_AUTHORIZATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AUTHORIZATION])) {
                        $errs[self::FIELD_AUTHORIZATION] = [];
                    }
                    $errs[self::FIELD_AUTHORIZATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ACTIVITY])) {
            $v = $this->getActivity();
            foreach($validationRules[self::FIELD_ACTIVITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROVENANCE, self::FIELD_ACTIVITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ACTIVITY])) {
                        $errs[self::FIELD_ACTIVITY] = [];
                    }
                    $errs[self::FIELD_ACTIVITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BASED_ON])) {
            $v = $this->getBasedOn();
            foreach($validationRules[self::FIELD_BASED_ON] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROVENANCE, self::FIELD_BASED_ON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BASED_ON])) {
                        $errs[self::FIELD_BASED_ON] = [];
                    }
                    $errs[self::FIELD_BASED_ON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATIENT])) {
            $v = $this->getPatient();
            foreach($validationRules[self::FIELD_PATIENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROVENANCE, self::FIELD_PATIENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATIENT])) {
                        $errs[self::FIELD_PATIENT] = [];
                    }
                    $errs[self::FIELD_PATIENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ENCOUNTER])) {
            $v = $this->getEncounter();
            foreach($validationRules[self::FIELD_ENCOUNTER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROVENANCE, self::FIELD_ENCOUNTER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENCOUNTER])) {
                        $errs[self::FIELD_ENCOUNTER] = [];
                    }
                    $errs[self::FIELD_ENCOUNTER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AGENT])) {
            $v = $this->getAgent();
            foreach($validationRules[self::FIELD_AGENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROVENANCE, self::FIELD_AGENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AGENT])) {
                        $errs[self::FIELD_AGENT] = [];
                    }
                    $errs[self::FIELD_AGENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ENTITY])) {
            $v = $this->getEntity();
            foreach($validationRules[self::FIELD_ENTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROVENANCE, self::FIELD_ENTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENTITY])) {
                        $errs[self::FIELD_ENTITY] = [];
                    }
                    $errs[self::FIELD_ENTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SIGNATURE])) {
            $v = $this->getSignature();
            foreach($validationRules[self::FIELD_SIGNATURE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROVENANCE, self::FIELD_SIGNATURE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SIGNATURE])) {
                        $errs[self::FIELD_SIGNATURE] = [];
                    }
                    $errs[self::FIELD_SIGNATURE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINED])) {
            $v = $this->getContained();
            foreach($validationRules[self::FIELD_CONTAINED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_CONTAINED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINED])) {
                        $errs[self::FIELD_CONTAINED] = [];
                    }
                    $errs[self::FIELD_CONTAINED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_META])) {
            $v = $this->getMeta();
            foreach($validationRules[self::FIELD_META] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_META, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_META])) {
                        $errs[self::FIELD_META] = [];
                    }
                    $errs[self::FIELD_META][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMPLICIT_RULES])) {
            $v = $this->getImplicitRules();
            foreach($validationRules[self::FIELD_IMPLICIT_RULES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_IMPLICIT_RULES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMPLICIT_RULES])) {
                        $errs[self::FIELD_IMPLICIT_RULES] = [];
                    }
                    $errs[self::FIELD_IMPLICIT_RULES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LANGUAGE])) {
            $v = $this->getLanguage();
            foreach($validationRules[self::FIELD_LANGUAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_LANGUAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LANGUAGE])) {
                        $errs[self::FIELD_LANGUAGE] = [];
                    }
                    $errs[self::FIELD_LANGUAGE][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param null|string|\SimpleXMLElement $element
     * @param null|\Romeldev\Fhir\R5\FHIRBase\FHIRResource\FHIRDomainResource\FHIRProvenance $type
     * @param null|int|\Romeldev\Fhir\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\Romeldev\Fhir\R5\FHIRBase\FHIRResource\FHIRDomainResource\FHIRProvenance
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
        } else if (!($type instanceof FHIRProvenance)) {
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
            if (self::FIELD_TARGET === $childName) {
                $type->addTarget(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_OCCURRED_PERIOD === $childName) {
                $type->setOccurredPeriod(FHIRPeriod::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_OCCURRED_DATE_TIME === $childName) {
                $type->setOccurredDateTime(FHIRDateTime::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_RECORDED === $childName) {
                $type->setRecorded(FHIRInstant::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_POLICY === $childName) {
                $type->addPolicy(FHIRUri::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_LOCATION === $childName) {
                $type->setLocation(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_AUTHORIZATION === $childName) {
                $type->addAuthorization(FHIRCodeableReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ACTIVITY === $childName) {
                $type->setActivity(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_BASED_ON === $childName) {
                $type->addBasedOn(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PATIENT === $childName) {
                $type->setPatient(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ENCOUNTER === $childName) {
                $type->setEncounter(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_AGENT === $childName) {
                $type->addAgent(FHIRProvenanceAgent::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ENTITY === $childName) {
                $type->addEntity(FHIRProvenanceEntity::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SIGNATURE === $childName) {
                $type->addSignature(FHIRSignature::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TEXT === $childName) {
                $type->setText(FHIRNarrative::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CONTAINED === $childName) {
                foreach ($n->children() as $nn) {
                    $type->addContained(PHPFHIRTypeMap::getContainedTypeFromXML($nn, $config));
                }
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRId::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_META === $childName) {
                $type->setMeta(FHIRMeta::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_IMPLICIT_RULES === $childName) {
                $type->setImplicitRules(FHIRUri::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_LANGUAGE === $childName) {
                $type->setLanguage(FHIRCode::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_OCCURRED_DATE_TIME])) {
            $pt = $type->getOccurredDateTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_OCCURRED_DATE_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setOccurredDateTime((string)$attributes[self::FIELD_OCCURRED_DATE_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_RECORDED])) {
            $pt = $type->getRecorded();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_RECORDED], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setRecorded((string)$attributes[self::FIELD_RECORDED], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_POLICY])) {
            $type->addPolicy((string)$attributes[self::FIELD_POLICY], PHPFHIRXmlLocationEnum::ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_IMPLICIT_RULES])) {
            $pt = $type->getImplicitRules();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_IMPLICIT_RULES], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setImplicitRules((string)$attributes[self::FIELD_IMPLICIT_RULES], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            $pt = $type->getLanguage();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_LANGUAGE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setLanguage((string)$attributes[self::FIELD_LANGUAGE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
            $xw->openRootNode($config, 'Provenance', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_OCCURRED_DATE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getOccurredDateTime())) {
            $xw->writeAttribute(self::FIELD_OCCURRED_DATE_TIME, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_RECORDED] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getRecorded())) {
            $xw->writeAttribute(self::FIELD_RECORDED, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_POLICY] ?? [];
        if ([] === $locs && [] !== ($vs = $this->getPolicy())) {
            $xw->writeAttribute(self::FIELD_POLICY, $vs[0]->getValue()?->getFormattedValue());
        } else if (false !== ($idx = array_search(PHPFHIRXmlLocationEnum::ATTRIBUTE, $locs, true)) && [] !== ($vs = $this->getPolicy()) && isset($vs[$idx])) {
            $xw->writeAttribute(self::FIELD_POLICY, $vs[$idx]->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        foreach ($this->getTarget() as $v) {
            $xw->startElement(self::FIELD_TARGET);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getOccurredPeriod())) {
            $xw->startElement(self::FIELD_OCCURRED_PERIOD);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_OCCURRED_DATE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getOccurredDateTime())) {
            $xw->startElement(self::FIELD_OCCURRED_DATE_TIME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_RECORDED] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getRecorded())) {
            $xw->startElement(self::FIELD_RECORDED);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_POLICY] ?? [];
        if (([] === $locs || in_array(PHPFHIRXmlLocationEnum::ELEMENT, $locs, true)) && [] !== ($vs = $this->getPolicy())) {
            foreach($vs as $i => $v) {
                if (!isset($locs[$i]) || PHPFHIRXmlLocationEnum::ELEMENT === $locs[$i]) {
                    $xw->startElement(self::FIELD_POLICY);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        if (null !== ($v = $this->getLocation())) {
            $xw->startElement(self::FIELD_LOCATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getAuthorization() as $v) {
            $xw->startElement(self::FIELD_AUTHORIZATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getActivity())) {
            $xw->startElement(self::FIELD_ACTIVITY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getBasedOn() as $v) {
            $xw->startElement(self::FIELD_BASED_ON);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getPatient())) {
            $xw->startElement(self::FIELD_PATIENT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getEncounter())) {
            $xw->startElement(self::FIELD_ENCOUNTER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getAgent() as $v) {
            $xw->startElement(self::FIELD_AGENT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getEntity() as $v) {
            $xw->startElement(self::FIELD_ENTITY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getSignature() as $v) {
            $xw->startElement(self::FIELD_SIGNATURE);
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
        if ([] !== ($vs = $this->getTarget())) {
            $out->{self::FIELD_TARGET} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_TARGET}[] = $v;
            }
        }
        if (null !== ($v = $this->getOccurredPeriod())) {
            $out->{self::FIELD_OCCURRED_PERIOD} = $v;
        }
        if (null !== ($v = $this->getOccurredDateTime())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_OCCURRED_DATE_TIME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_OCCURRED_DATE_TIME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getRecorded())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_RECORDED} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInstant::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_RECORDED_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getPolicy())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRUri::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_POLICY} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_POLICY_EXT} = $exts;
            }
        }
        if (null !== ($v = $this->getLocation())) {
            $out->{self::FIELD_LOCATION} = $v;
        }
        if ([] !== ($vs = $this->getAuthorization())) {
            $out->{self::FIELD_AUTHORIZATION} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_AUTHORIZATION}[] = $v;
            }
        }
        if (null !== ($v = $this->getActivity())) {
            $out->{self::FIELD_ACTIVITY} = $v;
        }
        if ([] !== ($vs = $this->getBasedOn())) {
            $out->{self::FIELD_BASED_ON} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_BASED_ON}[] = $v;
            }
        }
        if (null !== ($v = $this->getPatient())) {
            $out->{self::FIELD_PATIENT} = $v;
        }
        if (null !== ($v = $this->getEncounter())) {
            $out->{self::FIELD_ENCOUNTER} = $v;
        }
        if ([] !== ($vs = $this->getAgent())) {
            $out->{self::FIELD_AGENT} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_AGENT}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getEntity())) {
            $out->{self::FIELD_ENTITY} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_ENTITY}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getSignature())) {
            $out->{self::FIELD_SIGNATURE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_SIGNATURE}[] = $v;
            }
        }

        $out->{PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE} = $this->_getResourceType();

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