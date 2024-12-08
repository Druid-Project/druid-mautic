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

/* @bundles/PointBundle/Event/PointActionEvent.php */
class __TwigTemplate_c145fd0b2fc410c1bc8f0c6e55f438bf extends Template
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

namespace Mautic\\PointBundle\\Event;

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\PointBundle\\Entity\\Point;

class PointActionEvent extends CommonEvent
{
    public function __construct(
        protected Point \$point,
        protected Lead \$lead
    ) {
    }

    /**
     * @return Point
     */
    public function getPoint()
    {
        return \$this->point;
    }

    public function setPoint(Point \$point): void
    {
        \$this->point = \$point;
    }

    /**
     * @return Lead
     */
    public function getLead()
    {
        return \$this->lead;
    }

    public function setLead(Lead \$lead): void
    {
        \$this->lead = \$lead;
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
        return "@bundles/PointBundle/Event/PointActionEvent.php";
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
        return new Source("", "@bundles/PointBundle/Event/PointActionEvent.php", "/app/docroot/app/bundles/PointBundle/Event/PointActionEvent.php");
    }
}
