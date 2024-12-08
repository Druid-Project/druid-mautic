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

/* @bundles/CacheBundle/Cache/Adapter/FilesystemTagAwareAdapter.php */
class __TwigTemplate_9f8d9c4bae18d438aa0dfc0888dd1424 extends Template
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

use Symfony\\Component\\Cache\\Adapter\\TagAwareAdapter;

class FilesystemTagAwareAdapter extends TagAwareAdapter
{
    public function __construct(?string \$prefix, int \$lifetime = 0, string \$directory = null)
    {
        \$prefix = 'app_cache_'.\$prefix;

        parent::__construct(
            new \\Symfony\\Component\\Cache\\Adapter\\FilesystemAdapter(\$prefix, \$lifetime, \$directory),
            new \\Symfony\\Component\\Cache\\Adapter\\FilesystemAdapter(\$prefix.'_tags')
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
        return "@bundles/CacheBundle/Cache/Adapter/FilesystemTagAwareAdapter.php";
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
        return new Source("", "@bundles/CacheBundle/Cache/Adapter/FilesystemTagAwareAdapter.php", "/app/docroot/app/bundles/CacheBundle/Cache/Adapter/FilesystemTagAwareAdapter.php");
    }
}
