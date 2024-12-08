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

/* @bundles/IntegrationsBundle/Tests/Unit/Sync/SyncProcess/Direction/Helper/ValueHelperTest.php */
class __TwigTemplate_5dd07699d3944b888e38cbc17777e3d8 extends Template
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

namespace Mautic\\IntegrationsBundle\\Tests\\Unit\\Sync\\SyncProcess\\Direction\\Helper;

use Mautic\\IntegrationsBundle\\Exception\\InvalidValueException;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Mapping\\ObjectMappingDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Report\\FieldDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Value\\NormalizedValueDAO;
use Mautic\\IntegrationsBundle\\Sync\\SyncProcess\\Direction\\Helper\\ValueHelper;
use PHPUnit\\Framework\\TestCase;

class ValueHelperTest extends TestCase
{
    public function testExceptionForMissingRequiredIntegrationValue(): void
    {
        \$this->expectException(InvalidValueException::class);

        \$normalizedValueDAO = new NormalizedValueDAO(NormalizedValueDAO::STRING_TYPE, '');

        \$this->getValueHelper()->getValueForIntegration(
            \$normalizedValueDAO,
            FieldDAO::FIELD_REQUIRED,
            ObjectMappingDAO::SYNC_TO_INTEGRATION
        );
    }

    public function testNoExceptionForMissingNonRequiredIntegrationValue(): void
    {
        \$normalizedValueDAO = new NormalizedValueDAO(NormalizedValueDAO::STRING_TYPE, '');

        \$newValue = \$this->getValueHelper()->getValueForIntegration(
            \$normalizedValueDAO,
            FieldDAO::FIELD_CHANGED,
            ObjectMappingDAO::SYNC_TO_MAUTIC
        );

        \$this->assertEquals(
            '',
            \$newValue->getNormalizedValue()
        );
    }

    public function testNoExceptionForMissingOppositeSyncIntegrationValue(): void
    {
        \$normalizedValueDAO = new NormalizedValueDAO(NormalizedValueDAO::STRING_TYPE, '');

        \$newValue = \$this->getValueHelper()->getValueForIntegration(
            \$normalizedValueDAO,
            FieldDAO::FIELD_CHANGED,
            ObjectMappingDAO::SYNC_TO_INTEGRATION
        );

        \$this->assertEquals(
            '',
            \$newValue->getNormalizedValue()
        );
    }

    public function testExceptionForMissingRequiredMauticValue(): void
    {
        \$this->expectException(InvalidValueException::class);

        \$normalizedValueDAO = new NormalizedValueDAO(NormalizedValueDAO::STRING_TYPE, '');

        \$this->getValueHelper()->getValueForMautic(
            \$normalizedValueDAO,
            FieldDAO::FIELD_REQUIRED,
            ObjectMappingDAO::SYNC_TO_MAUTIC
        );
    }

    public function testNoExceptionForMissingNonRequiredInternalValue(): void
    {
        \$normalizedValueDAO = new NormalizedValueDAO(NormalizedValueDAO::STRING_TYPE, '');

        \$newValue = \$this->getValueHelper()->getValueForMautic(
            \$normalizedValueDAO,
            FieldDAO::FIELD_CHANGED,
            ObjectMappingDAO::SYNC_TO_INTEGRATION
        );

        \$this->assertEquals(
            '',
            \$newValue->getNormalizedValue()
        );
    }

    public function testNoExceptionForMissingOppositeSyncInternalnValue(): void
    {
        \$normalizedValueDAO = new NormalizedValueDAO(NormalizedValueDAO::STRING_TYPE, '');

        \$newValue = \$this->getValueHelper()->getValueForMautic(
            \$normalizedValueDAO,
            FieldDAO::FIELD_CHANGED,
            ObjectMappingDAO::SYNC_TO_MAUTIC
        );

        \$this->assertEquals(
            '',
            \$newValue->getNormalizedValue()
        );
    }

    /**
     * @return ValueHelper
     */
    private function getValueHelper()
    {
        return new ValueHelper();
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
        return "@bundles/IntegrationsBundle/Tests/Unit/Sync/SyncProcess/Direction/Helper/ValueHelperTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/Sync/SyncProcess/Direction/Helper/ValueHelperTest.php", "/app/docroot/app/bundles/IntegrationsBundle/Tests/Unit/Sync/SyncProcess/Direction/Helper/ValueHelperTest.php");
    }
}
