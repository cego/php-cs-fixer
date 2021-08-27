<?php

namespace Cego;

use PhpCsFixer\Finder;
use PhpCsFixer\Config;

class CegoFixer
{
    /**
     * Applies the company-wide ruleset to the given finder, and returns a php-cs-fixer config
     *
     * @param Finder $finder
     * @param array $customRules
     * @param false $isRiskyAllowed
     *
     * @return Config
     */
    public static function applyRules(Finder $finder, array $customRules = [], bool $isRiskyAllowed = false): Config
    {
        return (new Config())
            ->setFinder($finder)
            ->setRiskyAllowed($isRiskyAllowed)
            ->setHideProgress(false)
            ->setUsingCache(true)
            ->setRules(array_merge(CegoRuleSet::get(), $customRules));
    }
}