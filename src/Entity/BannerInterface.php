<?php
/**
 * Created by.
 *
 * User: JCHR <car.chr@gmail.com>
 * Date: 2020-04-07
 * Time: 9:43
 */

declare(strict_types=1);

namespace Jchr86\SyliusBannerPlugin\Entity;

use Sylius\Component\Core\Model\ImagesAwareInterface;
use Sylius\Component\Resource\Model\CodeAwareInterface;
use Sylius\Component\Resource\Model\ResourceInterface;

/**
 * Interface BannerInterface.
 *
 * @author JCHR <car.chr@gmail.com>
 */
interface BannerInterface extends ResourceInterface, ImagesAwareInterface, CodeAwareInterface
{

    /**
     * @return string|null
     */
    public function getName(): ?string;

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void;
}
