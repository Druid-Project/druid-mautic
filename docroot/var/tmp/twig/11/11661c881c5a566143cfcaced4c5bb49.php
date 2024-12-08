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

/* @bundles/ApiBundle/Serializer/Exclusion/PublishDetailsExclusionStrategy.php */
class __TwigTemplate_9a45b4cce6fa8ed53df722479267e974 extends Template
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

namespace Mautic\\ApiBundle\\Serializer\\Exclusion;

/**
 * Only include FormEntity properties for the top level entity and not the associated entities.
 */
class PublishDetailsExclusionStrategy extends FieldExclusionStrategy
{
    public function __construct()
    {
        parent::__construct(
            [
                'isPublished',
                'dateAdded',
                'createdBy',
                'dateModified',
                'modifiedBy',
                'checkedOut',
                'checkedOutBy',
            ],
            1
        );
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
        return "@bundles/ApiBundle/Serializer/Exclusion/PublishDetailsExclusionStrategy.php";
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
        return new Source("", "@bundles/ApiBundle/Serializer/Exclusion/PublishDetailsExclusionStrategy.php", "/app/docroot/app/bundles/ApiBundle/Serializer/Exclusion/PublishDetailsExclusionStrategy.php");
    }
}
