<?php

/*
 * This file is part of the Opfura package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Opfura\CoreBundle\Model;

use Doctrine\ORM\Mapping as ORM;

use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Constituent
 *
 * @author Tom Haskins-Vaughan <tom@tomhv.uk>
 * @since  0.0.3
 */
class Constituent
{
    /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime", name="created_at")
     */
    protected $createdAt;

    /**
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime", name="updated_at")
     */
    protected $updatedAt;

    /**
     * Set createdAt
     *
     * @author Tom Haskins-Vaughan <tom@tomhv.uk>
     * @since  0.0.3
     *
     * @param  \DateTime $createdAt
     *
     * @return Constituent
     */
    public function setCreatedAt(\DateTime $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @author Tom Haskins-Vaughan <tom@tomhv.uk>
     * @since  0.0.3
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @author Tom Haskins-Vaughan <tom@tomhv.uk>
     * @since  0.0.3
     *
     * @param \DateTime $updatedAt
     *
     * @return Constituent
     */
    public function setUpdatedAt(\DateTime $updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @author Tom Haskins-Vaughan <tom@tomhv.uk>
     * @since  0.0.3
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}
