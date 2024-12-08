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

/* @bundles/CoreBundle/Event/CustomFormEvent.php */
class __TwigTemplate_2c165cbba88418ab54fd5cea340b9c68 extends Template
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

namespace Mautic\\CoreBundle\\Event;

use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Contracts\\EventDispatcher\\Event;

trigger_deprecation('mautic/core', '4.3', 'The \"%s\" class is deprecated, will be removed in 5.0', CustomFormEvent::class);

/**
 * @deprecated since M4, will be removed in M5 because it's not used
 */
class CustomFormEvent extends Event
{
    /**
     * @var array
     */
    protected \$listeners = [];

    /**
     * @var array
     */
    protected \$subscribers = [];

    /**
     * @param string \$formName
     * @param string \$formType
     */
    public function __construct(
        protected \$formName,
        protected \$formType,
        private FormBuilderInterface \$formBuilder
    ) {
    }

    /**
     * @return string
     */
    public function getFormName()
    {
        return \$this->formName;
    }

    /**
     * @return string
     */
    public function getFormType()
    {
        return \$this->formType;
    }

    /**
     * @return FormBuilderInterface
     */
    public function getFormBuilder()
    {
        return \$this->formBuilder;
    }

    /**
     * @return array
     */
    public function getListeners()
    {
        return \$this->listeners;
    }

    /**
     * @return array
     */
    public function getSubscribers()
    {
        return \$this->subscribers;
    }

    public function addListener(\$eventName, \$listener): void
    {
        if (!is_callable(\$listener)) {
            throw new \\InvalidArgumentException('\$listener must be callable');
        }

        \$this->listeners[\$eventName][] = \$listener;
    }

    public function addSubscriber(EventSubscriberInterface \$subscriber): void
    {
        \$this->subscribers[] = \$subscriber;
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
        return "@bundles/CoreBundle/Event/CustomFormEvent.php";
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
        return new Source("", "@bundles/CoreBundle/Event/CustomFormEvent.php", "/app/docroot/app/bundles/CoreBundle/Event/CustomFormEvent.php");
    }
}
