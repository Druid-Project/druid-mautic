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

/* @bundles/PageBundle/Tests/EventListener/PointSubscriberTest.php */
class __TwigTemplate_783b1e8fbf20a814440a3509891a9c59 extends Template
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

namespace Mautic\\PageBundle\\Tests\\EventListener;

use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\PageBundle\\Entity\\Hit;
use Mautic\\PageBundle\\Entity\\Page;
use Mautic\\PageBundle\\Event\\PageHitEvent;
use Mautic\\PageBundle\\EventListener\\PointSubscriber;
use Mautic\\PointBundle\\Event\\PointBuilderEvent;
use Mautic\\PointBundle\\Model\\PointModel;
use PHPUnit\\Framework\\TestCase;

class PointSubscriberTest extends TestCase
{
    public function testSubscribedEvents(): void
    {
        self::assertEquals(
            [
                'mautic.point_on_build' => ['onPointBuild', 0],
                'mautic.page_on_hit'    => ['onPageHit', 0],
            ],
            PointSubscriber::getSubscribedEvents()
        );
    }

    public function testPointBuildAddsActions(): void
    {
        \$pointModel        = \$this->createMock(PointModel::class);
        \$pointBuilderEvent = \$this->createMock(PointBuilderEvent::class);

        \$pointBuilderEvent->expects(self::exactly(2))->method('addAction')->withConsecutive(
            [
                'page.hit',
                [
                    'group'       => 'mautic.page.point.action',
                    'label'       => 'mautic.page.point.action.pagehit',
                    'description' => 'mautic.page.point.action.pagehit_descr',
                    'callback'    => [\\Mautic\\PageBundle\\Helper\\PointActionHelper::class, 'validatePageHit'],
                    'formType'    => \\Mautic\\PageBundle\\Form\\Type\\PointActionPageHitType::class,
                ],
            ],
            [
                'url.hit',
                [
                    'group'       => 'mautic.page.point.action',
                    'label'       => 'mautic.page.point.action.urlhit',
                    'description' => 'mautic.page.point.action.urlhit_descr',
                    'callback'    => [\\Mautic\\PageBundle\\Helper\\PointActionHelper::class, 'validateUrlHit'],
                    'formType'    => \\Mautic\\PageBundle\\Form\\Type\\PointActionUrlHitType::class,
                    'formTheme'   => '@MauticPage/FormTheme/Point/pointaction_urlhit_widget.html.twig',
                ],
            ]
        );

        \$pointSubscriber = new PointSubscriber(\$pointModel);
        \$pointSubscriber->onPointBuild(\$pointBuilderEvent);
    }

    public function testPageHitTriggersPageHitWhenPageIsSet(): void
    {
        \$pageHitEvent = \$this->createMock(PageHitEvent::class);
        \$page         = \$this->createMock(Page::class);
        \$hit          = self::createMock(Hit::class);
        \$lead         = self::createMock(Lead::class);
        \$pointModel   = \$this->createMock(PointModel::class);

        \$pageHitEvent->expects(self::once())->method('getPage')->willReturn(\$page);
        \$pageHitEvent->expects(self::once())->method('getHit')->willReturn(\$hit);
        \$pageHitEvent->expects(self::once())->method('getLead')->willReturn(\$lead);
        \$pointModel->expects(self::once())->method('triggerAction')->with('page.hit', \$hit, null, \$lead);

        \$pointSubscriber = new PointSubscriber(\$pointModel);
        \$pointSubscriber->onPageHit(\$pageHitEvent);
    }

    public function testURLHitTriggersPageHitWhenPageIsSet(): void
    {
        \$pageHitEvent = \$this->createMock(PageHitEvent::class);
        \$hit          = self::createMock(Hit::class);
        \$lead         = self::createMock(Lead::class);
        \$pointModel   = \$this->createMock(PointModel::class);

        \$pageHitEvent->expects(self::once())->method('getPage')->willReturn(null);
        \$pageHitEvent->expects(self::once())->method('getHit')->willReturn(\$hit);
        \$pageHitEvent->expects(self::once())->method('getLead')->willReturn(\$lead);
        \$pointModel->expects(self::once())->method('triggerAction')->with('url.hit', \$hit, null, \$lead);

        \$pointSubscriber = new PointSubscriber(\$pointModel);
        \$pointSubscriber->onPageHit(\$pageHitEvent);
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
        return "@bundles/PageBundle/Tests/EventListener/PointSubscriberTest.php";
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
        return new Source("", "@bundles/PageBundle/Tests/EventListener/PointSubscriberTest.php", "/app/docroot/app/bundles/PageBundle/Tests/EventListener/PointSubscriberTest.php");
    }
}
