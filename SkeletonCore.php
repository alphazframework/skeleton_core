<?php

/**
 * This file is part of the Zest Framework.
 *
 * @author   :author_name <:email>
 * @author-profile :link
 *
 * For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 *
 * @since 3.0.0
 *
 * @license MIT
 */

namespace Zest\SkeletonCore;

class SkeletonCore
{
    /**
     * Create a new Skeleton Instance
     */
    public function __construct()
    {
        // constructor body
    }
    /**
     * Friendly welcome
     *
     * @param (string) $phrase Phrase to return
     *
     * @return string
     */
    public function echoPhrase(string $phrase): string
    {
        return $phrase;
    }
}
