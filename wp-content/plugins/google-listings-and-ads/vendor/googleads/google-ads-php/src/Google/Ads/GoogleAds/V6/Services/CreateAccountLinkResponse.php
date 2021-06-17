<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/services/account_link_service.proto

namespace Google\Ads\GoogleAds\V6\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for
 * [AccountLinkService.CreateAccountLink][google.ads.googleads.v6.services.AccountLinkService.CreateAccountLink].
 *
 * Generated from protobuf message <code>google.ads.googleads.v6.services.CreateAccountLinkResponse</code>
 */
class CreateAccountLinkResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Returned for successful operations. Resource name of the account link.
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    protected $resource_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Returned for successful operations. Resource name of the account link.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V6\Services\AccountLinkService::initOnce();
        parent::__construct($data);
    }

    /**
     * Returned for successful operations. Resource name of the account link.
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Returned for successful operations. Resource name of the account link.
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

}

