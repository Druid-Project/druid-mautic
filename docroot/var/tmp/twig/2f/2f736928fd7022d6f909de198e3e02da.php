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

/* @bundles/EmailBundle/Event/EmailEditSubmitEvent.php */
class __TwigTemplate_e5bb047baa70ffd12bdae000e10c41de extends Template
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

namespace Mautic\\EmailBundle\\Event;

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\EmailBundle\\Entity\\Email;

class EmailEditSubmitEvent extends CommonEvent
{
    public function __construct(
        private Email \$previousEmail,
        private Email \$currentEmail,
        private bool \$saveAndClose,
        private bool \$apply,
        private bool \$saveAsDraft,
        private bool \$applyDraft,
        private bool \$discardDraft
    ) {
    }

    public function getPreviousEmail(): Email
    {
        return \$this->previousEmail;
    }

    public function getCurrentEmail(): Email
    {
        return \$this->currentEmail;
    }

    public function isSaveAndClose(): bool
    {
        return \$this->saveAndClose;
    }

    public function isApply(): bool
    {
        return \$this->apply;
    }

    public function isSaveAsDraft(): bool
    {
        return \$this->saveAsDraft;
    }

    public function isApplyDraft(): bool
    {
        return \$this->applyDraft;
    }

    public function isDiscardDraft(): bool
    {
        return \$this->discardDraft;
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
        return "@bundles/EmailBundle/Event/EmailEditSubmitEvent.php";
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
        return new Source("", "@bundles/EmailBundle/Event/EmailEditSubmitEvent.php", "/app/docroot/app/bundles/EmailBundle/Event/EmailEditSubmitEvent.php");
    }
}
