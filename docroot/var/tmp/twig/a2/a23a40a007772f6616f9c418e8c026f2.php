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

/* @bundles/CoreBundle/Cache/ResultCacheOptions.php */
class __TwigTemplate_495394b93eff7b5e04d8f26b34dcebf0 extends Template
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

namespace Mautic\\CoreBundle\\Cache;

class ResultCacheOptions
{
    /**
     * @param string  \$namespace mainly used for invalidation
     * @param ?int    \$ttl       in seconds
     * @param ?string \$id        will be autogenerated from the query if not provided. Use only if you know what you are doing.
     */
    public function __construct(private string \$namespace, private ?int \$ttl = null, private ?string \$id = null)
    {
    }

    public function getNamespace(): string
    {
        return \$this->namespace;
    }

    public function getTtl(): ?int
    {
        return \$this->ttl;
    }

    public function getId(): ?string
    {
        return \$this->id;
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
        return "@bundles/CoreBundle/Cache/ResultCacheOptions.php";
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
        return new Source("", "@bundles/CoreBundle/Cache/ResultCacheOptions.php", "/app/docroot/app/bundles/CoreBundle/Cache/ResultCacheOptions.php");
    }
}
