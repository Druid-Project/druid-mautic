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

/* @bundles/CoreBundle/Form/Type/SlotButtonType.php */
class __TwigTemplate_782915070c07f6d294afc48458748d1c extends Template
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

use Symfony\\Component\\Form\\Extension\\Core\\Type\\NumberType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;

class SlotButtonType extends SlotType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        parent::buildForm(\$builder, \$options);

        \$builder->add(
            'border-radius',
            NumberType::class,
            [
                'label'      => 'mautic.core.button.border.radius',
                'label_attr' => ['class' => 'control-label'],
                'required'   => false,
                'attr'       => [
                    'class'           => 'form-control',
                    'data-slot-param' => 'border-radius',
                    'postaddon_text'  => 'px',
                ],
            ]
        );

        \$builder->add(
            'link-text',
            TextType::class,
            [
                'label'      => 'mautic.core.button.text',
                'label_attr' => ['class' => 'control-label'],
                'required'   => false,
                'attr'       => [
                    'class'           => 'form-control',
                    'data-slot-param' => 'link-text',
                ],
            ]
        );

        \$builder->add(
            'href',
            TextType::class,
            [
                'label'      => 'mautic.core.button.link',
                'label_attr' => ['class' => 'control-label'],
                'required'   => false,
                'attr'       => [
                    'class'           => 'form-control',
                    'data-slot-param' => 'href',
                ],
            ]
        );

        \$builder->add(
            'button-size',
            ButtonGroupType::class,
            [
                'label'             => 'mautic.core.button.size',
                'label_attr'        => ['class' => 'control-label'],
                'required'          => false,
                'attr'              => [
                    'class'           => 'form-control',
                    'data-slot-param' => 'button-size',
                ],
                'choices'           => [
                    'S' => 0,
                    'M' => 1,
                    'L' => 2,
                ],
            ]
        );

        \$builder->add(
            'float',
            ButtonGroupType::class,
            [
                'label'             => 'mautic.core.button.position',
                'label_attr'        => ['class' => 'control-label'],
                'required'          => false,
                'attr'              => [
                    'class'           => 'form-control',
                    'data-slot-param' => 'float',
                ],
                'choices'           => [
                    'mautic.core.left'   => 0,
                    'mautic.core.center' => 1,
                    'mautic.core.right'  => 2,
                ],
            ]
        );

        \$builder->add(
            'background-color',
            TextType::class,
            [
                'label'      => 'mautic.core.background.color',
                'label_attr' => ['class' => 'control-label'],
                'required'   => false,
                'attr'       => [
                    'class'           => 'form-control',
                    'data-slot-param' => 'background-color',
                    'data-toggle'     => 'color',
                ],
            ]
        );

        \$builder->add(
            'color',
            TextType::class,
            [
                'label'      => 'mautic.core.text.color',
                'label_attr' => ['class' => 'control-label'],
                'required'   => false,
                'attr'       => [
                    'class'           => 'form-control',
                    'data-slot-param' => 'color',
                    'data-toggle'     => 'color',
                ],
            ]
        );
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'slot_button';
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
        return "@bundles/CoreBundle/Form/Type/SlotButtonType.php";
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
        return new Source("", "@bundles/CoreBundle/Form/Type/SlotButtonType.php", "/app/docroot/app/bundles/CoreBundle/Form/Type/SlotButtonType.php");
    }
}
