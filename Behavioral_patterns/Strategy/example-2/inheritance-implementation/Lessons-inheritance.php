<?php
/**
 * Проблемы: появляется дублирующий код (конструкция switch). Лучше воспользоваться полиморфизмом.
 */

abstract class Lesson
{
    protected $duration;
    const     FIXED = 1;
    const     TIMED = 2;
    private   $costtype;

    public function __construct(int $duration, int $costtype = 1)
    {
        $this->duration = $duration;
        $this->costtype = $costtype;
    }

    public function cost(): int
    {
        switch ($this->costtype) {
            case self::TIMED:
                return (5 * $this->duration);
                break;
            case self::FIXED:
                return 30;
                break;
            default:
                $this->costtype = self::FIXED;
                return 30;
        }
    }

    public function chargeType(): string
    {
        switch ($this->costtype) {
            case self::TIMED:
                return "hourly rate";
                break;
            case self::FIXED:
                return "fixed rate";
                break;
            default:
                $this->costtype = self::FIXED;
                return "fixed rate";
        }
    }

    // more lesson methods...
}

class Lecture extends Lesson {
    // TODO....
}

class Seminar extends Lesson {
    // TODO....
}

