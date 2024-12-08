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

/* @bundles/CoreBundle/Update/StepProvider.php */
class __TwigTemplate_58afef692cc8aefc3bc19afea86d8bcd extends Template
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

namespace Mautic\\CoreBundle\\Update;

use Mautic\\CoreBundle\\Update\\Step\\StepInterface;

class StepProvider
{
    /**
     * @var StepInterface[]
     */
    private array \$initialSteps = [];

    /**
     * @var StepInterface[]
     */
    private array \$finalSteps = [];

    public function addStep(StepInterface \$step): void
    {
        if (\$step->shouldExecuteInFinalStage()) {
            \$this->finalSteps[] = \$step;

            return;
        }

        \$this->initialSteps[] = \$step;
    }

    /**
     * @return StepInterface[]
     */
    public function getInitialSteps(): array
    {
        return \$this->orderSteps(\$this->initialSteps);
    }

    /**
     * @return StepInterface[]
     */
    public function getFinalSteps(): array
    {
        return \$this->orderSteps(\$this->finalSteps);
    }

    /**
     * @return StepInterface[]
     */
    private function orderSteps(array \$steps): array
    {
        usort(\$steps, fn (StepInterface \$step1, StepInterface \$step2): int => \$step1->getOrder() <=> \$step2->getOrder());

        return \$steps;
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
        return "@bundles/CoreBundle/Update/StepProvider.php";
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
        return new Source("", "@bundles/CoreBundle/Update/StepProvider.php", "/app/docroot/app/bundles/CoreBundle/Update/StepProvider.php");
    }
}
