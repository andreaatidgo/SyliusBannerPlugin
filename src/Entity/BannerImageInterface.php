<?php
/**
 * Created by.
 *
 * User: JCHR <car.chr@gmail.com>
 * Date: 2020-04-07
 * Time: 9:46
 */

namespace Jchr86\SyliusBannerPlugin\Entity;

use Sylius\Component\Core\Model\ImageInterface;

/**
 * Interface Banner Image.
 *
 * @author JCHR <car.chr@gmail.com>
 */
interface BannerImageInterface extends ImageInterface
{
    /**
     * @return bool
     */
    public function hasLink(): bool;

    /**
     * @return string|null
     */
    public function getLink(): ?string;
}
