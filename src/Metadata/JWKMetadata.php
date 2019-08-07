<?php

namespace OpenIDConnect\Metadata;

use ArrayAccess;
use Jose\Component\Core\JWKSet;
use OpenIDConnect\Traits\MetadataAwareTraits;

/**
 * The metadata of client registration
 *
 * @see https://tools.ietf.org/html/rfc7517
 */
class JWKMetadata implements ArrayAccess
{
    use MetadataAwareTraits;

    /**
     * @var JWKSet
     */
    private $jwkSet;

    /**
     * @param array $metadata
     */
    public function __construct(array $metadata = [])
    {
        $this->metadata = collect($metadata);

        $this->jwkSet = JWKSet::createFromKeyData($metadata);
    }

    /**
     * @return JWKSet
     */
    public function JWKSet(): JWKSet
    {
        return $this->jwkSet;
    }
}
