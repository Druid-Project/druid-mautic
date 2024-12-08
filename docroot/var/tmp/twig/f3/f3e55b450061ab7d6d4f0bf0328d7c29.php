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

/* @bundles/CoreBundle/Helper/TrailingSlashHelper.php */
class __TwigTemplate_ff45d2e571775464d2428f68673fca22 extends Template
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

namespace Mautic\\CoreBundle\\Helper;

use Symfony\\Component\\HttpFoundation\\Request;

class TrailingSlashHelper
{
    public function __construct(
        private CoreParametersHelper \$coreParametersHelper
    ) {
    }

    public function getSafeRedirectUrl(Request \$request): string
    {
        \$siteUrl  = \$this->coreParametersHelper->get('site_url');
        \$pathInfo = substr(\$request->getPathInfo(), 0, -1);

        return rtrim(\$siteUrl, '/').'/'.ltrim(\$pathInfo, '/');
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
        return "@bundles/CoreBundle/Helper/TrailingSlashHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/TrailingSlashHelper.php", "/app/docroot/app/bundles/CoreBundle/Helper/TrailingSlashHelper.php");
    }
}
