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

/* @bundles/IntegrationsBundle/Sync/SyncJudge/Modes/BestEvidence.php */
class __TwigTemplate_f9327386514cba237bafd8514ed1bdb5 extends Template
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

class BestEvidence implements JudgementModeInterface
{
    use DateComparisonTrait;

    /**
     * @throws ConflictUnresolvedException
     */
    public static function adjudicate(
        InformationChangeRequestDAO \$leftChangeRequest,
        InformationChangeRequestDAO \$rightChangeRequest
    ): InformationChangeRequestDAO {
        try {
            return HardEvidence::adjudicate(\$leftChangeRequest, \$rightChangeRequest);
        } catch (ConflictUnresolvedException) {
        }

        if (null === \$leftChangeRequest->getPossibleChangeDateTime() || null === \$rightChangeRequest->getPossibleChangeDateTime()) {
            throw new ConflictUnresolvedException();
        }

        \$possibleChangeCompare = self::compareDateTimes(
            \$leftChangeRequest->getPossibleChangeDateTime(),
            \$rightChangeRequest->getPossibleChangeDateTime()
        );

        if (SyncJudgeInterface::NO_WINNER === \$possibleChangeCompare) {
            throw new ConflictUnresolvedException();
        }

        if (SyncJudgeInterface::LEFT_WINNER === \$possibleChangeCompare) {
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
        return "@bundles/IntegrationsBundle/Sync/SyncJudge/Modes/BestEvidence.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/SyncJudge/Modes/BestEvidence.php", "/app/docroot/app/bundles/IntegrationsBundle/Sync/SyncJudge/Modes/BestEvidence.php");
    }
}
