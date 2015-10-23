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
     * name
     *
     * @ORM\Column(type="string", name="name")
     */
    protected $name;

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
     * doNotMail
     *
     * @ORM\Column(
     *     type="boolean",
     *     name="do_not_mail",
     *     nullable=true
     * )
     */
    protected $doNotMail = false;

    /**
     * doNotEmail
     *
     * @ORM\Column(
     *     type="boolean",
     *     name="do_not_email",
     *     nullable=true
     * )
     */
    protected $doNotEmail = false;

    /**
     * __toString
     *
     * @author Tom Haskins-Vaughan <tom@tomhv.uk>
     * @since  0.6.0
     *
     * @return string
     */
    public function __toString()
    {
        return $this->getName();
    }

    /**
     * Set name
     *
     * @author Tom Haskins-Vaughan <tom@tomhv.uk>
     * @since  0.5.0
     *
     * @param string $name
     *
     * @return Student
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @author Tom Haskins-Vaughan <tom@tomhv.uk>
     * @since  0.5.0
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

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

    /**
     * Set doNotEmail
     *
     * @author Tom Haskins-Vaughan <tom@tomhv.uk>
     * @since  0.0.3
     *
     * @param bool $doNotEmail
     *
     * @return Constituent
     */
    public function setDoNotEmail($doNotEmail)
    {
        $this->doNotEmail = (bool) $doNotEmail;

        return $this;
    }

    /**
     * Get doNotEmail
     *
     * @author Tom Haskins-Vaughan <tom@tomhv.uk>
     * @since  0.0.3
     *
     * @return bool
     */
    public function getDoNotEmail()
    {
        return $this->doNotEmail;
    }

    /**
     * Set doNotMail
     *
     * @author Tom Haskins-Vaughan <tom@tomhv.uk>
     * @since  0.0.3
     *
     * @param bool $doNotMail
     *
     * @return Constituent
     */
    public function setDoNotMail($doNotMail)
    {
        $this->doNotMail = (bool) $doNotMail;

        return $this;
    }

    /**
     * Get doNotMail
     *
     * @author Tom Haskins-Vaughan <tom@tomhv.uk>
     * @since  0.0.3
     *
     * @return bool
     */
    public function getDoNotMail()
    {
        return $this->doNotMail;
    }
}
