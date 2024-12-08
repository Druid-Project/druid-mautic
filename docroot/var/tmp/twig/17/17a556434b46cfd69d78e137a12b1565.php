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

/* @bundles/FormBundle/Form/Type/SortableListTrait.php */
class __TwigTemplate_369e6925da1ebd578cf789e139dcae8e extends Template
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

use Mautic\\CoreBundle\\Form\\Type\\SortableListType;
use Mautic\\CoreBundle\\Form\\Type\\YesNoButtonGroupType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\Validator\\Constraints\\Callback;
use Symfony\\Component\\Validator\\Context\\ExecutionContextInterface;

trait SortableListTrait
{
    public function addSortableList(FormBuilderInterface \$builder, \$options, \$listName = 'list', \$listData = null, \$formName = 'formfield'): void
    {
        \$listOptions = [
            'with_labels' => true,
            'attr'        => [
                'data-show-on' => '{\"'.\$formName.'_properties_syncList_1\": \"\", \"'.\$formName.'_mappedField:data-list-type\": \"empty\"}',
            ],
            'option_required'     => false,
            'constraint_callback' => new Callback(
                function (\$validateMe, ExecutionContextInterface \$context) use (\$listName): void {
                    \$data = \$context->getRoot()->getData();
                    if ((empty(\$data['properties']['syncList']) || empty(\$data['mappedField'])) && !count(\$data['properties'][\$listName]['list'])) {
                        \$context->buildViolation('mautic.form.lists.count')->addViolation();
                    }
                }
            ),
        ];

        if (null !== \$listData) {
            \$listOptions['data'] = \$listData;
        }

        \$builder->add(\$listName, SortableListType::class, \$listOptions);
        \$builder->add(
            'syncList',
            YesNoButtonGroupType::class,
            [
                'attr' => [
                    'data-show-on' => '{\"'.\$formName.'_mappedField:data-list-type\": \"1\"}',
                ],
                'label' => 'mautic.form.field.form.property_list_sync_choices',
                'data'  => !isset(\$options['data']['syncList']) ? false : (bool) \$options['data']['syncList'],
            ]
        );

        \$builder->addEventListener(FormEvents::PRE_SUBMIT, function (FormEvent \$event): void {
            \$formData = \$event->getForm()->getParent()->getData();
            \$form     = \$event->getForm();
            if (empty(\$formData['mappedField'])) {
                // Disable sync list if a contact field is not mapped
                \$data             = \$event->getData();
                \$data['syncList'] = '0';
                \$form->setData(\$data);
            }
        });
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
        return "@bundles/FormBundle/Form/Type/SortableListTrait.php";
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
        return new Source("", "@bundles/FormBundle/Form/Type/SortableListTrait.php", "/app/docroot/app/bundles/FormBundle/Form/Type/SortableListTrait.php");
    }
}
