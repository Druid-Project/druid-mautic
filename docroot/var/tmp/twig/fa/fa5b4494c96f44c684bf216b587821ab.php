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

/* @bundles/MessengerBundle/Message/PageHitNotification.php */
class __TwigTemplate_ddd46c7e14bdc969c74822d856b0d4ff extends Template
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

namespace Mautic\\MessengerBundle\\Message;

use Mautic\\MessengerBundle\\Message\\Traits\\MessageRequestTrait;
use Symfony\\Component\\HttpFoundation\\Request;

final class PageHitNotification
{
    use MessageRequestTrait;

    public function __construct(
        private int \$hitId,
        private Request \$request,
        private bool \$isNew,
        private bool \$isRedirect,
        private ?int \$pageId = null,
        private ?int \$leadId = null,
        ?\\DateTimeInterface \$eventTime = null
    ) {
        \$this->setEventTime(\$eventTime ?? new \\DateTimeImmutable());
    }

    public function getHitId(): int
    {
        return \$this->hitId;
    }

    public function getPageId(): ?int
    {
        return \$this->pageId;
    }

    public function getLeadId(): ?int
    {
        return \$this->leadId;
    }

    public function isNew(): bool
    {
        return \$this->isNew;
    }

    public function isRedirect(): bool
    {
        return \$this->isRedirect;
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
        return "@bundles/MessengerBundle/Message/PageHitNotification.php";
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
        return new Source("", "@bundles/MessengerBundle/Message/PageHitNotification.php", "/app/docroot/app/bundles/MessengerBundle/Message/PageHitNotification.php");
    }
}
