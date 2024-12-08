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

/* @bundles/CoreBundle/Tests/Unit/Twig/Extension/AssetExtensionTest.php */
class __TwigTemplate_9ca694a51c06f3e181838009567f327c extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Twig\\Extension;

use Mautic\\CoreBundle\\Test\\AbstractMauticTestCase;
use Mautic\\CoreBundle\\Twig\\Extension\\AssetExtension;
use PHPUnit\\Framework\\Assert;

class AssetExtensionTest extends AbstractMauticTestCase
{
    public function testGetCountryFlag(): void
    {
        \$assetExtension = static::getContainer()->get(AssetExtension::class);
        \\assert(\$assetExtension instanceof AssetExtension);

        Assert::assertStringStartsWith('/app/assets/images/flags/Belgium.png', \$assetExtension->getCountryFlag('Belgium'));
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
        return "@bundles/CoreBundle/Tests/Unit/Twig/Extension/AssetExtensionTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Twig/Extension/AssetExtensionTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Twig/Extension/AssetExtensionTest.php");
    }
}
