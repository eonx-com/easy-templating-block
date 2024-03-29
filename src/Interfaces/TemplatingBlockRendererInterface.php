<?php
declare(strict_types=1);

namespace EonX\EasyTemplatingBlock\Interfaces;

use EonX\EasyUtils\Interfaces\HasPriorityInterface;

interface TemplatingBlockRendererInterface extends HasPriorityInterface
{
    public function renderBlock(TemplatingBlockInterface $block): string;

    public function supports(TemplatingBlockInterface $block): bool;
}
