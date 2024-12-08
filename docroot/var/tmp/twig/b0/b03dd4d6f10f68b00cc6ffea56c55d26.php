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

/* @bundles/PageBundle/EventListener/PointSubscriber.php */
class __TwigTemplate_a7e8ffc56bfe1bc3fae3fdfc3da82310 extends Template
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

namespace Mautic\\PageBundle\\EventListener;

use Mautic\\PageBundle\\Event as Events;
use Mautic\\PageBundle\\Form\\Type\\PointActionPageHitType;
use Mautic\\PageBundle\\Form\\Type\\PointActionUrlHitType;
use Mautic\\PageBundle\\Helper\\PointActionHelper;
use Mautic\\PageBundle\\PageEvents;
use Mautic\\PointBundle\\Event\\PointBuilderEvent;
use Mautic\\PointBundle\\Model\\PointModel;
use Mautic\\PointBundle\\PointEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class PointSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private PointModel \$pointModel
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            PointEvents::POINT_ON_BUILD => ['onPointBuild', 0],
            PageEvents::PAGE_ON_HIT     => ['onPageHit', 0],
        ];
    }

    public function onPointBuild(PointBuilderEvent \$event): void
    {
        \$action = [
            'group'       => 'mautic.page.point.action',
            'label'       => 'mautic.page.point.action.pagehit',
            'description' => 'mautic.page.point.action.pagehit_descr',
            'callback'    => [PointActionHelper::class, 'validatePageHit'],
            'formType'    => PointActionPageHitType::class,
        ];

        \$event->addAction('page.hit', \$action);

        \$action = [
            'group'       => 'mautic.page.point.action',
            'label'       => 'mautic.page.point.action.urlhit',
            'description' => 'mautic.page.point.action.urlhit_descr',
            'callback'    => [PointActionHelper::class, 'validateUrlHit'],
            'formType'    => PointActionUrlHitType::class,
            'formTheme'   => '@MauticPage/FormTheme/Point/pointaction_urlhit_widget.html.twig',
        ];

        \$event->addAction('url.hit', \$action);
    }

    /**
     * Trigger point actions for page hits.
     */
    public function onPageHit(Events\\PageHitEvent \$event): void
    {
        if (\$event->getPage()) {
            // Mautic Landing Page was hit
            \$this->pointModel->triggerAction('page.hit', \$event->getHit(), null, \$event->getLead());
        } else {
            // Mautic Tracking Pixel was hit
            \$this->pointModel->triggerAction('url.hit', \$event->getHit(), null, \$event->getLead());
        }
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
        return "@bundles/PageBundle/EventListener/PointSubscriber.php";
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
        return new Source("", "@bundles/PageBundle/EventListener/PointSubscriber.php", "/app/docroot/app/bundles/PageBundle/EventListener/PointSubscriber.php");
    }
}
