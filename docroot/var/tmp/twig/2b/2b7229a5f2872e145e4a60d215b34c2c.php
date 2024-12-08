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

/* @bundles/CoreBundle/Tests/Unit/RememberMeTest.php */
class __TwigTemplate_b74338fa98111d84fe9d4c5b337b571c extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit;

use Mautic\\CoreBundle\\Loader\\ParameterLoader;
use PHPUnit\\Framework\\TestCase;

class RememberMeTest extends TestCase
{
    public function testPersistentRemembermeKey(): void
    {
        // Ensure the defaultParameters are not statically cached.
        \$p1             = new ParameterLoader();
        \$reflectedClass = new \\ReflectionClass(\$p1);
        \$reflectedClass->setStaticPropertyValue('defaultParameters', []);

        // Create a kernel and set the parameterLoader to the one created above.
        \$k1             = new \\AppKernel('test', false);
        \$reflectedClass = new \\ReflectionClass(\$k1);
        \$prop           = \$reflectedClass->getProperty('parameterLoader');
        \$prop->setAccessible(true);
        \$prop->setValue(\$k1, \$p1);

        // Boot the kernel and get the value of the rememberme_key value.
        \$k1->boot();
        \$v1 = \$k1->getContainer()->getParameter('mautic.rememberme_key');

        // Ensure the defaultParameters are not statically cached.
        \$p2             = new ParameterLoader();
        \$reflectedClass = new \\ReflectionClass(\$p2);
        \$reflectedClass->setStaticPropertyValue('defaultParameters', []);

        // Create a kernel and set the parameterLoader to the one created above.
        \$k2             = new \\AppKernel('test', false);
        \$reflectedClass = new \\ReflectionClass(\$k2);
        \$prop           = \$reflectedClass->getProperty('parameterLoader');
        \$prop->setAccessible(true);
        \$prop->setValue(\$k2, \$p2);

        // Boot the kernel and get the value of the rememberme_key value.
        \$k2->boot();
        \$v2 = \$k2->getContainer()->getParameter('mautic.rememberme_key');

        \$this->assertSame(\$v1, \$v2);
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
        return "@bundles/CoreBundle/Tests/Unit/RememberMeTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/RememberMeTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/RememberMeTest.php");
    }
}
