<?php

namespace craft\feedme\events;

use craft\events\CancelableEvent;

class FeedProcessEvent extends CancelableEvent
{
    // Properties
    // =========================================================================

    /**
     * @var
     */
    public $feed;

    /**
     * @var
     */
    public $feedData;

    /**
     * @var
     */
    public $existingElements;
  
    /**
     * @var
     */
    public $contentData;

    /**
     * @var
     */
    public $element;
}
