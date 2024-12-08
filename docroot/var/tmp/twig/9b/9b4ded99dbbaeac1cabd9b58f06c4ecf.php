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

/* @bundles/CoreBundle/Entity/DynamicContentEntityTrait.php */
class __TwigTemplate_e1d827b5e82f59364bcaa91845bd7196 extends Template
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

namespace Mautic\\CoreBundle\\Entity;

use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;

trait DynamicContentEntityTrait
{
    /**
     * Keep the default content set outside of \$dynamicContent so that it can be used if \$dynamicContent is emptied.
     *
     * @var array
     */
    public static \$defaultDynamicContent = [
        [
            'tokenName' => 'Dynamic Content 1',
            'content'   => 'Default Dynamic Content',
            'filters'   => [
                [
                    'content' => null,
                    'filters' => [
                        [
                            'glue'     => null,
                            'field'    => null,
                            'object'   => null,
                            'type'     => null,
                            'operator' => null,
                            'display'  => null,
                            'filter'   => null,
                        ],
                    ],
                ],
            ],
        ],
    ];

    /**
     * @var array
     */
    private \$dynamicContent = [];

    protected static function addDynamicContentMetadata(ClassMetadataBuilder \$builder)
    {
        \$builder->createField('dynamicContent', 'array')
            ->columnName('dynamic_content')
            ->nullable()
            ->build();
    }

    /**
     * @return array
     */
    public function getDynamicContent()
    {
        return (empty(\$this->dynamicContent)) ? \$this->getDefaultDynamicContent() : \$this->dynamicContent;
    }

    /**
     * @return \$this
     */
    public function setDynamicContent(\$dynamicContent)
    {
        if (empty(\$dynamicContent)) {
            \$dynamicContent = \$this->getDefaultDynamicContent();
        }

        \$this->dynamicContent = \$dynamicContent;

        return \$this;
    }

    /**
     * @return array
     */
    public function getDefaultDynamicContent()
    {
        return self::\$defaultDynamicContent;
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
        return "@bundles/CoreBundle/Entity/DynamicContentEntityTrait.php";
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
        return new Source("", "@bundles/CoreBundle/Entity/DynamicContentEntityTrait.php", "/app/docroot/app/bundles/CoreBundle/Entity/DynamicContentEntityTrait.php");
    }
}
