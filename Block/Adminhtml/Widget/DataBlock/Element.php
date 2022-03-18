<?php declare(strict_types=1);
/**
 * Copyright © Ronan Guérin All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Ronangr1\EnhancedWidgetBlock\Block\Adminhtml\Widget\DataBlock;

use Magento\Backend\Block\Template;
use Ronangr1\EnhancedWidgetBlock\Block\Adminhtml\Widget\DataBlock;

class Element extends Template
{
    public function getValues(): array
    {
        $widget = json_decode($this->getRequest()->getParam('widget'), true);
        return $widget['values'] ?? [];
    }
}
