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

/* @bundles/IntegrationsBundle/Integration/Interfaces/AuthenticationInterface.php */
class __TwigTemplate_e8e81e7a8bef6c80b198ac9704b06b36 extends Template
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

namespace Mautic\\IntegrationsBundle\\Integration\\Interfaces;

use Symfony\\Component\\HttpFoundation\\Request;

interface AuthenticationInterface extends IntegrationInterface
{
    /**
     * Returns true if the integration has already been authorized with the 3rd party service.
     */
    public function isAuthenticated(): bool;

    /**
     * This would be where one will use a client to store access tokens such as.
     *
     * @return string message to render if succeeded
     */
    public function authenticateIntegration(Request \$request): string;
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/IntegrationsBundle/Integration/Interfaces/AuthenticationInterface.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Integration/Interfaces/AuthenticationInterface.php", "/app/docroot/app/bundles/IntegrationsBundle/Integration/Interfaces/AuthenticationInterface.php");
    }
}
