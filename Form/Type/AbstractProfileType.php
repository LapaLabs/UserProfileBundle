<?php

namespace LapaLabs\UserProfileBundle\Form\Type;

use LapaLabs\UserProfileBundle\Model\AbstractProfile;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

abstract class AbstractProfileType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('surname', 'text', [
                'label' => 'user.profile.field.surname',
            ])
            ->add('name', 'text', [
                'label' => 'user.profile.field.name',
            ])
            ->add('patronymic', 'text', [
                'label' => 'user.profile.field.patronymic',
            ])
            ->add('gender', 'choice', [
                'label' => 'user.profile.field.gender',
                'choices' => [
                    AbstractProfile::GENDER_FEMALE => 'user.profile.gender.female',
                    AbstractProfile::GENDER_MALE => 'user.profile.gender.male',
                ],
                'expanded' => true,
            ])
            ->add('birthDate', 'birthday', [
                'label' => 'user.profile.field.birth_date',
            ])
            ->add('country', 'text', [
                'label' => 'user.profile.field.country',
            ])
            ->add('district', 'text', [
                'label' => 'user.profile.field.district',
            ])
            ->add('city', 'text', [
                'label' => 'user.profile.field.city',
            ])
            ->add('address', 'text', [
                'label' => 'user.profile.field.address',
            ])
            ->add('biography', 'textarea', [
                'label' => 'user.profile.field.biography',
            ])
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => AbstractProfile::class,
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'll_user_profile';
    }
}
