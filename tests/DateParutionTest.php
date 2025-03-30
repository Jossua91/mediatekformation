<?php

namespace App\Tests;
use App\Entity\Formation;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use PHPUnit\Framework\TestCase;

class DateParutionTest  extends TestCase{
    public function testgetPublishedAtString() {
        $formation = new Formation();
        $formation->setPublishedAt(new DateTime("2025-01-04"));
        $this->assertEquals("04/01/2025", $formation->getPublishedAtString()); 
    }
}