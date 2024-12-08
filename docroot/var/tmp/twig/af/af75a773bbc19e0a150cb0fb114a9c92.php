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

/* @bundles/CategoryBundle/CategoryEvents.php */
class __TwigTemplate_359a95e588c95f7afb236ccedbf6490b extends Template
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

namespace Mautic\\CategoryBundle;

/**
 * Events available for CategoryBundle.
 */
final class CategoryEvents
{
    /**
     * The mautic.category_pre_save event is thrown right before a category is persisted.
     *
     * The event listener receives a
     * Mautic\\CategoryBundle\\Event\\CategoryEvent instance.
     *
     * @var string
     */
    public const CATEGORY_PRE_SAVE = 'mautic.category_pre_save';

    /**
     * The mautic.category_post_save event is thrown right after a category is persisted.
     *
     * The event listener receives a
     * Mautic\\CategoryBundle\\Event\\CategoryEvent instance.
     *
     * @var string
     */
    public const CATEGORY_POST_SAVE = 'mautic.category_post_save';

    /**
     * The mautic.category_pre_delete event is thrown prior to when a category is deleted.
     *
     * The event listener receives a
     * Mautic\\CategoryBundle\\Event\\CategoryEvent instance.
     *
     * @var string
     */
    public const CATEGORY_PRE_DELETE = 'mautic.category_pre_delete';

    /**
     * The mautic.category_post_delete event is thrown after a category is deleted.
     *
     * The event listener receives a
     * Mautic\\CategoryBundle\\Event\\CategoryEvent instance.
     *
     * @var string
     */
    public const CATEGORY_POST_DELETE = 'mautic.category_post_delete';

    /**
     * The mautic.category_on_bundle_list_build event is thrown when a list of bundles supporting categories is build.
     *
     * The event listener receives a
     * Mautic\\CategoryBundle\\Event\\CategoryTypesEvent instance.
     *
     * @var string
     */
    public const CATEGORY_ON_BUNDLE_LIST_BUILD = 'mautic.category_on_bundle_list_build';
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CategoryBundle/CategoryEvents.php";
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
        return new Source("", "@bundles/CategoryBundle/CategoryEvents.php", "/app/docroot/app/bundles/CategoryBundle/CategoryEvents.php");
    }
}
