<?php

declare(strict_types=1);

namespace Appvise\KvkApi\Model\Company;

class EmbeddedContainer
{
    private $hoofdvestiging;
    private $eigenaar;

    public function __construct(Eigenaar $eigenaar, ?Vestiging $hoofdvestiging)
    {
        $this->hoofdvestiging = $hoofdvestiging;
        $this->eigenaar = $eigenaar;
    }

    public function toArray()
    {
        return [
            'hoofdvestiging' => $this->hoofdvestiging !== null ? $this->hoofdvestiging->toArray() : null,
            'eigenaar' => $this->eigenaar !== null ? $this->eigenaar->toArray() : null,
        ];
    }

    public function getHoofdvestiging(): ?Vestiging
    {
        return $this->hoofdvestiging;
    }

    public function getEigenaar(): Eigenaar
    {
        return $this->eigenaar;
    }
}
