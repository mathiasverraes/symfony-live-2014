<?php

namespace Infrastructure\LessonScheduleBundle\Repository;

use Model\P2_EntitesRepositories\StaffRepository;
use Model\P2_EntitesRepositories\Subject;
use Model\P2_EntitesRepositories\Teacher;
use Model\P2_EntitesRepositories\TeacherId;
use Symfony\Bridge\Doctrine\RegistryInterface;

final class DoctrineStaffRepository implements StaffRepository
{
    private $doctrine;

    public function __construct(RegistryInterface $doctrine)
    {
        $this->doctrine = $doctrine;
    }

    /**
     * @param Teacher $teacher
     * @return void
     */
    public function add(Teacher $teacher)
    {
        $manager = $this->doctrine->getManager();
        $manager->persist($teacher);
        $manager->flush();
    }

    /**
     * @param TeacherId $teacherId
     * @throws EntityNotFound
     * @return Teacher
     */
    public function get(TeacherId $teacherId)
    {
        if (!$teacher = $this->doctrine->getRepository(Teacher::class)->find($teacherId)) {
            throw new EntityNotFound();
        }

        return $teacher;
    }

    /**
     * @param Subject $subject
     * @return Teacher[]
     */
    public function teaching(Subject $subject)
    {
        return $this->doctrine
            ->getEntityManager()
            ->createQueryBuilder()
            ->select('t')
            ->from(Teacher::class, 't')
            ->join('t.subjects', 's')
            ->where('s.subject = :subject')
            ->setParameter('subject', (string) $subject)
            ->getQuery()
            ->getResult();
    }
}