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

/* @bundles/CoreBundle/Predis/Replication/StrategyConfig.php */
class __TwigTemplate_7ca25ca8f554d046c5a1ce1e5d79112a extends Template
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

namespace Mautic\\CoreBundle\\Predis\\Replication;

final class StrategyConfig
{
    public function __construct(
        private bool \$primaryOnly
    ) {
    }

    /**
     * @param mixed[] \$options
     */
    public static function fromArray(array \$options): self
    {
        return new StrategyConfig(\$options['primaryOnly'] ?? false);
    }

    /**
     * Use primary Redis server for reads and writes only.
     * The secondary Redis replicas will not be used at all when TRUE.
     */
    public function usePrimaryOnly(): bool
    {
        return \$this->primaryOnly;
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
        return "@bundles/CoreBundle/Predis/Replication/StrategyConfig.php";
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
        return new Source("", "@bundles/CoreBundle/Predis/Replication/StrategyConfig.php", "/app/docroot/app/bundles/CoreBundle/Predis/Replication/StrategyConfig.php");
    }
}
