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

/* @bundles/EmailBundle/Mailer/Transport/TokenTransportInterface.php */
class __TwigTemplate_fd6295eb372f49c7d80583e85b3a8887 extends Template
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

namespace Mautic\\EmailBundle\\Mailer\\Transport;

use Symfony\\Component\\Mime\\Email;

interface TokenTransportInterface
{
    /**
     * Return the max number of to addresses allowed per batch.  If there is no limit, return 0.
     */
    public function getMaxBatchLimit(): int;

    /**
     * Get the count for the max number of recipients per batch.
     *
     * @param int    \$toBeAdded Number of emails about to be added
     * @param string \$type      Type of emails being added (to, cc, bcc)
     */
    public function getBatchRecipientCount(Email \$message, int \$toBeAdded = 1, string \$type = 'to'): int;
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/EmailBundle/Mailer/Transport/TokenTransportInterface.php";
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
        return new Source("", "@bundles/EmailBundle/Mailer/Transport/TokenTransportInterface.php", "/app/docroot/app/bundles/EmailBundle/Mailer/Transport/TokenTransportInterface.php");
    }
}
