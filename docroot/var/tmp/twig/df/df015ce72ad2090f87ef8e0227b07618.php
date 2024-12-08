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

/* @bundles/IntegrationsBundle/Tests/Unit/Sync/SyncJudge/Modes/HardEvidenceTest.php */
class __TwigTemplate_bb56dc837f8d873c8dc438d513493fb4 extends Template
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

namespace Mautic\\IntegrationsBundle\\Tests\\Unit\\Sync\\SyncJudge\\Modes;

use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\InformationChangeRequestDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Value\\NormalizedValueDAO;
use Mautic\\IntegrationsBundle\\Sync\\Exception\\ConflictUnresolvedException;
use Mautic\\IntegrationsBundle\\Sync\\SyncJudge\\Modes\\HardEvidence;
use PHPUnit\\Framework\\TestCase;

class HardEvidenceTest extends TestCase
{
    public function testLeftWinner(): void
    {
        \$leftChangeRequest = new InformationChangeRequestDAO(
            'Test',
            'Object',
            1,
            'field',
            new NormalizedValueDAO(NormalizedValueDAO::TEXT_TYPE, 'test')
        );
        \$leftChangeRequest->setCertainChangeDateTime(new \\DateTimeImmutable('2018-10-08 00:01:00'));

        \$rightChangeRequest = new InformationChangeRequestDAO(
            'Test',
            'Object',
            1,
            'field',
            new NormalizedValueDAO(NormalizedValueDAO::TEXT_TYPE, 'test')
        );
        \$rightChangeRequest->setCertainChangeDateTime(new \\DateTimeImmutable('2018-10-08 00:00:00'));

        \$winner = HardEvidence::adjudicate(\$leftChangeRequest, \$rightChangeRequest);

        \$this->assertEquals(\$leftChangeRequest, \$winner);
    }

    public function testRightWinner(): void
    {
        \$leftChangeRequest = new InformationChangeRequestDAO(
            'Test',
            'Object',
            1,
            'field',
            new NormalizedValueDAO(NormalizedValueDAO::TEXT_TYPE, 'test')
        );
        \$leftChangeRequest->setCertainChangeDateTime(new \\DateTimeImmutable('2018-10-08 00:00:00'));

        \$rightChangeRequest = new InformationChangeRequestDAO(
            'Test',
            'Object',
            1,
            'field',
            new NormalizedValueDAO(NormalizedValueDAO::TEXT_TYPE, 'test')
        );
        \$rightChangeRequest->setCertainChangeDateTime(new \\DateTimeImmutable('2018-10-08 00:01:00'));

        \$winner = HardEvidence::adjudicate(\$leftChangeRequest, \$rightChangeRequest);

        \$this->assertEquals(\$rightChangeRequest, \$winner);
    }

    public function testUnresolvedConflictExceptionThrownIfEqual(): void
    {
        \$leftChangeRequest = new InformationChangeRequestDAO(
            'Test',
            'Object',
            1,
            'field',
            new NormalizedValueDAO(NormalizedValueDAO::TEXT_TYPE, 'test')
        );
        \$leftChangeRequest->setCertainChangeDateTime(new \\DateTimeImmutable('2018-10-08 00:00:00'));

        \$rightChangeRequest = new InformationChangeRequestDAO(
            'Test',
            'Object',
            1,
            'field',
            new NormalizedValueDAO(NormalizedValueDAO::TEXT_TYPE, 'test')
        );
        \$rightChangeRequest->setCertainChangeDateTime(new \\DateTimeImmutable('2018-10-08 00:00:00'));

        \$this->expectException(ConflictUnresolvedException::class);
        HardEvidence::adjudicate(\$leftChangeRequest, \$rightChangeRequest);
    }

    public function testUnresolvedConflictExceptionThrownWhenLeftCertainChangeDateTimeIsNull(): void
    {
        \$leftChangeRequest = new InformationChangeRequestDAO(
            'Test',
            'Object',
            1,
            'field',
            new NormalizedValueDAO(NormalizedValueDAO::TEXT_TYPE, 'test')
        );

        \$rightChangeRequest = new InformationChangeRequestDAO(
            'Test',
            'Object',
            1,
            'field',
            new NormalizedValueDAO(NormalizedValueDAO::TEXT_TYPE, 'test')
        );
        \$rightChangeRequest->setCertainChangeDateTime(new \\DateTimeImmutable('2018-10-08 00:00:00'));

        \$this->expectException(ConflictUnresolvedException::class);
        HardEvidence::adjudicate(\$leftChangeRequest, \$rightChangeRequest);
    }

    public function testUnresolvedConflictExceptionThrownWhenRightCertainChangeDateTimeIsNull(): void
    {
        \$leftChangeRequest = new InformationChangeRequestDAO(
            'Test',
            'Object',
            1,
            'field',
            new NormalizedValueDAO(NormalizedValueDAO::TEXT_TYPE, 'test')
        );
        \$leftChangeRequest->setCertainChangeDateTime(new \\DateTimeImmutable('2018-10-08 00:00:00'));

        \$rightChangeRequest = new InformationChangeRequestDAO(
            'Test',
            'Object',
            1,
            'field',
            new NormalizedValueDAO(NormalizedValueDAO::TEXT_TYPE, 'test')
        );

        \$this->expectException(ConflictUnresolvedException::class);
        HardEvidence::adjudicate(\$leftChangeRequest, \$rightChangeRequest);
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
        return "@bundles/IntegrationsBundle/Tests/Unit/Sync/SyncJudge/Modes/HardEvidenceTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/Sync/SyncJudge/Modes/HardEvidenceTest.php", "/app/docroot/app/bundles/IntegrationsBundle/Tests/Unit/Sync/SyncJudge/Modes/HardEvidenceTest.php");
    }
}
