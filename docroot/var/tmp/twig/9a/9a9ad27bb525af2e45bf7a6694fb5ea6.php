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

/* @bundles/CoreBundle/Twig/Helper/ConfigHelper.php */
class __TwigTemplate_033186f12f04d3ce78ebfa2e73eb1a20 extends Template
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

namespace Mautic\\CoreBundle\\Twig\\Helper;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;

/**
 * Allows templates access values from CoreParametersHelper.
 *
 * Example usage:
 *
 * <?php echo \$view['config']->get('default_timezone', 'UTC'); ?>
 */
final class ConfigHelper
{
    public function __construct(
        private CoreParametersHelper \$coreParametersHelper
    ) {
    }

    /**
     * @param mixed \$default
     *
     * @return mixed
     */
    public function get(string \$name, \$default = null)
    {
        return \$this->coreParametersHelper->get(\$name, \$default);
    }

    public function getName(): string
    {
        return 'config';
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
        return "@bundles/CoreBundle/Twig/Helper/ConfigHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Twig/Helper/ConfigHelper.php", "/app/docroot/app/bundles/CoreBundle/Twig/Helper/ConfigHelper.php");
    }
}
