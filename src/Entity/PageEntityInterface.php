<?php

namespace Mtt\EasyPageBundle\Entity;

use Doctrine\Common\Collections\Collection;

interface PageEntityInterface
{
    const PAGE_PARAM_ALIAS = 'mtt_easy_page.page_entity';

    public function getChilds():?Collection;

}

