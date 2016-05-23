<?php

namespace Condors\TnMallBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CartedefideliteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public $respoId;

    public function __construct($respoId)
    {
        $this->respoId = $respoId;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nbrepoints')
           
            ->add('idenseigne', 'entity', array(
                'class' => 'CondorsTnMallBundle:Enseigne',
                'property' => 'libelleenseigne',
                'query_builder' => function (\Condors\TnMallBundle\Entity\EnseigneRepository $repository) {
                    return $repository->createQueryBuilder('s')
                        ->where('s.idresponsableenseigne =:respoId')
                        ->setParameter('respoId', $this->respoId);

                }
            ))
            ->add('id')
            ->add('submit', 'submit');
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Condors\TnMallBundle\Entity\Cartedefidelite'
        ));
    }
}
