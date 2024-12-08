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

/* @bundles/CoreBundle/Tests/Functional/Type/GatedVideoTypeTest.php */
class __TwigTemplate_97f3b530d3ed627d39fbcd4c3e88fa4e extends Template
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

declare(strict_types=1);

namespace Mautic\\CoreBundle\\Tests\\Functional\\Type;

use Mautic\\CoreBundle\\Form\\Type\\GatedVideoType;
use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\FormBundle\\Entity\\Form;
use PHPUnit\\Framework\\Assert;
use Symfony\\Component\\Form\\ChoiceList\\ArrayChoiceList;
use Symfony\\Component\\Form\\FormFactory;

class GatedVideoTypeTest extends MauticMysqlTestCase
{
    public function testFormSelect(): void
    {
        \$this->prepareForm('published1', true);
        \$this->prepareForm('unpublished1', false);
        \$this->prepareForm('published2', true);

        \$this->em->flush();

        /** @var FormFactory \$formFactory */
        \$formFactory = static::getContainer()->get('form.factory');

        \$form            = \$formFactory->create(GatedVideoType::class);
        \$formChoiceField = \$form->get('formid');
        \$attributes      = \$formChoiceField->getConfig()->getAttributes();

        /** @var ArrayChoiceList \$choiceList */
        \$choiceList = \$attributes['choice_list'];

        // There should be 2 choices - the 2 published forms.
        Assert::assertCount(2, \$choiceList->getChoices());
    }

    private function prepareForm(string \$alias, bool \$published): Form
    {
        \$form = new Form();
        \$form->setName(\$alias);
        \$form->setAlias(\$alias);
        \$form->setIsPublished(\$published);
        \$this->em->persist(\$form);

        return \$form;
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
        return "@bundles/CoreBundle/Tests/Functional/Type/GatedVideoTypeTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Functional/Type/GatedVideoTypeTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Functional/Type/GatedVideoTypeTest.php");
    }
}
