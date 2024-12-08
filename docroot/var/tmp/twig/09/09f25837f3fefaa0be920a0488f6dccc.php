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

/* @bundles/IntegrationsBundle/Sync/SyncJudge/SyncJudgeInterface.php */
class __TwigTemplate_21768641279718244a91255bfa647eec extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\SyncJudge;

use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\InformationChangeRequestDAO;
use Mautic\\IntegrationsBundle\\Sync\\Exception\\ConflictUnresolvedException;

interface SyncJudgeInterface
{
    /**
     * Winner is selected based on the field was updated after the loser.
     */
    public const HARD_EVIDENCE_MODE = 'hard';

    /**
     * Winner is selected based on hard evidence if available, otherwise if the object of the winner was updated after the object of the loser.
     */
    public const BEST_EVIDENCE_MODE = 'best';

    /**
     * Winner is selected based on the probability that it was updated after the loser.
     */
    public const FUZZY_EVIDENCE_MODE = 'fuzzy';

    public const LEFT_WINNER  = 'left';

    public const RIGHT_WINNER = 'right';

    public const NO_WINNER    = 'no';

    /**
     * @param string \$mode
     *
     * @return InformationChangeRequestDAO
     *
     * @throws ConflictUnresolvedException
     */
    public function adjudicate(
        \$mode,
        InformationChangeRequestDAO \$leftChangeRequest,
        InformationChangeRequestDAO \$rightChangeRequest
    );
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/IntegrationsBundle/Sync/SyncJudge/SyncJudgeInterface.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/SyncJudge/SyncJudgeInterface.php", "/app/docroot/app/bundles/IntegrationsBundle/Sync/SyncJudge/SyncJudgeInterface.php");
    }
}
