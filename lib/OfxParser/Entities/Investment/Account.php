<?php

namespace OfxParser\Entities\Investment;

use OfxParser\Entities\Investment;
use OfxParser\Entities\Statement;

class Account extends Investment
{
    /**
     * @var string
     */
    public ?string $accountNumber;

    /**
     * @var string
     */
    public ?string $brokerId;

    /**
     * @var Statement
     */
    public ?Statement $statement;

    /**
     * @var string
     */
    public ?string $transactionUid;
}
