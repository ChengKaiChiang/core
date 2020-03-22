<?php

declare(strict_types=1);

namespace OpenIDConnect\OAuth2\Metadata;

use OpenIDConnect\Config\ProviderMetadata;

trait ProviderMetadataAwaitTrait
{
    /**
     * @var ProviderMetadata
     */
    protected $providerMetadata;

    /**
     * @param ProviderMetadata $providerMetadata
     * @return static
     */
    public function setProviderMetadata(ProviderMetadata $providerMetadata)
    {
        $this->providerMetadata = $providerMetadata;

        return $this;
    }
}
