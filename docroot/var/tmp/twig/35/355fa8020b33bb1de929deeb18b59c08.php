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

/* @bundles/CoreBundle/Form/Type/SlotChannelFrequencyType.php */
class __TwigTemplate_f3e9c3d1892ecfe3c4cfb6d218cbfc0d extends Template
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

namespace Mautic\\CoreBundle\\Form\\Type;

use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class SlotChannelFrequencyType extends SlotType
{
    public function __construct(
        private TranslatorInterface \$translator
    ) {
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->add(
            'label-text',
            TextType::class,
            [
                'label'      => 'mautic.lead.field.label',
                'label_attr' => ['class' => 'control-label'],
                'required'   => false,
                'attr'       => [
                    'class'           => 'form-control',
                    'data-slot-param' => 'label-text',
                ],
                'data'       => \$this->translator->trans('mautic.lead.contact.me.label'),
            ]
        );

        \$builder->add(
            'label-text1',
            TextType::class,
            [
                'label'      => 'mautic.page.form.frequency.label1',
                'label_attr' => ['class' => 'control-label'],
                'required'   => false,
                'attr'       => [
                    'class'           => 'form-control',
                    'data-slot-param' => 'label-text1',
                ],
                'data'       => \$this->translator->trans('mautic.lead.list.frequency.number'),
            ]
        );

        \$builder->add(
            'label-text2',
            TextType::class,
            [
                'label'      => 'mautic.page.form.frequency.label2',
                'label_attr' => ['class' => 'control-label'],
                'required'   => false,
                'attr'       => [
                    'class'           => 'form-control',
                    'data-slot-param' => 'label-text2',
                ],
                'data'       => \$this->translator->trans('mautic.lead.list.frequency.times'),
            ]
        );

        \$builder->add(
            'label-text3',
            TextType::class,
            [
                'label'      => 'mautic.page.form.pause.label1',
                'label_attr' => ['class' => 'control-label'],
                'required'   => false,
                'attr'       => [
                    'class'           => 'form-control',
                    'data-slot-param' => 'label-text3',
                ],
                'data'       => \$this->translator->trans('mautic.lead.frequency.dates.label'),
            ]
        );

        \$builder->add(
            'label-text4',
            TextType::class,
            [
                'label'      => 'mautic.page.form.pause.label2',
                'label_attr' => ['class' => 'control-label'],
                'required'   => false,
                'attr'       => [
                    'class'           => 'form-control',
                    'data-slot-param' => 'label-text4',
                ],
                'data'       => \$this->translator->trans('mautic.lead.frequency.contact.end.date'),
            ]
        );

        parent::buildForm(\$builder, \$options);
    }

    /**
     * @return mixed
     */
    public function getBlockPrefix()
    {
        return 'slot_channelfrequency';
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
        return "@bundles/CoreBundle/Form/Type/SlotChannelFrequencyType.php";
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
        return new Source("", "@bundles/CoreBundle/Form/Type/SlotChannelFrequencyType.php", "/app/docroot/app/bundles/CoreBundle/Form/Type/SlotChannelFrequencyType.php");
    }
}
