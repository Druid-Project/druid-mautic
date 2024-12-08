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

/* @bundles/LeadBundle/Form/Type/FilterTrait.php */
class __TwigTemplate_1e7718a47df65f2dd66e06a93aa74733 extends Template
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

namespace Mautic\\LeadBundle\\Form\\Type;

use Doctrine\\DBAL\\Connection;
use Mautic\\LeadBundle\\Entity\\RegexTrait;
use Mautic\\LeadBundle\\Helper\\FormFieldHelper;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\CollectionType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\Validator\\Constraints\\Callback;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;
use Symfony\\Component\\Validator\\Context\\ExecutionContextInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

trait FilterTrait
{
    use RegexTrait;

    /**
     * @var Connection
     */
    protected \$connection;

    public function setConnection(Connection \$connection): void
    {
        \$this->connection = \$connection;
    }

    /**
     * @param string \$eventName
     */
    public function buildFiltersForm(\$eventName, FormEvent \$event, TranslatorInterface \$translator, \$currentListId = null): void
    {
        \$data    = \$event->getData();
        \$form    = \$event->getForm();
        \$options = \$form->getConfig()->getOptions();

        if (!isset(\$data['type'])) {
            \$data['type']     = TextType::class;
            \$data['field']    = '';
            \$data['operator'] = null;
        }

        \$fieldType   = \$data['type'];
        \$fieldName   = \$data['field'];
        \$type        = TextType::class;
        \$attr        = ['class' => 'form-control filter-value'];
        \$displayType = HiddenType::class;
        \$displayAttr = [];
        \$operator    = \$data['operator'] ?? '';
        \$field       = [];

        if (isset(\$options['fields']['behaviors'][\$fieldName])) {
            \$field = \$options['fields']['behaviors'][\$fieldName];
        } elseif (isset(\$data['object']) && isset(\$options['fields'][\$data['object']][\$fieldName])) {
            \$field = \$options['fields'][\$data['object']][\$fieldName];
        }

        \$customOptions = [];
        switch (\$fieldType) {
            case 'assets':
                if (!isset(\$data['filter'])) {
                    \$data['filter'] = [];
                } elseif (!is_array(\$data['filter'])) {
                    \$data['filter'] = [\$data['filter']];
                }

                \$customOptions['choices']                   = \$options['assets'];
                \$customOptions['multiple']                  = true;
                \$customOptions['choice_translation_domain'] = false;
                \$type                                       = ChoiceType::class;
                break;
            case 'leadlist':
                if (!isset(\$data['filter'])) {
                    \$data['filter'] = [];
                } elseif (!is_array(\$data['filter'])) {
                    \$data['filter'] = [\$data['filter']];
                }

                // Don't show the current list ID in the choices
                if (!empty(\$currentListId)) {
                    unset(\$options['lists'][\$currentListId]);
                }

                \$customOptions['choices']                   = \$options['lists'];
                \$customOptions['multiple']                  = in_array(\$data['operator'], ['in', '!in']);
                \$customOptions['choice_translation_domain'] = false;
                \$type                                       = ChoiceType::class;
                break;
            case 'campaign':
                if (!isset(\$data['filter'])) {
                    \$data['filter'] = [];
                } elseif (!is_array(\$data['filter'])) {
                    \$data['filter'] = [\$data['filter']];
                }

                \$customOptions['choices']                   = \$options['campaign'];
                \$customOptions['multiple']                  = true;
                \$customOptions['choice_translation_domain'] = false;
                \$type                                       = ChoiceType::class;
                break;
            case 'lead_email_received':
                if (!isset(\$data['filter'])) {
                    \$data['filter'] = [];
                } elseif (!is_array(\$data['filter'])) {
                    \$data['filter'] = [\$data['filter']];
                }

                \$customOptions['choices']                   = \$options['emails'];
                \$customOptions['multiple']                  = true;
                \$customOptions['choice_translation_domain'] = false;
                \$type                                       = ChoiceType::class;
                break;
            case 'device_type':
                if (!isset(\$data['filter'])) {
                    \$data['filter'] = [];
                } elseif (!is_array(\$data['filter'])) {
                    \$data['filter'] = [\$data['filter']];
                }

                \$customOptions['choices']           = \$options['deviceTypes'];
                \$customOptions['multiple']          = true;
                \$type                               = ChoiceType::class;
                break;
            case 'device_brand':
                if (!isset(\$data['filter'])) {
                    \$data['filter'] = [];
                } elseif (!is_array(\$data['filter'])) {
                    \$data['filter'] = [\$data['filter']];
                }

                \$customOptions['choices']           = \$options['deviceBrands'];
                \$customOptions['multiple']          = true;
                \$type                               = ChoiceType::class;
                break;
            case 'device_os':
                if (!isset(\$data['filter'])) {
                    \$data['filter'] = [];
                } elseif (!is_array(\$data['filter'])) {
                    \$data['filter'] = [\$data['filter']];
                }

                \$customOptions['choices']           = \$options['deviceOs'];
                \$customOptions['multiple']          = true;
                \$type                               = ChoiceType::class;
                break;
            case 'tags':
                if (!isset(\$data['filter'])) {
                    \$data['filter'] = [];
                } elseif (!is_array(\$data['filter'])) {
                    \$data['filter'] = [\$data['filter']];
                }
                \$customOptions['choices']                   = \$options['tags'];
                \$customOptions['multiple']                  = true;
                \$customOptions['choice_translation_domain'] = false;
                \$type                                       = ChoiceType::class;
                \$attr                                       = array_merge(
                    \$attr,
                    [
                        'data-placeholder'     => \$translator->trans('mautic.lead.tags.select_or_create'),
                        'data-no-results-text' => \$translator->trans('mautic.lead.tags.enter_to_create'),
                        'data-allow-add'       => 'true',
                        'onchange'             => 'Mautic.createLeadTag(this)',
                    ]
                );
                break;
            case 'stage':
                \$customOptions['choices']                   = \$options['stage'];
                \$customOptions['choice_translation_domain'] = false;
                \$type                                       = ChoiceType::class;
                break;
            case 'globalcategory':
                if (!isset(\$data['filter'])) {
                    \$data['filter'] = [];
                } elseif (!is_array(\$data['filter'])) {
                    \$data['filter'] = [\$data['filter']];
                }
                \$customOptions['choices']           = \$options['globalcategory'];
                \$customOptions['multiple']          = true;
                \$type                               = ChoiceType::class;
                break;
            case 'timezone':
            case 'country':
            case 'region':
            case 'locale':
                switch (\$fieldType) {
                    case 'timezone':
                        \$choiceKey = 'timezones';
                        break;
                    case 'country':
                        \$choiceKey = 'countries';
                        break;
                    case 'region':
                        \$choiceKey = 'regions';
                        break;
                    case 'locale':
                        \$choiceKey = 'locales';
                        break;
                }

                \$type                                       = ChoiceType::class;
                \$customOptions['choices']                   = \$options[\$choiceKey];
                \$customOptions['choice_translation_domain'] = false;
                \$customOptions['multiple']                  = in_array(\$operator, ['in', '!in']);

                if (\$customOptions['multiple']) {
                    array_unshift(\$customOptions['choices'], ['' => '']);

                    if (!isset(\$data['filter'])) {
                        \$data['filter'] = [];
                    }
                }

                break;
            case 'time':
            case 'date':
            case 'datetime':
                \$attr['data-toggle'] = \$fieldType;
                break;
            case 'lookup_id':
                \$type        = HiddenType::class;
                \$displayType = TextType::class;
                \$displayAttr = array_merge(
                    \$displayAttr,
                    [
                        'class'                => 'form-control',
                        'data-toggle'          => 'field-lookup',
                        'data-target'          => \$data['field'],
                        'data-action'          => \$field['properties']['data-action'] ?? 'lead:fieldList',
                        'data-lookup-callback' => \$field['properties']['data-lookup-callback'] ?? 'updateLookupListFilter',
                        'data-callback'        => \$field['properties']['callback'] ?? 'activateFieldTypeahead',
                        'placeholder'          => \$translator->trans(
                            'mautic.lead.list.form.filtervalue'
                        ),
                    ]
                );

                if (isset(\$field['properties']['list'])) {
                    \$displayAttr['data-options'] = \$field['properties']['list'];
                }

                break;
            case 'select':
            case 'multiselect':
            case 'boolean':
                \$attr = array_merge(
                    \$attr,
                    [
                        'placeholder' => \$translator->trans('mautic.lead.list.form.filtervalue'),
                    ]
                );

                if (in_array(\$operator, ['in', '!in'])) {
                    \$customOptions['multiple'] = true;
                    if (!isset(\$data['filter'])) {
                        \$data['filter'] = [];
                    } elseif (!is_array(\$data['filter'])) {
                        \$data['filter'] = [\$data['filter']];
                    }
                }

                \$choices = [];
                if (!empty(\$field['properties']['list'])) {
                    \$list    = \$field['properties']['list'];
                    \$choices = ('boolean' === \$fieldType)
                        ? FormFieldHelper::parseBooleanList(\$list)
                        : FormFieldHelper::parseList(\$list);
                }

                if ('select' === \$fieldType) {
                    // array_unshift cannot be used because numeric values get lost as keys
                    \$choices     = array_reverse(\$choices, true);
                    \$choices[''] = '';
                    \$choices     = array_reverse(\$choices, true);
                }

                \$customOptions['choices']                   = \$choices;
                \$customOptions['choice_translation_domain'] = false;
                \$type                                       = ChoiceType::class;
                break;
            case 'lookup':
                \$attr = array_merge(
                    \$attr,
                    [
                        'data-toggle' => 'field-lookup',
                        'data-target' => \$data['field'] ?? '',
                        'data-action' => 'lead:fieldList',
                        'placeholder' => \$translator->trans('mautic.lead.list.form.filtervalue'),
                    ]
                );

                if (isset(\$field['properties']['list'])) {
                    \$attr['data-options'] = \$field['properties']['list'];
                }

                break;
        }

        \$customOptions['constraints'] = [];
        if (in_array(\$operator, ['empty', '!empty'])) {
            \$attr['disabled'] = 'disabled';
        } elseif (\$operator) {
            \$customOptions['constraints'][] = new NotBlank(
                [
                    'message' => 'mautic.core.value.required',
                ]
            );

            if (in_array(\$operator, ['regexp', '!regexp']) && \$this->connection) {
                // Let's add a custom valdiator to test the regex
                \$customOptions['constraints'][] =
                    new Callback(
                        function (\$regex, ExecutionContextInterface \$context): void {
                            // Let's test the regex's syntax by making a fake query
                            try {
                                \$qb = \$this->connection->createQueryBuilder();
                                \$qb->select('l.id')
                                    ->from(MAUTIC_TABLE_PREFIX.'leads', 'l')
                                    ->where('l.id REGEXP :regex')
                                    ->setParameter('regex', \$this->prepareRegex(\$regex))
                                    ->setMaxResults(1);
                                \$qb->executeQuery()->fetchAllAssociative();
                            } catch (\\Exception) {
                                \$context->buildViolation('mautic.core.regex.invalid')->addViolation();
                            }
                        }
                    );
            }
        }

        // @todo implement in UI
        if (in_array(\$operator, ['between', '!between'])) {
            \$form->add(
                'filter',
                CollectionType::class,
                [
                    'label'         => false,
                    'entry_type'    => \$type,
                    'entry_options' => [
                        'label' => false,
                        'attr'  => \$attr,
                    ],
                ]
            );
        } else {
            foreach (\$customOptions['constraints'] as \$i => \$constraint) {
                if (NotBlank::class === \$constraint::class) {
                    array_splice(\$customOptions['constraints'], \$i, 1);
                }
            }

            if (in_array(\$data['operator'], ['empty', '!empty'])) {
                // @see Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType::configureOptions
                \$data['filter'] = null;
            }

            \$form->add(
                'filter',
                \$type,
                array_merge(
                    [
                        'label'          => false,
                        'attr'           => \$attr,
                        'data'           => \$data['filter'] ?? '',
                        'error_bubbling' => false,
                    ],
                    \$customOptions
                )
            );
        }

        \$form->add(
            'display',
            \$displayType,
            [
                'label'          => false,
                'attr'           => \$displayAttr,
                'data'           => \$data['display'] ?? '',
                'error_bubbling' => false,
            ]
        );

        \$form->add(
            'operator',
            ChoiceType::class,
            [
                'label'   => false,
                'choices' => \$field['operators'] ?? [],
                'attr'    => [
                    'class'    => 'form-control not-chosen filter-operator',
                    'onchange' => 'Mautic.convertDwcFilterInput(this)',
                ],
            ]
        );

        if (FormEvents::PRE_SUBMIT === \$eventName) {
            \$event->setData(\$data);
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
        return "@bundles/LeadBundle/Form/Type/FilterTrait.php";
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
        return new Source("", "@bundles/LeadBundle/Form/Type/FilterTrait.php", "/app/docroot/app/bundles/LeadBundle/Form/Type/FilterTrait.php");
    }
}