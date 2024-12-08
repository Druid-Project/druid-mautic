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

/* @bundles/CacheBundle/Cache/Adapter/RedisTagAwareAdapter.php */
class __TwigTemplate_77904a4d3190d252488a0fbb4a6a5b54 extends Template
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

declare(strict_types=1);

namespace Mautic\\CacheBundle\\Cache\\Adapter;

use Mautic\\CacheBundle\\Exceptions\\InvalidArgumentException;
use Mautic\\CoreBundle\\Helper\\PRedisConnectionHelper;
use Symfony\\Component\\Cache\\Adapter\\RedisAdapter;
use Symfony\\Component\\Cache\\Adapter\\TagAwareAdapter;

class RedisTagAwareAdapter extends TagAwareAdapter
{
    public function __construct(array \$servers, string \$namespace, int \$lifetime, bool \$primaryOnly)
    {
        if (!isset(\$servers['dsn'])) {
            throw new InvalidArgumentException('Invalid redis configuration. No server specified.');
        }

        \$options = array_key_exists('options', \$servers) ? \$servers['options'] : [];

        \$options['primaryOnly'] = \$primaryOnly;

        \$client = PRedisConnectionHelper::createClient(PRedisConnectionHelper::getRedisEndpoints(\$servers['dsn']), \$options);

        parent::__construct(
            new RedisAdapter(\$client, \$namespace, \$lifetime),
            new RedisAdapter(\$client, \$namespace.'.tags.', \$lifetime)
        );
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
        return "@bundles/CacheBundle/Cache/Adapter/RedisTagAwareAdapter.php";
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
        return new Source("", "@bundles/CacheBundle/Cache/Adapter/RedisTagAwareAdapter.php", "/app/docroot/app/bundles/CacheBundle/Cache/Adapter/RedisTagAwareAdapter.php");
    }
}
