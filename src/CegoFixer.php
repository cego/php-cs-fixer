<?php

namespace Cego;

use Traversable;
use PhpCsFixer\Finder;
use PhpCsFixer\Config;
use PhpCsFixer\Fixer\FixerInterface;

class CegoFixer
{
    /**
     * Applies the company-wide ruleset to the given finder, and returns a php-cs-fixer config
     *
     * @param Finder $finder
     * @param array $customRules
     * @param false $isRiskyAllowed
     * @param FixerInterface[]|iterable|Traversable $customFixers
     *
     * @return Config
     */
    public static function applyRules(Finder $finder, array $customRules = [], bool $isRiskyAllowed = false, iterable $customFixers = []): Config
    {
        return (new Config())
            ->setFinder($finder)
            ->setRiskyAllowed($isRiskyAllowed)
            ->setHideProgress(false)
            ->setUsingCache(true)
            ->registerCustomFixers($customFixers)
            ->setRules(array_merge(CegoRuleSet::get(), $customRules));
    }
}