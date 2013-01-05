<?php

namespace Dreamheads\Bundle\LeadCRMBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LeadType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('time')
            ->add('name')
            ->add('phone')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Dreamheads\Bundle\LeadCRMBundle\Entity\Lead'
        ));
    }

    public function getName()
    {
        return 'dreamheads_bundle_leadcrmbundle_leadtype';
    }
}
