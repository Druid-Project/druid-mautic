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

/* @bundles/IntegrationsBundle/Sync/SyncJudge/Modes/HardEvidence.php */
class __TwigTemplate_6699c583d7fc07bc133bd34a9c522554 extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\SyncJudge\\Modes;

use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\InformationChangeRequestDAO;
use Mautic\\IntegrationsBundle\\Sync\\Exception\\ConflictUnresolvedException;
use Mautic\\IntegrationsBundle\\Sync\\SyncJudge\\SyncJudgeInterface;

class HardEvidence implements JudgementModeInterface
{
    use DateComparisonTrait;

    /**
     * @throws ConflictUnresolvedException
     */
    public static function adjudicate(
        InformationChangeRequestDAO \$leftChangeRequest,
        InformationChangeRequestDAO \$rightChangeRequest
    ): InformationChangeRequestDAO {
        if (null === \$leftChangeRequest->getCertainChangeDateTime() || null === \$rightChangeRequest->getCertainChangeDateTime()) {
            throw new ConflictUnresolvedException();
        }

        \$certainChangeCompare = self::compareDateTimes(
            \$leftChangeRequest->getCertainChangeDateTime(),
            \$rightChangeRequest->getCertainChangeDateTime()
        );

        if (SyncJudgeInterface::NO_WINNER === \$certainChangeCompare) {
            throw new ConflictUnresolvedException();
        }

        if (SyncJudgeInterface::LEFT_WINNER === \$certainChangeCompare) {
            return \$leftChangeRequest;
        }

        return \$rightChangeRequest;
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
        return "@bundles/IntegrationsBundle/Sync/SyncJudge/Modes/HardEvidence.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/SyncJudge/Modes/HardEvidence.php", "/app/docroot/app/bundles/IntegrationsBundle/Sync/SyncJudge/Modes/HardEvidence.php");
    }
}
