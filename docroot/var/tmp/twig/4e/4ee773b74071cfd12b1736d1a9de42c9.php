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

/* @bundles/LeadBundle/Tests/Command/DeduplicateIdsCommandFunctionalTest.php */
class __TwigTemplate_8506792df017dfc3bfc46c43814b3bf1 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Command;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\LeadBundle\\Command\\DeduplicateIdsCommand;
use Mautic\\LeadBundle\\Entity\\Lead;
use PHPUnit\\Framework\\Assert;

final class DeduplicateIdsCommandFunctionalTest extends MauticMysqlTestCase
{
    public function testDeduplicateCommandWithContactIdsParam(): void
    {
        \$contactRepository = \$this->em->getRepository(Lead::class);

        Assert::assertSame(0, \$contactRepository->count([]), 'Some contacts were forgotten to remove from other tests');

        \$contact1 = \$this->saveContact('john@doe.email');
        \$this->saveContact('john@doe.email');
        \$contact2 = \$this->saveContact('jane@doe.email');
        \$this->saveContact('jane@doe.email');
        \$contact3 = \$this->saveContact('anna@munic.email');
        \$this->saveContact('anna@munic.email');

        \$this->em->flush();

        Assert::assertSame(6, \$contactRepository->count([]));

        \$this->testSymfonyCommand(DeduplicateIdsCommand::NAME, ['--contact-ids' => \"{\$contact1->getId()},{\$contact2->getId()},{\$contact3->getId()}\"]);

        Assert::assertSame(3, \$contactRepository->count([]));
    }

    private function saveContact(string \$email): Lead
    {
        \$contact = new Lead();
        \$contact->setEmail(\$email);
        \$contact->setDateIdentified(new \\DateTime());

        \$this->em->persist(\$contact);

        return \$contact;
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
        return "@bundles/LeadBundle/Tests/Command/DeduplicateIdsCommandFunctionalTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Command/DeduplicateIdsCommandFunctionalTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Command/DeduplicateIdsCommandFunctionalTest.php");
    }
}
