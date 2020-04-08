<?php
/**
 * Created by.
 *
 * User: JCHR <car.chr@gmail.com>
 * Date: 2020-04-06
 * Time: 16:00
 */

declare(strict_types=1);

namespace Jchr86\SyliusBannerPlugin\Menu;

use Knp\Menu\ItemInterface;
use Sylius\Bundle\UiBundle\Menu\Event\MenuBuilderEvent;

/**
 * Admin Menu Listener.
 *
 * @author JCHR <car.chr@gmail.com>
 */
final class AdminMenuListener
{

    /**
     * @param MenuBuilderEvent $event
     */
    public function addAdminMenuItems(MenuBuilderEvent $event): void
    {
        /** @var ItemInterface $menu */
        $menu = $event->getMenu();

        /** @var ItemInterface $catalogMenu */
        $catalogMenu = $menu->getChild('catalog');

        $catalogMenu
            ->addChild('banner', [
                'route' => 'jchr86_sylius_banner_admin_banner_index',
            ])
            ->setLabel('jchr86_sylius_banner.ui.banners')
            ->setLabelAttribute('icon', 'images outline')
        ;
    }
}
