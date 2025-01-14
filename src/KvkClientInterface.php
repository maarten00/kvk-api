<?php

namespace Appvise\KvkApi;

use Appvise\KvkApi\Http\QueryInterface;
use Appvise\KvkApi\Model\Link;
use Appvise\KvkApi\Model\Resultaat;

interface KvkClientInterface
{
    public function search(QueryInterface $query): Resultaat;

    public function getBasisProfiel(QueryInterface $query);

    public function getBasisProfielEigenaar(QueryInterface $query);

    public function getBasisProfielHoofdVestiging(QueryInterface $query);

    public function getBasisProfielVestigingen(QueryInterface $query);

    public function getVestigingsProfiel(QueryInterface $query);

    public function getLink(Link $link);
}
