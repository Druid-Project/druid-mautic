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

/* @bundles/FormBundle/Form/Type/CampaignEventFormFieldValueType.php */
class __TwigTemplate_834225ea0fcdad3e4d44fb1300289a0b extends Template
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

namespace Mautic\\FormBundle\\Form\\Type;

use Mautic\\FormBundle\\Model\\FormModel;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;

/**
 * @extends AbstractType<mixed>
 */
class CampaignEventFormFieldValueType extends AbstractType
{
    public function __construct(
        private FormModel \$model
    ) {
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->add(
            'form',
            FormListType::class,
            [
                'label'       => 'mautic.form.campaign.event.forms',
                'label_attr'  => ['class' => 'control-label'],
                'multiple'    => false,
                'placeholder' => 'mautic.core.select',
                'attr'        => [
                    'class'    => 'form-control',
                    'tooltip'  => 'mautic.form.campaign.event.forms_descr',
                    'onchange' => 'Mautic.updateFormFields(this)',
                ],
                'required'    => true,
                'constraints' => [
                    new NotBlank(
                        ['message' => 'mautic.core.value.required']
                    ),
                ],
            ]
        );

        \$operators = \$this->model->getFilterExpressionFunctions();
        \$choices   = [];

        foreach (\$operators as \$key => \$operator) {
            \$choices[\$operator['label']] = \$key;
        }

        \$builder->add(
            'operator',
            ChoiceType::class,
            [
                'choices'           => \$choices,
            ]
        );

        // function to add 'template' choice field dynamically
        \$func = function (FormEvent \$e): void {
            \$data    = \$e->getData();
            \$form    = \$e->getForm();
            \$fields  = [];
            \$options = [];

            if (\$form->has('field')) {
                \$form->remove('field');
            }

            if (empty(\$data['form'])) {
                \$fields['Select form first'] = 0;
            } else {
                \$formEntity = \$this->model->getEntity(\$data['form']);
                \$formFields = \$formEntity->getFields();

                foreach (\$formFields as \$field) {
                    if ('button' != \$field->getType()) {
                        \$fields[\$field->getLabel()]  = \$field->getAlias();
                        \$options[\$field->getAlias()] = [];
                        \$properties                  = \$field->getProperties();
                        \$list                        = [];
                        if (!empty(\$properties['list']['list'])) {
                            \$list = \$properties['list']['list'];
                        } elseif (!empty(\$properties['optionlist']['list'])) {
                            \$list = \$properties['optionlist']['list'];
                        }

                        if (!empty(\$list)) {
                            \$options[\$field->getAlias()] = [];
                            foreach (\$list as \$option) {
                                if (is_array(\$option) && isset(\$option['value']) && isset(\$option['label'])) {
                                    // The select box needs values to be [value] => label format so make sure we have that style then put it in
                                    \$options[\$field->getAlias()][\$option['value']] = \$option['label'];
                                } elseif (is_array(\$option)) {
                                    foreach (\$option as \$opt) {
                                        \$options[\$field->getAlias()][\$opt] = \$opt;
                                    }
                                } elseif (!is_array(\$option)) {
                                    // Kept here for BC
                                    \$options[\$field->getAlias()][\$option] = \$option;
                                }
                            }
                        }
                    }
                }
            }

            \$form->add(
                'field',
                ChoiceType::class,
                [
                    'choices'           => \$fields,
                    'attr'              => [
                        'onchange'           => 'Mautic.updateFormFieldValues(this)',
                        'data-field-options' => json_encode(\$options),
                    ],
                    'required'    => true,
                    'constraints' => [
                        new NotBlank(
                            ['message' => 'mautic.core.value.required']
                        ),
                    ],
                ]
            );

            // Display selectbox for a field with choices, textbox for others
            if (empty(\$data['field']) || empty(\$options[\$data['field']])) {
                \$form->add(
                    'value',
                    TextType::class,
                    [
                        'label'      => 'mautic.form.field.form.value',
                        'label_attr' => ['class' => 'control-label'],
                        'attr'       => [
                            'class' => 'form-control',
                        ],
                        'required'    => true,
                        'constraints' => [
                            new NotBlank(
                                ['message' => 'mautic.core.value.required']
                            ),
                        ],
                    ]
                );
            } else {
                \$form->add(
                    'value',
                    ChoiceType::class,
                    [
                        'choices'    => array_flip(\$options[\$data['field']]),
                        'label'      => 'mautic.form.field.form.value',
                        'label_attr' => ['class' => 'control-label'],
                        'attr'       => [
                            'class' => 'form-control not-chosen',
                        ],
                        'required'    => true,
                        'constraints' => [
                            new NotBlank(
                                ['message' => 'mautic.core.value.required']
                            ),
                        ],
                    ]
                );
            }
        };

        // Register the function above as EventListener on PreSet and PreBind
        \$builder->addEventListener(FormEvents::PRE_SET_DATA, \$func);
        \$builder->addEventListener(FormEvents::PRE_SUBMIT, \$func);
    }

    public function getBlockPrefix()
    {
        return 'campaignevent_form_field_value';
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
        return "@bundles/FormBundle/Form/Type/CampaignEventFormFieldValueType.php";
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
        return new Source("", "@bundles/FormBundle/Form/Type/CampaignEventFormFieldValueType.php", "/app/docroot/app/bundles/FormBundle/Form/Type/CampaignEventFormFieldValueType.php");
    }
}