<?php

namespace Welp\MailchimpBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Welp\MailchimpBundle\DependencyInjection\WelpMailchimpExtension;

class WelpMailchimpBundle extends Bundle
{
    public function getContainerExtension(): ?ExtensionInterface
    {
        return new WelpMailchimpExtension();
    }
}
