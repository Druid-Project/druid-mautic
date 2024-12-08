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

/* @bundles/NotificationBundle/Entity/PushID.php */
class __TwigTemplate_9a7e7358a841489f2efb0c2e01501fc4 extends Template
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

namespace Mautic\\NotificationBundle\\Entity;

use Doctrine\\ORM\\Mapping as ORM;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;
use Mautic\\LeadBundle\\Entity\\Lead;

class PushID
{
    /**
     * @var int
     */
    private \$id;

    /**
     * @var Lead|null
     */
    private \$lead;

    /**
     * @var string
     */
    private \$pushID;

    /**
     * @var bool
     */
    private \$enabled;

    /**
     * @var bool
     */
    private \$mobile;

    public static function loadMetadata(ORM\\ClassMetadata \$metadata): void
    {
        \$builder = new ClassMetadataBuilder(\$metadata);

        \$builder->setTable('push_ids')
            ->setCustomRepositoryClass(PushIDRepository::class);

        \$builder->createField('id', 'integer')
            ->makePrimaryKey()
            ->generatedValue()
            ->build();

        \$builder->createField('pushID', 'string')
            ->columnName('push_id')
            ->nullable(false)
            ->build();

        \$builder->createManyToOne('lead', Lead::class)
            ->addJoinColumn('lead_id', 'id', true, false, 'SET NULL')
            ->inversedBy('pushIds')
            ->build();

        \$builder->createField('enabled', 'boolean')->build();
        \$builder->createField('mobile', 'boolean')->build();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return \$this->id;
    }

    /**
     * @param int \$id
     *
     * @return \$this
     */
    public function setId(\$id)
    {
        \$this->id = \$id;

        return \$this;
    }

    /**
     * @return Lead
     */
    public function getLead()
    {
        return \$this->lead;
    }

    /**
     * @return \$this
     */
    public function setLead(Lead \$lead)
    {
        \$this->lead = \$lead;

        return \$this;
    }

    /**
     * @return string
     */
    public function getPushID()
    {
        return \$this->pushID;
    }

    /**
     * @param string \$pushID
     *
     * @return \$this
     */
    public function setPushID(\$pushID)
    {
        \$this->pushID = \$pushID;

        return \$this;
    }

    /**
     * @return bool
     */
    public function isEnabled()
    {
        return \$this->enabled;
    }

    /**
     * @return \$this
     */
    public function setEnabled(\$enabled)
    {
        \$this->enabled = \$enabled;

        return \$this;
    }

    /**
     * @return bool
     */
    public function isMobile()
    {
        return \$this->mobile;
    }

    /**
     * @param bool \$mobile
     *
     * @return \$this
     */
    public function setMobile(\$mobile)
    {
        \$this->mobile = \$mobile;

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
        return "@bundles/NotificationBundle/Entity/PushID.php";
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
        return new Source("", "@bundles/NotificationBundle/Entity/PushID.php", "/app/docroot/app/bundles/NotificationBundle/Entity/PushID.php");
    }
}
