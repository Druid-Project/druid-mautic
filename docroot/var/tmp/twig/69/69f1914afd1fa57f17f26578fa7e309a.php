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

/* @bundles/CategoryBundle/Entity/Category.php */
class __TwigTemplate_d179ba39257dfeaf7d2bd03824ca3165 extends Template
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

namespace Mautic\\CategoryBundle\\Entity;

use Doctrine\\ORM\\Mapping as ORM;
use Mautic\\ApiBundle\\Serializer\\Driver\\ApiMetadataDriver;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;
use Mautic\\CoreBundle\\Entity\\FormEntity;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;
use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;

class Category extends FormEntity
{
    /**
     * @var int
     */
    private \$id;

    /**
     * @var string
     */
    private \$title;

    /**
     * @var string|null
     */
    private \$description;

    /**
     * @var string
     */
    private \$alias;

    /**
     * @var string|null
     */
    private \$color;

    /**
     * @var string
     */
    private \$bundle;

    public static function loadMetadata(ORM\\ClassMetadata \$metadata): void
    {
        \$builder = new ClassMetadataBuilder(\$metadata);

        \$builder->setTable('categories')
            ->setCustomRepositoryClass(CategoryRepository::class)
            ->addIndex(['alias'], 'category_alias_search');

        \$builder->addIdColumns('title');

        \$builder->addField('alias', 'string');

        \$builder->createField('color', 'string')
            ->nullable()
            ->length(7)
            ->build();

        \$builder->createField('bundle', 'string')
            ->length(50)
            ->build();
    }

    public static function loadValidatorMetadata(ClassMetadata \$metadata): void
    {
        \$metadata->addPropertyConstraint(
            'title',
            new NotBlank(
                [
                    'message' => 'mautic.core.title.required',
                ]
            )
        );

        \$metadata->addPropertyConstraint(
            'bundle',
            new NotBlank(
                [
                    'message' => 'mautic.core.value.required',
                ]
            )
        );
    }

    /**
     * Prepares the metadata for API usage.
     */
    public static function loadApiMetadata(ApiMetadataDriver \$metadata): void
    {
        \$metadata->setGroupPrefix('category')
            ->addListProperties(
                [
                    'id',
                    'title',
                    'alias',
                    'description',
                    'color',
                    'bundle',
                ]
            )
            ->build();
    }

    public function __clone()
    {
        \$this->id = null;

        parent::__clone();
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
     * Set title.
     *
     * @param string \$title
     *
     * @return Category
     */
    public function setTitle(\$title)
    {
        \$this->isChanged('title', \$title);
        \$this->title = \$title;

        return \$this;
    }

    /**
     * Get title.
     *
     * @return string
     */
    public function getTitle()
    {
        return \$this->title;
    }

    /**
     * Set alias.
     *
     * @param string \$alias
     *
     * @return Category
     */
    public function setAlias(\$alias)
    {
        \$this->isChanged('alias', \$alias);
        \$this->alias = \$alias;

        return \$this;
    }

    /**
     * Get alias.
     *
     * @return string
     */
    public function getAlias()
    {
        return \$this->alias;
    }

    /**
     * Set description.
     *
     * @param string \$description
     *
     * @return Category
     */
    public function setDescription(\$description)
    {
        \$this->isChanged('description', \$description);
        \$this->description = \$description;

        return \$this;
    }

    /**
     * Get description.
     *
     * @return string
     */
    public function getDescription()
    {
        return \$this->description;
    }

    /**
     * @param string \$color
     */
    public function setColor(\$color): void
    {
        \$this->isChanged('color', \$color);
        \$this->color = \$color;
    }

    /**
     * Get color.
     *
     * @return string
     */
    public function getColor()
    {
        return \$this->color;
    }

    /**
     * Set bundle.
     *
     * @param string \$bundle
     */
    public function setBundle(\$bundle): void
    {
        \$this->isChanged('bundle', \$bundle);
        \$this->bundle = \$bundle;
    }

    /**
     * Get bundle.
     *
     * @return string
     */
    public function getBundle()
    {
        return \$this->bundle;
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
        return "@bundles/CategoryBundle/Entity/Category.php";
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
        return new Source("", "@bundles/CategoryBundle/Entity/Category.php", "/app/docroot/app/bundles/CategoryBundle/Entity/Category.php");
    }
}
