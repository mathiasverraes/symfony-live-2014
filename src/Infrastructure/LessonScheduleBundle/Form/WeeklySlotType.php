<?php

namespace Infrastructure\LessonScheduleBundle\Form;


use Model\P4_LessonScheduleAggregate\Time;
use Model\P4_LessonScheduleAggregate\TimeSlot;
use Model\P4_LessonScheduleAggregate\Weekday;
use Model\P4_LessonScheduleAggregate\WeeklyTimeSlot;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class WeeklySlotType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
        $builder
            ->add('day', 'choice', ['mapped' => false, 'choices' => array_combine($days, $days)])
            ->add('start', 'time', ['mapped' => false, 'input' => 'string'])
            ->add('end', 'time', ['mapped' => false, 'input' => 'string'])
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
                return new WeeklyTimeSlot(
                    new Weekday($formValue('day')),
                    new TimeSlot(
                        new Time($formValue('start')),
                        new Time($formValue('end'))
                    )
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
        return 'lesson_schedule_time_slot';
    }
}