<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api/api.proto

namespace Protocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>protocol.AssetIssueList</code>
 */
class AssetIssueList extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .protocol.AssetIssueContract assetIssue = 1;</code>
     */
    private $assetIssue;

    public function __construct() {
        \GPBMetadata\Api\Api::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>repeated .protocol.AssetIssueContract assetIssue = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAssetIssue()
    {
        return $this->assetIssue;
    }

    /**
     * Generated from protobuf field <code>repeated .protocol.AssetIssueContract assetIssue = 1;</code>
     * @param \Protocol\AssetIssueContract[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAssetIssue($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Protocol\AssetIssueContract::class);
        $this->assetIssue = $arr;

        return $this;
    }

}

