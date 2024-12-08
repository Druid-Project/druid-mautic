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

/* @bundles/PluginBundle/Integration/IntegrationObject.php */
class __TwigTemplate_dae3b975cd7e4d381d1d4597b2c8d156 extends Template
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

namespace Mautic\\PluginBundle\\Integration;

class IntegrationObject
{
    /**
     * @param string \$type
     * @param string \$internalType
     */
    public function __construct(
        private \$type,
        private \$internalType
    ) {
    }

    /**
     * @return string
     */
    public function getType()
    {
        return \$this->type;
    }

    /**
     * @return string
     */
    public function getInternalType()
    {
        return \$this->internalType;
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
        return "@bundles/PluginBundle/Integration/IntegrationObject.php";
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
        return new Source("", "@bundles/PluginBundle/Integration/IntegrationObject.php", "/app/docroot/app/bundles/PluginBundle/Integration/IntegrationObject.php");
    }
}
