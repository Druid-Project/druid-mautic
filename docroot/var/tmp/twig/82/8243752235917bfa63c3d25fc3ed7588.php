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

/* @bundles/PointBundle/PointGroupEvents.php */
class __TwigTemplate_778e78bb2e66b567d2a59f96b21f93f6 extends Template
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

namespace Mautic\\PointBundle;

final class PointGroupEvents
{
    /**
     * The mautic.group_pre_save event is thrown right before a form is persisted.
     *
     * The event listener receives a Mautic\\PointBundle\\Event\\ScoringCategoryEvent instance.
     *
     * @var string
     */
    public const GROUP_PRE_SAVE = 'mautic.group_pre_save';

    /**
     * The mautic.group_post_save event is thrown right after a form is persisted.
     *
     * The event listener receives a Mautic\\PointBundle\\Event\\ScoringCategoryEvent instance.
     *
     * @var string
     */
    public const GROUP_POST_SAVE = 'mautic.group_post_save';

    /**
     * The mautic.group_pre_delete event is thrown before a form is deleted.
     *
     * The event listener receives a Mautic\\PointBundle\\Event\\ScoringCategoryEvent instance.
     *
     * @var string
     */
    public const GROUP_PRE_DELETE = 'mautic.group_pre_delete';

    /**
     * The mautic.group_post_delete event is thrown after a form is deleted.
     *
     * The event listener receives a Mautic\\PointBundle\\Event\\ScoringCategoryEvent instance.
     *
     * @var string
     */
    public const GROUP_POST_DELETE = 'mautic.group_post_delete';

    /**
     * The mautic.group_contact_score_change event is dispatched if a group contact score changes.
     *
     * The event listener receives a Mautic\\PointBundle\\Event\\GroupScoreChangeEvent instance.
     *
     * @var string
     */
    public const SCORE_CHANGE = 'mautic.group_contact_score_change';
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/PointBundle/PointGroupEvents.php";
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
        return new Source("", "@bundles/PointBundle/PointGroupEvents.php", "/app/docroot/app/bundles/PointBundle/PointGroupEvents.php");
    }
}
