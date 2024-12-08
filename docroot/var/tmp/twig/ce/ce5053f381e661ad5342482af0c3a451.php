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

/* @bundles/CoreBundle/Tests/Unit/Release/ThisReleaseTest.php */
class __TwigTemplate_bbea84b459a2bdc3dd7ed5047b0d1cc2 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Release;

use Mautic\\CoreBundle\\Release\\ThisRelease;
use PHPUnit\\Framework\\TestCase;

class ThisReleaseTest extends TestCase
{
    public function testMetadataParsed(): void
    {
        \$metadata = ThisRelease::getMetadata();

        \$this->assertNotEmpty(\$metadata->getVersion(), 'A full version is required');
        \$this->assertNotEmpty(\$metadata->getStability(), 'A stability is required');
        \$this->assertNotEmpty(\$metadata->getMinSupportedPHPVersion(), 'A minimum PHP version is required');
        \$this->assertNotEmpty(\$metadata->getMaxSupportedPHPVersion(), 'A maximum PHP version is required');
        \$this->assertNotEmpty(\$metadata->getMinSupportedMauticVersion(), 'A minimum Mautic version this version can upgrade from is required');
        \$this->assertNotEmpty(\$metadata->getMinSupportedMySqlVersion(), 'A minimum MySQL version this version needs is required');
        \$this->assertNotEmpty(\$metadata->getMinSupportedMariaDbVersion(), 'A minimum MariaDB version this version needs is required');
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
        return "@bundles/CoreBundle/Tests/Unit/Release/ThisReleaseTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Release/ThisReleaseTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Release/ThisReleaseTest.php");
    }
}
