<?php

namespace Kronos\UserReportingBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DataType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('hours', null, array('attr' => array('min' => 0, 'max' => 9), 'required' => true, 'label' => false))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Kronos\CoreBundle\Entity\Data'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'kronos_corebundle_data';
    }

}
