<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/Tron.proto

namespace Protocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * block
 *
 * Generated from protobuf message <code>protocol.Block</code>
 */
class Block extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .protocol.Transaction transactions = 1;</code>
     */
    private $transactions;
    /**
     * Generated from protobuf field <code>.protocol.BlockHeader block_header = 2;</code>
     */
    private $block_header = null;

    public function __construct() {
        \GPBMetadata\Core\Tron::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>repeated .protocol.Transaction transactions = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTransactions()
    {
        return $this->transactions;
    }

    /**
     * Generated from protobuf field <code>repeated .protocol.Transaction transactions = 1;</code>
     * @param \Protocol\Transaction[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTransactions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Protocol\Transaction::class);
        $this->transactions = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protocol.BlockHeader block_header = 2;</code>
     * @return \Protocol\BlockHeader
     */
    public function getBlockHeader()
    {
        return $this->block_header;
    }

    /**
     * Generated from protobuf field <code>.protocol.BlockHeader block_header = 2;</code>
     * @param \Protocol\BlockHeader $var
     * @return $this
     */
    public function setBlockHeader($var)
    {
        GPBUtil::checkMessage($var, \Protocol\BlockHeader::class);
        $this->block_header = $var;

        return $this;
    }

}

