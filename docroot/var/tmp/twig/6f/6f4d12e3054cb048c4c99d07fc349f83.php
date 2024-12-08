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

/* @bundles/LeadBundle/Event/LeadListFiltersDecoratorDelegateEvent.php */
class __TwigTemplate_c321fedf66a12199d05f6c2df7d06a2b extends Template
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

namespace Mautic\\LeadBundle\\Event;

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\LeadBundle\\Segment\\ContactSegmentFilterCrate;
use Mautic\\LeadBundle\\Segment\\Decorator\\FilterDecoratorInterface;

final class LeadListFiltersDecoratorDelegateEvent extends CommonEvent
{
    private ?FilterDecoratorInterface \$decorator = null;

    public function __construct(
        private ContactSegmentFilterCrate \$crate
    ) {
    }

    public function getDecorator(): ?FilterDecoratorInterface
    {
        return \$this->decorator;
    }

    public function setDecorator(FilterDecoratorInterface \$decorator): self
    {
        \$this->decorator = \$decorator;

        return \$this;
    }

    public function getCrate(): ContactSegmentFilterCrate
    {
        return \$this->crate;
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
        return "@bundles/LeadBundle/Event/LeadListFiltersDecoratorDelegateEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Event/LeadListFiltersDecoratorDelegateEvent.php", "/app/docroot/app/bundles/LeadBundle/Event/LeadListFiltersDecoratorDelegateEvent.php");
    }
}
