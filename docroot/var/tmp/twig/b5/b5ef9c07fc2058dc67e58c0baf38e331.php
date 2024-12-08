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

/* @bundles/LeadBundle/Entity/CompanyLead.php */
class __TwigTemplate_4fc8d4b30e64822392d1a7799dee3691 extends Template
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

class CompanyLead
{
    /**
     * @var Company
     **/
    private \$company;

    /**
     * @var Lead
     */
    private \$lead;

    /**
     * @var \\DateTimeInterface
     */
    private \$dateAdded;

    /**
     * @var bool|null
     */
    private \$primary = false;

    public static function loadMetadata(ORM\\ClassMetadata \$metadata): void
    {
        \$builder = new ClassMetadataBuilder(\$metadata);

        \$builder->setTable('companies_leads')
            ->setCustomRepositoryClass(CompanyLeadRepository::class);

        \$builder->createManyToOne('company', 'Company')
            ->makePrimaryKey()
            ->addJoinColumn('company_id', 'id', false, false, 'CASCADE')
            ->build();

        \$builder->addLead(false, 'CASCADE', true);

        \$builder->addDateAdded();

        \$builder->createField('primary', 'boolean')
            ->columnName('is_primary')
            ->nullable()
            ->build();
    }

    /**
     * @return \\DateTimeInterface
     */
    public function getDateAdded()
    {
        return \$this->dateAdded;
    }

    /**
     * @param \\DateTime \$date
     */
    public function setDateAdded(\$date): void
    {
        \$this->dateAdded = \$date;
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
     * @return Company
     */
    public function getCompany()
    {
        return \$this->company;
    }

    /**
     * @return Company
     */
    public function getCompanies()
    {
        return \$this->company;
    }

    /**
     * @param Company \$company
     */
    public function setCompany(\$company): void
    {
        \$this->company = \$company;
    }

    /**
     * @param bool \$primary
     */
    public function setPrimary(\$primary): void
    {
        \$this->primary = \$primary;
    }

    /**
     * @return bool
     */
    public function getPrimary()
    {
        return \$this->primary;
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
        return "@bundles/LeadBundle/Entity/CompanyLead.php";
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
        return new Source("", "@bundles/LeadBundle/Entity/CompanyLead.php", "/app/docroot/app/bundles/LeadBundle/Entity/CompanyLead.php");
    }
}
