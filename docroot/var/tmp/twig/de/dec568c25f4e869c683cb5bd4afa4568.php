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

/* @bundles/LeadBundle/Entity/CompanyChangeLog.php */
class __TwigTemplate_bffe3f9a9bd6ed200bb843d4766c8611 extends Template
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

namespace Mautic\\LeadBundle\\Entity;

use Doctrine\\ORM\\Mapping as ORM;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;

class CompanyChangeLog
{
    /**
     * @var int
     */
    private \$id;

    /**
     * @var Lead
     */
    private \$lead;

    /**
     * @var string
     */
    private \$type;

    /**
     * @var string
     */
    private \$eventName;

    /**
     * @var string
     */
    private \$actionName;

    /**
     * @var int
     */
    private \$company;

    /**
     * @var \\DateTimeInterface
     */
    private \$dateAdded;

    public static function loadMetadata(ORM\\ClassMetadata \$metadata): void
    {
        \$builder = new ClassMetadataBuilder(\$metadata);

        \$builder->setTable('lead_companies_change_log')
            ->setCustomRepositoryClass(CompanyChangeLogRepository::class)
            ->addIndex(['date_added'], 'company_date_added');

        \$builder->addId();

        \$builder->addLead(false, 'CASCADE', false, 'companyChangeLog');

        \$builder->createField('type', 'text')
            ->length(50)
            ->build();

        \$builder->createField('eventName', 'string')
            ->columnName('event_name')
            ->build();

        \$builder->createField('actionName', 'string')
            ->columnName('action_name')
            ->build();

        \$builder->createField('company', 'integer')
            ->columnName('company_id')
            ->build();

        \$builder->addDateAdded();
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return \$this->id;
    }

    /**
     * Set type.
     *
     * @param string \$type
     *
     * @return CompanyChangeLog
     */
    public function setType(\$type)
    {
        \$this->type = \$type;

        return \$this;
    }

    /**
     * Get type.
     *
     * @return string
     */
    public function getType()
    {
        return \$this->type;
    }

    /**
     * Set eventName.
     *
     * @param string \$eventName
     *
     * @return CompanyChangeLog
     */
    public function setEventName(\$eventName)
    {
        \$this->eventName = \$eventName;

        return \$this;
    }

    /**
     * Get eventName.
     *
     * @return string
     */
    public function getEventName()
    {
        return \$this->eventName;
    }

    /**
     * Set actionName.
     *
     * @param string \$actionName
     *
     * @return CompanyChangeLog
     */
    public function setActionName(\$actionName)
    {
        \$this->actionName = \$actionName;

        return \$this;
    }

    /**
     * Get actionName.
     *
     * @return string
     */
    public function getActionName()
    {
        return \$this->actionName;
    }

    /**
     * Set delta.
     *
     * @param int \$company
     *
     * @return CompanyChangeLog
     */
    public function setCompany(\$company)
    {
        \$this->company = \$company;

        return \$this;
    }

    /**
     * Get company.
     *
     * @return int
     */
    public function getCompany()
    {
        return \$this->company;
    }

    /**
     * Set dateAdded.
     *
     * @param \\DateTime \$dateAdded
     *
     * @return CompanyChangeLog
     */
    public function setDateAdded(\$dateAdded)
    {
        \$this->dateAdded = \$dateAdded;

        return \$this;
    }

    /**
     * Get dateAdded.
     *
     * @return \\DateTimeInterface
     */
    public function getDateAdded()
    {
        return \$this->dateAdded;
    }

    /**
     * Set lead.
     *
     * @return CompanyChangeLog
     */
    public function setLead(Lead \$lead)
    {
        \$this->lead = \$lead;

        return \$this;
    }

    /**
     * Get lead.
     *
     * @return Lead
     */
    public function getLead()
    {
        return \$this->lead;
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
        return "@bundles/LeadBundle/Entity/CompanyChangeLog.php";
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
        return new Source("", "@bundles/LeadBundle/Entity/CompanyChangeLog.php", "/app/docroot/app/bundles/LeadBundle/Entity/CompanyChangeLog.php");
    }
}
