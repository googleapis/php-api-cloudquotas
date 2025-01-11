<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/cloudquotas/v1beta/quota_adjuster_settings.proto

namespace Google\Cloud\CloudQuotas\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for updating QuotaAdjusterSettings
 *
 * Generated from protobuf message <code>google.api.cloudquotas.v1beta.UpdateQuotaAdjusterSettingsRequest</code>
 */
class UpdateQuotaAdjusterSettingsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The QuotaAdjusterSettings to update.
     *
     * Generated from protobuf field <code>.google.api.cloudquotas.v1beta.QuotaAdjusterSettings quota_adjuster_settings = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $quota_adjuster_settings = null;
    /**
     * Optional. The list of fields to update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $update_mask = null;
    /**
     * Optional. If set to true, validate the request, but do not actually update.
     * Note that a request being valid does not mean that the request is
     * guaranteed to be fulfilled.
     *
     * Generated from protobuf field <code>bool validate_only = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $validate_only = false;

    /**
     * @param \Google\Cloud\CloudQuotas\V1beta\QuotaAdjusterSettings $quotaAdjusterSettings Required. The QuotaAdjusterSettings to update.
     * @param \Google\Protobuf\FieldMask                             $updateMask            Optional. The list of fields to update.
     *
     * @return \Google\Cloud\CloudQuotas\V1beta\UpdateQuotaAdjusterSettingsRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\CloudQuotas\V1beta\QuotaAdjusterSettings $quotaAdjusterSettings, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setQuotaAdjusterSettings($quotaAdjusterSettings)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\CloudQuotas\V1beta\QuotaAdjusterSettings $quota_adjuster_settings
     *           Required. The QuotaAdjusterSettings to update.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Optional. The list of fields to update.
     *     @type bool $validate_only
     *           Optional. If set to true, validate the request, but do not actually update.
     *           Note that a request being valid does not mean that the request is
     *           guaranteed to be fulfilled.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Cloudquotas\V1Beta\QuotaAdjusterSettings::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The QuotaAdjusterSettings to update.
     *
     * Generated from protobuf field <code>.google.api.cloudquotas.v1beta.QuotaAdjusterSettings quota_adjuster_settings = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\CloudQuotas\V1beta\QuotaAdjusterSettings|null
     */
    public function getQuotaAdjusterSettings()
    {
        return $this->quota_adjuster_settings;
    }

    public function hasQuotaAdjusterSettings()
    {
        return isset($this->quota_adjuster_settings);
    }

    public function clearQuotaAdjusterSettings()
    {
        unset($this->quota_adjuster_settings);
    }

    /**
     * Required. The QuotaAdjusterSettings to update.
     *
     * Generated from protobuf field <code>.google.api.cloudquotas.v1beta.QuotaAdjusterSettings quota_adjuster_settings = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\CloudQuotas\V1beta\QuotaAdjusterSettings $var
     * @return $this
     */
    public function setQuotaAdjusterSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\CloudQuotas\V1beta\QuotaAdjusterSettings::class);
        $this->quota_adjuster_settings = $var;

        return $this;
    }

    /**
     * Optional. The list of fields to update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Optional. The list of fields to update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

    /**
     * Optional. If set to true, validate the request, but do not actually update.
     * Note that a request being valid does not mean that the request is
     * guaranteed to be fulfilled.
     *
     * Generated from protobuf field <code>bool validate_only = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * Optional. If set to true, validate the request, but do not actually update.
     * Note that a request being valid does not mean that the request is
     * guaranteed to be fulfilled.
     *
     * Generated from protobuf field <code>bool validate_only = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

}

