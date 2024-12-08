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

/* @bundles/CoreBundle/Event/EntityValidateEvent.php */
class __TwigTemplate_4f7b6dee2f991652a177d072808b5b42 extends Template
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

use Mautic\\CoreBundle\\Validator\\EntityEvent;
use Symfony\\Component\\Validator\\Context\\ExecutionContextInterface;
use Symfony\\Contracts\\EventDispatcher\\Event;

class EntityValidateEvent extends Event
{
    public function __construct(private object \$entity, private EntityEvent \$constraint, private ExecutionContextInterface \$context)
    {
    }

    public function getEntity(): object
    {
        return \$this->entity;
    }

    public function getConstraint(): EntityEvent
    {
        return \$this->constraint;
    }

    public function getContext(): ExecutionContextInterface
    {
        return \$this->context;
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
        return "@bundles/CoreBundle/Event/EntityValidateEvent.php";
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
        return new Source("", "@bundles/CoreBundle/Event/EntityValidateEvent.php", "/app/docroot/app/bundles/CoreBundle/Event/EntityValidateEvent.php");
    }
}
