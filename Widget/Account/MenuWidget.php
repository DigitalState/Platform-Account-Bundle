<?php

namespace Ds\Bundle\AccountBundle\Widget\Account;

use Ds\Bundle\WidgetBundle\Widget\Widget;

/**
 * Class MenuWidget
 */
class MenuWidget extends Widget
{
    /**
     * {@inheritdoc}
     */
    public function getTitle()
    {
        return '';
    }

    /**
     * {@inheritdoc}
     */
    public function getContent(array $data = [])
    {
        return $this->templating->render('@DsAccountBundle/Resources/views/Account/widget/menu.html.twig', $data);
    }
}
