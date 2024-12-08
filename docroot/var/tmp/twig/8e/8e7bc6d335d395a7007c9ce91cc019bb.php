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

/* @bundles/FormBundle/Tests/Crate/ObjectCrateTest.php */
class __TwigTemplate_50f665fe3e95eafcdbb847435167870c extends Template
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

namespace Mautic\\FormBundle\\Tests\\Crate;

use Mautic\\FormBundle\\Crate\\ObjectCrate;
use PHPUnit\\Framework\\Assert;

final class ObjectCrateTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testGetters(): void
    {
        \$field = new ObjectCrate('contact', 'Contact');

        Assert::assertSame('contact', \$field->getKey());
        Assert::assertSame('Contact', \$field->getName());
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
        return "@bundles/FormBundle/Tests/Crate/ObjectCrateTest.php";
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
        return new Source("", "@bundles/FormBundle/Tests/Crate/ObjectCrateTest.php", "/app/docroot/app/bundles/FormBundle/Tests/Crate/ObjectCrateTest.php");
    }
}
