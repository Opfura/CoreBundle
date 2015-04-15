<?php

/*
 * This file is part of the Opfura package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Opfura\CoreBundle\Tests\Model;

use Opfura\CoreBundle\Model\Constituent;

/**
 * ConstituentTest
 *
 * @author Tom Haskins-Vaughan <tom@tomhv.uk>
 * @since  0.0.3
 */
class ConstituentTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test createdAt
     *
     * @author Tom Haskins-Vaughan <tom@tomhv.uk>
     * @since  0.0.3
     */
    public function testCreatedAt()
    {
        $membership = new Constituent;
        $membership->setCreatedAt(new \DateTime(
            '2015-04-04 12:00:00'
        ));

        $this->assertSame(
            '2015-04-04 12:00:00',
            $membership->getCreatedAt()->format('Y-m-d H:i:s')
        );
    }

    /**
     * Test updatedAt
     *
     * @author Tom Haskins-Vaughan <tom@tomhv.uk>
     * @since  0.0.3
     */
    public function testUpdatedAt()
    {
        $membership = new Constituent;
        $membership->setUpdatedAt(new \DateTime(
            '2015-04-04 12:00:00'
        ));

        $this->assertSame(
            '2015-04-04 12:00:00',
            $membership->getUpdatedAt()->format('Y-m-d H:i:s')
        );
    }
}
