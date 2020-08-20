<?php

declare(strict_types=1);

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\UserBundle\Model;

use FOS\UserBundle\Model\User as AbstractedUser;

/**
 * Represents a User model.
 */
abstract class User extends AbstractedUser implements UserInterface
{
    /**
     * @var \DateTime|null
     */
    protected $createdAt;

    /**
     * @var \DateTime|null
     */
    protected $updatedAt;

    /**
     * @var string
     */
    protected $twoStepVerificationCode;

    /**
     * @var string
     */
    protected $token;

    /**
     * Returns a string representation.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->getUsername() ?: '-';
    }

    /**
     * {@inheritdoc}
     */
    public function setCreatedAt(?\DateTime $createdAt = null)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * {@inheritdoc}
     */
    public function setUpdatedAt(?\DateTime $updatedAt = null)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * {@inheritdoc}
     */
    public function setGroups($groups)
    {
        foreach ($groups as $group) {
            $this->addGroup($group);
        }

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setTwoStepVerificationCode($twoStepVerificationCode)
    {
        $this->twoStepVerificationCode = $twoStepVerificationCode;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getTwoStepVerificationCode()
    {
        return $this->twoStepVerificationCode;
    }

    /**
     * {@inheritdoc}
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * {@inheritdoc}
     */
    public function getFullname()
    {
        //return sprintf('%s %s', $this->getFirstname(), $this->getLastname());
        return $this->getUsername();
    }

    /**
     * {@inheritdoc}
     */
    public function getRealRoles()
    {
        return $this->roles;
    }

    /**
     * {@inheritdoc}
     */
    public function setRealRoles(array $roles)
    {
        $this->setRoles($roles);

        return $this;
    }
}
