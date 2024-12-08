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

/* @bundles/StageBundle/Event/StageEvent.php */
class __TwigTemplate_8cc2ece069d250433aea10b7531e1791 extends Template
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

namespace Mautic\\StageBundle\\Event;

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\StageBundle\\Entity\\Stage;

class StageEvent extends CommonEvent
{
    /**
     * @param bool \$isNew
     */
    public function __construct(Stage &\$stage, \$isNew = false)
    {
        \$this->entity = &\$stage;
        \$this->isNew  = \$isNew;
    }

    /**
     * Returns the Stage entity.
     *
     * @return Stage
     */
    public function getStage()
    {
        return \$this->entity;
    }

    /**
     * Sets the Stage entity.
     */
    public function setStage(Stage \$stage): void
    {
        \$this->entity = \$stage;
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
        return "@bundles/StageBundle/Event/StageEvent.php";
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
        return new Source("", "@bundles/StageBundle/Event/StageEvent.php", "/app/docroot/app/bundles/StageBundle/Event/StageEvent.php");
    }
}
