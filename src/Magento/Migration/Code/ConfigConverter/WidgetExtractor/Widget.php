<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Migration\Code\ConfigConverter\WidgetExtractor;

use \Magento\Migration\Code\ConfigConverter\ConfigSectionsInterface;
use \Magento\Migration\Code\ConfigConverter\ConfigSectionsAbstract;

class Widget extends ConfigSectionsAbstract implements ConfigSectionsInterface
{
    /** @var string  */
    protected $fileName = 'widget';
    /**
     * @var array
     */
    protected $locations = ['.'];
}
