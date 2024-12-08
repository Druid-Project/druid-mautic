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

/* @bundles/IntegrationsBundle/Sync/VariableExpresser/VariableExpresserHelperInterface.php */
class __TwigTemplate_476189aacf00b42fec034cefb3947482 extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\VariableExpresser;

use Mautic\\IntegrationsBundle\\Sync\\DAO\\Value\\EncodedValueDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Value\\NormalizedValueDAO;

interface VariableExpresserHelperInterface
{
    public function decodeVariable(EncodedValueDAO \$EncodedValueDAO): NormalizedValueDAO;

    /**
     * @param mixed \$var
     */
    public function encodeVariable(\$var): EncodedValueDAO;
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/IntegrationsBundle/Sync/VariableExpresser/VariableExpresserHelperInterface.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/VariableExpresser/VariableExpresserHelperInterface.php", "/app/docroot/app/bundles/IntegrationsBundle/Sync/VariableExpresser/VariableExpresserHelperInterface.php");
    }
}
