<?php

namespace Condors\TnMallBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProduitType extends AbstractType
{
    /**
     * ProduitType constructor.
     */
    public $respoId;
    public function __construct($respoId)
    {
        $this->respoId=$respoId;
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('libelleProduit')
            ->add('categorieProduit')
            ->add('refProduit')
            ->add('descriptionProduit')
            ->add('tvaProduit')
            ->add('prixProduit')
            ->add('idCatalogue', 'entity', array(
                'class' => 'CondorsTnMallBundle:Enseigne',
                'property' => 'libelleenseigne',
                'query_builder' => function (\Condors\TnMallBundle\Entity\EnseigneRepository $repository)
                {
                    return $repository->createQueryBuilder('s')
                        ->where('s.idresponsableenseigne =:respoId')
                        ->setParameter('respoId',$this->respoId );
                      
                }
            ))
            ->add('fileFront', 'file', array('required' => false))
            ->add('fileBack', 'file', array('required' => false))
            ->add('fileReel', 'file', array('required' => false))
            ->add('submit', 'submit');
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Condors\TnMallBundle\Entity\Produit'
        ));
    }



}
