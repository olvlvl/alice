<?php

/*
 * This file is part of the Alice package.
 *  
 * (c) Nelmio <hello@nelm.io>
 *  
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nelmio\Alice\Generator;

use Nelmio\Alice\FixtureInterface;
use Nelmio\Alice\Throwable\InstantiationThrowable;

interface InstantiatorInterface
{
    /**
     * Instantiates the object described by the given fixture. Has access to the current fixture set and returns the new
     * fixture set containing the instantiated the object.
     *
     * @param FixtureInterface   $fixture
     * @param ResolvedFixtureSet $fixtureSet
     * @param GenerationContext  $context
     *
     * @throws InstantiationThrowable
     *
     * @return ResolvedFixtureSet
     */
    public function instantiate(
        FixtureInterface $fixture,
        ResolvedFixtureSet $fixtureSet,
        GenerationContext $context
    ): ResolvedFixtureSet;
}
