<?php

namespace Modera\AutomotiveUtil\ModelInterface;

/**
 * @author  Alexander Ivanitsa <alexander.ivanitsa@modera.net>
 * @copyright 2017 Modera Foundation
 */
interface BrieflyApiModelInterface
{
    public function getId();

    public function getExtId();

    public function getName();

    public function getHref();
}