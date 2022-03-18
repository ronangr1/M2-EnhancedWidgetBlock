<?php declare(strict_types=1);
/**
 * Copyright © Ronan Guérin All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Ronangr1\EnhancedWidgetBlock\Block\Adminhtml\Widget;

use Magento\Backend\Block\Template;
use Magento\Framework\Data\Form\Element\AbstractElement;
use Magento\Framework\Exception\LocalizedException;
use Ronangr1\EnhancedWidgetBlock\Block\Adminhtml\Widget\DataBlock\Element;

class DataBlock extends Template
{

    /**
     * @throws LocalizedException
     */
    public function prepareElementHtml(AbstractElement $element): AbstractElement
    {
        $dynamicFields = $this->getLayout()
            ->createBlock(Element::class)
            ->setData('element', $element)
            ->setTemplate('widget/html/datablock.phtml');

        $js = $this->getLayout()
            ->createBlock(Element::class)
            ->setTemplate('widget/js/script.phtml');

        $element->setData('after_element_html', $dynamicFields->toHtml() . $js->toHtml());

        return $element;
    }
}
