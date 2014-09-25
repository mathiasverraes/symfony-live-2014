<?php

namespace Infrastructure\LessonScheduleBundle\Controller;

use Model\P2_EntitesRepositories\Name;
use Model\P2_EntitesRepositories\Subject;
use Model\P2_EntitesRepositories\Teacher;
use Model\P2_EntitesRepositories\TeacherId;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/")
     * @Template()
     */
    public function indexAction()
    {
        $teacher = new Teacher(new TeacherId(uniqid()), new Name('Test', 'Teacher'));
        $teacher->assign(new Subject('Maths'));
        $teacher->assign(new Subject('English'));
        $repo = $this->get('lesson_schedule.repository.staff');
        $repo->add($teacher);

        $foundTeachers = $repo->teaching(new Subject('Maths'));

        echo 'hello';
        foreach($foundTeachers as $foundTeacher) {
            var_dump($foundTeacher->getName());
            var_dump($foundTeacher->teaches(new Subject('Maths')));
        }
        exit;

    }
}
