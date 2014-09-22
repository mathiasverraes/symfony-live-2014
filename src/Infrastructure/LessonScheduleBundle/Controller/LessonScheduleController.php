<?php

namespace Infrastructure\LessonScheduleBundle\Controller;

use Infrastructure\LessonScheduleBundle\Form\SwapLessonType;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;
use Symfony\Component\Form\FormFactoryInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route(service="lesson_schedule.lesson_schedule.controller")
 */
final class LessonScheduleController
{
    /**
     * @var FormFactoryInterface
     */
    private $formFactory;

    /**
     * @var EngineInterface
     */
    private $templateRenderer;

    /**
     * @param FormFactoryInterface $formFactory
     * @param EngineInterface $templateRenderer
     */
    public function __construct(FormFactoryInterface $formFactory, EngineInterface $templateRenderer)
    {
        $this->formFactory = $formFactory;
        $this->templateRenderer = $templateRenderer;
    }

    /**
     * @Route("/lesson/swap")
     */
    public function swapAction(Request $request)
    {
        $swapForm = $this->formFactory->create(new SwapLessonType());
        $swapForm->handleRequest($request);

        if ($swapForm->isValid()) {
            var_dump($swapForm->getData());exit;
        }

        return $this->templateRenderer->renderResponse(
            'LessonScheduleBundle:LessonSchedule:swap.html.twig',
            ['swapForm' => $swapForm->createView()]
        );
    }
}
