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

/* @bundles/ApiBundle/Helper/RequestHelper.php */
class __TwigTemplate_b55987af8fe7756a2a8c363edeb7b810 extends Template
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

namespace Mautic\\ApiBundle\\Helper;

use Symfony\\Component\\HttpFoundation\\Request;

class RequestHelper
{
    public static function hasBasicAuth(Request \$request): bool
    {
        return str_starts_with(strtolower((string) \$request->headers->get('Authorization')), 'basic');
    }

    public static function isApiRequest(Request \$request): bool
    {
        \$requestUrl = \$request->getRequestUri();

        // Check if /oauth or /api
        \$isApiRequest = (str_contains(\$requestUrl, '/oauth') || str_contains(\$requestUrl, '/api'));

        defined('MAUTIC_API_REQUEST') or define('MAUTIC_API_REQUEST', \$isApiRequest);

        return \$isApiRequest;
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
        return "@bundles/ApiBundle/Helper/RequestHelper.php";
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
        return new Source("", "@bundles/ApiBundle/Helper/RequestHelper.php", "/app/docroot/app/bundles/ApiBundle/Helper/RequestHelper.php");
    }
}
