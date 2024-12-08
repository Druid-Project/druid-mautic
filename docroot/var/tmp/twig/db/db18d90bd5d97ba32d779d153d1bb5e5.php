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

/* @bundles/LeadBundle/Entity/Tag.php */
class __TwigTemplate_cb48d2aab80baf3edb4f545ec94bb65b extends Template
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

use Doctrine\\DBAL\\Types\\Types;
use Doctrine\\ORM\\Mapping\\ClassMetadata;
use Mautic\\ApiBundle\\Serializer\\Driver\\ApiMetadataDriver;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;
use Mautic\\CoreBundle\\Helper\\InputHelper;

class Tag
{
    /**
     * @var int
     */
    private \$id;

    /**
     * @var string
     */
    private \$tag;

    /**
     * @var string|null
     */
    private \$description;

    public ?int \$deletedId;

    public function __construct(string \$tag = null, bool \$clean = true)
    {
        \$this->tag = \$clean && \$tag ? \$this->validateTag(\$tag) : \$tag;
    }

    public static function loadMetadata(ClassMetadata \$metadata): void
    {
        \$builder = new ClassMetadataBuilder(\$metadata);
        \$builder->setTable('lead_tags')
            ->setCustomRepositoryClass(TagRepository::class)
            ->addIndex(['tag'], 'lead_tag_search');

        \$builder->addId();
        \$builder->addField('tag', Types::STRING);
        \$builder->addNamedField('description', Types::TEXT, 'description', true);
    }

    public static function loadApiMetadata(ApiMetadataDriver \$metadata): void
    {
        \$metadata->setGroupPrefix('tag')
            ->addListProperties(
                [
                    'id',
                    'tag',
                    'description',
                ]
            )
            ->build();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return \$this->id;
    }

    /**
     * @return string
     */
    public function getTag()
    {
        return \$this->tag;
    }

    /**
     * @return Tag
     */
    public function setTag(string \$tag)
    {
        \$this->tag = \$this->validateTag(\$tag);

        return \$this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return \$this->description;
    }

    /**
     * @param string \$description
     *
     * @return Tag
     */
    public function setDescription(\$description)
    {
        \$this->description = \$description;

        return \$this;
    }

    private function validateTag(string \$tag): string
    {
        return InputHelper::string(trim((string) \$tag));
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
        return "@bundles/LeadBundle/Entity/Tag.php";
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
        return new Source("", "@bundles/LeadBundle/Entity/Tag.php", "/app/docroot/app/bundles/LeadBundle/Entity/Tag.php");
    }
}
