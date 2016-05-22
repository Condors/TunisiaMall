<?php

namespace Condors\TnMallBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BoutiqueType extends AbstractType
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
            ->add('libelleBoutique')
            ->add('idEnseigne', 'entity', array(
                'class' => 'CondorsTnMallBundle:Enseigne',
                'property' => 'libelleenseigne',
                'query_builder' => function (\Condors\TnMallBundle\Entity\EnseigneRepository $repository)
                {
                    return $repository->createQueryBuilder('s')
                        ->where('s.idresponsableenseigne =:respoId')
                        ->setParameter('respoId',$this->respoId );

                }
            ))
            ->add('categorieBoutique')
            ->add('descriptionBoutique')
            ->add('tel')
            ->add('email')
            ->add('file1', 'file', array('required' => false))
            ->add('file2', 'file', array('required' => false))
            ->add('file3', 'file', array('required' => false))
            ->add('submit', 'submit')
        ;
        
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Condors\TnMallBundle\Entity\Boutique'
        ));
    }
}
