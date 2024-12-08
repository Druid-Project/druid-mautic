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

/* @bundles/CacheBundle/EventListener/CacheClearSubscriber.php */
class __TwigTemplate_2fd299b8c2de4c948fd74da343643eec extends Template
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

namespace Mautic\\CacheBundle\\EventListener;

use Mautic\\CacheBundle\\Cache\\CacheProvider;
use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\Cache\\Adapter\\AdapterInterface;
use Symfony\\Component\\HttpKernel\\CacheClearer\\CacheClearerInterface;

class CacheClearSubscriber implements CacheClearerInterface
{
    /**
     * @var CacheProvider
     */
    private AdapterInterface \$cacheProvider;

    private LoggerInterface \$logger;

    public function __construct(AdapterInterface \$cacheProvider, LoggerInterface \$logger)
    {
        \$this->cacheProvider = \$cacheProvider;
        \$this->logger        = \$logger;
    }

    /**
     * @param string \$cacheDir
     *
     * @throws \\Exception
     */
    public function clear(\$cacheDir): void
    {
        try {
            \$reflect = new \\ReflectionClass(\$this->cacheProvider->getCacheAdapter());
            \$adapter = \$reflect->getShortName();
        } catch (\\ReflectionException) {
            \$adapter = 'unknown';
        }

        try {
            if (!\$this->cacheProvider->clear()) {
                \$this->logger->emergency('Failed to clear Mautic cache.', ['adapter' => \$adapter]);
                throw new \\Exception('Failed to clear '.\$adapter);
            }
        } catch (\\PDOException) {
        }
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
        return "@bundles/CacheBundle/EventListener/CacheClearSubscriber.php";
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
        return new Source("", "@bundles/CacheBundle/EventListener/CacheClearSubscriber.php", "/app/docroot/app/bundles/CacheBundle/EventListener/CacheClearSubscriber.php");
    }
}
