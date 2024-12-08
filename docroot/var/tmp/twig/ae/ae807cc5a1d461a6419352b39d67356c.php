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

/* @bundles/EmailBundle/DataFixtures/ORM/LoadEmailData.php */
class __TwigTemplate_f8beff88736e8d41e8f90e06021a52cb extends Template
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

namespace Mautic\\EmailBundle\\DataFixtures\\ORM;

use Doctrine\\Common\\DataFixtures\\AbstractFixture;
use Doctrine\\Common\\DataFixtures\\OrderedFixtureInterface;
use Doctrine\\Persistence\\ObjectManager;
use Mautic\\CoreBundle\\Helper\\CsvHelper;
use Mautic\\CoreBundle\\Helper\\Serializer;
use Mautic\\EmailBundle\\Entity\\Email;
use Mautic\\EmailBundle\\Model\\EmailModel;

class LoadEmailData extends AbstractFixture implements OrderedFixtureInterface
{
    public function __construct(
        private EmailModel \$emailModel
    ) {
    }

    public function load(ObjectManager \$manager): void
    {
        \$emails = CsvHelper::csv_to_array(__DIR__.'/fakeemaildata.csv');

        foreach (\$emails as \$count => \$rows) {
            \$email = new Email();
            \$email->setDateAdded(new \\DateTime());
            \$key = \$count + 1;
            foreach (\$rows as \$col => \$val) {
                if ('NULL' != \$val) {
                    \$setter = 'set'.ucfirst(\$col);
                    if (in_array(\$col, ['content', 'variantSettings'])) {
                        \$val = Serializer::decode(stripslashes(\$val));
                    }
                    \$email->\$setter(\$val);
                }
            }
            \$email->addList(\$this->getReference('lead-list'));

            \$this->emailModel->getRepository()->saveEntity(\$email);
            \$this->setReference('email-'.\$key, \$email);
        }
    }

    /**
     * @return int
     */
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
        return "@bundles/EmailBundle/DataFixtures/ORM/LoadEmailData.php";
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
        return new Source("", "@bundles/EmailBundle/DataFixtures/ORM/LoadEmailData.php", "/app/docroot/app/bundles/EmailBundle/DataFixtures/ORM/LoadEmailData.php");
    }
}
