<?php
/**
 * Created by.
 *
 * User: JCHR <car.chr@gmail.com>
 * Date: 2020-04-06
 * Time: 16:00
 */

declare(strict_types=1);

namespace Jchr86\SyliusBannerPlugin\Entity;

use Sylius\Component\Core\Model\Image;

/**
 * Banner Image.
 *
 * @author JCHR <car.chr@gmail.com>
 */
class BannerImage extends Image implements BannerImageInterface
{
    /**
     * {@inheritdoc}
     */
    public function hasLink(): bool
    {
        return !empty($this->type);
    }

    /**
     * {@inheritdoc}
     */
    public function getLink(): ?string
    {
        return $this->type;
    }

}
