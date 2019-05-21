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

interface UserInterface extends \FOS\UserBundle\Model\UserInterface
{
    /**
     * Sets the creation date.
     *
     * @param \DateTime|null $createdAt
     *
     * @return UserInterface
     */
    public function setCreatedAt(\DateTime $createdAt = null);

    /**
     * Returns the creation date.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt();

    /**
     * Sets the last update date.
     *
     * @param \DateTime|null $updatedAt
     *
     * @return UserInterface
     */
    public function setUpdatedAt(\DateTime $updatedAt = null);

    /**
     * Returns the last update date.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt();

    /**
     * Sets the user groups.
     *
     * @param array $groups
     *
     * @return UserInterface
     */
    public function setGroups($groups);

    /**
     * Sets the two-step verification code.
     *
     * @param string $twoStepVerificationCode
     *
     * @return UserInterface
     */
    public function setTwoStepVerificationCode($twoStepVerificationCode);

    /**
     * Returns the two-step verification code.
     *
     * @return string
     */
    public function getTwoStepVerificationCode();

    /**
     * @param string $token
     *
     * @return UserInterface
     */
    public function setToken($token);

    /**
     * @return string
     */
    public function getToken();

    /**
     * @return string
     */
    public function getFullname();

    /**
     * @return array
     */
    public function getRealRoles();

    /**
     * @param array $roles
     *
     * @return UserInterface
     */
    public function setRealRoles(array $roles);
}
