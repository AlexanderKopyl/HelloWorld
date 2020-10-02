<?php

namespace AlexsanderKopyl\Helloworld\Block;

class Test extends \Magento\Framework\View\Element\Template
{
    public function _toHtml()
    {
        return "<b>Hello world from block</b>";
    }
}
