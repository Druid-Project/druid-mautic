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

/* @bundles/PluginBundle/EventListener/FormSubscriber.php */
class __TwigTemplate_1a36c9718e4353df6f670b2970de4513 extends Template
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

namespace Mautic\\PluginBundle\\EventListener;

use Mautic\\FormBundle\\Event\\FormBuilderEvent;
use Mautic\\FormBundle\\Event\\SubmissionEvent;
use Mautic\\FormBundle\\FormEvents;
use Mautic\\PluginBundle\\Form\\Type\\IntegrationsListType;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class FormSubscriber implements EventSubscriberInterface
{
    use PushToIntegrationTrait;

    public static function getSubscribedEvents(): array
    {
        return [
            FormEvents::FORM_ON_BUILD            => ['onFormBuild', 0],
            FormEvents::ON_EXECUTE_SUBMIT_ACTION => ['onFormSubmitActionTriggered', 0],
        ];
    }

    public function onFormBuild(FormBuilderEvent \$event): void
    {
        \$event->addSubmitAction('plugin.leadpush', [
            'group'       => 'mautic.plugin.actions',
            'description' => 'mautic.plugin.actions.tooltip',
            'label'       => 'mautic.plugin.actions.push_lead',
            'formType'    => IntegrationsListType::class,
            'formTheme'   => '@MauticPlugin/FormTheme/Integration/layout.html.twig',
            'eventName'   => FormEvents::ON_EXECUTE_SUBMIT_ACTION,
        ]);
    }

    public function onFormSubmitActionTriggered(SubmissionEvent \$event): void
    {
        if (false === \$event->checkContext('plugin.leadpush')) {
            return;
        }

        \$this->pushToIntegration(\$event->getActionConfig(), \$event->getSubmission()->getLead());
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
        return "@bundles/PluginBundle/EventListener/FormSubscriber.php";
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
        return new Source("", "@bundles/PluginBundle/EventListener/FormSubscriber.php", "/app/docroot/app/bundles/PluginBundle/EventListener/FormSubscriber.php");
    }
}
