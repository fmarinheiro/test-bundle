<?php
// src/Acme/TestBundle/AcmeTestBundle.php
namespace Fm\TestBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class FmTestBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}