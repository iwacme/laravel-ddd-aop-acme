<?php

namespace Acme\Domain\Entity;

/**
 * Class Project
 *
 * @package Acme\Domain\Entity
 * @author Ulf Tiburtius <ulf@idea-works.de>
 * @since 2017/05/07
 */
class Project
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return void
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }
}
