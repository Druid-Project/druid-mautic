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

/* @bundles/IntegrationsBundle/Controller/AuthController.php */
class __TwigTemplate_1f4f435da14c6d56d813c453bc19f047 extends Template
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

namespace Mautic\\IntegrationsBundle\\Controller;

use Mautic\\CoreBundle\\Controller\\CommonController;
use Mautic\\IntegrationsBundle\\Exception\\IntegrationNotFoundException;
use Mautic\\IntegrationsBundle\\Exception\\UnauthorizedException;
use Mautic\\IntegrationsBundle\\Helper\\AuthIntegrationsHelper;
use Symfony\\Component\\HttpFoundation\\Request;

class AuthController extends CommonController
{
    public function callbackAction(AuthIntegrationsHelper \$authIntegrationsHelper, string \$integration, Request \$request)
    {
        \$authenticationError = false;

        try {
            \$authIntegration = \$authIntegrationsHelper->getIntegration(\$integration);
            \$message         = \$authIntegration->authenticateIntegration(\$request);
        } catch (UnauthorizedException \$exception) {
            \$message             = \$exception->getMessage();
            \$authenticationError = true;
        } catch (IntegrationNotFoundException) {
            return \$this->notFound();
        }

        return \$this->render(
            '@Integrations/Auth/authenticated.html.twig',
            [
                'message'             => \$message,
                'authenticationError' => \$authenticationError,
            ]
        );
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
        return "@bundles/IntegrationsBundle/Controller/AuthController.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Controller/AuthController.php", "/app/docroot/app/bundles/IntegrationsBundle/Controller/AuthController.php");
    }
}
