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

/* @bundles/CoreBundle/Tests/Functional/SamlTest.php */
class __TwigTemplate_229164c735ae20c11f7def546d2f9f86 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Functional;

use Mautic\\CoreBundle\\Test\\AbstractMauticTestCase;
use PHPUnit\\Framework\\Assert;

class SamlTest extends AbstractMauticTestCase
{
    public function testDiscoveryTemplateIsOverridden(): void
    {
        \$twig    = static::getContainer()->get('twig');
        \$content = \$twig->render('@LightSamlSp/discovery.html.twig', ['parties' => []]);

        Assert::assertStringContainsString('SAML not configured or configured incorrectly.', \$content);
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
        return "@bundles/CoreBundle/Tests/Functional/SamlTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Functional/SamlTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Functional/SamlTest.php");
    }
}
