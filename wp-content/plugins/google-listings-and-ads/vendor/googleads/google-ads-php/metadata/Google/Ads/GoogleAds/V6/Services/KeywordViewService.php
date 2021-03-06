<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/services/keyword_view_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V6\Services;

class KeywordViewService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(
            '
?
4google/ads/googleads/v6/resources/keyword_view.proto!google.ads.googleads.v6.resourcesgoogle/api/resource.protogoogle/api/annotations.proto"?
KeywordViewC
resource_name (	B,?A?A&
$googleads.googleapis.com/KeywordView:l?Ai
$googleads.googleapis.com/KeywordViewAcustomers/{customer_id}/keywordViews/{ad_group_id}~{criterion_id}B?
%com.google.ads.googleads.v6.resourcesBKeywordViewProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v6/resources;resources?GAA?!Google.Ads.GoogleAds.V6.Resources?!Google\\Ads\\GoogleAds\\V6\\Resources?%Google::Ads::GoogleAds::V6::Resourcesbproto3
?
;google/ads/googleads/v6/services/keyword_view_service.proto google.ads.googleads.v6.servicesgoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto"\\
GetKeywordViewRequestC
resource_name (	B,?A?A&
$googleads.googleapis.com/KeywordView2?
KeywordViewService?
GetKeywordView7.google.ads.googleads.v6.services.GetKeywordViewRequest..google.ads.googleads.v6.resources.KeywordView"F????0./v6/{resource_name=customers/*/keywordViews/*}?Aresource_nameE?Agoogleads.googleapis.com?A\'https://www.googleapis.com/auth/adwordsB?
$com.google.ads.googleads.v6.servicesBKeywordViewServiceProtoPZHgoogle.golang.org/genproto/googleapis/ads/googleads/v6/services;services?GAA? Google.Ads.GoogleAds.V6.Services? Google\\Ads\\GoogleAds\\V6\\Services?$Google::Ads::GoogleAds::V6::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

