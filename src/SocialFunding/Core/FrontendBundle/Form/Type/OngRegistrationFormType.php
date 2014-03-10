<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 2/5/14
 * Time: 10:53 PM
 */

namespace SocialFunding\Core\FrontendBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;
use SocialFunding\Core\SharedBundle\Entity\Ong;

class OngRegistrationFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        // add your custom field
        //$builder->add('name');
        $builder->add('document')
            ->add('razaoSocial')
            ->add('nomeFantasia')
            ->add('cep')
            ->add('address')
            ->add('complement')
            ->add('neighborhood')
            ->add('city')
            ->add('state');

        //->add('email')
        /**/
    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'SocialFunding\Core\SharedBundle\Entity\Ong', // Ni de modifier la classe ici.
        );
    }

    public function getName()
    {
        return 'socialfunding_ong_registration';
    }
}