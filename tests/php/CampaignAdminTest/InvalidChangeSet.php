<?php

namespace SilverStripe\CampaignAdmin\Tests\CampaignAdminTest;

use SilverStripe\ORM\UnexpectedDataException;
use SilverStripe\Versioned\ChangeSet;

class InvalidChangeSet extends ChangeSet
{
    public function sync()
    {
        throw new UnexpectedDataException("bad data");
    }
}
