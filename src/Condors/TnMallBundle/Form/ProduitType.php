<?php

namespace Condors\TnMallBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProduitType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('libelleProduit')
                ->add('categorieProduit')
                ->add('refProduit')
                ->add('descriptionProduit')
                ->add('tvaProduit')
                ->add('prixProduit')
                ->add('fileFront', 'file', array('required' => false))
                ->add('fileBack', 'file', array('required' => false))
                ->add('fileReel', 'file', array('required' => false))
                ->add('submit', 'submit')
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Condors\TnMallBundle\Entity\Produit'
        ));
    }

}
