<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/cloudquotas/v1/resources.proto

namespace Google\Cloud\CloudQuotas\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The preferred quota configuration.
 *
 * Generated from protobuf message <code>google.api.cloudquotas.v1.QuotaConfig</code>
 */
class QuotaConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The preferred value. Must be greater than or equal to -1. If set
     * to -1, it means the value is "unlimited".
     *
     * Generated from protobuf field <code>int64 preferred_value = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $preferred_value = 0;
    /**
     * Output only. Optional details about the state of this quota preference.
     *
     * Generated from protobuf field <code>string state_detail = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state_detail = '';
    /**
     * Output only. Granted quota value.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value granted_value = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $granted_value = null;
    /**
     * Output only. The trace id that the Google Cloud uses to provision the
     * requested quota. This trace id may be used by the client to contact Cloud
     * support to track the state of a quota preference request. The trace id is
     * only produced for increase requests and is unique for each request. The
     * quota decrease requests do not have a trace id.
     *
     * Generated from protobuf field <code>string trace_id = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $trace_id = '';
    /**
     * The annotations map for clients to store small amounts of arbitrary data.
     * Do not put PII or other sensitive information here.
     * See https://google.aip.dev/128#annotations
     *
     * Generated from protobuf field <code>map<string, string> annotations = 5;</code>
     */
    private $annotations;
    /**
     * Output only. The origin of the quota preference request.
     *
     * Generated from protobuf field <code>.google.api.cloudquotas.v1.QuotaConfig.Origin request_origin = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $request_origin = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $preferred_value
     *           Required. The preferred value. Must be greater than or equal to -1. If set
     *           to -1, it means the value is "unlimited".
     *     @type string $state_detail
     *           Output only. Optional details about the state of this quota preference.
     *     @type \Google\Protobuf\Int64Value $granted_value
     *           Output only. Granted quota value.
     *     @type string $trace_id
     *           Output only. The trace id that the Google Cloud uses to provision the
     *           requested quota. This trace id may be used by the client to contact Cloud
     *           support to track the state of a quota preference request. The trace id is
     *           only produced for increase requests and is unique for each request. The
     *           quota decrease requests do not have a trace id.
     *     @type array|\Google\Protobuf\Internal\MapField $annotations
     *           The annotations map for clients to store small amounts of arbitrary data.
     *           Do not put PII or other sensitive information here.
     *           See https://google.aip.dev/128#annotations
     *     @type int $request_origin
     *           Output only. The origin of the quota preference request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Cloudquotas\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The preferred value. Must be greater than or equal to -1. If set
     * to -1, it means the value is "unlimited".
     *
     * Generated from protobuf field <code>int64 preferred_value = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int|string
     */
    public function getPreferredValue()
    {
        return $this->preferred_value;
    }

    /**
     * Required. The preferred value. Must be greater than or equal to -1. If set
     * to -1, it means the value is "unlimited".
     *
     * Generated from protobuf field <code>int64 preferred_value = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int|string $var
     * @return $this
     */
    public function setPreferredValue($var)
    {
        GPBUtil::checkInt64($var);
        $this->preferred_value = $var;

        return $this;
    }

    /**
     * Output only. Optional details about the state of this quota preference.
     *
     * Generated from protobuf field <code>string state_detail = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getStateDetail()
    {
        return $this->state_detail;
    }

    /**
     * Output only. Optional details about the state of this quota preference.
     *
     * Generated from protobuf field <code>string state_detail = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setStateDetail($var)
    {
        GPBUtil::checkString($var, True);
        $this->state_detail = $var;

        return $this;
    }

    /**
     * Output only. Granted quota value.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value granted_value = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Int64Value|null
     */
    public function getGrantedValue()
    {
        return $this->granted_value;
    }

    public function hasGrantedValue()
    {
        return isset($this->granted_value);
    }

    public function clearGrantedValue()
    {
        unset($this->granted_value);
    }

    /**
     * Returns the unboxed value from <code>getGrantedValue()</code>

     * Output only. Granted quota value.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value granted_value = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string|null
     */
    public function getGrantedValueUnwrapped()
    {
        return $this->readWrapperValue("granted_value");
    }

    /**
     * Output only. Granted quota value.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value granted_value = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setGrantedValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->granted_value = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Output only. Granted quota value.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value granted_value = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setGrantedValueUnwrapped($var)
    {
        $this->writeWrapperValue("granted_value", $var);
        return $this;}

    /**
     * Output only. The trace id that the Google Cloud uses to provision the
     * requested quota. This trace id may be used by the client to contact Cloud
     * support to track the state of a quota preference request. The trace id is
     * only produced for increase requests and is unique for each request. The
     * quota decrease requests do not have a trace id.
     *
     * Generated from protobuf field <code>string trace_id = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getTraceId()
    {
        return $this->trace_id;
    }

    /**
     * Output only. The trace id that the Google Cloud uses to provision the
     * requested quota. This trace id may be used by the client to contact Cloud
     * support to track the state of a quota preference request. The trace id is
     * only produced for increase requests and is unique for each request. The
     * quota decrease requests do not have a trace id.
     *
     * Generated from protobuf field <code>string trace_id = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setTraceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->trace_id = $var;

        return $this;
    }

    /**
     * The annotations map for clients to store small amounts of arbitrary data.
     * Do not put PII or other sensitive information here.
     * See https://google.aip.dev/128#annotations
     *
     * Generated from protobuf field <code>map<string, string> annotations = 5;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getAnnotations()
    {
        return $this->annotations;
    }

    /**
     * The annotations map for clients to store small amounts of arbitrary data.
     * Do not put PII or other sensitive information here.
     * See https://google.aip.dev/128#annotations
     *
     * Generated from protobuf field <code>map<string, string> annotations = 5;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setAnnotations($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->annotations = $arr;

        return $this;
    }

    /**
     * Output only. The origin of the quota preference request.
     *
     * Generated from protobuf field <code>.google.api.cloudquotas.v1.QuotaConfig.Origin request_origin = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getRequestOrigin()
    {
        return $this->request_origin;
    }

    /**
     * Output only. The origin of the quota preference request.
     *
     * Generated from protobuf field <code>.google.api.cloudquotas.v1.QuotaConfig.Origin request_origin = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setRequestOrigin($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\CloudQuotas\V1\QuotaConfig\Origin::class);
        $this->request_origin = $var;

        return $this;
    }

}
