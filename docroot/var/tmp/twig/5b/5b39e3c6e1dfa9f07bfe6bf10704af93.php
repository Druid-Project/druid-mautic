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

/* @bundles/CoreBundle/Event/GeneratedColumnsEvent.php */
class __TwigTemplate_be16104195bc32c833852ea46b44bb02 extends Template
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

namespace Mautic\\CoreBundle\\Event;

use Mautic\\CoreBundle\\Doctrine\\GeneratedColumn\\GeneratedColumn;
use Mautic\\CoreBundle\\Doctrine\\GeneratedColumn\\GeneratedColumns;
use Symfony\\Contracts\\EventDispatcher\\Event;

class GeneratedColumnsEvent extends Event
{
    private GeneratedColumns \$generatedColumns;

    public function __construct()
    {
        \$this->generatedColumns = new GeneratedColumns();
    }

    public function getGeneratedColumns(): GeneratedColumns
    {
        return \$this->generatedColumns;
    }

    public function addGeneratedColumn(GeneratedColumn \$generatedColumn): void
    {
        \$this->generatedColumns->add(\$generatedColumn);
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
        return "@bundles/CoreBundle/Event/GeneratedColumnsEvent.php";
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
        return new Source("", "@bundles/CoreBundle/Event/GeneratedColumnsEvent.php", "/app/docroot/app/bundles/CoreBundle/Event/GeneratedColumnsEvent.php");
    }
}
