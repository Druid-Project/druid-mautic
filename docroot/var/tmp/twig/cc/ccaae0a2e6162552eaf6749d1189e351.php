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

/* @bundles/LeadBundle/Event/DoNotContactAddEvent.php */
class __TwigTemplate_df10eec611edaffec4f7d52f55a0f7c3 extends Template
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

use Mautic\\LeadBundle\\Entity\\DoNotContact as DNC;
use Mautic\\LeadBundle\\Entity\\Lead;
use Symfony\\Contracts\\EventDispatcher\\Event;

final class DoNotContactAddEvent extends Event
{
    public const ADD_DONOT_CONTACT = 'mautic.lead.add_donot_contact';

    public function __construct(
        private Lead \$lead,
        private string \$channel,
        private string \$comments = '',
        private int \$reason = DNC::BOUNCED,
        private bool \$persist = true,
        private bool \$checkCurrentStatus = true,
        private bool \$override = true
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

    public function getComments(): string
    {
        return \$this->comments;
    }

    public function getReason(): int
    {
        return \$this->reason;
    }

    public function isPersist(): bool
    {
        return \$this->persist;
    }

    public function isCheckCurrentStatus(): bool
    {
        return \$this->checkCurrentStatus;
    }

    public function isOverride(): bool
    {
        return \$this->override;
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
        return "@bundles/LeadBundle/Event/DoNotContactAddEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Event/DoNotContactAddEvent.php", "/app/docroot/app/bundles/LeadBundle/Event/DoNotContactAddEvent.php");
    }
}
