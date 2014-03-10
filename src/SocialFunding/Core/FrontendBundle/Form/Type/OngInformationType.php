<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 2/24/14
 * Time: 12:25 AM
 */

namespace SocialFunding\Core\FrontendBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OngInformationType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomeFantasia', 'text', array(
                'label'  => 'Nome da ONG',
            ))
            ->add('address', 'text', array(
                'label'  => 'Endereço',
            ))
            ->add('cep', 'text', array(
                'label'  => 'CEP',
            ))
            ->add('complement', 'text', array(
                'label'  => 'Complemento',
            ))
            ->add('neighborhood', 'text', array(
                'label'  => 'Bairro',
            ))
            ->add('city', 'text', array(
                'label'  => 'Cidade',
            ))
            ->add('state', 'text', array(
                'label'  => 'Estado',
            ))
            ->add('phone', 'text', array(
                'label'  => 'Telefone',
            ))
            ->add('site', 'text', array(
                'label'  => 'Site',
            ))
            ->add('nomeResponsavel', 'text', array(
                'label'  => 'Nome do responsável',
            ))
            ->add('facebookUrl', 'text', array(
                'label'  => 'Facebook',
            ))
            ->add('twitterUrl', 'text', array(
                'label'  => 'Twitter',
            ))
            ->add('description', 'textarea', array(
                'label'  => 'Sobre a ONG',
            ))
            ->add('Salvar Alterações', 'submit');
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SocialFunding\Core\SharedBundle\Entity\Ong',
        ));
    }

    public function getName()
    {
        return 'ong_information';
    }
} 