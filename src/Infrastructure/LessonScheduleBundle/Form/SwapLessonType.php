<?php

namespace Infrastructure\LessonScheduleBundle\Form;


use Model\P4_LessonScheduleAggregate\GroupName;
use Model\P4_LessonScheduleAggregate\SchoolYear;
use Model\P6_Commands\SwapLessons;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SwapLessonType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $years = range(date('Y'), date('Y') - 5);
        $builder
            ->add('schoolYear', 'choice', ['mapped' => false, 'choices' => array_combine($years, $years)])
            ->add('leftGroup', new GroupType(), ['mapped' => false])
            ->add('leftTimeSlot', new WeeklySlotType(), ['mapped' => false])
            ->add('rightGroup', new GroupType(), ['mapped' => false])
            ->add('rightTimeSlot', new WeeklySlotType(), ['mapped' => false])
            ->add('Swap Lessons', 'submit')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $formDataGetter = function ($form) {
            return function ($field) use ($form) {return $form->get($field)->getData();};
        };

        $resolver->setDefaults(array(
            'empty_data' => function (FormInterface $form) use ($formDataGetter) {
                $formValue = $formDataGetter($form);
                return new SwapLessons(
                    SchoolYear::startingIn((int) $formValue('schoolYear')),
                    $formValue('leftGroup'),
                    $formValue('leftTimeSlot'),
                    $formValue('rightGroup'),
                    $formValue('rightTimeSlot')
                );
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
        return 'lesson_schedule_swap';
    }
}