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

/* @bundles/IntegrationsBundle/Tests/Unit/Sync/ValueNormalizer/ValueNormalizerTest.php */
class __TwigTemplate_57ddaa405abb1c04c8db54ba65870b47 extends Template
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

namespace Mautic\\IntegrationsBundle\\Tests\\Unit\\Sync\\ValueNormalizer;

use Mautic\\IntegrationsBundle\\Sync\\DAO\\Value\\NormalizedValueDAO;
use Mautic\\IntegrationsBundle\\Sync\\ValueNormalizer\\ValueNormalizer;
use PHPUnit\\Framework\\TestCase;

class ValueNormalizerTest extends TestCase
{
    public function testNullDateTimeValue(): void
    {
        \$valueNormalizer    = new ValueNormalizer();
        \$normalizedValueDAO = \$valueNormalizer->normalizeForMautic(NormalizedValueDAO::DATETIME_TYPE, null);

        \$this->assertNull(\$normalizedValueDAO->getNormalizedValue());
        \$this->assertNull(\$normalizedValueDAO->getOriginalValue());
    }

    public function testNotNullDateTimeValue(): void
    {
        \$valueNormalizer    = new ValueNormalizer();
        \$normalizedValueDAO = \$valueNormalizer->normalizeForMautic(NormalizedValueDAO::DATETIME_TYPE, '2019-10-08');

        \$this->assertInstanceOf(\\DateTimeInterface::class, \$normalizedValueDAO->getNormalizedValue());
        \$this->assertSame('2019-10-08', \$normalizedValueDAO->getNormalizedValue()->format('Y-m-d'));
        \$this->assertSame('2019-10-08', \$normalizedValueDAO->getOriginalValue());
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
        return "@bundles/IntegrationsBundle/Tests/Unit/Sync/ValueNormalizer/ValueNormalizerTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/Sync/ValueNormalizer/ValueNormalizerTest.php", "/app/docroot/app/bundles/IntegrationsBundle/Tests/Unit/Sync/ValueNormalizer/ValueNormalizerTest.php");
    }
}
