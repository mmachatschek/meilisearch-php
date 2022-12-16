<?php

declare(strict_types=1);

namespace Meilisearch {
    class Meilisearch
    {
        public const VERSION = '0.26.0';
    
        public static function qualifiedVersion()
        {
            return sprintf('Meilisearch PHP (v%s)', self::VERSION);
        }
    }
};

// Fallback for laravel/scout to not break backwards compatibility
namespace MeiliSearch {
    class MeiliSearch extends Meilisearch\Meilisearch {}
};