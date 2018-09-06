<?php
namespace Aws\Signature;

use Aws\Credentials\CredentialsInterface;
use Psr\Http\Message\RequestInterface;

/**
 * Provides anonymous client access (does not sign requests).
 */
class AnonymousSignature implements SignatureInterface
{
    public function signRequest(
        RequestInterface $request,
        CredentialsInterface $credentials
    ) {
        return $request;
    }

    public function presign(
        RequestInterface $request,
        CredentialsInterface $credentials,
        $expires
    ) {
        return $request;
    }
}
