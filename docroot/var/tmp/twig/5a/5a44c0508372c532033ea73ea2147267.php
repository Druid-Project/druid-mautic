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

/* @bundles/DashboardBundle/Form/Type/WidgetType.php */
class __TwigTemplate_d3ff646e34a61be541a80681e2e8ae40 extends Template
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

namespace Mautic\\DashboardBundle\\Form\\Type;

use Mautic\\CoreBundle\\Form\\Type\\FormButtonsType;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\DashboardBundle\\DashboardEvents;
use Mautic\\DashboardBundle\\Event\\WidgetFormEvent;
use Mautic\\DashboardBundle\\Event\\WidgetTypeListEvent;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;

/**
 * @extends AbstractType<mixed>
 */
class WidgetType extends AbstractType
{
    public function __construct(protected EventDispatcherInterface \$dispatcher, protected CorePermissions \$security)
    {
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->add(
            'name',
            TextType::class,
            [
                'label'      => 'mautic.dashboard.widget.form.name',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => ['class' => 'form-control'],
                'required'   => false,
            ]
        );

        \$event = new WidgetTypeListEvent();
        \$event->setSecurity(\$this->security);
        \$this->dispatcher->dispatch(\$event, DashboardEvents::DASHBOARD_ON_MODULE_LIST_GENERATE);

        \$types = array_map(fn (\$category): array => array_flip(\$category), \$event->getTypes());

        \$builder->add(
            'type',
            ChoiceType::class,
            [
                'label'             => 'mautic.dashboard.widget.form.type',
                'choices'           => \$types,
                'label_attr'        => ['class' => 'control-label'],
                'placeholder'       => 'mautic.core.select',
                'attr'              => [
                    'class'    => 'form-control',
                    'onchange' => 'Mautic.updateWidgetForm(this)',
                ],
            ]
        );

        \$builder->add(
            'width',
            ChoiceType::class,
            [
                'label'   => 'mautic.dashboard.widget.form.width',
                'choices' => [
                    '25%'  => '25',
                    '50%'  => '50',
                    '75%'  => '75',
                    '100%' => '100',
                ],
                'empty_data'        => '100',
                'label_attr'        => ['class' => 'control-label'],
                'attr'              => ['class' => 'form-control'],
                'required'          => false,
            ]
        );

        \$builder->add(
            'height',
            ChoiceType::class,
            [
                'label'   => 'mautic.dashboard.widget.form.height',
                'choices' => [
                    'mautic.dashboard.widget.size.extra_small' => '215',
                    'mautic.dashboard.widget.size.small'       => '330',
                    'mautic.dashboard.widget.size.medium'      => '445',
                    'mautic.dashboard.widget.size.large'       => '560',
                    'mautic.dashboard.widget.size.extra_large' => '675',
                ],
                'empty_data'        => '330',
                'label_attr'        => ['class' => 'control-label'],
                'attr'              => ['class' => 'form-control'],
                'required'          => false,
            ]
        );

        // function to add a form for specific widget type dynamically
        \$func = function (FormEvent \$e): void {
            \$data   = \$e->getData();
            \$form   = \$e->getForm();
            \$event  = new WidgetFormEvent();
            \$type   = null;
            \$params = [];

            // \$data is object on load, array on save (??)
            if (is_array(\$data)) {
                if (isset(\$data['type'])) {
                    \$type = \$data['type'];
                }
                if (isset(\$data['params'])) {
                    \$params = \$data['params'];
                }
            } else {
                \$type   = \$data->getType();
                \$params = \$data->getParams();
            }

            \$event->setType(\$type);
            \$this->dispatcher->dispatch(\$event, DashboardEvents::DASHBOARD_ON_MODULE_FORM_GENERATE);
            \$widgetForm = \$event->getForm();
            \$form->setData(\$params);

            if (isset(\$widgetForm['formAlias'])) {
                \$form->add('params', \$widgetForm['formAlias'], [
                    'label' => false,
                ]);
            }
        };

        \$builder->add(
            'id',
            HiddenType::class,
            [
                'mapped' => false,
            ]
        );

        \$builder->add(
            'buttons',
            FormButtonsType::class,
            [
                'apply_text' => false,
                'save_text'  => 'mautic.core.form.save',
            ]
        );

        if (!empty(\$options['action'])) {
            \$builder->setAction(\$options['action']);
        }

        // Register the function above as EventListener on PreSet and PreBind
        \$builder->addEventListener(FormEvents::PRE_SET_DATA, \$func);
        \$builder->addEventListener(FormEvents::PRE_SUBMIT, \$func);
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
        return "@bundles/DashboardBundle/Form/Type/WidgetType.php";
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
        return new Source("", "@bundles/DashboardBundle/Form/Type/WidgetType.php", "/app/docroot/app/bundles/DashboardBundle/Form/Type/WidgetType.php");
    }
}
