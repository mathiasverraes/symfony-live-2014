<?php

namespace Infrastructure\LessonScheduleBundle\Form;


use Model\P4_LessonScheduleAggregate\GroupName;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class GroupType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $groups = $this->getGroupChoices();
        $builder
            ->add('name', 'choice', ['mapped' => false, 'choices' => array_combine($groups, $groups)])
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'empty_data' => function (FormInterface $form) {
                return new GroupName($form->get('name')->getData());
            },
        ));
    }

    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        return 'lesson_schedule_group';
    }

    /**
     * @return array
     */
    private function getGroupChoices()
    {
        $groups = [];

        foreach (range(1, 6) as $num) {
            foreach (range('A', 'F') as $letter) {
                $groups[] = $num . $letter;
            }
        }

        return $groups;
    }
}