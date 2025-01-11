<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/cloudquotas/v1beta/resources.proto

namespace Google\Cloud\CloudQuotas\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Eligibility information regarding requesting increase adjustment of a quota.
 *
 * Generated from protobuf message <code>google.api.cloudquotas.v1beta.QuotaIncreaseEligibility</code>
 */
class QuotaIncreaseEligibility extends \Google\Protobuf\Internal\Message
{
    /**
     * Whether a higher quota value can be requested for the quota.
     *
     * Generated from protobuf field <code>bool is_eligible = 1;</code>
     */
    protected $is_eligible = false;
    /**
     * The reason of why it is ineligible to request increased value of the quota.
     * If the is_eligible field is true, it defaults to
     * INELIGIBILITY_REASON_UNSPECIFIED.
     *
     * Generated from protobuf field <code>.google.api.cloudquotas.v1beta.QuotaIncreaseEligibility.IneligibilityReason ineligibility_reason = 2;</code>
     */
    protected $ineligibility_reason = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $is_eligible
     *           Whether a higher quota value can be requested for the quota.
     *     @type int $ineligibility_reason
     *           The reason of why it is ineligible to request increased value of the quota.
     *           If the is_eligible field is true, it defaults to
     *           INELIGIBILITY_REASON_UNSPECIFIED.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Cloudquotas\V1Beta\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Whether a higher quota value can be requested for the quota.
     *
     * Generated from protobuf field <code>bool is_eligible = 1;</code>
     * @return bool
     */
    public function getIsEligible()
    {
        return $this->is_eligible;
    }

    /**
     * Whether a higher quota value can be requested for the quota.
     *
     * Generated from protobuf field <code>bool is_eligible = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsEligible($var)
    {
        GPBUtil::checkBool($var);
        $this->is_eligible = $var;

        return $this;
    }

    /**
     * The reason of why it is ineligible to request increased value of the quota.
     * If the is_eligible field is true, it defaults to
     * INELIGIBILITY_REASON_UNSPECIFIED.
     *
     * Generated from protobuf field <code>.google.api.cloudquotas.v1beta.QuotaIncreaseEligibility.IneligibilityReason ineligibility_reason = 2;</code>
     * @return int
     */
    public function getIneligibilityReason()
    {
        return $this->ineligibility_reason;
    }

    /**
     * The reason of why it is ineligible to request increased value of the quota.
     * If the is_eligible field is true, it defaults to
     * INELIGIBILITY_REASON_UNSPECIFIED.
     *
     * Generated from protobuf field <code>.google.api.cloudquotas.v1beta.QuotaIncreaseEligibility.IneligibilityReason ineligibility_reason = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setIneligibilityReason($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\CloudQuotas\V1beta\QuotaIncreaseEligibility\IneligibilityReason::class);
        $this->ineligibility_reason = $var;

        return $this;
    }

}

