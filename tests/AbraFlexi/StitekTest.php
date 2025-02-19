<?php

declare(strict_types=1);

/**
 * This file is part of the EaseCore package.
 *
 * (c) Vítězslav Dvořák <http://vitexsoftware.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Test\AbraFlexi;

use AbraFlexi\Stitek;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2024-10-02 at 10:07:10.
 */
class StitekTest extends \PHPUnit\Framework\TestCase
{
    protected Stitek $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp(): void
    {
        $this->object = new Stitek();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown(): void
    {
    }

    /**
     * @covers \AbraFlexi\Stitek::getLabels
     *
     * @todo   Implement testgetLabels().
     */
    public function testgetLabels(): void
    {
        $this->assertEquals('', $this->object->getLabels());
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete('This test has not been implemented yet.');
    }

    /**
     * @covers \AbraFlexi\Stitek::listToArray
     *
     * @todo   Implement testlistToArray().
     */
    public function testlistToArray(): void
    {
        $this->assertEquals('', $this->object->listToArray());
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete('This test has not been implemented yet.');
    }

    /**
     * @covers \AbraFlexi\Stitek::getAvailbleLabels
     *
     * @todo   Implement testgetAvailbleLabels().
     */
    public function testgetAvailbleLabels(): void
    {
        $this->assertEquals('', $this->object->getAvailbleLabels());
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete('This test has not been implemented yet.');
    }

    /**
     * @covers \AbraFlexi\Stitek::setLabel
     *
     * @todo   Implement testsetLabel().
     */
    public function testsetLabel(): void
    {
        $this->assertEquals('', $this->object->setLabel());
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete('This test has not been implemented yet.');
    }

    /**
     * @covers \AbraFlexi\Stitek::unsetLabel
     *
     * @todo   Implement testunsetLabel().
     */
    public function testunsetLabel(): void
    {
        $this->assertEquals('', $this->object->unsetLabel());
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete('This test has not been implemented yet.');
    }

    /**
     * @covers \AbraFlexi\Stitek::createNew
     *
     * @todo   Implement testcreateNew().
     */
    public function testcreateNew(): void
    {
        $this->assertEquals('', $this->object->createNew());
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete('This test has not been implemented yet.');
    }
}
