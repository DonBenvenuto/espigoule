<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Entity\Clip;

class ClipUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $clip = new Clip();

            $clip->setNom('douche');
            $clip->setDurée(10);
            $clip->setChemin('../sources');

        $this->assertTrue($clip->getNom() === 'douche');
        $this->assertTrue($clip->getDurée() == 10);
        $this->assertTrue($clip->getChemin() === '../sources');
    }
}
