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

/* @bundles/LeadBundle/Entity/MergeRecord.php */
class __TwigTemplate_dda32ef73b3122db94b70253a6e3acb1 extends Template
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

class MergeRecord
{
    /**
     * @var int
     */
    private \$id;

    /**
     * @var Lead
     */
    private \$contact;

    /**
     * @var \\DateTimeInterface
     */
    private \$dateAdded;

    /**
     * @var string
     */
    private \$name;

    /**
     * @var int
     */
    private \$mergedId;

    public static function loadMetadata(ORM\\ClassMetadata \$metadata): void
    {
        \$builder = new ClassMetadataBuilder(\$metadata);

        \$builder->setTable('contact_merge_records')
            ->setCustomRepositoryClass(MergeRecordRepository::class)
            ->addIndex(['date_added'], 'contact_merge_date_added')
            ->addIndex(['merged_id'], 'contact_merge_ids');

        \$builder->createField('id', 'integer')
            ->makePrimaryKey()
            ->generatedValue()
            ->build();

        \$builder->addContact()
            ->addDateAdded()
            ->addNamedField('mergedId', 'integer', 'merged_id')
            ->addField('name', 'string');
    }

    /**
     * @return int
     */
    public function getId()
    {
        return \$this->id;
    }

    /**
     * @return Lead
     */
    public function getContact()
    {
        return \$this->contact;
    }

    /**
     * @return MergeRecord
     */
    public function setContact(Lead \$contact)
    {
        \$this->contact = \$contact;

        return \$this;
    }

    /**
     * @return \\DateTimeInterface
     */
    public function getDateAdded()
    {
        return \$this->dateAdded;
    }

    /**
     * @return MergeRecord
     */
    public function setDateAdded(\\DateTime \$dateAdded = null)
    {
        if (null === \$dateAdded) {
            \$dateAdded = new \\DateTime();
        }

        \$this->dateAdded = \$dateAdded;

        return \$this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return \$this->name;
    }

    /**
     * @param string \$name
     *
     * @return MergeRecord
     */
    public function setName(\$name)
    {
        \$this->name = \$name;

        return \$this;
    }

    /**
     * @return int
     */
    public function getMergedId()
    {
        return \$this->mergedId;
    }

    /**
     * @param int \$mergedId
     *
     * @return MergeRecord
     */
    public function setMergedId(\$mergedId)
    {
        \$this->mergedId = (int) \$mergedId;

        return \$this;
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
        return "@bundles/LeadBundle/Entity/MergeRecord.php";
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
        return new Source("", "@bundles/LeadBundle/Entity/MergeRecord.php", "/app/docroot/app/bundles/LeadBundle/Entity/MergeRecord.php");
    }
}
