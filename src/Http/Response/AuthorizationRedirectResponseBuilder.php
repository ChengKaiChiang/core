<?php

declare(strict_types=1);

namespace OpenIDConnect\Http\Response;

use OpenIDConnect\Http\Builder;
use Psr\Http\Message\ResponseInterface;

/**
 * @see https://tools.ietf.org/html/rfc6749#section-4.1.1
 * @see https://tools.ietf.org/html/rfc6749#section-4.2.1
 */
class AuthorizationRedirectResponseBuilder extends Builder
{
    /**
     * @param array $parameters
     * @return ResponseInterface
     */
    public function build(array $parameters): ResponseInterface
    {
        return $this->httpClient->createResponse(302)
            ->withHeader(
                'Location',
                (string)$this->generateRedirectUriWithProviderConfig('authorization_endpoint', $parameters)
            );
    }
}
