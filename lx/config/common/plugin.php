<?php

return [
	/*
	 * none - [[lx\Plugin::CACHE_NONE]] don't use cache, allways rebuild plugin
	 * on - [[lx\Plugin::CACHE_ON]] use cache if exists, else create cache
	 * strict - [[lx\Plugin::CACHE_STRICT]] allways use cache. Plugin will not build if cache doesn't exist
	 * build - [[lx\Plugin::CACHE_BUILD]] allways rebuild plugin and cache
	 * smart - [[lx\Plugin::CACHE_SMART]] update cache if files were changed
	 */
	'cacheType' => lx\PluginCacheManager::CACHE_SMART,

	// Common plugin aliases
	'aliases' => [],
	// Flag for use common plugin aliases
	'useCommonAliases' => true,

	// File name for plugin js-code
	'client' => 'client/Plugin.js',

	// Respondents map
	'respondents' => [
		'Respondent' => 'Respondent',
	],

	// Asset directories
	'images' => 'assets/images',

	// Snippets directory (or directories if value is array)
	'snippets' => 'snippets',

	// Root snippet
	'rootSnippet' => 'snippets/_root.js',
];
