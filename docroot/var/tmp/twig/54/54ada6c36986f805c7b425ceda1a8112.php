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

/* @bundles/CoreBundle/Tests/Unit/Twig/Helper/ConfigHelperTest.php */
class __TwigTemplate_7300c7b09072a6ba41279d099c2072d1 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Twig\\Helper;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Twig\\Helper\\ConfigHelper;
use PHPUnit\\Framework\\Assert;

class ConfigHelperTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testGet(): void
    {
        \$coreParametersHelper = new class() extends CoreParametersHelper {
            public function __construct()
            {
            }

            public function get(\$name, \$default = null)
            {
                Assert::assertEquals('param_a', \$name);

                return 'value A';
            }
        };

        \$helper = new ConfigHelper(\$coreParametersHelper);

        Assert::assertEquals('value A', \$helper->get('param_a'));
    }

    public function testGetName(): void
    {
        \$coreParametersHelper = new class() extends CoreParametersHelper {
            public function __construct()
            {
            }
        };

        \$helper = new ConfigHelper(\$coreParametersHelper);

        Assert::assertEquals('config', \$helper->getName());
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
        return "@bundles/CoreBundle/Tests/Unit/Twig/Helper/ConfigHelperTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Twig/Helper/ConfigHelperTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Twig/Helper/ConfigHelperTest.php");
    }
}
