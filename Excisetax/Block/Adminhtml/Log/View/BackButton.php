<?php
/**
 * @category Alfakher
 * @package  Alfakherd_Excisetax
 */
declare(strict_types=1);

namespace Alfakher\Excisetax\Block\Adminhtml\Log\View;

use Magento\Backend\Block\Widget\Context;
use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;
use Magento\Search\Block\Adminhtml\Synonyms\Edit\GenericButton;
use Magento\Framework\App\Response\Http;

class BackButton extends GenericButton implements ButtonProviderInterface
{
    /**
     * @var Http
     */
    protected $response;

    /**
     * SaveButton constructor.
     *
     * @param Context $context
     * @param Http $response
     */
    public function __construct(
        Context $context,
        \Magento\Framework\App\Response\Http $response,
        \Magento\Framework\Registry $registry

    ) {
        $this->response = $response;
        parent::__construct($context, $registry);
    }

    /**
     * Get the URL for the "back" action.
     *
     * @return string
     */
    public function getBackUrl()
    {
        // Set your desired back URL here
        return $this->getUrl('excisetax/log/index');
    }

    /**
     * Get the button data.
     *
     * @return array
     */
    public function getButtonData()
    {
        return [
            'label' => __('Back'),
            'class' => 'back',
            'on_click' => sprintf("location.href = '%s';", $this->getBackUrl()),
            'sort_order' => 10,
        ];
    }
}
