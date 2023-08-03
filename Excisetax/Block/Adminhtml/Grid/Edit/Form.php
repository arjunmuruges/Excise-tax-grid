<?php
//
//namespace Alfakher\Excisetax\Block\Adminhtml\Grid\Edit;
//
//class Form extends \Magento\Backend\Block\Widget\Form\Generic
//{
//
//    protected $_systemStore;
//
//    public function __construct(
//        \Magento\Backend\Block\Template\Context $context,
//        \Magento\Framework\Registry $registry,
//        \Magento\Framework\Data\FormFactory $formFactory,
//        \Magento\Cms\Model\Wysiwyg\Config $wysiwygConfig,
//        \Alfakher\Excisetax\Model\Status $options,
//        array $data = []
//    )
//    {
//        $this->_options = $options;
//        $this->_wysiwygConfig = $wysiwygConfig;
//        parent::__construct($context, $registry, $formFactory, $data);
//    }
//
//    protected function _prepareForm()
//    {
//        $dateFormat = $this->_localeDate->getDateFormat(\IntlDateFormatter::SHORT);
//        $model = $this->_coreRegistry->registry('row_data');
//        $form = $this->_formFactory->create(
//            ['data' => [
//                            'id' => 'edit_form',
//                            'enctype' => 'multipart/form-data',
//                            'action' => $this->getData('action'),
//                            'method' => 'post'
//                        ]
//            ]
//        );
//        $form->setHtmlIdPrefix('wkgrid_');
//        if ($model->getEntityId()) {
//            $fieldset = $form->addFieldset(
//                'base_fieldset',
//                ['legend' => __('Edit Row Data'), 'class' => 'fieldset-wide']
//            );
//            $fieldset->addField('id', 'hidden', ['name' => 'id']);
//        } else {
//            $fieldset = $form->addFieldset(
//                'base_fieldset',
//                ['legend' => __('Add Row Data'), 'class' => 'fieldset-wide']
//            );
//        }
//        $fieldset->addField(
//            'Name',
//            'text',
//            [
//                'name' => 'country',
//                'label' => __('country'),
//                'id' => 'country',
//                'title' => __('country'),
//                'class' => 'required-entry',
//                'required' => true,
//            ]
//        );
//        $fieldset->addField(
//            'jurisdiction',
//            'text',
//            [
//                'name' => 'jurisdiction',
//                'label' => __('jurisdiction'),
//                'id' => 'jurisdiction',
//                'title' => __('jurisdiction'),
//                'class' => 'required-entry',
//                'required' => true,
//            ]
//        );
//        $fieldset->addField(
//            'b2c_eligible',
//            'text',
//            [
//                'name' => 'b2c_eligible',
//                'label' => __('b2c_eligible'),
//                'id' => 'b2c_eligible',
//                'title' => __('b2c_eligible'),
//                'class' => 'required-entry',
//                'required' => true,
//            ]
//        );
//
//        $form->setValues($model->getData());
//        $form->setUseContainer(true);
//        $this->setForm($form);
//        return parent::_prepareForm();
//    }
//}
