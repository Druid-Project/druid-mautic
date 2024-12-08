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

/* @bundles/CoreBundle/Tests/Functional/Helper/LanguageHelperTest.php */
class __TwigTemplate_846164ac82f66f31f04796126bf2244b extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Functional\\Helper;

use Mautic\\CoreBundle\\Helper\\LanguageHelper;
use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use PHPUnit\\Framework\\Assert;

final class LanguageHelperTest extends MauticMysqlTestCase
{
    public function testGettingLanguageFiles(): void
    {
        \$languageHelper = static::getContainer()->get(LanguageHelper::class);
        \\assert(\$languageHelper instanceof LanguageHelper);

        \$languageFiles = \$languageHelper->getLanguageFiles();

        // As the list depends on linstalled plugins, let's assert only for random files that should exist.
        Assert::assertMatchesRegularExpression('/app\\/bundles\\/EmailBundle\\/Translations\\/en_US\\/(messages|validators|flashes)\\.ini/', \$languageFiles['EmailBundle'][0]);
        Assert::assertMatchesRegularExpression('/app\\/bundles\\/LeadBundle\\/Translations\\/en_US\\/(messages|validators|flashes)\\.ini/', \$languageFiles['LeadBundle'][1]);
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
        return "@bundles/CoreBundle/Tests/Functional/Helper/LanguageHelperTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Functional/Helper/LanguageHelperTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Functional/Helper/LanguageHelperTest.php");
    }
}
