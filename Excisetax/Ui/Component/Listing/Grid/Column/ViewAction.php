<?php
/**
 * @category Alfakher
 * @package  Alfakherd_Excisetax
 */
declare(strict_types=1);

namespace Alfakher\Excisetax\Ui\Component\Listing\Grid\Column;

use Magento\Framework\UrlInterface;
use Magento\Framework\View\Element\UiComponent\ContextInterface;
use Magento\Framework\View\Element\UiComponentFactory;
use Magento\Ui\Component\Listing\Columns\Column;


class ViewAction extends Column
{
    public const URL_EDIT_PATH = 'excisetax/log/view';
    /**
     * @var UrlInterface
     */
    protected UrlInterface $urlBuilder;
    /**
     * @param UrlInterface $urlBuilder
     * @param ContextInterface $context
     * @param UiComponentFactory $uiComponentFactory
     * @param array $components
     * @param array $data
     */
    public function __construct(
        UrlInterface $urlBuilder,
        ContextInterface $context,
        UiComponentFactory $uiComponentFactory,
        array $components = [],
        array $data = []
    ) {
        $this->urlBuilder = $urlBuilder;
        parent::__construct($context, $uiComponentFactory, $components, $data);
    }

    /**
     * Prepare Data Source
     *
     * @param array $dataSource
     * @return array
     */
    public function prepareDataSource(array $dataSource): array
    {


        if (isset($dataSource['data']['items'])) {
            foreach ($dataSource['data']['items'] as &$item) {
                if (isset($item['id'])) {
                    $item[$this->getData('name')] = [
                        'view' => [
                            'href' => $this->urlBuilder->getUrl(
                                static::URL_EDIT_PATH,
                                [
                                    'id' => $item['id'],
                                ]
                            ),
                            'label' => __('View'),
                        ],
                    ];
                }
            }
        }
        return $dataSource;
    }
}
