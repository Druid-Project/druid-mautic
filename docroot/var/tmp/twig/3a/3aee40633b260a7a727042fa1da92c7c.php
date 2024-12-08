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

/* @bundles/StageBundle/Entity/LeadStageLog.php */
class __TwigTemplate_e53bd442afacb454c12284ec6e4669f0 extends Template
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

namespace Mautic\\StageBundle\\Entity;

use Doctrine\\ORM\\Mapping as ORM;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;
use Mautic\\CoreBundle\\Entity\\IpAddress;

class LeadStageLog
{
    public const TABLE_NAME = 'stage_lead_action_log';

    /**
     * @var Stage
     **/
    private \$stage;

    /**
     * @var \\Mautic\\LeadBundle\\Entity\\Lead
     */
    private \$lead;

    /**
     * @var IpAddress|null
     */
    private \$ipAddress;

    /**
     * @var \\DateTimeInterface
     **/
    private \$dateFired;

    public static function loadMetadata(ORM\\ClassMetadata \$metadata): void
    {
        \$builder = new ClassMetadataBuilder(\$metadata);

        \$builder->setTable(self::TABLE_NAME)
            ->setCustomRepositoryClass(LeadStageLogRepository::class);

        \$builder->createManyToOne('stage', 'Stage')
            ->isPrimaryKey()
            ->addJoinColumn('stage_id', 'id', true, false, 'CASCADE')
            ->inversedBy('log')
            ->build();

        \$builder->addLead(false, 'CASCADE', true);

        \$builder->addIpAddress(true);

        \$builder->createField('dateFired', 'datetime')
            ->columnName('date_fired')
            ->build();
    }

    /**
     * @return mixed
     */
    public function getDateFired()
    {
        return \$this->dateFired;
    }

    /**
     * @param mixed \$dateFired
     */
    public function setDateFired(\$dateFired): void
    {
        \$this->dateFired = \$dateFired;
    }

    /**
     * @return IpAddress|null
     */
    public function getIpAddress()
    {
        return \$this->ipAddress;
    }

    /**
     * @param IpAddress \$ipAddress
     */
    public function setIpAddress(\$ipAddress): void
    {
        \$this->ipAddress = \$ipAddress;
    }

    /**
     * @return mixed
     */
    public function getLead()
    {
        return \$this->lead;
    }

    /**
     * @param mixed \$lead
     */
    public function setLead(\$lead): void
    {
        \$this->lead = \$lead;
    }

    /**
     * @return mixed
     */
    public function getStage()
    {
        return \$this->stage;
    }

    /**
     * @param mixed \$stage
     */
    public function setStage(\$stage): void
    {
        \$this->stage = \$stage;
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
        return "@bundles/StageBundle/Entity/LeadStageLog.php";
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
        return new Source("", "@bundles/StageBundle/Entity/LeadStageLog.php", "/app/docroot/app/bundles/StageBundle/Entity/LeadStageLog.php");
    }
}
