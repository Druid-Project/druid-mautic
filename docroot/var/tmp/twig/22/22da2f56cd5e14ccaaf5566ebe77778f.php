<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @bundles/EmailBundle/Helper/RequestStorageHelper.php */
class __TwigTemplate_69ea78e2c4d227b425ef476a79e846ee extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<?php

namespace Mautic\\EmailBundle\\Helper;

use Mautic\\CacheBundle\\Cache\\CacheProviderInterface;
use Psr\\Cache\\InvalidArgumentException;
use Symfony\\Component\\HttpFoundation\\Request;

/**
 * Helper class for storing request payload to a cache location and retrieving it back as a Request.
 *
 * @deprecated as unused. To be removed in Mautic 6.0.
 */
class RequestStorageHelper
{
    /**
     * Separator between the transport class name and random hash.
     */
    public const KEY_SEPARATOR = ';webhook_request;';

    public function __construct(
        private CacheProviderInterface \$cacheStorage
    ) {
    }

    /**
     * Stores the request content into cache and returns the unique key under which it's stored.
     *
     * @param string \$transportName
     */
    public function storeRequest(\$transportName, Request \$request): string
    {
        \$key  = \$this->getUniqueCacheHash(\$transportName);
        \$item = \$this->cacheStorage->getItem(\$key);
        \$item->set(\$request->request->all());
        \$this->cacheStorage->save(\$item);

        return \$key;
    }

    /**
     * Creates new Request with the original payload.
     *
     * @param string \$key
     *
     * @throws \\UnexpectedValueException
     */
    public function getRequest(\$key): Request
    {
        \$error = \"Request with key '{\$key}' was not found.\";
        \$key   = \$this->removeCachePrefix(\$key);

        try {
            \$item = \$this->cacheStorage->getItem(\$key);
        } catch (InvalidArgumentException) {
            throw new \\UnexpectedValueException(\$error);
        }

        if (!\$item->isHit()) {
            throw new \\UnexpectedValueException(\$error);
        }

        return new Request([], \$item->get());
    }

    /**
     * @param string \$key
     */
    public function deleteCachedRequest(\$key): void
    {
        \$this->cacheStorage->deleteItem(\$this->removeCachePrefix(\$key));
    }

    /**
     * Reads the transport class name path from the key.
     *
     * @param string \$key
     *
     * @return string
     */
    public function getTransportNameFromKey(\$key)
    {
        \$key = \$this->removeCachePrefix(\$key);

        // Take the part before the key separator as the serialized transpot name.
        [\$serializedTransportName] = explode(self::KEY_SEPARATOR, \$key);

        // Unserialize transport name to the standard full class name.
        \$transportName = str_replace('|', '\\\\', \$serializedTransportName);

        return \$transportName;
    }

    /**
     * Remove the default cache key prefix if set.
     */
    private function removeCachePrefix(string \$key): string
    {
        if (str_starts_with(\$key, 'mautic:')) {
            \$key = ltrim(\$key, 'mautic:');
        }

        return \$key;
    }

    /**
     * Generates unique hash in format \$transportName:webhook_request:unique.hash.
     */
    private function getUniqueCacheHash(string \$transportName): string
    {
        return uniqid(str_replace('\\\\', '|', \$transportName).self::KEY_SEPARATOR, true);
    }
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/EmailBundle/Helper/RequestStorageHelper.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/EmailBundle/Helper/RequestStorageHelper.php", "/app/docroot/app/bundles/EmailBundle/Helper/RequestStorageHelper.php");
    }
}
