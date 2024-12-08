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

/* @bundles/PageBundle/DataFixtures/ORM/LoadPageHitData.php */
class __TwigTemplate_615c09a2cdb76391a01dd23b16d2b3b9 extends Template
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

namespace Mautic\\PageBundle\\DataFixtures\\ORM;

use Doctrine\\Common\\DataFixtures\\AbstractFixture;
use Doctrine\\Common\\DataFixtures\\OrderedFixtureInterface;
use Doctrine\\Persistence\\ObjectManager;
use Mautic\\CoreBundle\\Helper\\CsvHelper;
use Mautic\\CoreBundle\\Helper\\Serializer;
use Mautic\\PageBundle\\Entity\\Hit;
use Mautic\\PageBundle\\Model\\PageModel;

class LoadPageHitData extends AbstractFixture implements OrderedFixtureInterface
{
    public function __construct(
        private PageModel \$pageModel
    ) {
    }

    public function load(ObjectManager \$manager): void
    {
        \$hits = CsvHelper::csv_to_array(__DIR__.'/fakepagehitdata.csv');

        foreach (\$hits as \$rows) {
            \$hit = new Hit();
            foreach (\$rows as \$col => \$val) {
                if ('NULL' != \$val) {
                    \$setter = 'set'.ucfirst(\$col);
                    if (in_array(\$col, ['page', 'ipAddress'])) {
                        \$hit->\$setter(\$this->getReference(\$col.'-'.\$val));
                    } elseif (in_array(\$col, ['dateHit', 'dateLeft'])) {
                        \$hit->\$setter(new \\DateTime(\$val));
                    } elseif ('browserLanguages' == \$col) {
                        \$val = Serializer::decode(stripslashes(\$val));
                        \$hit->\$setter(\$val);
                    } else {
                        \$hit->\$setter(\$val);
                    }
                }
            }
            \$this->pageModel->getRepository()->saveEntity(\$hit);
        }
    }

    public function getOrder()
    {
        return 8;
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
        return "@bundles/PageBundle/DataFixtures/ORM/LoadPageHitData.php";
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
        return new Source("", "@bundles/PageBundle/DataFixtures/ORM/LoadPageHitData.php", "/app/docroot/app/bundles/PageBundle/DataFixtures/ORM/LoadPageHitData.php");
    }
}
