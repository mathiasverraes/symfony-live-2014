<?php

namespace Model\LessonSchedule2;

interface StaffRepository
{
    /**
     * @param Teacher $teacher
     * @return void
     */
    public function add(Teacher $teacher);

    /**
     * @param TeacherId $teacherId
     * @return Teacher
     */
    public function get(TeacherId $teacherId);

    /**
     * @param Subject $subject
     * @return Teacher[]
     */
    public function teaching(Subject $subject);
}