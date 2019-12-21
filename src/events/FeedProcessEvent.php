<?php

namespace craft\feedme\events;

use craft\events\CancelableEvent;

class FeedProcessEvent extends CancelableEvent
{
    // Properties
    // =========================================================================

    public $feed;
    public $feedData;
    public $existingElements;
    public $contentData;
    public $element;
}
