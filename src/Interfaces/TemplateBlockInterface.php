<?php

declare(strict_types=1);

namespace EonX\EasyTemplatingBlock\Interfaces;

interface TemplateBlockInterface extends TemplatingBlockInterface
{
    /**
     * @return null|mixed[]
     */
    public function getTemplateContext(): ?array;

    public function getTemplateName(): string;
}
