<?php

/**
 * Copyright (C) 2014 Orange
 */

namespace Kronos\UserReportingBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Kronos\UserReportingBundle\Form\DataType;

class LineType extends AbstractType {

    private $inputAttr;
    private $type;
    private $name;

    public function __construct($config = array('type' => null, 'name' => 'kronos_line_form')) {
        $this->type = isset($config['type']) ? $config['type'] : null;
        $this->name = isset($config['name']) ? $config['name'] : 'kronos_form_line';
        $this->name .= isset($config['id']) ? "_{$config['id']}" : null;
        $this->inputAttr = array('required' => true, 'label' => false, 'attr' => array('label_col' => 2, 'widget_col' => 2));
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        if ($this->type == 'createLine') {
            $builder->add('line_type', null, $this->inputAttr);
        } else {
            //$builder->add('line_type', null, $this->inputAttr);
        }
        $builder->add('project', null, $this->inputAttr)
                ->add('task_type', null, $this->inputAttr)
                //'allow_add' => true, 'allow_delete' => true,
                //->add('datas', 'bootstrap_collection', array('sub_widget_col' => 4, 'label' => 'Days', 'type' => new DataType(), 'attr' => array('style' => 'horizontal', 'align_with_widget' => true)));
                ->add('datas', 'collection', array('type' => new DataType()));
        if ($this->type == 'createLine') {
            //$builder->add('save', 'submit');
        }
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Kronos\CoreBundle\Entity\Line'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return $this->name;
    }

}
