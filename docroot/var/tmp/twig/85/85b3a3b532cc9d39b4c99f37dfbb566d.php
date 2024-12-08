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

/* @bundles/FormBundle/DataFixtures/ORM/LoadFormResultData.php */
class __TwigTemplate_489380576d34504045e4f4f17c979dff extends Template
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

namespace Mautic\\FormBundle\\DataFixtures\\ORM;

use Doctrine\\Common\\DataFixtures\\AbstractFixture;
use Doctrine\\Common\\DataFixtures\\OrderedFixtureInterface;
use Doctrine\\Persistence\\ObjectManager;
use Mautic\\CoreBundle\\Helper\\CsvHelper;
use Mautic\\FormBundle\\Entity\\Submission;
use Mautic\\FormBundle\\Model\\SubmissionModel;
use Mautic\\PageBundle\\Model\\PageModel;

class LoadFormResultData extends AbstractFixture implements OrderedFixtureInterface
{
    public function __construct(
        private PageModel \$pageModel,
        private SubmissionModel \$submissionModel
    ) {
    }

    public function load(ObjectManager \$manager): void
    {
        \$importResults = function (\$results): void {
            foreach (\$results as \$rows) {
                \$submission = new Submission();
                \$submission->setDateSubmitted(new \\DateTime());

                foreach (\$rows as \$col => \$val) {
                    if ('NULL' != \$val) {
                        \$setter = 'set'.\\ucfirst(\$col);
                        if (\\in_array(\$col, ['form', 'page', 'ipAddress', 'lead'])) {
                            if ('lead' === \$col) {
                                // For some reason the lead must be linked with id - 1
                                \$entity = \$this->getReference(\$col.'-'.(\$val - 1));
                            } else {
                                \$entity = \$this->getReference(\$col.'-'.\$val);
                            }
                            if ('page' == \$col) {
                                \$submission->setReferer(\$this->pageModel->generateUrl(\$entity));
                            }
                            \$submission->\$setter(\$entity);
                            unset(\$rows[\$col]);
                        } else {
                            // the rest are custom field values
                            break;
                        }
                    }
                }

                \$submission->setResults(\$rows);
                \$this->submissionModel->getRepository()->saveEntity(\$submission);
            }
        };

        \$results = CsvHelper::csv_to_array(__DIR__.'/fakeresultdata.csv');
        \$importResults(\$results);

        \\sleep(2);

        \$results2 = CsvHelper::csv_to_array(__DIR__.'/fakeresult2data.csv');
        \$importResults(\$results2);
    }

    public function getOrder()
    {
        return 9;
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
        return "@bundles/FormBundle/DataFixtures/ORM/LoadFormResultData.php";
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
        return new Source("", "@bundles/FormBundle/DataFixtures/ORM/LoadFormResultData.php", "/app/docroot/app/bundles/FormBundle/DataFixtures/ORM/LoadFormResultData.php");
    }
}
