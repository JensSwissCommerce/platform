<?php declare(strict_types=1);

namespace Shopware\Core\Framework\DataAbstractionLayer;

/**
 * Contains all registered entity extensions in the system
 */
class ExtensionRegistry
{
    /**
     * @var EntityExtensionInterface[]|EntityExtension[]
     */
    private $extensions;

    public function __construct(iterable $extensions)
    {
        $this->extensions = $extensions;
    }

    /**
     * @return EntityExtensionInterface[]|EntityExtension[]|iterable
     */
    public function getExtensions(): iterable
    {
        return $this->extensions;
    }
}
