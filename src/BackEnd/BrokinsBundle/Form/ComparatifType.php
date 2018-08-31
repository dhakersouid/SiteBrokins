<?php

namespace BackEnd\BrokinsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ComparatifType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('numeroComparatif')->add('dateCreation')->add('dateEnvoi')->add('nombreAssureur')->add('identifiantBrokins')->add('referenceDocumentaire')->add('produitTechnique');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BackEnd\BrokinsBundle\Entity\Comparatif'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'backend_brokinsbundle_comparatif';
    }


}
