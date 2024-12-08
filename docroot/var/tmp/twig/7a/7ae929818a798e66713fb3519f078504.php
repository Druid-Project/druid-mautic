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

/* @bundles/CoreBundle/Form/Type/DateRangeType.php */
class __TwigTemplate_c13ca7cd27cfdb20ad5b218dd7cfec11 extends Template
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

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\HttpFoundation\\Session\\SessionInterface;

/**
 * @extends AbstractType<mixed>
 */
class DateRangeType extends AbstractType
{
    public function __construct(
        private SessionInterface \$session,
        private CoreParametersHelper \$coreParametersHelper
    ) {
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$humanFormat     = 'M j, Y';
        \$sessionDateFrom = \$this->session->get('mautic.daterange.form.from');
        \$sessionDateTo   = \$this->session->get('mautic.daterange.form.to');
        if (!empty(\$sessionDateFrom) && !empty(\$sessionDateTo)) {
            \$defaultFrom = new \\DateTime(\$sessionDateFrom);
            \$defaultTo   = new \\DateTime(\$sessionDateTo);
        } else {
            \$dateRangeDefault = \$this->coreParametersHelper->get('default_daterange_filter', '-1 month');
            \$defaultFrom      = new \\DateTime(\$dateRangeDefault);
            \$defaultTo        = new \\DateTime();
        }

        \$dateFrom = (empty(\$options['data']['date_from']))
            ?
            \$defaultFrom
            :
            new \\DateTime(\$options['data']['date_from']);

        \$builder->add(
            'date_from',
            TextType::class,
            [
                'label'      => 'mautic.core.date.from',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => ['class' => 'form-control'],
                'required'   => false,
                'data'       => \$dateFrom->format(\$humanFormat),
            ]
        );

        \$dateTo = (empty(\$options['data']['date_to']))
            ?
            \$defaultTo
            :
            new \\DateTime(\$options['data']['date_to']);

        \$builder->add(
            'date_to',
            TextType::class,
            [
                'label'      => 'mautic.core.date.to',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => ['class' => 'form-control'],
                'required'   => false,
                'data'       => \$dateTo->format(\$humanFormat),
            ]
        );

        \$builder->add(
            'apply',
            SubmitType::class,
            [
                'label' => 'mautic.core.form.apply',
                'attr'  => ['class' => 'btn btn-ghost btn-sm'],
            ]
        );

        if (!empty(\$options['action'])) {
            \$builder->setAction(\$options['action']);
        }

        \$this->session->set('mautic.daterange.form.from', \$dateFrom->format(\$humanFormat));
        \$this->session->set('mautic.daterange.form.to', \$dateTo->format(\$humanFormat));
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'daterange';
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
        return "@bundles/CoreBundle/Form/Type/DateRangeType.php";
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
        return new Source("", "@bundles/CoreBundle/Form/Type/DateRangeType.php", "/app/docroot/app/bundles/CoreBundle/Form/Type/DateRangeType.php");
    }
}
