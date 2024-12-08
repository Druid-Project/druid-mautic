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

/* @bundles/LeadBundle/Event/DoNotContactRemoveEvent.php */
class __TwigTemplate_c04e1a14af8740d5b61c7e8013f8319d extends Template
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

use Mautic\\LeadBundle\\Entity\\Lead;
use Symfony\\Contracts\\EventDispatcher\\Event;

final class DoNotContactRemoveEvent extends Event
{
    public const REMOVE_DONOT_CONTACT = 'mautic.lead.remove_donot_contact';

    public function __construct(
        private Lead \$lead,
        private string \$channel,
        private bool \$persist = true
    ) {
    }

    public function getLead(): Lead
    {
        return \$this->lead;
    }

    public function getChannel(): string
    {
        return \$this->channel;
    }

    public function getPersist(): bool
    {
        return \$this->persist;
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
        return "@bundles/LeadBundle/Event/DoNotContactRemoveEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Event/DoNotContactRemoveEvent.php", "/app/docroot/app/bundles/LeadBundle/Event/DoNotContactRemoveEvent.php");
    }
}
