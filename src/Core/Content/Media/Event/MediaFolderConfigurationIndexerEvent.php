<?php declare(strict_types=1);

namespace Shopware\Core\Content\Media\Event;

use Shopware\Core\Framework\Context;
use Shopware\Core\Framework\Event\NestedEvent;

class MediaFolderConfigurationIndexerEvent extends NestedEvent
{
    /**
     * @var Context
     */
    private $context;

    /**
     * @var array
     */
    private $ids;

    public function __construct(array $ids, Context $context)
    {
        $this->context = $context;
        $this->ids = $ids;
    }

    public function getContext(): Context
    {
        return $this->context;
    }

    public function getIds(): array
    {
        return $this->ids;
    }
}
