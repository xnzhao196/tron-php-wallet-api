<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/Tron.proto

namespace Protocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>protocol.Transaction.Contract</code>
 */
class Transaction_Contract extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.protocol.Transaction.Contract.ContractType type = 1;</code>
     */
    private $type = 0;
    /**
     * Generated from protobuf field <code>.google.protobuf.Any parameter = 2;</code>
     */
    private $parameter = null;

    public function __construct() {
        \GPBMetadata\Core\Tron::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.protocol.Transaction.Contract.ContractType type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.protocol.Transaction.Contract.ContractType type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Protocol\Transaction_Contract_ContractType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Any parameter = 2;</code>
     * @return \Google\Protobuf\Any
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Any parameter = 2;</code>
     * @param \Google\Protobuf\Any $var
     * @return $this
     */
    public function setParameter($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Any::class);
        $this->parameter = $var;

        return $this;
    }

}

