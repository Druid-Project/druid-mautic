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

/* @bundles/CoreBundle/Form/Type/GatedVideoType.php */
class __TwigTemplate_5c2f5527ee5111631a18f9b6444b03f9 extends Template
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

use Mautic\\FormBundle\\Entity\\FormRepository;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\UrlType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

class GatedVideoType extends SlotType
{
    public function __construct(
        private FormRepository \$formRepository
    ) {
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->add(
            'url',
            UrlType::class,
            [
                'label'      => 'Video URL',
                'label_attr' => ['class' => 'control-label'],
                'required'   => true,
                'attr'       => [
                    'class'           => 'form-control',
                    'data-slot-param' => 'gatedvideo-url',
                ],
            ]
        );

        \$builder->add(
            'gatetime',
            TextType::class,
            [
                'label'      => 'Gate Time',
                'label_attr' => ['class' => 'control-label'],
                'required'   => true,
                'attr'       => [
                    'class'           => 'form-control',
                    'data-slot-param' => 'gatedvideo-gatetime',
                ],
            ]
        );

        \$builder->add(
            'formid',
            ChoiceType::class,
            [
                'label'      => 'Form',
                'label_attr' => ['class' => 'control-label'],
                'required'   => true,
                'attr'       => [
                    'class'           => 'form-control',
                    'data-slot-param' => 'gatedvideo-formid',
                ],
                'placeholder' => 'Select your form',
                'choices'     => \$this->getFormChoices(),
            ]
        );

        \$builder->add(
            'width',
            TextType::class,
            [
                'label'      => 'Width',
                'label_attr' => ['class' => 'control-label'],
                'required'   => true,
                'attr'       => [
                    'class'           => 'form-control',
                    'data-slot-param' => 'gatedvideo-width',
                ],
            ]
        );

        \$builder->add(
            'height',
            TextType::class,
            [
                'label'      => 'Height',
                'label_attr' => ['class' => 'control-label'],
                'required'   => true,
                'attr'       => [
                    'class'           => 'form-control',
                    'data-slot-param' => 'gatedvideo-height',
                ],
            ]
        );

        parent::buildForm(\$builder, \$options);
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults(
            [
                'width'  => 640,
                'height' => 320,
            ]
        );
    }

    private function getFormChoices(): array
    {
        \$formList    = \$this->formRepository->getSimpleList();
        \$formChoices = [];

        foreach (\$formList as \$formItem) {
            \$formChoices[\"{\$formItem['label']} (ID {\$formItem['value']})\"] = \$formItem['value'];
        }

        return \$formChoices;
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
        return "@bundles/CoreBundle/Form/Type/GatedVideoType.php";
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
        return new Source("", "@bundles/CoreBundle/Form/Type/GatedVideoType.php", "/app/docroot/app/bundles/CoreBundle/Form/Type/GatedVideoType.php");
    }
}
