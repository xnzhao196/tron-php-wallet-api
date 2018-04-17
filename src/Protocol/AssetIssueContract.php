<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/Contract.proto

namespace Protocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>protocol.AssetIssueContract</code>
 */
class AssetIssueContract extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes owner_address = 1;</code>
     */
    private $owner_address = '';
    /**
     * Generated from protobuf field <code>bytes name = 2;</code>
     */
    private $name = '';
    /**
     * Generated from protobuf field <code>int64 total_supply = 4;</code>
     */
    private $total_supply = 0;
    /**
     * Generated from protobuf field <code>int32 trx_num = 6;</code>
     */
    private $trx_num = 0;
    /**
     * Generated from protobuf field <code>int32 num = 8;</code>
     */
    private $num = 0;
    /**
     * Generated from protobuf field <code>int64 start_time = 9;</code>
     */
    private $start_time = 0;
    /**
     * Generated from protobuf field <code>int64 end_time = 10;</code>
     */
    private $end_time = 0;
    /**
     * Generated from protobuf field <code>int32 decay_ratio = 15;</code>
     */
    private $decay_ratio = 0;
    /**
     * Generated from protobuf field <code>int32 vote_score = 16;</code>
     */
    private $vote_score = 0;
    /**
     * Generated from protobuf field <code>bytes description = 20;</code>
     */
    private $description = '';
    /**
     * Generated from protobuf field <code>bytes url = 21;</code>
     */
    private $url = '';

    public function __construct() {
        \GPBMetadata\Core\Contract::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>bytes owner_address = 1;</code>
     * @return string
     */
    public function getOwnerAddress()
    {
        return $this->owner_address;
    }

    /**
     * Generated from protobuf field <code>bytes owner_address = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setOwnerAddress($var)
    {
        GPBUtil::checkString($var, False);
        $this->owner_address = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>bytes name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, False);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 total_supply = 4;</code>
     * @return int|string
     */
    public function getTotalSupply()
    {
        return $this->total_supply;
    }

    /**
     * Generated from protobuf field <code>int64 total_supply = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTotalSupply($var)
    {
        GPBUtil::checkInt64($var);
        $this->total_supply = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 trx_num = 6;</code>
     * @return int
     */
    public function getTrxNum()
    {
        return $this->trx_num;
    }

    /**
     * Generated from protobuf field <code>int32 trx_num = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setTrxNum($var)
    {
        GPBUtil::checkInt32($var);
        $this->trx_num = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 num = 8;</code>
     * @return int
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * Generated from protobuf field <code>int32 num = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setNum($var)
    {
        GPBUtil::checkInt32($var);
        $this->num = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 start_time = 9;</code>
     * @return int|string
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    /**
     * Generated from protobuf field <code>int64 start_time = 9;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->start_time = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 end_time = 10;</code>
     * @return int|string
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    /**
     * Generated from protobuf field <code>int64 end_time = 10;</code>
     * @param int|string $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->end_time = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 decay_ratio = 15;</code>
     * @return int
     */
    public function getDecayRatio()
    {
        return $this->decay_ratio;
    }

    /**
     * Generated from protobuf field <code>int32 decay_ratio = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setDecayRatio($var)
    {
        GPBUtil::checkInt32($var);
        $this->decay_ratio = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 vote_score = 16;</code>
     * @return int
     */
    public function getVoteScore()
    {
        return $this->vote_score;
    }

    /**
     * Generated from protobuf field <code>int32 vote_score = 16;</code>
     * @param int $var
     * @return $this
     */
    public function setVoteScore($var)
    {
        GPBUtil::checkInt32($var);
        $this->vote_score = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes description = 20;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Generated from protobuf field <code>bytes description = 20;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, False);
        $this->description = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes url = 21;</code>
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Generated from protobuf field <code>bytes url = 21;</code>
     * @param string $var
     * @return $this
     */
    public function setUrl($var)
    {
        GPBUtil::checkString($var, False);
        $this->url = $var;

        return $this;
    }

}
