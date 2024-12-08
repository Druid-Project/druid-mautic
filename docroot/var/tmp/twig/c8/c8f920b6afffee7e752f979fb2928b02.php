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

/* @bundles/CacheBundle/Command/ClearCacheCommand.php */
class __TwigTemplate_7391af38938fbb9c63ab6612484cbf00 extends Template
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

namespace Mautic\\CacheBundle\\Command;

use Mautic\\CacheBundle\\Cache\\CacheProviderInterface;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;

/**
 * CLI Command to clear the application cache.
 */
class ClearCacheCommand extends Command
{
    public function __construct(
        private CacheProviderInterface \$cacheProvider
    ) {
        parent::__construct();
    }

    protected function configure(): void
    {
        \$this->setName('mautic:cache:clear');
    }

    protected function execute(InputInterface \$input, OutputInterface \$output): int
    {
        return (int) !\$this->cacheProvider->clear();
    }

    protected static \$defaultDescription = 'Clears Mautic\\'s cache';
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CacheBundle/Command/ClearCacheCommand.php";
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
        return new Source("", "@bundles/CacheBundle/Command/ClearCacheCommand.php", "/app/docroot/app/bundles/CacheBundle/Command/ClearCacheCommand.php");
    }
}
