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

/* @bundles/CoreBundle/Service/BulkNotificationInterface.php */
class __TwigTemplate_51af141353f2437a20261e54277b3fe9 extends Template
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

namespace Mautic\\CoreBundle\\Service;

use Mautic\\UserBundle\\Entity\\User;

interface BulkNotificationInterface
{
    public function addNotification(
        string \$deduplicateValue,
        string \$message,
        string \$type = null,
        string \$header = null,
        string \$iconClass = null,
        \\DateTime \$datetime = null,
        User \$user = null
    ): void;

    public function flush(\\DateTime \$deduplicateDateTimeFrom = null): void;
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Service/BulkNotificationInterface.php";
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
        return new Source("", "@bundles/CoreBundle/Service/BulkNotificationInterface.php", "/app/docroot/app/bundles/CoreBundle/Service/BulkNotificationInterface.php");
    }
}
