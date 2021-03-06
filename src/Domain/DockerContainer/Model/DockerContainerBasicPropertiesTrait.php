<?php

namespace Ph3\DockerArch\Domain\DockerContainer\Model;

/**
 * @author Cédric Dugat <cedric@dugat.me>
 */
trait DockerContainerBasicPropertiesTrait
{
    /**
     * @var string
     */
    protected $from;

    /**
     * @var string
     */
    protected $maintainer;

    /**
     * @var string
     */
    protected $workingDir;

    /**
     * @var string
     */
    protected $entryPoint;

    /**
     * @var string
     */
    protected $cmd;

    /**
     * @var string
     */
    protected $user = 'root';

    /**
     * @return string
     */
    public function getFrom(): ?string
    {
        return $this->from;
    }

    /**
     * @param string $from
     *
     * @return self
     */
    public function setFrom(string $from): self
    {
        $this->from = $from;

        return $this;
    }

    /**
     * @return string
     */
    public function getWorkingDir(): ?string
    {
        return $this->workingDir;
    }

    /**
     * @param string $workingDir
     *
     * @return self
     */
    public function setWorkingDir(string $workingDir): self
    {
        $this->workingDir = $workingDir;

        return $this;
    }

    /**
     * @return array
     */
    public function getEntryPoint(): ?array
    {
        return $this->entryPoint;
    }

    /**
     * @param array $entryPoint
     *
     * @return self
     */
    public function setEntryPoint(array $entryPoint): self
    {
        $this->entryPoint = $entryPoint;

        return $this;
    }

    /**
     * @return array
     */
    public function getCmd(): ?array
    {
        return $this->cmd;
    }

    /**
     * @param array $cmd
     *
     * @return self
     */
    public function setCmd(array $cmd): self
    {
        $this->cmd = $cmd;

        return $this;
    }

    /**
     * @return string
     */
    public function getMaintainer(): ?string
    {
        return $this->maintainer;
    }

    /**
     * @param string $maintainer
     *
     * @return self
     */
    public function setMaintainer(string $maintainer): self
    {
        $this->maintainer = $maintainer;

        return $this;
    }

    /**
     * @return string
     */
    public function getUser(): string
    {
        return $this->user;
    }

    /**
     * @param string $user
     *
     * @return self
     */
    public function setUser(string $user)
    {
        $this->user = $user;

        return $this;
    }
}
