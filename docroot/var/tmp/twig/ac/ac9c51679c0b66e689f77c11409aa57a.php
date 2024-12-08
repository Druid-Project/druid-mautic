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

/* @bundles/CoreBundle/Form/EventListener/FormExitSubscriber.php */
class __TwigTemplate_c3bdf05fd773b5bf88308da1d0897381 extends Template
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

namespace Mautic\\CoreBundle\\Form\\EventListener;

use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;

class FormExitSubscriber implements EventSubscriberInterface
{
    /**
     * @param string \$model
     * @param array  \$options
     */
    public function __construct(
        private \$model,
        private \$options = []
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [FormEvents::PRE_SET_DATA => 'preSetData'];
    }

    public function preSetData(FormEvent \$event): void
    {
        \$id = !empty(\$this->options['data']) ? \$this->options['data']->getId() : 0;
        if (\$id && empty(\$this->options['ignore_formexit'])) {
            // add a hidden field that is used exclusively to warn a user to use save/cancel to exit a form
            \$form = \$event->getForm();

            \$form->add(
                'unlockModel',
                HiddenType::class,
                [
                    'data'     => \$this->model,
                    'required' => false,
                    'mapped'   => false,
                    'attr'     => ['class' => 'form-exit-unlock-model'],
                ]
            );

            \$form->add(
                'unlockId',
                HiddenType::class,
                [
                    'data'     => \$id,
                    'required' => false,
                    'mapped'   => false,
                    'attr'     => ['class' => 'form-exit-unlock-id'],
                ]
            );

            if (isset(\$this->options['unlockParameter'])) {
                \$form->add(
                    'unlockParameter',
                    HiddenType::class,
                    [
                        'data'     => \$this->options['unlockParameter'],
                        'required' => false,
                        'mapped'   => false,
                        'attr'     => ['class' => 'form-exit-unlock-parameter'],
                    ]
                );
            }
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
        return "@bundles/CoreBundle/Form/EventListener/FormExitSubscriber.php";
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
        return new Source("", "@bundles/CoreBundle/Form/EventListener/FormExitSubscriber.php", "/app/docroot/app/bundles/CoreBundle/Form/EventListener/FormExitSubscriber.php");
    }
}
