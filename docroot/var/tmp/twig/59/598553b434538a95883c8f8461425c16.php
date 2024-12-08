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

/* @bundles/IntegrationsBundle/Sync/SyncJudge/Modes/FuzzyEvidence.php */
class __TwigTemplate_8db915272be1e0925b18e34fbbf1b379 extends Template
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

class FuzzyEvidence implements JudgementModeInterface
{
    /**
     * @throws ConflictUnresolvedException
     */
    public static function adjudicate(
        InformationChangeRequestDAO \$leftChangeRequest,
        InformationChangeRequestDAO \$rightChangeRequest
    ): InformationChangeRequestDAO {
        try {
            return BestEvidence::adjudicate(\$leftChangeRequest, \$rightChangeRequest);
        } catch (ConflictUnresolvedException) {
        }

        if (
            \$leftChangeRequest->getCertainChangeDateTime()
            && \$rightChangeRequest->getPossibleChangeDateTime()
            && \$leftChangeRequest->getCertainChangeDateTime() > \$rightChangeRequest->getPossibleChangeDateTime()
        ) {
            return \$leftChangeRequest;
        }

        if (
            \$rightChangeRequest->getCertainChangeDateTime()
            && \$leftChangeRequest->getPossibleChangeDateTime()
            && \$rightChangeRequest->getCertainChangeDateTime() > \$leftChangeRequest->getPossibleChangeDateTime()
        ) {
            return \$rightChangeRequest;
        }

        throw new ConflictUnresolvedException();
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
        return "@bundles/IntegrationsBundle/Sync/SyncJudge/Modes/FuzzyEvidence.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/SyncJudge/Modes/FuzzyEvidence.php", "/app/docroot/app/bundles/IntegrationsBundle/Sync/SyncJudge/Modes/FuzzyEvidence.php");
    }
}
