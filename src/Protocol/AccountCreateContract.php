<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/Contract.proto

namespace Protocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>protocol.AccountCreateContract</code>
 */
class AccountCreateContract extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.protocol.AccountType type = 1;</code>
     */
    private $type = 0;
    /**
     * Generated from protobuf field <code>bytes account_name = 2;</code>
     */
    private $account_name = '';
    /**
     * Generated from protobuf field <code>bytes owner_address = 3;</code>
     */
    private $owner_address = '';

    public function __construct() {
        \GPBMetadata\Core\Contract::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.protocol.AccountType type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.protocol.AccountType type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Protocol\AccountType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes account_name = 2;</code>
     * @return string
     */
    public function getAccountName()
    {
        return $this->account_name;
    }

    /**
     * Generated from protobuf field <code>bytes account_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAccountName($var)
    {
        GPBUtil::checkString($var, False);
        $this->account_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes owner_address = 3;</code>
     * @return string
     */
    public function getOwnerAddress()
    {
        return $this->owner_address;
    }

    /**
     * Generated from protobuf field <code>bytes owner_address = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setOwnerAddress($var)
    {
        GPBUtil::checkString($var, False);
        $this->owner_address = $var;

        return $this;
    }

}

