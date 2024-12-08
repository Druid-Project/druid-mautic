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

/* @bundles/EmailBundle/Form/Type/ConfigMonitoredEmailType.php */
class __TwigTemplate_ab7648605410d36d75c92b9146203772 extends Template
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

namespace Mautic\\EmailBundle\\Form\\Type;

use Mautic\\EmailBundle\\EmailEvents;
use Mautic\\EmailBundle\\Event\\MonitoredEmailEvent;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\FormBuilderInterface;

/**
 * @extends AbstractType<mixed>
 */
class ConfigMonitoredEmailType extends AbstractType
{
    public function __construct(
        private EventDispatcherInterface \$dispatcher
    ) {
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        if (function_exists('imap_open')) {
            \$data  = \$options['data'];
            \$event = new MonitoredEmailEvent(\$builder, \$data);

            // Default email bundles
            \$event->addFolder('general', '', 'mautic.email.config.monitored_email.general');

            \$this->dispatcher->dispatch(\$event, EmailEvents::MONITORED_EMAIL_CONFIG);

            \$folderSettings = \$event->getFolders();
            foreach (\$folderSettings as \$key => \$settings) {
                \$folderData = (array_key_exists(\$key, \$data)) ? \$data[\$key] : [];
                \$builder->add(
                    \$key,
                    ConfigMonitoredMailboxesType::class,
                    [
                        'label'            => \$settings['label'],
                        'mailbox'          => \$key,
                        'default_folder'   => \$settings['default'],
                        'data'             => \$folderData,
                        'required'         => false,
                        'general_settings' => (array_key_exists('general', \$data)) ? \$data['general'] : [],
                    ]
                );
            }
        }
    }

    public function getBlockPrefix()
    {
        return 'monitored_email';
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
        return "@bundles/EmailBundle/Form/Type/ConfigMonitoredEmailType.php";
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
        return new Source("", "@bundles/EmailBundle/Form/Type/ConfigMonitoredEmailType.php", "/app/docroot/app/bundles/EmailBundle/Form/Type/ConfigMonitoredEmailType.php");
    }
}
