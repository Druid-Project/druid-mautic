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

/* @bundles/CoreBundle/Tests/Unit/Loader/ParameterLoaderTest.php */
class __TwigTemplate_9eba1c8770f899286bce2ad2aede25b2 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Loader;

use Mautic\\CoreBundle\\Loader\\ParameterLoader;
use PHPUnit\\Framework\\TestCase;

class ParameterLoaderTest extends TestCase
{
    public function testParametersAreLoaded(): void
    {
        \$envParameters = json_encode(['default_daterange_filter' => '-1 day']);
        putenv('MAUTIC_CONFIG_PARAMETERS='.\$envParameters);

        \$loader = new ParameterLoader(__DIR__.'/TestRoot/app');
        \$loader->loadIntoEnvironment();

        \$parameterBag = \$loader->getParameterBag();

        \$this->assertEquals('https://language-packs.mautic.com/', \$parameterBag->get('translations_fetch_url'));
        \$this->assertEquals('https://language-packs.mautic.com/', \$_ENV['MAUTIC_TRANSLATIONS_FETCH_URL']);

        \$this->assertEquals('-1 day', \$parameterBag->get('default_daterange_filter'));
        \$this->assertEquals('-1 day', \$_ENV['MAUTIC_DEFAULT_DATERANGE_FILTER']);

        putenv('MAUTIC_CONFIG_PARAMETERS=');
    }

    public function testDefaultParametersAreLoaded(): void
    {
        \$loader = new ParameterLoader(__DIR__.'/TestRoot/app');
        \$this->assertIsArray(\$loader->getDefaultParameters());
        \$this->assertFalse(\$loader->getDefaultParameters()['api_enabled']);
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
        return "@bundles/CoreBundle/Tests/Unit/Loader/ParameterLoaderTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Loader/ParameterLoaderTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Loader/ParameterLoaderTest.php");
    }
}
