<?php
/**
 * Created by.
 *
 * User: JCHR <car.chr@gmail.com>
 * Date: 2020-04-06
 * Time: 15:02
 */

declare(strict_types=1);

namespace Jchr86\SyliusBannerPlugin;

use Sylius\Bundle\CoreBundle\Application\SyliusPluginTrait;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Jchr86 Sylius Banner Plugin.
 *
 * @author JCHR <car.chr@gmail.com>
 */
final class Jchr86SyliusBannerPlugin extends Bundle
{
    use SyliusPluginTrait;
}
