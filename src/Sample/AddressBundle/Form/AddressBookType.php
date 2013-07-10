<?php

namespace Sample\AddressBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AddressBookType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName')
            ->add('lastName')
            ->add('address1')
            ->add('address2')
            ->add('city')
            ->add('postcode')
            ->add('telephoneHome')
            ->add('telephoneMobile')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Sample\AddressBundle\Entity\AddressBook'
        ));
    }

    public function getName()
    {
        return 'sample_addressbundle_addressbooktype';
    }
}
